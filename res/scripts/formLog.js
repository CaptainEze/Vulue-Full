const tempFormLog = (_xenObj,_msg,_timeout)=>{
    _xenObj.html(_msg).css('display','block');
    setTimeout(()=>{
        _xenObj.css('display','none');
    },_timeout);
}