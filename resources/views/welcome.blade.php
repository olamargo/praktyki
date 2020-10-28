<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
            body::-webkit-scrollbar{
                height: 8px;
                width: 8px;
            }
            body::-webkit-scrollbar-track{
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            }
            body::-webkit-scrollbar-thumb{
                background-color: #252b35;
                border-radius: 3px;
            }
            .top{
                position: fixed;
                width: 100%;
                background-color: #2d3748;
                height: 155px;
                transition: 0.6s;

            }
            .logo{
                    text-align: center;
                    color: #18e018;
                    padding: 10px;
                }
            .menu label{
                margin: 5px;
                margin-right: 0px;
                color: #67ff67;
                padding: 10px;
                border: 1px dotted #67ff67;
                border-radius: 5px;
                }
            .menu label:hover{
                color: #1a202c;
                background-color: #67ff67;
                border: 1px inset #000;
                cursor: pointer;
            }
            .menu label:active{
                color: #151a25;
                background-color: #4bd34b;
                border: 1px inset #000;
                cursor: pointer;
            }
            .menu-a{
                float: left;
            }
            .menu-l{
                float: right;
            }
            .login input{
                width: 500px;
            }
            .register-as input{
                width: 13px;
                margin: 20px;
            }
            .register-as div{
                display: flex;
            }

            .profile{
                margin: 50px;
            }
            .profile button{
                padding: 10px;
                border: 1px solid #000;
                border-radius: 3px;
                color: #67ff67;
                background-color: #3b4b66;
            }

            .posty{
                padding: 10px;

            }
            .posty div{
                margin: 20px auto;
                padding: 0 30px;
                border: 1px solid #234;
                border-radius: 4px;
                display: block;
                background-color: #9bacc4;
                width: 800px;
                overflow: auto;
            }
            .posty div::-webkit-scrollbar{
                height: 8px;
                width: 8px;
            }
            .posty div::-webkit-scrollbar-track{
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            }
            .posty div::-webkit-scrollbar-thumb{
                background-color: #3f516b;
                border-radius: 3px;
            }
            .posty ol>li{
                font-size: 25px;
            }
            .posty ol{
                padding: 0;
            }
            .posty li{
                list-style-type: none;
                font-size: 17px;
            }

            .posty label{
                float: right;
                font-size: 13px;
                font-weight: 100;
            }
            .ready-post{
                text-align: center;
                margin: 0 40px;
                background-color: #9bacc4;
                border: 1px solid #234;
                border-radius: 4px;
                padding: 20px 50px;
                
            }
            .ready-post label{
                font-size: 23px;
                font-weight: 900;
                border-bottom: 4px ridge #428d42;
                border-radius: 5px;
                padding: 0 10px;
            }
            .ready-post p{
                margin: 40px 0;
                font-size: 18px;
                white-space: break-spaces;  
            }
            .ready-post img{
                max-width: 1000px;
                max-height: 1000px;
            }
            
            .saved{
                margin: 20px;
                font-size: 20px;
            }

            .content-all {
                clear: both;
                margin: auto;
                width: 500px;
            }
            .content-all button{
                padding: 10px;
                border: 1px solid #000;
                border-radius: 3px;
                display: block;
                margin:0 auto 30px auto;
                color: #67ff67;
                background-color: #3b4b66;
            }
            .content-all h2{
                margin: 20px;
            }
            .content-all input{
                border: 1px solid #000;
                padding: 10px;
                border-radius: 3px;
                margin-bottom: 10px;
                font-size: 16px;
                background-color: #9bacc4;
            }
            .container{
                background-color: #718096;
                height: 100%;
            }
            .conter{
                padding-top: 200px;
                min-height: 1000px;
            }
            .web{
                margin: 0 30px;
            }
            textarea{
                margin-bottom: 5px;
                width: 500px;
                height: 300px;
                border: 1px solid #000;
                border-radius: 5px;
                font-size: 16px;
                background-color: #9bacc4;
            }
            table{
                width: 750px;
            }
            table th{
                text-align: left;
                font-size: 20px;
            }
            table td{
                white-space: break-spaces;
            }
            .form{
                margin: 50px;
                background-color: #FFF;
                padding: 10px;
                font-size: 20px;
                border-radius: 5px;
                clear: both;
            }
            .form textarea{
                border: 3px solid #bbbbbb;
                background-color: #fff;
                width: 100%;
                max-width: 100%;
                height: 150px;

            }
            .form input{
                border: 3px solid #bbbbbb;
                background-color: #fff;
                border-radius: 5px;
                padding: 5px;
                margin-bottom: 5px;
                font-size: 16px;
            }
            .form button{
                padding: 10px;
                border: 3px unset #313131;
                border-radius: 5px;
                background-color: #858282;
            }
            .like{
                margin: 50px;
                float: right;
            }
            .like button{
                padding: 1px 2px 2px 1px;
                border: 3px unset #313131;
                border-radius: 5px;
                background-color: #25f51e;
                font-size: 20px;
                width: 60px;
            }

            .ready-comment{
                border: 2px solid #bbb;
                border-radius: 3px;
                margin-bottom: 5px;
                padding-left: 30px;
                padding-top: 10px;
                overflow: auto;
            }
            .ready-comment::-webkit-scrollbar{
                height: 8px;
                width: 8px;
            }
            .ready-comment::-webkit-scrollbar-track{
                -webkit-box-shadow: inset 0 0 6px #0000004d;
            }
            .ready-comment::-webkit-scrollbar-thumb{
                background-color: #a1a1a1;
                border-radius: 3px;
            }
            .ready-comment label{
                font-weight:bold;
            }
            .ready-comment p{
                margin: 0 10px;
            }
            .footer{
                background-color: #3b4b66;
                height: 150px;
                width: 100%;
                text-align: center;
                color: #67ff67;
                padding: 30px;
            }
            .footer a:hover{
                color: #00a100;
                
            }
        </style>
    </head>
    <body class="antialiased">

    <div class="container">
                

                <div class="top" id="top">
                    <div class="logo">
                       <h1>Blog</h1> 
                    </div>
                    <div class="menu">
                        <div class="menu-a">
                            <a href="{{ url('home')}}"><label> Strona główna</label></a>
                            <a href=""><label>o blogu</label></a>
                            <a href="{{ url('/')}}"><label>Forum</label></a>
                            <a href="{{ url('contact')}}"><label>kontakt</label></a>
                            <a href="{{ url('create')}}"><label>Dodawanie wpisów</label></a>
                            
                        </div>
                        <div class="menu-l">
                        <a href="{{ url('login')}}"><label>Zaloguj</label></a>
                            <a href="{{url('register')}}"><label>Zarejestruj</label></a>
                        </div>
                        <div>

                        </div>
                    </div>
                    
                </div>
                @yield('content')


                <div class="footer">
                    <p>autor: Aleksandra Sieja</p>
                    <p><a href="mailto:oles146706@gmail.com">oles146706@gmail.com</a></p>
                    
                </div>
    </div>

                <script>
                    var prevScrollpos = window.pageYOffset;
                    window.onscroll = function() {
                    var currentScrollPos = window.pageYOffset;
                      if (prevScrollpos > currentScrollPos) {
                        document.getElementById("top").style.top = "0";
                      } else {
                        document.getElementById("top").style.top = "-250px";
                      }
                      prevScrollpos = currentScrollPos;
                    }
                </script>
                    
        
    </body>
</html>
