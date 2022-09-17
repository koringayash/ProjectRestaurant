
        msg="";
        function doCheck()
        {
            var username=/^[a-zA-Z_]+$/;
            var password=/^[a-zA-Z_@0-9]{3,15}$/;

            if(!username.test(frmContact.email.value))
            msg+=" Invalid Username ";

            if(!password.test(frmContact.pass.value))
            msg+=" Invalid Password ";

            if(msg!="")
            {
                alert(msg);
                msg=[];
                return false;
            }
            return true;
        }
        function Check()
        {
            var check="";
            if(frmContact.email.value=="")
            {
                check+=" Username Can't be Empty ";
            }
            if(frmContact.pass.value=="")
            {
                check+=" Password Can't be Empty ";                
            }
            
            if(check!="")
            {
                alert(check);
                return false;
            }
            return doCheck();
        }
