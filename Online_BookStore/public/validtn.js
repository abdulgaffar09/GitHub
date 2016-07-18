function validate() {
    var vid = document.f1.Uid;
    var Regid = /^[a-zA-Z0-9]*$/;
    var vname = document.f1.Uname;
    var Regname = /^[a-zA-Z]*$/;
    var vage = document.f1.Uage;
    var Regage = /^[0-9]*$/;
    var vpwd = document.f1.pwd;
    var Regpwd = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).{4,16}$/;
    var vcnfpwd = document.f1.cnpwd;
    var vemail = document.f1.Uemail;
    var Regemail = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/;
    var vfname = document.f1.UQualification;
    var Regfname = /^[a-zA-Z]*$/;
   
    
    if ((!vid.value.match(Regid)) || (vid.value.length === 0))
    {
        alert("Provide proper user id");
        // vid.focus();
        return false;
    }
    if (!vname.value.match(Regname) || (vname.value.length === 0))
    {
        alert("Provide proper name");
        // vname.focus();
        return false;
    }
    if (!vage.value.match(Regage) || (vage.value.length == 0))
    {
        alert("Enter proper age");
        // vage.focus();
        return false;
    }
   if( (!vpwd.value.match(Regpwd) || (vpwd.value.length === 0)))
    {
        alert("Provide correct password");
        // vpwd.focus();
        return false;
    }
    if ((!vcnfpwd.value.match(Regpwd) || (vcnfpwd.value!=vpwd.value)))
    {
         alert("Both Passwords Doesn't match");
             // vcnfpwd.focus();
             return false;
    }
    if (!vemail.value.match(Regemail) || (vemail.value.length === 0))
    {
        alert("Provide correct email address");
        // vemail.focus();
        return false;
    }
    if ((document.f1.Usex[0].checked == false) && (document.f1.Usex[1].checked == false))
    {
        alert("Please choose your Gender: Male or Female");
        return false;
    }
    
    
    return true;
}
function FileValidate()
{
    var file1=document.formUpload.file;
    var regexfile=/\bhttp[\w%+\/-]+?pdf\b/;
    if(!file1.value.match(regexfile))
    {
        alert("please choose only pdf file");
        // document.formUpload.file.focus();
        return false;
    }
    return true;
}
function ValidateFIle()
{
    var myfile=document.formUpload.file;
$('#fileup').on( 'change', function() {
   myfile= $( this ).val();
   var ext = myfile.split('.').pop();
   if(ext=="pdf"){
       alert(ext);
   } else{
       alert("please upload only pdf files");
   }
});
}