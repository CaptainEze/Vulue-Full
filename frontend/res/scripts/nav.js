const menu = Xen.xenon('$navig');
menu.bindElement(Xen.xenon('#nav-btn'),'click','both').setHxenParams(()=>{
    menu.lessClass('slide-close').newClass('slide-open');
    Xen.xenon('#nav-btn').lessClass('fa-bars').newClass('fa-close');
    Xen.xenon('#body').css('overflow','hidden');
    },
    ()=>{
        menu.lessClass('slide-open').newClass('slide-close');
        Xen.xenon('#nav-btn').lessClass('fa-close').newClass('fa-bars');
        Xen.xenon('#body').css('overflow','unset');
    }).initState();

class test extends Xen.XenonBaseComponent {
    content = "<i>i am a boy</i>";
}
console.log(new test({
    domType : 'p',
    xen : 'xid xclass1 xclass2 xclass3 xclass4',
    domAttr : {
        'id':'created','class':'bg11','style':'color:red;'
    }
}))