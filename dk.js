		function check()
		{
			var i=0;
			i=ktdulieu();
			if(i==1)
			{
				alert("Đăng ký thất bại!");
				return;
			}
			i=ktmail();
			if(i==1)
			{
				alert("Đăng ký thất bại!");
				return;
			}				
			i=ktmk2();
			if(i==1)
			{
				alert("Đăng ký thất bại!");
				return;
			}
			i=ktmk1();
			if(i==1)
			{
				alert("Đăng ký thất bại!");
				return;
			}	
			
			i=ktsdt();
			if(i==1)
			{
				alert("Đăng ký thất bại!");
				return;
			}	
			return;
		}
		function dn()
		{
			alert("Bên gốc phải phía trên kìa bạn ơi!!");
		}
		function ktdulieu()
		{
			if( document.forms[2].pass.value=="" 
			|| document.forms[2].rpass.value==""
			|| document.forms[2].ho.value==""
			|| document.forms[2].mail.value==""
			|| document.forms[2].sdt.value=="")
			{
				alert("Các trường dữ liệu không được để trống!");
				return 1;
			}
			return 0;
		}
		function ktmk1()
		{
			var a= document.forms[2].pass.value;
			var b= document.forms[2].rpass.value;
			if(a!=b)
			{
				alert("'Nhập lại mật' khẩu không đúng!");
				return 1;
			}
				
			return 0;
		}
		function ktmail()
		{
			var a= document.forms[2].mail.value;
			var c= a.indexOf("@gmail.com");	
			if(c==-1)
			{
				alert("Email phải có dạng user@gmail.com");
				return 1;
			}
			return 0;
		}
		function ktsdt()
		{
			a=document.forms[2].sdt.value;
			b=a.length;
			if(b!=10)
			{
				alert("Sđt phải là 10 chữ số!");
				return 1;
			}
				
			for(i=0;i<b;i++)
			{
				t=a.substr(i,1);
				if(t.charCodeAt()>57 || t.charCodeAt()<48){
					alert("Sđt phải là 10 chữ số!");
					return 1;}
			}
			return 0;
		}
		function ktmk2()
		{
			var a= document.forms[2].pass.value;
			var b=a.length;
			if(b<8||b>16)
			{
				alert("Mật khẩu phải có từ 8-16 ký tự!");
				return 1;
			}
			return 0;	
		}