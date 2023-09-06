const Xen = (function(){
    'use strict';

    let  xenElementsObj = [],hXenElements = [],ret = {};
    const pushLog =(query)=>{
        console.log(`Xenon out: ${query}`);
    }
    const pushErr =(query)=>{
        console.error(query);
    }

    const custmEvent = new CustomEvent('custevnt',{
        bubbles:true,
        cancelable:true,
        composed:true
    })

    /* ------- pa1 => methods for transversing DOM to select only XENON supported element type ------- */
    const exempted = [/html/i,/meta/i,/head/i,/title/i];

    const verifyElement =(obj)=>{
        //takes a html element returns boolean
        //checks if element is part of exempted element list. if its, returns false
        //otherwise returns true

        let _objName = obj.constructor.name.substr(4);

        // set state initially true - object has not been found on the exempted list yet
        let state=true;

        exempted.forEach(el => {
            let st
            if(el == '/head/i'){
                // setting distinction between header and head element
                let _t = _objName.match(el);
                if(_t != null){
                    st = _t['input'] == 'HeadingElement'?null:_t;
                }
            }
            else{
                st = _objName.match(el);
            }

            if (st != null ){
                // object name matches with an exempted name
                state=false; //state set to false - object has been found on the exempted list
            }
        });
        return state;

    }

    const removeExempted = (arr)=>{
        let temp =[]; //array to hold selected elements
        for(let i=0;i<arr.length;i++){
            var e = arr[i];
            if(!verifyElement(e)){
                continue;
            } 
            temp[temp.length] = e;
        }
        return temp;
    }

    /* ------- end pa1 -------*/



    const getXenElements =(arr)=>{
        let temp={}, temp2 = {}; //array to hold selected elements
        for(let i=0;i<arr.length;i++){
            let elementAttributes=[...arr[i].attributes];
            for(let k in elementAttributes){
                if(elementAttributes.hasOwnProperty(k)){
                    let inner = elementAttributes[k];
                    for(let l in inner){
                        if(l == 'name' && (inner[l] == 'xen' || inner[l] == 'hxen')){
                            let id='',hxid,classArray=[],cnt=0,aHElem=false;
                            let xen_vals = inner['value'].split(' ');
                            xen_vals.forEach(el=>{
                                cnt++;
                                if(id=='') id = el;
                                else if(inner[l] == 'hxen' && cnt == 2){
                                    aHElem=true;
                                    hxid=el;
                                }
                                else classArray[classArray.length] = el;
                            });
                            temp[id] = new XenObject(arr[i],id,classArray);
                        if (aHElem) temp2[hxid]=temp[id];
                        }
                    }
                }
            }
        }
        return [temp,temp2];
    }


    /* ------- pa2 => methods for transversing XENON element array to select specific (xenId or xenClass) ------- */
    const getElementOfId = (id)=>{
        for(let k in xenElementsObj){
            if (k.toString()==id){
                return xenElementsObj[k];
            }
        }
        return undefined;
    }

    const getElementOfClass=(cl)=>{
        let tempArr=[],oneHold,found;
        for(let k in xenElementsObj){
            for(let cl_k in xenElementsObj[k]._xenClasses){
                if(xenElementsObj[k]._xenClasses[cl_k].toString()==cl){
                    tempArr[tempArr.length]=oneHold=xenElementsObj[k];
                    found = true;
                    break;
                }
            }
        }
        if (!found){
            pushLog(`Xenon could not find an element with xen class ${cl}`);
            return undefined;
        }
        else if(tempArr.length<2){
            return oneHold;
        }
        else{
            return tempArr;
        }
    }

    const getElementOfHxen = (hx) =>{
        for(let k in hXenElements){
            if (k.toString()==hx){
                return hXenElements[k];
            }
        }
        return undefined;
    }


    /* ------- end pa2 ------- */






    class XenObject {
        constructor(d, x_id, cl = []) {
            this._DOMObj = d;
            this._xenID = x_id;
            this._xenClasses = cl;

            this.addXenClass = (cn) => {
                this._xenClasses[_xenClasses.length] = cn;
            };
            this.removeXenCLass = (cn) => {
            };
            this.getAttr = (attr) => {
                return this._DOMObj.getAttribute(attr);
            };
            this.setAttr = (attr, val) => {
                this._DOMObj.setAttribute(attr, val);
            };
            this.setStyle = (prop, val) => {
                this._DOMObj.style[prop] = val;
            };
            this.getStyle = (prop) => {
                return getComputedStyle(this._DOMObj)[prop];
            };
        }
    }

    class XenonBaseComponent{
        constructor(obj=""){
            // console.log(typeof obj);
            this.notRendered = false;
            if(obj!="" && obj.constructor != XenObject){

                this.notRendered = true;
                // trying to create a new element
                // constructor requires a one object as argument
                // constructor argument elements =>
                // 1. domType : (string) 'a valid html element under xenon scope,
                // 2. xen : (string) 'a xen id and classes string seperated with a single space just as the xen
                //      attribute value would be be decleared in HTML,
                // 3. <optional> domAttr : (object) 'an object containing key(must be string) value(must be string) 
                //      pairs of html attributes of the domType.
                // 4. <optional> props : (object) 'an object containing key(must be string) value(must be string) 
                //      pairs of user defined properties of the values.'
                // let newXenElem = new
                let id='',classArray=[];
                let xen_vals = obj['xen'].split(' ');
                xen_vals.forEach(el=>{
                    if(id=='') id = el;
                    else(classArray[classArray.length] = el);
                });
                this._xenObj = new XenObject(document.createElement(obj['domType']),id,classArray);
                if(obj['domAttr']){
                    for(let k in obj['domAttr']){
                        this.attr(k,obj['domAttr'][k]);
                    }
                }
                xenElementsObj[id] = this._xenObj;
                if(obj['props']){
                    this.props = obj['props'];
                }
            }
            
            else{
                this.notRendered = false;
                //trying to call an existing xen element 
                this._xenObj = new XenObject(obj['_DOMObj'],obj._xenID,obj._xenClasses);
            }
            this.DOM = this._xenObj._DOMObj;
            this.render();
            return this;
        }
        attr = (attr,val=null)=>{
            if(val == null){
                return this._xenObj.getAttr(attr);
            }
            else{
                this._xenObj.setAttr(attr,val);
            }
            return this;
        }
        val = (v=null)=>{
            if(this.DOM.constructor.name !== 'HTMLInputElement'){
                pushErr(`${this} is not a text field`);
                return undefined;
            }else{
                if (v==null) return this.DOM.value;
                this.DOM.value = v;
                return this;
            }
        }
        newClass = (cl)=>{
            let li = this.attr('class').split(' ');
            for(let i=0; i<li.length;i++){
                if(cl == li[i]) return this;
            }
            this.attr('class',`${this.attr('class')} ${cl}`);
            return this;
        }
        lessClass = (cl)=>{
            let li = this.attr('class').split(' '),temp='';
            for(let i=0; i<li.length;i++){
                if(cl == li[i]) continue;
                temp += `${li[i]} `;
            }
            this.attr('class',temp);

            return this;
        }
        css = (obj,val=null) =>{
            switch (typeof obj){
                case "string":
                    if(val == null){
                        return this._xenObj.getStyle(obj);
                    }
                    else{
                        this._xenObj.setStyle(obj,val);
                    }
                    break;
                case "object":
                    for(let k in obj){
                        this._xenObj.setStyle(k,obj[k]);
                    }
                    break;
                default:
                    pushErr(`css arguments not properly defined `);
            }
            return this;
        }
        bind =(evnt,func)=>{
            this.DOM.addEventListener(evnt,()=>{
                func(this);
            });
            return this;
        }
        unbind=(evnt,func)=>{
            this.DOM.removeEventListener(evnt,()=>{
                func(this);
            })
            return this;
        }
        txt =(dat=null)=>{
            if (dat != null){
                this.DOM.appendChild(document.createTextNode(dat));
                return this;
            }
            else{
                return this.DOM.innerHTML;
            } 
        }
        html =(dat=null)=>{
            if (dat != null){
                this.DOM.innerHTML=dat;
                return this;
            }
            else{
                return this.DOM.innerHTML;
            }
        }
        render =()=>{
            if (this.notRendered) {
                this.html(this.content);
            }
        }
        
    }

    class XenonHideableComponent extends XenonBaseComponent{
        constructor(obj, iniState=false){
            super(obj);
            this.state = iniState;
            return this;
        }
        initState = ()=>{
            if(this.state) this.actionOn();
            else this.actionOff();

            return this;
        }
        setHxenParams = (actionOn=this.actionOn,actionOff=this.actionOff) =>{
            this.actionOn = actionOn;
            this.actionOff = actionOff;
            return this;
        }
        actionOn=()=>{
            this.css('visibility','visible');
        }
        actionOff=()=>{
            this.css('visibility','hidden');
        }
        toogleState=()=>{
            this.state = !this.state;
        }
        toogleOn =()=>{
            this.actionOn();
            this.toogleState();
        }
        toogleOff =()=>{
            this.actionOff();
            this.toogleState();
        }
        toogle =()=>{
            if(this.state) this.toogleOff();
            else this.toogleOn();
        }
        bindElement =(xenObj,evnt,type='both')=>{
            let clbk;
            switch (type) {
                case 'on':
                    clbk = this.toogleOn
                    break;
                case 'off':
                    clbk = this.toogleOff;
                    break;
                case 'both':
                    clbk = this.toogle;
                    break;
            }
            if(Array.isArray(xenObj)){
                xenObj.forEach(el=>{
                    el.bind(evnt,clbk);
                })
            }
            else{
                xenObj.bind(evnt,clbk);
            }
            return this;
        }
    }


    const xenon = (def, init=false,ignore=false)=>{
        if(typeof def != 'string'){
            pushErr(def.toString()+' must be a string');
            return undefined;
        }
        let idf=def.substring(0,1) , idnt = def.substring(1);
        switch(idf){
            case '#':
                if(getElementOfId(idnt)!=undefined?true:false) return new XenonBaseComponent(getElementOfId(idnt));
                else{
                    if (!ignore) pushErr(`No element was found with id ${idnt}`);
                }
                break;
            case '.':
                let cll = getElementOfClass(idnt),temp=[];
                if(Array.isArray(cll)){
                    cll.forEach(el=>{
                        temp[temp.length]=new XenonBaseComponent(el);
                    });
                    return temp;
                }
                else if(cll != undefined) return new XenonBaseComponent(cll);
                else if (!ignore) pushErr(`class ${idnt} was not found`);
                break;
            case '$':
                if(getElementOfHxen(idnt)!=undefined?true:false) return new XenonHideableComponent(getElementOfHxen(idnt),init);
                else{
                    if (!ignore) pushErr(`No element was found with hxen id  ${idnt}`);
                }
                break;
            default:
                pushErr(`${def} is not a valid xenon element identifier`);
                return undefined;
        }
    }



    const xenInit =()=>{
        let usefulElements = removeExempted(document.getElementsByTagName('*'));
        let objArr = getXenElements(usefulElements);
        xenElementsObj = objArr[0];
        hXenElements = objArr[1];
        // const testElement = new XenonBaseComponent({
        //     domType : 'p',
        //     xen : 'xid xclass1 xclass2 xclass3 xclass4',
        //     domAttr : {
        //         'id':'created','class':'bg11','style':'color:red;'
        //     }
        // }); 
    }

    window.onload=xenInit();



    // String validation 

    class XenonValidator {
        validateEmail = (text)=>{
            if(text==''||text==undefined||text==null) return [false,'Field is empty'];
            else if(text.substr(0) == '.') return [false,'email cannot start with a .'];
            else if(!text.match(/@/g)) return [false,'@ required in an email'];
            else if(text.match(/@/g).length>1) return [false,'more than one occurence of @'];
            else if(text.match(/\.\./g)) return [false,'.. double dots invalid'];
            else{
                let [name,domain] = text.split('@');
                if(name == ''||name == 'undefined') return [false,'name part of email before @ cannot be empty'];
                if(domain.substr(0)=='.') return [false,'domain cannot start with a .'];
                if(domain.match(/[^-a-zA-Z0-9\._]/)) return [false, 'invalid character string in the domain'];
                if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(text)) return [true,'valid email'];
                else return [false,'invalid email'];
            }
        }

        validateName = (text)=>{
            if(text == ''||text==undefined||text==null) return [false,'Field is empty'];
            else{
                if(/^[A-Za-z\s\-']+$/.test(text)) return [true,'valid name'];
                else return [false,'invalid name'];
            }
        }

        validatePassword = (text,mi=8,ma=16,nu=true,uc=true,sp=true)=>{
            if(text == ''||text==undefined||text==null) return [false,'Field is empty'];
            else if(text.length<mi||text.length>ma) return [false,`password must be between ${mi} and ${ma}`];
            if(nu && !/[0-9]/.test(text)) return [false, 'password must contain at least one number'];
            if(uc && !/[A-Z]/.test(text)) return [false, 'password must contain at least one uppercase letter'];
        if(sp && !/[!@#$%^&*/]/.test(text)) return [false, 'password must contain at least one special character'];
            return [true,'password is valid'];
        }

        validteFileType = (fileName,validExtensions)=>{
            let fileTypes = validExtensions.split(','), fileExt = fileName.split('.')[fileName.split('.').length-1],state=false;
            
            fileTypes.forEach(el=>{
                if(el === fileExt) state = true;
            })
            return state;
        }
    }

    const XenonValidate = new XenonValidator();

    // ret.XenonValidate = XenonValidate;
    // ret.XenonHideableComponent =XenonHideableComponent;
    // ret.xenon = xenon;
    // ret.XenonBaseComponent = XenonBaseComponent;

    return {
        XenonValidate : XenonValidate,
        XenonHideableComponent : XenonHideableComponent,
        xenon : xenon,
        XenonBaseComponent : XenonBaseComponent,
    }

})()