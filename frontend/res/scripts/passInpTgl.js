let passWordFields = [] ,__iIter=0;
while (true){
    let ell= Xen.xenon(`$p${++__iIter}`,false,true) != undefined ? Xen.xenon(`$p${__iIter}`,false,true):undefined;
    if(ell != undefined){
        passWordFields[passWordFields.length]=[ell,Xen.xenon(`#cp${__iIter}`)];
    }
    else break;
}
passWordFields.forEach(el => {
    el[0].bindElement(el[1],'click').setHxenParams(()=>{
        el[0].attr('type','text');
        el[1].lessClass('fa-eye').newClass('fa-eye-slash');
    },()=>{
        el[0].attr('type','password');
        el[1].lessClass('fa-eye-slash').newClass('fa-eye');
    }).initState();
})
