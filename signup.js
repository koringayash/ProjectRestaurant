msg="";
        function doCheck()
        {
            var username=/^[a-zA-Z_]+$/;
            var password=/^[a-zA-Z_@0-9]{3,15}$/;
            var number=/^\d{10}$/;

            if(!username.test(frmContact.Username.value))
            msg+=" Invalid Username ";

            if(!password.test(frmContact.Password.value))
            msg+=" Invalid Password ";

            if(!number.test(frmContact.Phone_Number.value))
            msg+=" Invalid Phone Number ";

            if(msg!="")
            {
                alert(msg);
                msg=[];
                return false;
            }

            return Check();
        }
        function Check()
        {
            var check="";
            if(frmContact.Password.value!=frmContact.Confirm_Password.value)
            {
                check+=" Password Doesn't Match!!!";
            }
            
            
            if(check!="")
            {
                alert(check);
                return false;
            }
            return true;
        }
