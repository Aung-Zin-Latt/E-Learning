<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creating PHP Basic Website</title>
    <link rel="stylesheet" href="../Html/css/html.css">
    <link rel="stylesheet" href='https://mmwebfonts.comquas.com/fonts/?font=myanmar3' />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Changa+One|Open+Sans">
    <link rel="stylesheet" href="http://cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.17.1/build/styles/default.min.css">
    <script src="http://cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.17.1/build/highlight.min.js"></script>
    <script src="/path/to/highlight.pack.js"></script>
    <script>
        hljs.initHighlightingOnLoad();
    </script>
    <style>
        body {
            font-family: Myanmar3, Yunghkio;
        }
        
        h2 {
            font-family: 'Changa One', sans-sefif;
        }
    </style>
</head>
<body>
    
    <h2>Building a Media Libary in PHP</h2>
    <p>ကျွန်တော်တို့ ဒီသင်ခန်းစာမှာ website ကို maintain လုပ်ဖို့ လွယ်ကူစေရန်အတွက် template files တွေသုံးပြီး PHP နဲ့ရေးသွားမှာဖြစ်ပါတယ်။ template files တွေဆိုတာကတော့ same code တွေကို page တစ်ခုချင်းမှာ သွားရေးမနေဘဲ သူတို့ကို file တစ်ခုစီနဲ့ထားပြီး ပြန်ခေါ်သုံးတာပဲဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ collection of media ကိုဖြတ်ပြီး visitors တွေ browse လုပ်ဖို့ခွင့်ပြုပေးတဲ့ PHP ကိုသုံးပါမယ်။ ပြီးတော့ customizable နဲ့ scalable လုပ်နိုင်အောင် အသုံးပြုမှာဖြစ်ပါတယ်။ နောက်ဆုံးမှာတော့ ကျွန်တော်တို့ဆီကို user က email တစ်ခုနဲ့ suggestion form တစ်ခုပို့နိုင်အောင် PHP နဲ့တည်ဆောက်မှာဖြစ်ပါတယ်။ ဒါတွေမစခင်မှာ ကျွန်တော်တို့အနေနဲ့ webpage ကဘယ်လိုအလုပ်လုပ်သလဲ၊ ပြီးတော့ HTML နဲ့ CSS တွေဘယ်လိုရေးမလဲဆိုတာ သိထားသင့်ပါတယ်။ အခုကျွန်တော်တို့ ပြုလုပ်မယ့် project description ကိုပြောပြပေးပါမယ်။ Home page မှာဆိုရင် random selections တွေဖြစ်တဲ့ Books, Movies, Music နဲ့ Suggest ဆိုပြီးပါမယ်။ သူတို့တစ်ခုချင်းစီရဲ့ items တွေကို အောက်မှာ detail ဖော်ပြထားမယ်။ Page ကို refresh တစ်ခါလုပ်တိုင်း items တွေက automatically စီသွားမယ် အစရှိသဖြင့် ပါဝင်ပါတယ်။ Suggest လုပ်တဲ့အချိန်မှာ တစ်ခုခုမှားနေရင် error လို့ပြပြီး မှန်နေရင် user ဆီကို Thank you ဆိုတဲ့ information ကို ပြပေးမှာဖြစ်ပါတယ်။ Data တွေကို display လုပ်တဲ့အခါ organizing နဲ့ manipulating တွေလုပ်မယ်။ ပြီးတော့ user input တွေကို form တစ်ခုထဲမှာ processing လုပ်မယ်။ ဒီ area နှစ်ခုကတော့ website တိုင်းရဲ့ အခြေခံတွေသဘောတရားတွေပဲဖြစ်ပါတယ်။ ပထမဆုံးလိုအပ်တဲ့အရာကတော့ ကျွန်တော်တို့ code တွေ running လုပ်ဖို့ environment တစ်ခုလိုပါလိမ့်မယ်။ အလွယ်ကူဆုံးကတော့ workspace (သို့) text editor ကိုသုံးတာဖြစ်ပါတယ်။ HTML , CSS code တွေနဲ့  image တချို့လည်းပါဝင်မှာဖြစ်ပါတယ်။ ကျွန်တော်တို့text editor ထဲမှာ folder တွေခွဲပြီးရေးမယ်။ image တွေအတွက်ဆိုရင် img လို့folder name ပေးပြီး၊ media ဆိုရင် video တို့ပုံတို့ထည့်မယ်။ css folder အစရှိတာတွေခွဲပီး သပ်သပ်ရပ်ရပ်ဖြစ်အောင်ရေးရပါမယ်။ အဓိက main file ကိုတော့အပြင်မှာ index.html ဆိုပီးထုတ်ထားလိုက်မယ်။ ဒါဟာ website တည်ဆောက်တဲ့အခါမှာ မရှုပ်ထွေးစေဖို့အတွက် အခြေခံကျတဲ့ အရာတွေပဲဖြစ်ပါတယ်။ </p>
    <hr>


    <h2>Using PHP Code on Our Site</h2>
    <p>ကျွန်တော်တို့ဟာ အရင်ဆုံး media library ကိုစတင်တည်ဆောက်မှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ library ရဲ့ page အားလုံးထဲမှာပါဝင်မယ့် header အတွက် file ကိုသီးခြားတည်ဆောက်မှာဖြစ်ပါတယ်။ ဒါဟာ ကျွန်တော်တို့ site ကို လွယ်ကူစွာ maintain လုပ်လို့ရပြီး navigation links တွေလိုမျိုး ကျွန်တော်တို့ဟာ page တိုင်းမှာပေါ်နေဖို့အတွက် page တိုင်းကိုလိုက်ရေးမနေဘဲ file တစ်ခုတည်ဆောက်ထားလိုက်ပြီး သူ့ကိုလွယ်ကူစွာအသုံးပြုနိုင်ပါတယ်။ ကျွန်တော်တို့ဟာ pages တွေမတည်ဆောက်ခင် PHP files တွေက server ပေါ်မှာ ဘယ်လိုအလုပ်လုပ်လဲဆိုတာ ကြည့်ရအောင်။ ကျွန်တော်တို့ရဲ့ HTML file ထဲမှာ copyright date ထဲက title tag ကို PHP သုံးပြီးတော့ change လုပ်ပါမယ်။ title tag ထဲမှာ echo command နဲ့ string တစ်ခုရေးပါမယ်။ Title ကို variable တစ်ခုပေးပြီးသုံးခြင်းက HTML file တွေအကုန်လုံးရဲ့ title ကို တူအောင်လုပ်လို့ရပါတယ်။ နောက်ပြီးရင် ကျွန်တော်တို့ရဲ့ footer မှာလည်း echo နဲ့ date("Y") ဆိုတဲ့ function နဲ့ date ကိုထည့်လိုက်ပါမယ်။ အခုလိုရေးလိုက်တာတွေက တစ်ကယ်တော့ web server ပေါ်မှာ PHP code တွေက အလုပ်မလုပ်သေးပါဘူး။ ဘာဖြစ်လို့လဲဆိုရင် ကျွန်တော်တို့ file က .html ဆိုတဲ့ extension နဲ့ save ထားလို့ပဲဖြစ်ပါတယ်။ ဒါကို ကျွန်တော်တို့က .php extension ကိုပြောင်းပေးရမှာဖြစ်ပါတယ်။ PHP file ထဲမှာသာလျှင် ကျွန်တော်တို့ရဲ့ PHP code တွေကို web server က အလုပ်လုပ်ပေးတာဖြစ်ပါတယ်။ </p>
    <p>Example of index.php File:</p>
    <pre>
        <code class="html hljs xml">
        	&lt;!DOCTYPE html&gt;
			&lt;html&gt;

			&lt;head&gt;
			    &lt;title&gt;
			        &lt;?php echo "Personal Media Library";  ?&gt; 
			    &lt;/title&gt;
			    &lt;link rel="stylesheet" type="text/css" href="css/new_style.css"&gt;
			&lt;/head&gt;

			&lt;body&gt;

			    &lt;div class="header"&gt;
			        &lt;div class="wrapper"&gt;
			            &lt;h1 class="branding-title"&gt;&lt;a href="/"&gt;Personal Media Library&lt;/a&gt;&lt;/h1&gt;
			            &lt;ul class="nav"&gt;
			                &lt;li class="books"&gt;&lt;a href="#"&gt;Books&lt;/a&gt;&lt;/li&gt;
			                &lt;li class="movies"&gt;&lt;a href="#"&gt;Movies&lt;/a&gt;&lt;/li&gt;
			                &lt;li class="music"&gt;&lt;a href="#"&gt;Music&lt;/a&gt;&lt;/li&gt;
			                &lt;li class="sugget"&gt;&lt;a href="#"&gt;sugget&lt;/a&gt;&lt;/li&gt;
			            &lt;/ul&gt;
			        &lt;/div&gt;
			    &lt;/div&gt;

			    &lt;div id="content"&gt;
			        &lt;div class="selection-catalog-random"&gt;
			            &lt;div class="wrapper"&gt;
			                &lt;h2&gt;May we suggest Something?&lt;/h2&gt;
			                &lt;ul class="catalog"&gt;
			                    &lt;li&gt;
			                        &lt;a href="#"&gt;
			                            &lt;img src="images/media/forest_gump.jpg" alt="Forrest Gump"&gt;
			                            &lt;p&gt;View Details&lt;/p&gt;
			                        &lt;/a&gt;
			                    &lt;/li&gt;
			                    &lt;li&gt;
			                        &lt;a href="#"&gt;
			                            &lt;img src="images/media/forest_gump.jpg" alt="Forrest Gump"&gt;
			                            &lt;p&gt;View Details&lt;/p&gt;
			                        &lt;/a&gt;
			                    &lt;/li&gt;
			                    &lt;li&gt;
			                        &lt;a href="#"&gt;
			                            &lt;img src="images/media/forest_gump.jpg" alt="Forrest Gump"&gt;
			                            &lt;p&gt;View Details&lt;/p&gt;
			                        &lt;/a&gt;
			                    &lt;/li&gt;
			                    &lt;li&gt;
			                        &lt;a href="#"&gt;
			                            &lt;img src="images/media/forest_gump.jpg" alt="Forrest Gump"&gt;
			                            &lt;p&gt;View Details&lt;/p&gt;
			                        &lt;/a&gt;
			                    &lt;/li&gt;
			                &lt;/ul&gt;
			            &lt;/div&gt;
			        &lt;/div&gt;
			    &lt;/div&gt;

			    &lt;div class="footer"&gt;
			        &lt;div class="wrapper"&gt;
			            &lt;ul&gt;
			                &lt;li&gt;&lt;a href=""&gt;Twitter&lt;/a&gt;&lt;/li&gt;
			                &lt;li&gt;&lt;a href=""&gt;Facebook&lt;/a&gt;&lt;/li&gt;
			            &lt;/ul&gt;
			            &lt;p&gt;&copy;
			                &lt;?php echo date("Y"); ?&gt;Personal Media Library &lt;/p&gt;
			        &lt;/div&gt;
			    &lt;/div&gt;


			&lt;/body&gt;

			&lt;/html&gt;
        </code>
	</pre>
	<p>Example of new_style.css File:</p>
	<pre>
		<code class="html hljs xml">
			* {
			    box-sizing: border-box;
			}

			html {
			    font-size: 100%;
			    -webkit-text-fill-color: 100%;
			    -ms-text-size-adjust: 100%;
			    overflow-y: scroll;
			    overflow-x: hidden;
			}

			body {
			    font-family: 'Open Sans', sans-serif;
			    background: #f0eeed;
			    color: #676767;
			    margin: 0;
			}

			a {
			    color: #3888c2;
			}

			a:focus {
			    outline: thin dotted;
			}

			a:focus,
			a:hover {
			    outline: 0;
			    color: #285f87;
			}


			/* ==========================================================================
			Typography
			========================================================================== */

			h1 {
			    font-size: 2em;
			    margin: 0.67em 0;
			}

			h2 {
			    font-size: 1.5em;
			    margin: 0.83em 0;
			}

			h3 {
			    font-size: 1.17em;
			    margin: 1em 0;
			}

			abbr[title] {
			    border-bottom: 1px solid;
			}


			/* ==========================================================================
			Lists
			========================================================================== */

			dl,
			menu,
			ol,
			ul {
			    margin: 1em 0;
			}

			menu,
			ol,
			ul {
			    padding: 0 0 0 40px;
			}


			/* ==========================================================================
			Tables
			========================================================================== */

			table {
			    border-collapse: collapse;
			    border-spacing: 0;
			    text-align: left;
			}

			table th {
			    padding-right: 40px;
			}

			.wrapper {
			    width: 980px;
			    margin: 0 auto;
			}

			#content {
			    padding: 20px 0 80px;
			}

			.header::after {
			    content: "";
			    height: 0;
			    display: block;
			    visibility: hidden;
			    clear: both;
			}

			.header {
			    background: #ef8887;
			    border-bottom: 3px solid #db7a78;
			}

			.header .wrapper a {
			    float: left;
			    padding: 0 0 0 5px;
			    font: serif;
			    text-shadow: none;
			    color: transparent;
			    width: 225px;
			    height: 125px;
			    background: url('../images/branding-title.png') 0 6px no-repeat;
			    margin: 6px 0;
			}

			.header .wrapper a .branding-title {
			    display: none;
			    width: 225px;
			    height: 125px;
			}

			.header .nav {
			    float: right;
			    top: 10;
			    right: 0;
			    left: 15px;
			    margin: 0;
			    position: relative;
			    z-index: 99999999;
			}

			.header .nav li {
			    display: inline-block;
			    margin: 0;
			    list-style-type: none;
			}

			.header .nav li a {
			    color: white;
			    text-decoration: none;
			    display: block;
			    line-height: 95px;
			    padding: 10px 0 0;
			    margin: 0 0 0 50px;
			    text-transform: uppercase;
			    width: 100px;
			    text-align: left;
			    letter-spacing: 1px;
			    white-space: nowrap;
			    background: url('../images/nav-sprite.png') no-repeat 0 -336px;
			}

			.header .nav li a:hover,
			.header .nav li a:active {
			    opacity: 0.7;
			}

			.header .nav li.books a {
			    background-position: 8px -5px;
			}

			.header .nav li.movies a {
			    background-position: 13px -105px;
			}

			.header .nav li.music a {
			    background-position: 18px -228px;
			}

			.header .nav li.suggest a {
			    background-position: 35px -340px;
			}


			/* ==========================================================================
			   Main Content
			========================================================================== */

			#content {
			    min-height: 400px;
			    background: white;
			}

			.section.page:after {
			    content: "";
			    display: block;
			    visibility: hidden;
			    height: 0;
			    clear: both;
			}

			.section.page {
			    padding: 34px 0;
			    background: white;
			}

			.section.page h1 {
			    font-size: 24px;
			    text-align: center;
			    line-height: 1.6;
			    font-weight: normal;
			}

			.section.page .media-details h1 {
			    text-align: left;
			}

			.section.page p {
			    width: 475px;
			    margin-left: auto;
			    margin-right: auto;
			}

			.section.page .media-details h1 .price {
			    color: #9d9f4e;
			    padding-right: 10px;
			    font-size: 34px;
			}

			.section.catalog {
			    padding-bottom: 42px;
			}

			.section.catalog h2 {
			    font-size: 24px;
			    text-align: center;
			    line-height: 1.6;
			    font-weight: normal;
			    padding-top: 20px;
			}

			.section.catalog ul.items {
			    margin: 0 0 -17px 0;
			    padding: 0;
			    width: 997px;
			}

			.section.catalog ul.items li {
			    display: inline-block;
			    list-style: none;
			    width: 204px;
			    text-align: center;
			    padding: 14px;
			    margin: 0 0 17px 17px;
			    position: relative;
			    left: -17px;
			}

			.section.catalog ul.items li a:hover:after {
			    content: '+';
			    font-size: 50px;
			    position: absolute;
			    top: 35px;
			    right: 30px;
			    color: #3888c2;
			    vertical-align: top;
			}

			.section.catalog ul.items li a {
			    background: white;
			    display: block;
			    padding: 30px 0 10px;
			    text-decoration: none;
			}

			.details-button {
			    color: #888;
			}

			.section.catalog ul.items li a:hover {
			    opacity: 1;
			    color: #666;
			}

			.section.catalog ul.items li img {
			    width: 190px;
			    border: 6px solid #f0eeed;
			}

			.section.catalog ul.items li p {
			    margin-left: 0;
			    margin-right: 0;
			    width: auto;
			}

			.media-picture {
			    float: left;
			    width: 400px;
			    text-align: center;
			    border: 1px solid #d9d9d9;
			    padding: 14px;
			    background: #f0eeed;
			}

			.media-picture span {
			    background: white;
			    display: block;
			    width: 100%;
			    padding: 36px 0 61px;
			}

			.media-picture img {
			    width: 292px;
			}

			.media-details {
			    width: 460px;
			    float: right;
			}

			.media-details form {
			    margin-left: 0;
			}

			form {
			    width: 475px;
			    margin: 34px auto;
			}

			form tr {
			    text-align: left;
			}

			form table {
			    width: 475px;
			    margin-bottom: 16px;
			}

			form th {
			    width: 150px;
			    vertical-align: middle;
			    padding: 8px;
			}

			form td {
			    padding: 15px 15px;
			}

			form td select,
			form td input,
			form td textarea {
			    width: 100%;
			    border-radius: 4px;
			    padding: 10px;
			    border: 1px solid #a5a5a5;
			    font-size: 14px;
			    font-family: 'Open Sans', sans-serif;
			}

			form input[type="submit"] {
			    width: 475px;
			    text-align: center;
			    border: 0;
			    background: #3888c2;
			    color: #FFF;
			    -webkit-border-radius: 4px;
			    border-radius: 4px;
			    font-size: 16px;
			    padding: 14px 0 16px;
			    font-family: 'Open Sans', sans-serif;
			}

			form input[type="submit"]:hover {
			    background: #358dce;
			    cursor: pointer;
			}

			.page p.message {
			    background: #ffeca4;
			    border: 1px solid #f16702;
			    padding: 1em;
			    width: 444px;
			}

			.breadcrumb {
			    font-size: 14px;
			    font-weight: normal;
			    padding: 14px 0 48px;
			}

			.breadcrumb a {
			    text-decoration: none;
			    color: #3888c2;
			}

			.note-designer {
			    font-size: 14px;
			    font-style: italic;
			    font-weight: bold;
			}

			.footer {
			    background: #f0eeed;
			    border-top: 3px solid #dddddd;
			    padding: 42px 0;
			    font-size: 12px;
			    color: #a5a5a5;
			}

			.footer ul {
			    margin: 0;
			    padding: 0;
			    float: left;
			}

			.footer ul li {
			    margin: 0;
			    padding: 0;
			    list-style: none;
			    display: inline-block;
			}

			.footer ul li:after {
			    content: " | "
			}

			.footer ul li:last-child:after {
			    content: "";
			}

			.footer p {
			    margin: 0;
			    padding-right: 3px;
			}

			.footer a {
			    text-decoration: none;
			    color: #539def;
			    margin: 0 10px;
			}

			.footer li:first-child a {
			    margin-left: 4px;
			}

			.footer a:hover,
			.footer a:active {
			    text-decoration: underline;
			}
		</code>
	</pre>
    <p>
        <a href="index.php" class="output" target="_blank">The result of above code:</a>
    </p>
    <hr>


    <h2>Including the Header</h2>
    <p>ကျွန်တော်တို့ရဲ့ webpage တိုင်းမှာ header, navigation bars တွေအမြဲတမ်းပါဝင်နေပါတယ်။ ဒီလိုပါနေဖို့ဆိုရင်လည်း ကျွန်တော်တို့က page တိုင်းမှာ static HTML တွေနဲ့ လိုက်ရေးနေရပါမယ်။ တစ်ကယ်လို့ ကျွန်တော်တို့ webpage က pages 100 လောက်ရှိမယ်ဆိုရင် သူတို့တစ်ခုချင်းကို လိုက်ရေးနေရတာရယ် ၊ maintain လုပ်တဲ့အခါမှာ အလွန်အချိန်ကြာစေပါလိမ့်မယ်။ ဒါကိုဖြေရှင်းဖို့အတွက်ဆိုရင် ကျွန်တော်တို့ page တိုင်းမှာ အသေထည့်ချင်တဲ့ content(eg. navigation) ကို include or Inc ဆိုတဲ့ folder ထဲမှာ သပ်သပ်ထည့်ထားပြီး သူ့ကို ပြန်ခေါ်ချင်တဲ့အခါ include ဆိုတဲ့ keyword ကိုသုံးပေးရပါတယ်။ Include ဆိုတဲ့ folder ထဲမှာ header.php လို့ဆောက်လိုက်မယ်။ header.php file ထဲမှာ HTML code တွေထည့်ပြီး ကျွန်တော်တို့ဟာ အဲ့ဒီ file ကို index.php file နဲ့ချိတ်ပေးရမှာဖြစ်ပါတယ်။ ဒီလိုချိတ်ဖို့ဆိုရင်တော့ index.php file ရဲ့ အပေါ်ဆုံးမှာ include ဆိုတဲ့ keyword ကိုအသုံးပြုပြီး သူ့နောက်က parenthesis တစ်စုံထည့်ရပါမယ်။ Parenthesis ထဲမှာတော့ ကျွန်တော်တို့ ချိတ်ချင်တဲ့ PHP file ရဲ့ path လမ်းကြောင်းကို မှန်ကန်အောင် ရေးပေးရမှာဖြစ်ပါတယ်။ suggest.php file မှာလည်း include ဆိုတဲ့ keyword ကိုသုံးပြီး header.php file ကိုချိတ်ပေးရပါမယ်။ </p>
    <p>Example of index.php File:</p>
    <pre>
        <code class="html hljs xml">
                &lt;?php include("Includes/header.php"); ?&gt;
                &lt;div class="selection-catalog-random"&gt;
                    &lt;div class="wrapper"&gt;
                        &lt;h2&gt;May we suggest Something?&lt;/h2&gt;
                        &lt;ul class="catalog"&gt;
                            &lt;li&gt;
                                &lt;a href="#"&gt;
                                    &lt;img src="images/media/forest_gump.jpg" alt="Forrest Gump"&gt;
                                    &lt;p&gt;View Details&lt;/p&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href="#"&gt;
                                    &lt;img src="images/media/forest_gump.jpg" alt="Forrest Gump"&gt;
                                    &lt;p&gt;View Details&lt;/p&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href="#"&gt;
                                    &lt;img src="images/media/forest_gump.jpg" alt="Forrest Gump"&gt;
                                    &lt;p&gt;View Details&lt;/p&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href="#"&gt;
                                    &lt;img src="images/media/forest_gump.jpg" alt="Forrest Gump"&gt;
                                    &lt;p&gt;View Details&lt;/p&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/div&gt;
                &lt;/div&gt;

            &lt;/div&gt;      &lt;!-- end content --&gt;

            &lt;div class="footer"&gt;
                &lt;div class="wrapper"&gt;
                    &lt;ul&gt;
                        &lt;li&gt;&lt;a href=""&gt;Twitter&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href=""&gt;Facebook&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                    &lt;p&gt;&copy;
                        &lt;?php echo date("Y"); ?&gt;Personal Media Library &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;


        &lt;/body&gt;

        &lt;/html&gt;
        </code>
    </pre>
    <p>Example of header.php File:</p>
    <pre>
        <code class="html hljs xml">
        &lt;!DOCTYPE html&gt;
        &lt;html&gt;

        &lt;head&gt;
            &lt;title&gt;
                &lt;?php echo "Personal Media Library";  ?&gt; &lt;/title&gt;
            &lt;link rel="stylesheet" type="text/css" href="css/new_style.css"&gt;
        &lt;/head&gt;

        &lt;body&gt;
            &lt;div class="header"&gt;
                &lt;div class="wrapper"&gt;
                    &lt;h1 class="branding-title"&gt;&lt;a href="/"&gt;Personal Media Library&lt;/a&gt;&lt;/h1&gt;
                    &lt;ul class="nav"&gt;
                        &lt;li class="books"&gt;&lt;a href="#"&gt;Books&lt;/a&gt;&lt;/li&gt;
                        &lt;li class="movies"&gt;&lt;a href="#"&gt;Movies&lt;/a&gt;&lt;/li&gt;
                        &lt;li class="music"&gt;&lt;a href="#"&gt;Music&lt;/a&gt;&lt;/li&gt;
                        &lt;li class="sugget"&gt;&lt;a href="suggest.php"&gt;sugget&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;

            &lt;div id="content"&gt;      
    </code>
    </pre>
    <p>Example of suggest.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php include("Includes/header.php"); ?&gt;

            &lt;div class="section page"&gt;
                &lt;h1&gt;Suggest a Media Item&lt;/h1&gt;
            &lt;/div&gt;
        </code>
    </pre>
    <p>
        <a href="index.php" class="output" target="_blank">The result of above code:</a>
    </p>
    <hr>


    <h2>Including the Footer and Adding Additional Pages</h2>
    <p>အခု files တွေရဲ့ bottom ကနေ shared လုပ်ထားတဲ့ code ပါဖို့အတွက် အခြား include file ကို create လုပ်မှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ catalog listing page နဲ့ အဲ့ဒီ page ထဲမှာ header နဲ့ footer ကို include နဲ့ထည့်မှာဖြစ်ပါတယ်။ ဒီလိုလုပ်ဖို့အတွက် ကျွန်တော်တို့ရဲ့ index.php မှာ ကျွန်တော်တို့ comment ခံထားတဲ့ div ကနေ အဆုံးထိ cut လိုက်ပါမယ်။ ပြီးတော့ Include folder ထဲမှာ footer.php file ကိုဆောက်ပြီး သူ့ထဲကို paste လုပ်လိုက်မယ်။ ပြီးရင် index.php file ကိုပြန်သွားပြီး အောက်ဆုံးမှာ include ဆိုတဲ့ keyword နဲ့ footer file ကိုပြန်ခေါ်ရမှာဖြစ်ပါတယ်။ ပြီးနောက် suggest.php ထဲကိုသွားပြီး footer file ကို include နဲ့ထည့်ပါမယ်။ ပြီးရင်တော့ ကျွန်တော်တို့ဟာ catalog landing page ကိုတည်ဆောက်မှာဖြစ်တဲ့အတွက် catalog.php file ကို create လိုက်ပါမယ်။ အဲ့ဒီ file ထဲမှာရေးရမယ့် code တွေကိုတော့ အောက်မှာပြထားပါတယ်။ ကျွန်တော်တို့ရဲ့ page ထဲမှာ header နဲ့ footer တွေက အမြဲပါနေမှာဖြစ်တဲ့အတွက် page တိုင်းကို လိုက်ရေးမနေတော့ဘဲ shared code အနေနဲ့ ခေါ်သုံးရမှာဖြစ်ပါတယ်။ ဒါဟာ maintain လုပ်လို့ တစ်ကယ်ကိုလွယ်ကူတဲ့ နည်းလမ်းပဲဖြစ်ပါတယ်။ </p>
    <p>Example of index.php File:</p>
    <pre>
        <code class="html hljs xml">
            &&lt;?php include("Includes/header.php"); ?&gt;
            &&lt;div class="selection-catalog-random"&gt;
                &&lt;div class="wrapper"&gt;
                    &&lt;h2&gt;May we suggest Something?&&lt;/h2&gt;
                    &&lt;ul class="catalog"&gt;
                        &&lt;li&gt;
                            &&lt;a href="#"&gt;
                                &&lt;img src="images/media/forest_gump.jpg" alt="Forrest Gump"&gt;
                                &&lt;p&gt;View Details&&lt;/p&gt;
                            &&lt;/a&gt;
                        &&lt;/li&gt;
                        &&lt;li&gt;
                            &&lt;a href="#"&gt;
                                &&lt;img src="images/media/forest_gump.jpg" alt="Forrest Gump"&gt;
                                &&lt;p&gt;View Details&&lt;/p&gt;
                            &&lt;/a&gt;
                        &&lt;/li&gt;
                        &&lt;li&gt;
                            &&lt;a href="#"&gt;
                                &&lt;img src="images/media/forest_gump.jpg" alt="Forrest Gump"&gt;
                                &&lt;p&gt;View Details&&lt;/p&gt;
                            &&lt;/a&gt;
                        &&lt;/li&gt;
                        &&lt;li&gt;
                            &&lt;a href="#"&gt;
                                &&lt;img src="images/media/forest_gump.jpg" alt="Forrest Gump"&gt;
                                &&lt;p&gt;View Details&&lt;/p&gt;
                            &&lt;/a&gt;
                        &&lt;/li&gt;
                    &&lt;/ul&gt;
                &&lt;/div&gt;
                &&lt;/div&gt;

            &&lt;?php include("Includes/footer.php") ?&gt;
        </code>
    </pre>
    <p>Example of footer.php File:</p>
    <pre>
        <code class="html hljs xml">
        &lt;/div&gt;      <!-- end content -->

        &lt;div class="footer"&gt;
            &lt;div class="wrapper"&gt;
                &lt;ul&gt;
                    &lt;li&gt;&lt;a href=""&gt;Twitter&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=""&gt;Facebook&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
                &lt;p&gt;&copy;
                    &lt;?php echo date("Y"); ?&gt;Personal Media Library &lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;     
            
        &lt;/body&gt;
            
        &lt;/html&gt; 
        </code>
    </pre>
    <p>Example of suggest.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php include("Includes/header.php"); ?&gt;
        
            &lt;div class="section page"&gt;
                &lt;h1&gt;Suggest a Media Item&lt;/h1&gt;
            &lt;/div&gt;

            &lt;?php include("Includes/footer.php") ?&gt;
        </code>
    </pre>
    <p>Example of catalog.php File:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php include("Includes/header.php") ?&gt;

        &lt;div class="section page"&gt;
            &lt;h1&gt;Full Catalog&lt;/h1&gt;
        &lt;/div&gt;

        &lt;?php include("Includes/footer.php") ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Using Variable for the Title Tag</h2>
    <p>Variable တစ်ခုဟာ data အချို့ကို reference လုပ်ပေးတဲ့ piece of code ပဲဖြစ်ပါတယ်။ အမျိုးမျိုးသော variable types တွေရှိပါတယ်။ အခုသင်ခန်းစာမှာတော့ strings, whole numbers တွေဖြစ်တဲ့ integers, arrays တွေနဲ့ objects တွေကို အသုံးပြုသွားမှာဖြစ်ပါတယ်။ ပထမဆုံးအနေနဲ့ title tag ကို page တစ်ခုကနေ တစ်ခု change ဖို့အတွက် string variable ကိုအသုံးပြုသွားမှာဖြစ်ပါတယ်။ PHP မှာ variable တွေက case sensitive ဖြစ်ပါတယ်။ သူတို့ကိုရေးမယ်ဆိုရင် ပထမဆုံး word ကိုအသေးနဲ့ရေးပြီး သူ့နောက်က word ကို အကြီးနဲ့ရေးရပါမယ်။ အောက်က example မှာ variable တစ်ခုတည်းနဲ့ page title တစ်ခုစီပြောင်းသွားတာကို တွေ့ရမှာဖြစ်ပါတယ်။ </p>
    <p>Example of suggest.php File:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php 

        $pageTitle = "Suggest a Media Item";

        include("Includes/header.php"); ?&gt;

        &lt;div class="section page"&gt;
            &lt;h1&gt;Suggest a Media Item&lt;/h1&gt;
        &lt;/div&gt;

        &lt;?php include("Includes/footer.php") ?&gt;
        </code>
    </pre>
    <p>Example of header.php File:</p>
    <pre>
        <code class="html hljs xml">
        &lt;!DOCTYPE html&gt;
        &lt;html&gt;

        &lt;head&gt;
            &lt;title&gt;
                &lt;?php echo $pageTitle;  ?&gt; &lt;/title&gt;
            &lt;link rel="stylesheet" type="text/css" href="css/new_style.css"&gt;
        &lt;/head&gt;

        &lt;body&gt;
            &lt;div class="header"&gt;
                &lt;div class="wrapper"&gt;
                    &lt;h1 class="branding-title"&gt;&lt;a href="/"&gt;Personal Media Library&lt;/a&gt;&lt;/h1&gt;
                    &lt;ul class="nav"&gt;
                        &lt;li class="books"&gt;&lt;a href="catalog.php"&gt;Books&lt;/a&gt;&lt;/li&gt;
                        &lt;li class="movies"&gt;&lt;a href="catalog.php"&gt;Movies&lt;/a&gt;&lt;/li&gt;
                        &lt;li class="music"&gt;&lt;a href="catalog.php"&gt;Music&lt;/a&gt;&lt;/li&gt;
                        &lt;li class="sugget"&gt;&lt;a href="suggest.php"&gt;sugget&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;

            &lt;div id="content"&gt;      
        </code>
    </pre>
    <p>Example of catalog.php File:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php 

        $pageTitle = "Full Catalog";
        
        include("Includes/header.php") ?&gt;

        &lt;div class="section page"&gt;
            &lt;h1&gt;Full Catalog&lt;/h1&gt;
        &lt;/div&gt;

        &lt;?php include("Includes/footer.php") ?&gt;
        </code>
    </pre>
    <p>Example of index.php File:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php 

        $pageTitle = "Personal Media Library";

        include("Includes/header.php"); ?&gt;
            &lt;div class="selection-catalog-random"&gt;
                &lt;div class="wrapper"&gt;
                    &lt;h2&gt;May we suggest Something?&lt;/h2&gt;
                    &lt;ul class="catalog"&gt;
                        &lt;li&gt;
                            &lt;a href="#"&gt;
                                &lt;img src="images/media/forest_gump.jpg" alt="Forrest Gump"&gt;
                                &lt;p&gt;View Details&lt;/p&gt;
                            &lt;/a&gt;
                        &lt;/li&gt;
                        &lt;li&gt;
                            &lt;a href="#"&gt;
                                &lt;img src="images/media/forest_gump.jpg" alt="Forrest Gump"&gt;
                                &lt;p&gt;View Details&lt;/p&gt;
                            &lt;/a&gt;
                        &lt;/li&gt;
                        &lt;li&gt;
                            &lt;a href="#"&gt;
                                &lt;img src="images/media/forest_gump.jpg" alt="Forrest Gump"&gt;
                                &lt;p&gt;View Details&lt;/p&gt;
                            &lt;/a&gt;
                        &lt;/li&gt;
                        &lt;li&gt;
                            &lt;a href="#"&gt;
                                &lt;img src="images/media/forest_gump.jpg" alt="Forrest Gump"&gt;
                                &lt;p&gt;View Details&lt;/p&gt;
                            &lt;/a&gt;
                        &lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;

        &lt;?php include("Includes/footer.php") ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Working with _GET Variables</h2>
    <p>အခုဆိုရင် ကျွန်တော်တို့ရဲ့ media categories တွေအားလုံးက same catalog.php page နဲ့ link ချိတ်ပါပြီ။ ကျွန်တော်တို့က ဘယ် catalog မှာ category ကိုပြသင့်လဲဆိုတာ သတ်မှတ်ပေးမှာဖြစ်ပါတယ်။ ဒါကိုပြီးမြောက်အောင်လုပ်ဖို့အတွက် URL ရဲ့အဆုံးမှာ string တစ်ခုထည့်ပေးရမှာဖြစ်ပါတယ်။ File name ရဲ့နောက်မှာ question mark (?) နဲ့ ပြီးတော့ သူ့နောက်မှာ variable name တစ်ခုလိုက်ပြီး နောက်ဆုံးမှာ equal (=) sign နဲ့ value တစ်ခုကို specify လုပ်မှာဖြစ်ပါတယ်။ URL ထဲမှာ အခုလိုထည့်လိုက်တဲ့ variables တွေဟာ server ဆီကို request တစ်ခုနဲ့ ပို့ပေးပါတယ်။ သူတို့ကို _GET လို့ခေါ်တဲ့ special PHP variable တစ်ခုအနေနဲ့ အသုံးပြုနိုင်ပါတယ်။ သူ့ကို သုံးမယ်ဆိုရင်တော့ $_GET["cat"] လို့ရေးရပြီး square bracket ထဲက variable ကနေ အခုန URL ထဲမှာပေးခဲ့တဲ့ variable ပဲဖြစ်ပါတယ်။ သူ့ကို ကျွန်တော်တို့က ဘယ်လို display လုပ်ရမလဲဆိုတာကိုလည်း conditional တွေနဲ့စစ်လို့ရပါတယ်။ </p>
    <p>Example of catalog.php File:</p>
    <pre>
        <code class="html hljs xml">
			&lt;?php
			$pageTitle = "Full Catalog";

			if (isset($_GET["cat"])) {
			    if ($_GET["cat"] == "books") {
			        echo $pageTitle = "Books";
			    } else if ($_GET["cat"] == "movies") {
			        echo $pageTitle = "Movies";
			    } else if ($_GET["cat"] == "music") {
			        echo $pageTitle = "Music";
			    }
			}

			include('Includes/header.php');

			?&gt;

			&lt;div class="section page"&gt;
			    &lt;h1&gt;&lt;?php echo $pageTitle; ?&gt;&lt;/h1&gt;
			&lt;/div&gt;

			&lt;?php include('Includes/footer.php'); ?&gt;
        </code>
    </pre>
    <p>Example of header.php File:</p>
    <pre>
        <code class="html hljs xml">
			&lt;!DOCTYPE html&gt;
			&lt;html&gt;

			&lt;head&gt;
			    &lt;title&gt;
			        &lt;?php echo $pageTitle;  ?&gt; 
			    &lt;/title&gt;
			    &lt;link rel="stylesheet" type="text/css" href="css/new_style.css"&gt;
			&lt;/head&gt;

			&lt;body&gt;

			    &lt;div class="header"&gt;
			        &lt;div class="wrapper"&gt;
			            &lt;a href="/"&gt;&lt;h1 class="branding-title"&gt;Personal Media Library&lt;/h1&gt;&lt;/a&gt;
			            &lt;!-- &lt;h1 class="branding-title"&gt;&lt;a href="/"&gt;Personal Media Library&lt;/a&gt;&lt;/h1&gt; --&gt;
			            &lt;ul class="nav"&gt;
			                &lt;li class="books"&gt;&lt;a href="catalog.php?cat=books"&gt;Books&lt;/a&gt;&lt;/li&gt;
			                &lt;li class="movies"&gt;&lt;a href="catalog.php?cat=movies"&gt;Movies&lt;/a&gt;&lt;/li&gt;
			                &lt;li class="music"&gt;&lt;a href="catalog.php?cat=music"&gt;Music&lt;/a&gt;&lt;/li&gt;
			                &lt;li class="sugget"&gt;&lt;a href="suggest.php"&gt;Sugget&lt;/a&gt;&lt;/li&gt;
			            &lt;/ul&gt;
			        &lt;/div&gt;
			    &lt;/div&gt;

			    &lt;div id="content"&gt;
        </code>
	</pre>
	<p>Example of index.php File:</p>
	<pre>
		<code class="html hljs xml">
			&lt;?php
			$pageTitle = "Personal Media Library";

			include('Includes/header.php');

			 ?&gt;

			    &lt;div class="section catalog random"&gt;
			        &lt;div class="wrapper"&gt;
			            &lt;h2&gt;May we suggest Something?&lt;/h2&gt;
			            &lt;ul class="items"&gt;
			                &lt;li&gt;
			                    &lt;a href="#"&gt;
			                        &lt;img src="images/media/forest_gump.jpg" alt="Forrest Gump"&gt;
			                        &lt;p&gt;View Details&lt;/p&gt;
			                    &lt;/a&gt;
			                &lt;/li&gt;
			                &lt;li&gt;
			                    &lt;a href="#"&gt;
			                        &lt;img src="images/media/forest_gump.jpg" alt="Forrest Gump"&gt;
			                        &lt;p&gt;View Details&lt;/p&gt;
			                    &lt;/a&gt;
			                &lt;/li&gt;
			                &lt;li&gt;
			                    &lt;a href="#"&gt;
			                        &lt;img src="images/media/forest_gump.jpg" alt="Forrest Gump"&gt;
			                        &lt;p&gt;View Details&lt;/p&gt;
			                    &lt;/a&gt;
			                &lt;/li&gt;
			                &lt;li&gt;
			                    &lt;a href="#"&gt;
			                        &lt;img src="images/media/forest_gump.jpg" alt="Forrest Gump"&gt;
			                        &lt;p&gt;View Details&lt;/p&gt;
			                    &lt;/a&gt;
			                &lt;/li&gt;
			            &lt;/ul&gt;

			        &lt;/div&gt;

			    &lt;/div&gt;

			&lt;?php include('Includes/footer.php'); ?&gt;
		</code>
	</pre>
	<p>
		<a href="index.php" class="output" target="_blank">The result of above code:</a>
	</p>
	<hr>
	

	<h2>Adding Active State to the Navigation</h2>
	<p>ပြီးခဲ့တဲ့သင်ခန်းစာမှာ ကျွန်တော်တို့ရဲ့ site ကို build & maintain လုပ်ဖို့ ပိုမိုလွယ်ကူဖို့အတွက် variables နဲ့ conditionals တွေကိုသုံးပြီး header နဲ့ footer တွေကို create လုပ်ခဲ့ပါတယ်။ နောက်ထပ် ကျွန်တော်တို့ရဲ့ navigation ကို add လုပ်စရာတစ်ခု ရှိပါသေးတယ်။ ကျွန်တော်တို့ header file ထဲမှာ conditionals တွေကို ထပ်သုံးသွားမှာဖြစ်ပြီး link တစ်ခုကို နှိပ်လိုက်တိုင်း အဲ့ဒီ link က active ဖြစ်သွားပြီး သင့်လျော်တဲ့ underline တစ်ခုဖြစ်အောင် ပြုလုပ်ပါမယ်။ ဒီလိုလုပ်ဖို့အတွက် header.php file ထဲက li tag ထဲမှာ class name ကို on လို့ပေးရပါမယ်။ ဒါပေမယ့် ကျွန်တော်တို့က page တိုင်းကိုလိုက်ပြီး အဲ့ဒီ class name on ကိုလိုက်ထည့်မနေချင်တဲ့အတွက် php conditional တစ်ခုနဲ့ရေးပါမယ်။ ဒါကြောင့် catalog.php ကိုသွားပြီး $section =null; ဆိုတဲ့ variable တစ်ခု create လုပ်ပါမယ်။ ဒီလိုပေးလိုက်ခြင်းဟာ page က full catalog မှာ ဘာမှ change ဖြစ်မသွားချင်တာပဲဖြစ်ပါတယ်။ ကျွန်တော်တို့က nav link တစ်ခုကိုနှိပ်လိုက်တိုင်း အဲ့ဒီ link က active ဖြစ်သွားချင်တယ်ဆိုရင်တော့ အောက်က condition ထဲမှာ $section = "books"; ဆိုပြီး link တစ်ခုချင်းဆီတိုင်းကို movies, music တွေကို $section ထဲကို ထည့်ပေးရပါမယ်။ ပြီးရင်တော့ header.php ထဲက li ထဲမှာ &lt;li class="books&lt;?php if ($section == "books") echo { " on"; } ?&gt;"&gt; ဆိုပြီး li tag တစ်ခုချင်းစီတိုင်းကို $section က movies, music နဲ့ suggest တို့နဲ့ညီလားဆိုပြီး လိုက်စစ်ပေးရပါမယ်။ အသေးစိတ်ကို အောက်က example မှာကြည့်နိုင်ပါတယ်။ </p>
	<p>Example of catalog.php File:</p>
	<pre>
		<code class="html hljs xml">
		&lt;?php
		$pageTitle = "Full Catalog";
		$section = null;

		if (isset($_GET["cat"])) {
		    if ($_GET["cat"] == "books") {
		        echo $pageTitle = "Books";
		        echo $section = "books";
		    } else if ($_GET["cat"] == "movies") {
		        echo $pageTitle = "Movies";
		        echo $section = "movies";
		    } else if ($_GET["cat"] == "music") {
		        echo $pageTitle = "Music";
		        echo $section = "music";
		    }
		}

		include('Includes/header.php');

		?&gt;

		&lt;div class="section page"&gt;
		    &lt;h1&gt;&lt;?php echo $pageTitle; ?&gt;&lt;/h1&gt;
		&lt;/div&gt;

		&lt;?php include('Includes/footer.php'); ?&gt;
		</code>
	</pre>
	<p>Example of index.php File:</p>
	<pre>
		<code class="html hljs xml">
		&lt;?php
		$pageTitle = "Personal Media Library";
		$section = null;

		include('Includes/header.php');

		 ?&gt;

		    &lt;div class="section catalog random"&gt;
		        &lt;div class="wrapper"&gt;
		            &lt;h2&gt;May we suggest Something?&lt;/h2&gt;
		            &lt;ul class="items"&gt;
		                &lt;li&gt;
		                    &lt;a href="#"&gt;
		                        &lt;img src="images/media/forest_gump.jpg" alt="Forrest Gump"&gt;
		                        &lt;p&gt;View Details&lt;/p&gt;
		                    &lt;/a&gt;
		                &lt;/li&gt;
		                &lt;li&gt;
		                    &lt;a href="#"&gt;
		                        &lt;img src="images/media/forest_gump.jpg" alt="Forrest Gump"&gt;
		                        &lt;p&gt;View Details&lt;/p&gt;
		                    &lt;/a&gt;
		                &lt;/li&gt;
		                &lt;li&gt;
		                    &lt;a href="#"&gt;
		                        &lt;img src="images/media/forest_gump.jpg" alt="Forrest Gump"&gt;
		                        &lt;p&gt;View Details&lt;/p&gt;
		                    &lt;/a&gt;
		                &lt;/li&gt;
		                &lt;li&gt;
		                    &lt;a href="#"&gt;
		                        &lt;img src="images/media/forest_gump.jpg" alt="Forrest Gump"&gt;
		                        &lt;p&gt;View Details&lt;/p&gt;
		                    &lt;/a&gt;
		                &lt;/li&gt;
		            &lt;/ul&gt;

		        &lt;/div&gt;

		    &lt;/div&gt;

		&lt;?php include('Includes/footer.php'); ?&gt;
		</code>
	</pre>
	<p>Example of header.php File:</p>
	<pre>
		<code class="html hljs xml">
		&lt;!DOCTYPE html&gt;
		&lt;html&gt;

		&lt;head&gt;
		    &lt;title&gt;
		        &lt;?php echo $pageTitle;  ?&gt; 
		    &lt;/title&gt;
		    &lt;link rel="stylesheet" type="text/css" href="css/new_style.css"&gt;
		&lt;/head&gt;

		&lt;body&gt;

		    &lt;div class="header"&gt;
		        &lt;div class="wrapper"&gt;
		            &lt;a href="/"&gt;&lt;h1 class="branding-title"&gt;Personal Media Library&lt;/h1&gt;&lt;/a&gt;
		            &lt;!-- &lt;h1 class="branding-title"&gt;&lt;a href="/"&gt;Personal Media Library&lt;/a&gt;&lt;/h1&gt; --&gt;
		            &lt;ul class="nav"&gt;
		                &lt;li class="books &lt;?php if ($section == "books") { echo " on"; } ?&gt;"&gt;&lt;a href="catalog.php?cat=books"&gt;Books&lt;/a&gt;&lt;/li&gt;
		                &lt;li class="movies &lt;?php if ($section == "movies") { echo " on"; }  ?&gt;"&gt;&lt;a href="catalog.php?cat=movies"&gt;Movies&lt;/a&gt;&lt;/li&gt;
		                &lt;li class="music &lt;?php if ($section == "music") { echo " on"; }  ?&gt;"&gt;&lt;a href="catalog.php?cat=music"&gt;Music&lt;/a&gt;&lt;/li&gt;
		                &lt;li class="suggest &lt;?php if ($section == "suggest") { echo " on"; } ?&gt;"&gt;&lt;a href="suggest.php"&gt;Sugget&lt;/a&gt;&lt;/li&gt;
		            &lt;/ul&gt;
		        &lt;/div&gt;
		    &lt;/div&gt;

		    &lt;div id="content"&gt;
		</code>
	</pre>
	<p>Example of suggest.php File:</p>
	<pre>
		<code class="html hljs xml">
		&lt;?php
		$pageTitle = "Suggest a Media Item";
		$section = "suggest";

		include('Includes/header.php');

		 ?&gt;

		&lt;div class="section page"&gt;
		    &lt;h1&gt;Suggest a Media Item&lt;/h1&gt;
		&lt;/div&gt;

		&lt;?php include('Includes/footer.php'); ?&gt;
		</code>
	</pre>
	<p>
		<a href="index.php" target="_blank" class="output">The result of above code:</a>
	</p>
	<hr>


    <h2>Creating the Catalog Array</h2>
    <p>အခု ကျွန်တော်တို့ project မှာ media items တွေရဲ့ information တွေအားလုံးကို store လုပ်ဖို့အတွက် array တစ်ခုကိုသုံးမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ catalog တစ်ခုလုံးအတွက် array တစ်ခုထားမှာဖြစ်ပါတယ်။ Array ထဲမှာ item တစ်ခုစီအတွက် one element နဲ့ multiple elements တွေပါရှိပါမယ်။ အခု catalog.php ကိုဖွင့်ပြီးတော့ basic array တစ်ခု create လုပ်မှာဖြစ်ပါတယ်။ အောက်က example ကိုကြည့်ရအောင်။ </p>
    <p>Example of catalog.php File:</p>
    <pre>
        <code class="html hljs xml">
		&lt;?php
		$catalog = array(
		    "Design Pattern",
		    "Forrest Gump",
		    "Beethoven"
		);


		$pageTitle = "Full Catalog";
		$section = null;

		if (isset($_GET["cat"])) {
		    if ($_GET["cat"] == "books") {
		        echo $pageTitle = "Books";
		        echo $section = "books";
		    } else if ($_GET["cat"] == "movies") {
		        echo $pageTitle = "Movies";
		        echo $section = "movies";
		    } else if ($_GET["cat"] == "music") {
		        echo $pageTitle = "Music";
		        echo $section = "music";
		    }
		}

		include('Includes/header.php');

		?&gt;

		&lt;div class="section catalog page"&gt;
		    &lt;div class="wrapper"&gt;

		        &lt;h1&gt;&lt;?php echo $pageTitle; ?&gt;&lt;/h1&gt;

		        &lt;ul&gt;
		            &lt;?php
		            foreach ($catalog as $item) {
		                echo "&lt;li&gt;" . $item . "&lt;/li&gt;";
		            }
		            ?&gt;
		        &lt;/ul&gt;
				
		    &lt;/div&gt;
		&lt;/div&gt;
				
		&lt;?php include('Includes/footer.php'); ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Adding Elements and Specifying a Key</h2>
    <p>Array ထဲကို new elements တွေထပ်ထည့်လို့ရတဲ့ syntax တစ်ခုရှိပါတယ်။ ဒါဟာ ကျွန်တော်တို့ page ကပိုပြီး complex ဖြစ်လာတဲ့အခါ maintain လုပ်ဖို့ ပိုပြီးလွယ်ကူစေပါတယ်။ ကျွန်တော်တို့ရဲ့ ထပ်ထည့်လိုက်တဲ့ array ဟာ အရင်ရှိပီးသား array index ရဲ့ နောက်ဆုံးကနေရာယူသွားမှာဖြစ်ပါတယ်။ PHP array မှာဆိုရင် ပထမဆုံး element က zero index မှာနေရာယူပြီး သူ့နောက်မှာတော့ one, two ဆိုပြီး အစဉ်လိုက်ယူသွားတာဖြစ်ပါတယ်။ ကျွန်တော်တို့လိုချင်တဲ့ particular item ရဲ့ specific key အတွက် case အချို့ရှိပါတယ်။ အဲ့ဒီ item ကို သူ့ရဲ့ key leader နဲ့ reference လုပ်ပေးနိုင်ပါတယ်။ PHP ဟာ square brackets ထဲမှာရှိတဲ့ element တစ်ခုချင်းစီအတွက် key ကို specify လုပ်ပေးနိုင်ပါတယ်။ အောက်က ဥပမာအတိုင်း Design Pattern ကို 101 ဆိုတဲ့ key တစ်ခုပေးလိုက်မယ်။ ကျွန်တော်တို့ဟာ ဘယ် item ID or SKU or ဘယ် unique identifier ကိုမဆို reference လုပ်ပြီးတော့ သုံးနိုင်ပါတယ်။ </p>
    <p>Example of catalog.php:</p>
    <pre>
        <code class>
			&lt;?php
			$catalog = array();
			$catalog[101] = "Design Pattern";
			$catalog[201] = "Forrest Gump";
			$catalog[301] = "Beethoven";
			$catalog[102] = "Clean Code";


			$pageTitle = "Full Catalog";
			$section = null;

			if (isset($_GET["cat"])) {
			    if ($_GET["cat"] == "books") {
			        echo $pageTitle = "Books";
			        echo $section = "books";
			    } else if ($_GET["cat"] == "movies") {
			        echo $pageTitle = "Movies";
			        echo $section = "movies";
			    } else if ($_GET["cat"] == "music") {
			        echo $pageTitle = "Music";
			        echo $section = "music";
			    }
			}

			include('Includes/header.php');

			?&gt;

			&lt;div class="section catalog page"&gt;
			    &lt;div class="wrapper"&gt;

			        &lt;h1&gt;&lt;?php echo $pageTitle; ?&gt;&lt;/h1&gt;

			        &lt;ul&gt;
			            &lt;?php
			            foreach ($catalog as $item) {
			                echo "&lt;li&gt;" . $item . "&lt;/li&gt;";
			            }
			            ?&gt;
			        &lt;/ul&gt;
					
			    &lt;/div&gt;
			&lt;/div&gt;
					
			&lt;?php include('Includes/footer.php'); ?&gt;
        </code>
    </pre>
    <hr>


    <h2>associative Arrays</h2>
    <p>ကျွန်တော်တို့ catalog.php file ထဲမှာ ကျွန်တော်တို့ရဲ့ catalog ကို simple index array ထဲမှာ store လုပ်ထားပါတယ်။ PHP ကို key နဲ့ assign လုပ်မယ့်အစား အဲ့ဒီ key အတွက် ကျွန်တော်တို့ရဲ့ ကိုယ်ပိုင်သတ်မှတ်ထားတဲ့ item ID ရှိပါတယ်။ Main catalog array ထဲက element တစ်ခုစီကို item တစ်ခုအဖြစ် ကိုယ်စားပြုထားပါတယ်။ အခု ကျွန်တော်တို့မှာ element တစ်ခုချင်းစီအတွက် title တစ်ခုနဲ့ သူ့ရဲ့ value အဖြစ် piece of text တစ်ခုရှိပါမယ်။ ကျွန်တော်တို့က ဒါကို ပထမ element ကို piece of text ထားမယ့်အစား အခြား array နဲ့ value တစ်ခုလုပ်ပါမယ်။ ကျွန်တော်တို့ရဲ့ Include folder ထဲမှာ data.php file တစ်ခုတည်ဆောက်လိုက်ပြီး အဲ့ဒီ file ထဲမှာ associative array ကိုသုံးမှာဖြစ်ပါတယ်။ အောက်က example မှာလေ့လာကြည့်ရအောင်။</p>
    <p>Example of catalog.php File:</p>
    <pre>
        <code class="html hljs xml">
			&lt;?php
			$pageTitle = "Full Catalog";
			$section = null;

			if (isset($_GET["cat"])) {
			    if ($_GET["cat"] == "books") {
			        echo $pageTitle = "Books";
			        echo $section = "books";
			    } else if ($_GET["cat"] == "movies") {
			        echo $pageTitle = "Movies";
			        echo $section = "movies";
			    } else if ($_GET["cat"] == "music") {
			        echo $pageTitle = "Music";
			        echo $section = "music";
			    }
			}

			include('Includes/header.php');

			?&gt;

			&lt;div class="section catalog page"&gt;
			    &lt;div class="wrapper"&gt;

			        &lt;h1&gt;&lt;?php echo $pageTitle; ?&gt;&lt;/h1&gt;

			        &lt;ul&gt;
			            &lt;?php
			            foreach ($catalog as $item) {
			                echo "&lt;li&gt;" . $item . "&lt;/li&gt;";
			            }
			            ?&gt;
			        &lt;/ul&gt;
					
			    &lt;/div&gt;
			&lt;/div&gt;
					
			&lt;?php include('Includes/footer.php'); ?&gt;
        </code>
    </pre>
    <p>Example of data.php File:</p>
    <pre>
        <code class="html hljs xml">
			&lt;?php
			$catalog = [];
			//Books
			$catalog[101] = [
				"title" => "A Design Patterns: Elements of Reusable Object-Oriented Software",
				"img" => "images/media/design_patterns.jpg",
			    "genre" => "Tech",
			    "format" => "Paperback",
			    "year" => 1994,
			    "category" => "Books",
			    "authors" => [
			        "Erich Gamma",
			        "Richard Helm",
			        "Ralph Johnson",
			        "John Vlissides"
			    ],
			    "publisher" => "Prentice Hall",
			    "isbn" => '978-0201633610'
			];
			$catalog[102] = [
			    "title" => "Clean Code: A Handbook of Agile Software Craftsmanship",
			    "img" => "images/media/clean_code.jpg",
			    "genre" => "Tech",
			    "format" => "Ebook",
			    "year" => 2008,
			    "category" => "Books",
			    "authors" => [
			        "Robert C. Martin"
			    ],
			    "publisher" => "Prentice Hall",
			    "isbn" => '978-0132350884'
			];
			$catalog[103] = [
			    "title" => "Refactoring: Improving the Design of Existing Code",
			    "img" => "images/media/refactoring.jpg",
			    "genre" => "Tech",
			    "format" => "Hardcover",
			    "year" => 1999,
			    "category" => "Books",
			    "authors" => [
			        "Martin Fowler",
			        "Kent Beck",
			        "John Brant",
			        "William Opdyke",
			        "Don Roberts"
			    ],
			    "publisher" => "Addison-Wesley Professional",
			    "isbn" => '978-0201485677'
			];
			$catalog[104] = [
			    "title" => "The Clean Coder: A Code of Conduct for Professional Programmers",
			    "img" => "images/media/clean_coder.jpg",
			    "genre" => "Tech",
			    "format" => "Audio",
			    "year" => 2011,
			    "category" => "Books",
			    "authors" => [
			        "Robert C. Martin"
			    ],
			    "publisher" => "Prentice Hall",
			    "isbn" => '007-6092046981'
			];
			//Movies
			$catalog[201] = [
			    "title" => "Forrest Gump",
			    "img" => "images/media/forest_gump.jpg",
			    "genre" => "Drama",
			    "format" => "DVD",
			    "year" => 1994,
			    "category" => "Movies",
			    "director" => "Robert Zemeckis",
			    "writers" => [
			        "Winston Groom",
			        "Eric Roth"
			    ],
			    "stars" => [
			        "Tom Hanks",
			        "Rebecca Williams",
			        "Sally Field",
			        "Michael Conner Humphreys"
			    ]
			];
			$catalog[202] = [
			    "title" => "Office Space",
			    "img" => "images/media/office_space.jpg",
			    "genre" => "Comedy",
			    "format" => "Blu-ray",
			    "year" => 1999,
			    "category" => "Movies",
			    "director" => "Mike Judge",
			    "writers" => [
			        "William Goldman"
			    ],
			    "stars" => [
			        "Ron Livingston",
			        "Jennifer Aniston",
			        "David Herman",
			        "Ajay Naidu",
			        "Diedrich Bader",
			        "Stephen Root"
			    ]
			];
			$catalog[203] = [
			    "title" => "The Lord of the Rings: The Fellowship of the Ring",
			    "img" => "images/media/lotr.jpg",
			    "genre" => "Drama",
			    "format" => "Blu-ray",
			    "year" => 2001,
			    "category" => "Movies",
			    "director" => "Peter Jackson",
			    "writers" => [
			        "J.R.R. Tolkien",
			        "Fran Walsh",
			        "Philippa Boyens",
			        "Peter Jackson"
			    ],
			    "stars" => [
			        "Ron Livingston",
			        "Jennifer Aniston",
			        "David Herman",
			        "Ajay Naidu",
			        "Diedrich Bader",
			        "Stephen Root"
			    ]
			];
			$catalog[204] = [
			    "title" => "The Princess Bride",
			    "img" => "images/media/princess_bride.jpg",
			    "genre" => "Comedy",
			    "format" => "DVD",
			    "year" => 1987,
			    "category" => "Movies",
			    "director" => "Rob Reiner",
			    "writers" => [
			        "William Goldman"
			    ],
			    "stars" => [
			        "Cary Elwes",
			        "Mandy Patinkin",
			        "Robin Wright",
			        "Chris Sarandon",
			        "Christopher Guest",
			        "Wallace Shawn",
			        "André the Giant",
			        "Fred Savage",
			        "Peter Falk",
			        "Billy Crystal"
			    ]
			];
			//Music
			$catalog[301] = [
			    "title" => "Beethoven: Complete Symphonies",
			    "img" => "images/media/beethoven.jpg",
			    "genre" => "Clasical",
			    "format" => "CD",
			    "year" => 2012,
			    "category" => "Music",
			    "artist" => "Ludwig van Beethoven"
			];
			$catalog[302] = [
			    "title" => "Elvis Forever",
			    "img" => "images/media/elvis_presley.jpg",
			    "genre" => "Rock",
			    "format" => "Vinyl",
			    "year" => 2015,
			    "category" => "Music",
			    "artist" => "Elvis Presley"
			];
			$catalog[303] = [
			    "title" => "No Fences",
			    "img" => "images/media/garth_brooks.jpg",
			    "genre" => "Country",
			    "format" => "Cassette",
			    "year" => 1990,
			    "category" => "Music",
			    "artist" => "Garth Brooks"
			];
			$catalog[304] = [
			    "title" => "The Very Thought of You",
			    "img" => "images/media/nat_king_cole.jpg",
			    "genre" => "Jaz",
			    "format" => "MP3",
			    "year" => 2008,
			    "category" => "Music",
			    "artist" => "Nat King Cole"
			];
        </code>
    </pre>
    <hr>


    <h2>Displaying All Items</h2>
    <p>အခုသင်ခန်းစာမှာ အပေါ် multi-dimensional array နဲ့ create လုပ်ထားတဲ့ data.php file ကို catalog page မှာ include လုပ်မှာဖြစ်ပါတယ်။ပြီးရင် browser ကိုပြန်ပြီး run ကြည့်တဲ့အခါမှာတော့ Array to string conversion ဆိုတဲ့ error တွေတက်နေတာကို တွေ့ရပါလိမ့်မယ်။ ဒါကို ကျွန်တော်တို့ဟာ piece of text ကနေ element တစ်ခုချင်းစီကို array တစ်ခုအဖြစ်ပြောင်းလဲမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ရဲ့ catalog page မှာ four column layout နဲ့ပြမှာဖြစ်တဲ့အတွက် သူ့ထဲကိုသွားပြီး unordered list တစ်ခု create လုပ်ပါမယ်။ ကျွန်တော်တို့ဟာ interior array ထဲက particulat element တစ်ခုကို current item အတွက် reference လုပ်နိုင်ပါတယ်။ အခု အောက်က example အတိုင်း data.php file ထဲက array နဲ့တည်ဆောက်ခဲ့တဲ့ image item တွေကို four column layout နဲ့ catalog page မှာဖော်ပြပေးမှာဖြစ်ပါတယ်။ </p>
    <p>Example of catalog.php File:</p>
    <pre>
        <code class="html hljs xml">
			&lt;?php
			include("Includes/data.php");

			$pageTitle = "Full Catalog";
			$section = null;

			if (isset($_GET["cat"])) {
			    if ($_GET["cat"] == "books") {
			        echo $pageTitle = "Books";
			        echo $section = "books";
			    } else if ($_GET["cat"] == "movies") {
			        echo $pageTitle = "Movies";
			        echo $section = "movies";
			    } else if ($_GET["cat"] == "music") {
			        echo $pageTitle = "Music";
			        echo $section = "music";
			    }
			}

			include('Includes/header.php');

			?&gt;

			&lt;div class="section catalog page"&gt;
			    &lt;div class="wrapper"&gt;

			        &lt;h1&gt;&lt;?php echo $pageTitle; ?&gt;&lt;/h1&gt;

			        &lt;ul class="items"&gt;
			            &lt;?php
			            foreach ($catalog as $item) {
			                echo "&lt;li&gt;&lt;a href='#'&gt; &lt;img src='"
			                    .$item["img"] . "' alt='"
			                    .$item["title"] . "' /&gt;"
			                    ."&lt;p&gt;View Details&lt;/p&gt;"
			                    ."&lt;/a&gt;&lt;/li&gt;";
			            }
			            ?&gt;
			        &lt;/ul&gt;
					
			    &lt;/div&gt;
			&lt;/div&gt;
					
			&lt;?php include('Includes/footer.php'); ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Creating the Display Function</h2>
    <p>အခုဆိုရင် ကျွန်တော်တို့ဟာ index.php နဲ့  catalog.ph ထဲမှာရှိတဲ့ item တစ်ခုရဲ့ list view ကို display လုပ်ဖို့အတွက်သုံးတဲ့ custom function တစ်ခုကို create လုပ်မှာဖြစ်ပါတယ်။ Things တွေကို descriptive way နဲ့ name ပေးတာဟာ ကျွန်တော်တို့ code ထဲမှာ reference တစ်ခုလုပ်တာထက် ပိုလွယ်ကူပါတယ်။ အခုစပါမယ်။ ကျွန်တော်တို့ဟာ get_item_html လို့ name ပေးလိုက်ပါမယ်။ ပြီးတော့ parameter နှစ်ခုအဖြစ် item ရဲ့ item နဲ့ interior array ထဲက single item အတွက်ဆိုပြီးထည့်လိုက်ပါမယ်။ ကျွန်တော်တို့ဟာ function တ်စခုအတွက် multiple parameters တွေကို comma နဲ့ခြားပြီးထည့်နိုင်ပါတယ်။ အဲ့ဒီ new function ထဲမှာ ကျွန်တော်တို့က list view ထဲမှာ items တွေ display လုပ်ဖို့အတွက် လိုအပ်တဲ့ HTML ကိုထည့်မှာဖြစ်ပါတယ်။ အဲ့ဒီနောက် function ကို HTML ဆီကို pass ဖြစ်ဖို့အတွက် return value အဖြစ်ပြုလုပ်လိုက်မှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ အဲ့ဒီ function ကို index.php သာမက catalog.php မှာပါ access လုပ်ချင်တဲ့အတွက် Include folder ထဲမှာ file သပ်သပ်ဆောက်ပါမယ်။ အောက်က example ကိုတစ်ချက်ကြည့်ရအောင်။ </p>
    <p>Example of functions.php File:</p>
    <pre>
        <code class="html hljs xml">
			&lt;?php

			function get_item_html ($id, $item) {
			    $output = "&lt;li&gt;&lt;a href='details.php?id=" . $id . "'>&gt;&lt;img src='"
			        . $item["img"] . "' alt='"
			        . $item["title"] . "' /&gt;"
			        . "&lt;p&gt;View Details&lt;/p&gt;"
			        . "&lt;/a&gt;&lt;/li&gt;";
			
			    return $output;
			}


			?&gt;
        </code>
    </pre>
    <p>Example of catalog.php File:</p>
    <pre>
        <code class="html hljs xml">
			&lt;?php
			include("Includes/data.php");
			include("Includes/functions.php");

			$pageTitle = "Full Catalog";
			$section = null;

			if (isset($_GET["cat"])) {
			    if ($_GET["cat"] == "books") {
			        $pageTitle = "Books";
			        $section = "books";
			    } else if ($_GET["cat"] == "movies") {
			        $pageTitle = "Movies";
			        $section = "movies";
			    } else if ($_GET["cat"] == "music") {
			        $pageTitle = "Music";
			        $section = "music";
			    }
			}

			include('Includes/header.php');

			?&gt;

			&lt;div class="section catalog page"&gt;
			    &lt;div class="wrapper"&gt;

			        &lt;h1&gt;&lt;?php echo $pageTitle; ?&gt;&lt;/h1&gt;

			        &lt;ul class="items"&gt;
			            &lt;?php
			            foreach($catalog as $id =&gt; $item) {
			                echo get_item_html($id, $item);
			            } 
			            ?&gt;
			        &lt;/ul&gt;
			    &lt;/div&gt;
			&lt;/div&gt;
					
			&lt;?php include('Includes/footer.php'); ?&gt;
        </code>
    </pre>
    <p>Example of index.php File:</p>
    <pre>
        <code class="html hljs xml">
			&lt;?php
			include("Includes/functions.php");
			include("Includes/data.php");

			$pageTitle = "Personal Media Library";
			$section = null;

			include('Includes/header.php');

			 ?&gt;

			    &lt;div class="section catalog random"&gt;
			        &lt;div class="wrapper"&gt;
			            &lt;h2&gt;May we suggest Something?&lt;/h2&gt;
			            &lt;ul class="items"&gt;
			                &lt;?php
			                foreach ($catalog as $id =&gt; $item) {
			                    echo get_item_html($id, $item);
			                }
			                ?&gt;
			            &lt;/ul&gt;
						
			        &lt;/div&gt;
						
			    &lt;/div&gt;
						
			&lt;?php include('Includes/footer.php'); ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Random Fun with Arrays</h2>
    <p>ပြီးခဲ့တဲ့သင်ခန်းစာမှာ ကျွန်တော်တို့ own function တစ်ခုဖြစ်တဲ့ get_ite_html ကို တည်ဆောက်ခဲ့ပါတယ်။ သူဟာ ကျွန်တော်တို့ list အတွင်းက specific item အတွက် HTML ကို get လုပ်ပေးဖို့ခွင့်ပြုပါတယ်။ လက်ရှိမှာ ကျွန်တော်တို့ home page က catalog ထဲမှာ items တွေတစ်ခုချင်းစီကို loop ပတ်ထားပါတယ်။ ဒါကိုကျွန်တော်တို့က entire catalog အစား user ကို suggest လုပ်ပေးဖို့အတွက် random products လေးခုကို ဆွဲထုတ်မှာဖြစ်ပါတယ်။ ဒီလိုလုပ်ဖို့ဆိုရင် PHP built-in function တစ်ခုကိုသုံးပါမယ်။ ကျွန်တော်တို့ရဲ့ PHP Docs မှာ built-in function တွေအများကြီးရှိပါတယ်။ အဲ့ဒီထဲကမှာ array_rand ဆိုတဲ့ function ကိုရှာလိုက်မယ်။ ကျွန်တော်တို့ရေးခဲ့တဲ့ function တွေလိုပဲ သူဟာ parameter နှစ်ခုနဲ့ value တစ်ခုကို return ပြန်ပေးပါတယ်။ ပထမ parameter က array ဖြစ်ပြီး၊ ဒုတိယ parameter ကတော့ ကျွန်တော်တို့ grab လုပ်ချင်တဲ့ number of elements တွေပဲဖြစ်ပါတယ်။ Return value ကတော့ one item ကို return ပြန်မယ်ဆိုရင် သူဟာ single key element ကို return ပြန်ပေးပြီး၊ multiple items တွေကို return ပြန်မယ်ဆိုရင်တော့ သူဟာ key ကို array တစ်ခုထဲမှာထည့်လိုက်ပါတယ်။ ကျွန်တော်တို့ရဲ့ index.php ထဲမှာ $random ဆိုတဲ့ variable တစ်ခုနဲ့ array_rand ဆိုတဲ့ function ကိုရေးပြီး ပထမ parameter ထဲမှာ pass လုပ်ချင်တဲ့ $catalog ကိုရေးပြီး၊ random products လေးခုဆွဲထုတ်ချင်တာဖြစ်တဲ့အတွက် ဒုတိယ parameter မှာ 4 လို့ရေးလိုက်ပါမယ်။ ဒါကို var_dump နဲ့ထုတ်ကြည့်လိုက်ရင် browser မှာ information အနေနဲ့ array နဲ့ပြပေးမှာဖြစ်ပါတယ်။ Browser မှာအမှန်တကယ်ပြဖို့အတွက် forech loop နဲ့ get_item_html ကိုခေါ်မှာဖြစ်ပါတယ်။ အောက်က example မှာကြည့်ရအောင်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
			&lt;?php
			include("Includes/functions.php");
			include("Includes/data.php");

			$pageTitle = "Personal Media Library";
			$section = null;

			include('Includes/header.php');

			 ?&gt;

			    &lt;div class="section catalog random"&gt;
			        &lt;div class="wrapper"&gt;
			            &lt;h2&gt;May we suggest Something?&lt;/h2&gt;
			            &lt;ul class="items"&gt;
			                &lt;?php

			                //Random Fun with Arrays
			                $random = array_rand($catalog, 4);

			                foreach ($random as $id) {
			                    echo get_item_html($id, $catalog[$id]);
			                }
			                ?&gt;
			            &lt;/ul&gt;
						
			        &lt;/div&gt;
						
			    &lt;/div&gt;
						
			&lt;?php include('Includes/footer.php'); ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Displaying Categories</h2>
    <p>array_rand ဆိုတဲ့ built-in functionကို ကျွန်တော်တို့ homepage မှာ randomly display လုပ်ခဲ့ပြီးတဲ့နောက်မှာ ကျွန်တော်တို့ရဲ့ categories တွေဖြစ်တဲ့ books, movies နဲ့ music တွေတစ်ခုချင်းစီအတွက် ကျွန်တော်တို့ဟာ သူတို့နဲ့သက်ဆိုင်တဲ့ category ထဲက items တွေကိုပဲ display လုပ်ပါမယ်။ ဒီလိုလုပ်ဖို့ဆိုရင် ကျွန်တော်တို့ဟာ array_rand function လိုမျိုး own function တစ်ခု create လုပ်ပါမယ်။ ကျွန်တော်တို့ဟာ parameters နှစ်ခု pass လုပ်ပြီး keys တွေရဲ့ array တစ်ခုအဖြစ် return ပြန်မှာဖြစ်ပါတယ်။ အခုလောလောဆယ် catalog page အတွက် category keys တွေကို ဆွဲထုတ်မှာဖြစ်ပါတယ်။ functions.php ထဲမှာ array_category ဆိုတဲ့ function တစ်ခုဆောက်ပြီး parameter အဖြစ် catalog array နဲ့ ကျွန်တော်တို့ return ပြန်ချင်တဲ့ $category ဆိုပြီးနှစ်ခုရှိပါမယ်။ function ရဲ့ curly braces ထဲမှာ $output ဆိုတဲ့ array တစ်ခုရေးပြီး return ပြန်လိုက်ပါမယ်။ ပြီးရင် foreach loop ထဲမှာ item တစ်ခုချင်းစီအတွက် $category က ကျွန်တော်တို့ category parameter နဲ့ match ဖြစ်လားဆိုတာ စစ်ပေးရမှာဖြစ်ပါတယ်။ ပြီးရင်တော့ catalog page ထဲမှာ ခေါ်ပေးရမှာဖြစ်ပါတယ်။ </p>
    <p>Example of functions.php File:</p>
    <pre>
        <code class="html hljs xml">
		&lt;?php

		function get_item_html ($id, $item) {
		    $output = "&lt;li&gt;&lt;a href='details.php?id=" . $id . "'>&gt;&lt;img src='"
		        . $item["img"] . "' alt='"
		        . $item["title"] . "' /&gt;"
		        . "&lt;p&gt;View Details&lt;/p&gt;"
		        . "&lt;/a&gt;&lt;/li&gt;";
		
		    return $output;
		}

		function array_category($catalog, $category) {
		    if ($category == null) {
		        return array_keys($catalog);
		    }
		    $output = array();
		
		    foreach ($catalog as $id => $item) {
		        if (strtolower($category) == strtolower($item["category"])) {
		            $output[] = $id;
		        }
		    }
		    return $output;
		}


		?&gt;
        </code>
    </pre>
    <p>Example of catalog.php File:</p>
    <pre>
        <code class="html hljs xml">
			&lt;?php
			include("Includes/data.php");
			include("Includes/functions.php");

			$pageTitle = "Full Catalog";
			$section = null;

			if (isset($_GET["cat"])) {
			    if ($_GET["cat"] == "books") {
			        $pageTitle = "Books";
			        $section = "books";
			    } else if ($_GET["cat"] == "movies") {
			        $pageTitle = "Movies";
			        $section = "movies";
			    } else if ($_GET["cat"] == "music") {
			        $pageTitle = "Music";
			        $section = "music";
			    }
			}

			include('Includes/header.php');

			?&gt;

			&lt;div class="section catalog page"&gt;
			    &lt;div class="wrapper"&gt;

			        &lt;h1&gt;&lt;?php echo $pageTitle; ?&gt;&lt;/h1&gt;

			        &lt;ul class="items"&gt;
			            &lt;?php
			            $categories = array_category($catalog, $section);

			            foreach ($categories as $id) {
			                echo get_item_html($id, $catalog[$id]);
			            }
			            ?&gt;
			        &lt;/ul&gt;
			    &lt;/div&gt;
			&lt;/div&gt;
					
			&lt;?php include('Includes/footer.php'); ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Sorting Array Items</h2>
    <p>ပြီးခဲ့တဲ့ သင်ခန်းစာမှာ certain category အတွင်း items တွေကိုသာလျှင် ကျွန်တော်တို့ဟာ ဘယ်လို grab လုပ်ရမလဲ လေ့လာခဲ့ပါတယ်။ Current data အရဆိုရင် category page မှာ four items ပဲရှိပါတယ်။ ဒါဟာ အဆင်ပြေတယ်ထင်ရပေမယ့် ကျွန်တော်တို့က items 12 ခုရဲ့ full catalog ကိုကြည့်ချင်တဲ့အခါ ကျွန်တော်တို့ catalog ကို expand လုပ်တဲ့အခါ particulat item တစ်ခုကို ဘယ်လို miss လုပ်ရမလဲဆိုတာ ကြည့်နိုင်ပါတယ်။ ဒါဟာ ကျွန်တော်တို့ title နဲ့ sort လုပ်တဲ့အခါ အလွယ်တကူ search လုပ်လို့ရနိုင်ဖို့ပါ။ ဒါကြောင့် ကျွန်တော်တို့ရဲ့ functions.php ထဲမှာ လိုအပ်တာတွေကို modifine လုပ်ပါမယ်။ Sorting လုပ်ဖို့အတွက် ကျွန်တော်တို့က array_category function ထဲကိုသွားပြီး $sort ဆိုတဲ့ variable နဲ့ title ကို sort လုပ်ပါမယ်။ အဲ့ဒီ $sort ကို $output ထဲမှာ assign လုပ်ပြီး return ပြန်လိုက်မယ်။ $output array ကို return မပြန်ခင် လုပ်ရမယ်အချက်နှစ်ခုရှိပါတယ်။ ပထမတစ်ခုက asort ဆိုတဲ့ built-in function ကိုသုံးပြီး sort လုပ်မယ်။ ဒုတိယတစ်ခုကတော့ ကျွန်တော်တို့ array ကို keys တွေသာမကဘဲ include လုပ်ခဲ့တဲ့အတွက် ကျွန်တော်တို့ဟာ null ပေးခဲ့သလိုမျိုး keys တွေသာလျှင် return ပြန်ချင်တာပါ။ ဒါဆိုရင်တော့ ကျွန်တော်တို့ဟာ books ကိုနှိပ်လိုက်ရင် items တွေက title ပေါ်မူတည်ပြီး sort လုပ်ပေးသွားမှာပါ။ ကျွန်တော်တို့ လိုချင်တဲ့ alphabet ကိုလိုချင်တယ်ဆိုရင်တော့ ltrim ကိုသုံးနိုင်ပါတယ်။ </p>
    <p>Example of functions.php File:</p>
    <pre>
        <code class="html hljs xml">
			&lt;?php

			function get_item_html ($id, $item) {
			    $output = "&lt;li&gt;&lt;a href='details.php?id=" . $id . "'>&gt;&lt;img src='"
			        . $item["img"] . "' alt='"
			        . $item["title"] . "' /&gt;"
			        . "&lt;p&gt;View Details&lt;/p&gt;"
			        . "&lt;/a&gt;&lt;/li&gt;";
			
			    return $output;
			}

			function array_category($catalog, $category) {
			    $output = array();
			
			    foreach ($catalog as $id => $item) {
			        if ($category == null OR strtolower($category) == strtolower($item["category"])) {
			            $sort = $item["title"];
			            $sort = ltrim($sort, "The ");
			            $sort = ltrim($sort, "An ");
			            $sort = ltrim($sort, "A ");
			            $output[$id] = $sort;
			        }
			    }
			
			    asort($output);
			    return array_keys($output);
			}


			?&gt;
        </code>
    </pre>
    <p>Example of catalog.php File:</p>
    <pre>
        <code class="html hljs xml">
			&lt;?php
			include("Includes/data.php");
			include("Includes/functions.php");

			$pageTitle = "Full Catalog";
			$section = null;

			if (isset($_GET["cat"])) {
			    if ($_GET["cat"] == "books") {
			        $pageTitle = "Books";
			        $section = "books";
			    } else if ($_GET["cat"] == "movies") {
			        $pageTitle = "Movies";
			        $section = "movies";
			    } else if ($_GET["cat"] == "music") {
			        $pageTitle = "Music";
			        $section = "music";
			    }
			}

			include('Includes/header.php');

			?&gt;

			&lt;div class="section catalog page"&gt;
			    &lt;div class="wrapper"&gt;

			        &lt;h1&gt;
			            &lt;?php
			            if ($section != null) {
			                echo "&lt;a href='catalog.php'&gt; Full Catalog&lt;/a&gt; &gt; ";
			            }
			            echo $pageTitle; ?&gt;
			        &lt;/h1&gt;
					
			        &lt;ul class="items"&gt;
			            &lt;?php
			            $categories = array_category($catalog, $section);
					
			            foreach ($categories as $id) {
			                echo get_item_html($id, $catalog[$id]);
			            }
			            ?&gt;
			        &lt;/ul&gt;
			    &lt;/div&gt;
			&lt;/div&gt;
					
			&lt;?php include('Includes/footer.php'); ?&gt;
		</code>
    </pre>
    <hr>


    <h2>Item Details and Redirection</h2>
    <p>ကျွန်တော်တို့ အခုဆိုရင် loaded ဖြစ်နေတဲ့ ကျွန်တော်တို့ရဲ့ data အားလုံးရယ်၊ catalog page နဲ့ category page တွေကို sorting လုပ်ပြီးပါပြီ။ နောက်ဆုံးပြုလုပ်ရမယ့် အရာကတော့ item တစ်ခုချင်းစီရဲ့ details ကို display လုပ်နိုင်ဖို့ပဲဖြစ်ပါတယ်။ ဒီလိုလုပ်ဖို့အတွက် Project folder ထဲမှာ details.php ဆိုတဲ့ file ကို create လုပ်လိုက်ပါမယ်။ သူ့ထဲကို catalog.php ထဲက အပေါ်ဆုံးကနေ header အထိ copy ယူပြီး ထည့်လိုက်ပါမယ်။ Specific item ရဲ့ details ကို pull လုပ်ဖို့ဆိုရင် get variable ကို ID နဲ့ pass လုပ်ဖို့ utilize လုပ်ရပါမယ်။ ID pass ဖြစ်သွားပြီဆိုရင် ကျွန်တော်တို့က အဲ့ဒီ ID ဟာ catalog ထဲမှာရှိလား check လုပ်ပါမယ်။ အောက်က example မှာဆက်လေ့လာနိုင်ပါတယ်။ </p>
    <p>Example of details.php File:</p>
    <pre>
        <code class="html hljs xml">
			&lt;?php
			include("Includes/data.php");
			include("Includes/functions.php");

			if (isset($_GET["id"])) {
			    $id = $_GET["id"];
			
			    if (isset($catalog[$id])) {
			        $item = $catalog[$id];
			    }
			}

			if (!isset($item)) {
			    header("location:catalog.php");
			    exit;
			}

			$pageTitle = $item["title"];
			$section = null;

			include('Includes/header.php'); ?&gt;

			&lt;div class="section page"&gt;
			    &lt;div class="wrapper"&gt;
			        &lt;div class="media-picture"&gt;
			            &lt;span&gt;
			                &lt;img src="&lt;?php echo $item["img"]; ?&gt;" alt="&lt;?php echo $item["title"]; ?&gt;"&gt;
			            &lt;/span&gt;
			        &lt;/div&gt;
			    &lt;/div&gt;
			&lt;/div&gt;
    	</code>
    </pre>
    <hr>


    <h2>Displaying Item Details</h2>
    <p>ကျွန်တော်တို့ရဲ့ deteils.php file ထဲမှာ table တစ်ခုနဲ့ items တွေရဲ့ details ကို ဖော်ပြမှာဖြစ်ပါတယ်။ Table တစ်ခုနဲ့ရေးပြီးရင် ကျွန်တော်တို့ရဲ့ categories တစ်ခုချင်းစီမှာ specific attribute တွေရှိရပါမယ်။ ဒါကြောင့် ကျွန်တော်တို့ရဲ့ category ကို check လုပ်ဖို့အတွက် conditional တစ်ခုကိုသုံးပါမယ်။ပြီးတော့ category တစ်ခုစီနဲ့ ပတ်သတ်တဲ့ attributes တွေကို display လုပ်ပါမယ်။ ကျွန်တော်တို့ရဲ့ categories တွေကို match ဖြစ်ဖို့အတွက် strtolower ဆိုတဲ့ function ကိုသုံးမှာဖြစ်ပါတယ်။ ပြီးရင် browser ကို run လိုက်တဲ့အခါ items တွေရဲ့ detail ကိုပြပေးမှာဖြစ်ပါတယ်။ တစ်ခုရှိတာက author မှာ array to string conversion ဆိုတဲ့ error တစ်ခုတက်နေပါလိမ့်မယ်။ Authors တွေဟာ ကျွန်တော်တို့ item အတွင်းမှာ nested ဖြစ်နေတဲ့ အခြား array တစ်ခုဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ အဲ့ဒီ author name ကိုပါ comma ခြားပြီး ပြပေးချင်တာဖြစ်တဲ့အတွက် foreach loop နဲ့ပတ်ပေးရမှာဖြစ်ပါတယ်။ အခါအားလျော်စွာပဲ PHP အဲ့ဒီလို ထုတ်ဖို့အတွက် implode ဆိုတဲ့ function တစ်ခုရှိပါတယ်။ Implode ဟာ parameters နှစ်ခုယူပြီးတော့ array pieces တွေကို string တစ်ခုအဖြစ် join လုပ်ပေးပါတယ်။ ပထမ parameter က ကျွန်တော်တို့ elements တွေကို separate လုပ်ချင်တဲ့ string ဖြစ်ပြီး ဒုတိယ parameter ကတော့ array ကိုယ်တိုင်ပဲဖြစ်ပါတယ်။ String separator ဟာ HTML ကဲ့သို့သော group of strings တွေဖြစ်နိုင်ပါတယ်။ ဒါဟာ ကျွန်တော်တို့ HTML ထဲက list of items တွေကို လိုချင်တဲ့အခါမျိုးမှာ တစ်ကယ်ကို အသုံးဝင်ပါတယ်။ ကျွန်တော်တို့ရဲ့ author ကို implode သုံးပြီး browser မှာ run ကြည့်တဲ့အခါ author name တွေကို comma နဲ့ခြားပြီး ထုတ်ပေးမှာဖြစ်ပါတယ်။ </p>
    <p>Example of details.php File:</p>
    <pre>
        <code class="html hljs xml">
			&lt;?php
			include("Includes/data.php");
			include("Includes/functions.php");

			if (isset($_GET["id"])) {
			    $id = $_GET["id"];

			    if (isset($catalog[$id])) {
			        $item = $catalog[$id];
			    }
			}

			if (!isset($item)) {
			    header("location:catalog.php");
			    exit;
			}

			$pageTitle = $item["title"];
			$section = null;

			include('Includes/header.php'); ?&gt;

			&lt;div class="section page"&gt;

			    &lt;div class="wrapper"&gt;

			        &lt;div class="media-picture"&gt;
			            &lt;span&gt;
			                &lt;img src="&lt;?php echo $item["img"]; ?&gt;" alt="&lt;?php echo $item["title"]; ?&gt;"&gt;
			            &lt;/span&gt;
			        &lt;/div&gt;

			        &lt;div class="media-details"&gt;
			            &lt;h1&gt;&lt;?php echo $item["title"]; ?&gt;&lt;/h1&gt;
			            &lt;table&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;Category&lt;/th&gt;
			                    &lt;td&gt;&lt;?php echo $item["category"]; ?&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;Genre&lt;/th&gt;
			                    &lt;td&gt;&lt;?php echo $item["genre"]; ?&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;Format&lt;/th&gt;
			                    &lt;td&gt;&lt;?php echo $item["format"]; ?&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;Year&lt;/th&gt;
			                    &lt;td&gt;&lt;?php echo $item["year"]; ?&gt;&lt;/td&gt;
			                &lt;/tr&gt;

			                &lt;!-- Books condition --&gt;
			                &lt;?php if (strtolower($item["category"]) == "books") { ?&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;Authors&lt;/th&gt;
			                    &lt;td&gt;&lt;?php echo implode(", ", $item["authors"]); ?&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;Publisher&lt;/th&gt;
			                    &lt;td&gt;&lt;?php echo $item["publisher"]; ?&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;ISBN&lt;/th&gt;
			                    &lt;td&gt;&lt;?php echo $item["isbn"]; ?&gt;&lt;/td&gt;
			                &lt;/tr&gt;

			                &lt;!-- Movies condition --&gt;
			                &lt;?php } else if (strtolower($item["category"]) == "movies") { ?&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;Director&lt;/th&gt;
			                    &lt;td&gt;&lt;?php echo $item["director"]; ?&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;Writers&lt;/th&gt;
			                    &lt;td&gt;&lt;?php echo implode(", ", $item["writers"]); ?&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;Stars&lt;/th&gt;
			                    &lt;td&gt;&lt;?php echo implode(", ", $item["stars"]); ?&gt;&lt;/td&gt;
			                &lt;/tr&gt;

			                &lt;!-- Music condition --&gt;
			                &lt;?php } else if (strtolower($item["category"]) == "music") { ?&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;Artist&lt;/th&gt;
			                    &lt;td&gt;&lt;?php echo $item["artist"]; ?&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;?php } ?&gt;
			            &lt;/table&gt;
			        &lt;/div&gt;

			    &lt;/div&gt;

			&lt;/div&gt;
        </code>
    </pre>
    <hr>


    <h2>Breadcrumbs</h2>
    <p>အခု ကျွန်တော်တို့ library နဲ့ detail page က အဆင်ပြေသွားပါပြီ။ ကျွန်တော်တို့မှာ nice gallery of items တစ်ခုရှိပါတယ်။ သူတို့ကို title နဲ့ sort လုပ်ထားပြီး category နဲ့ split လုပ်ထားပါတယ်။ ကျွန်တော်တို့ရဲ့ category page ကို main navigation အားလုံးကနေ navigate လုပ်နိုင်ပါတယ်။ ပြီးတော့ category တစ်ခုချင်းစီကနေ full catalog ကိုမြင်ရဖို့ click လုပ်လိုက်လို့တောင်ရပါတယ်။ ကျွန်တော်တို့ရဲ့ detail page မှာ array ထဲက stored လုပ်ထားတဲ့ information အားလုံးကိုလည်း grab လုပ်နိုင်ပါတယ်။ ကျွန်တော်တို့ကျန်နေတဲ့ အရာတစ်ခုကတော့ some breadcrumbs or summer day တစ်ရက်မှာ refreshing beverage လုပ်သလိုမျိုးပေါ့။ ဒါပေမယ့် အဲ့ဒီလိုမဟုတ်ပါဘူး။ Breadcrumbs ဆိုတာ ကျွန်တော်တို့ရဲ့ current page ရဲ့ path ကို ပြချင်တဲ့အခါမှာ သုံးတဲ့အရာဖြစ်ပါတယ်။ ကျွန်တော်တို့ရဲ့ Beethoven details page မှာဆိုရင် path ဟာ Full Catalog > Music > Beethoven ဖြစ်ပါတယ်။ PHP ဟာ variables တွေကို တစ်ကြိမ်ပဲသုံးပြီး specify လုပ်ဖို့ ခွင့်ပြုပေးပါတယ်။ ပြီးတော့ ကျွန်တော်တို့ရဲ့ item ID ကိုအခြေခံပြီး HTML ကိုလည်း update လုပ်လို့ရပါတယ်။ ဒါကြောင့်ကျွန်တော်တို့က details page ကိုသွားပြီး အဲ့ဒီ breadcrumbs တွေ add လုပ်ပါမယ်။ ကျွန်တော်တို့ details page ထဲက wrapper div ရဲ့အောက်မှာ class name breadcrumbs နဲ့ div တစ်ခုတည်ဆောက်ပါမယ်။ ပထမ element ကတော့ full catalog နဲ့ချိတ်မယ့် link တစ်ခုဖြစ်ပါတယ်။ ဒုတိယကတော့ category page နဲ့ချိတ်မယ့် link ဖြစ်ပါတယ်။ အောက်က example မှာလေ့လာနိုင်ပါတယ်။ </p>
    <p>Example of details.php File:</p>
    <pre>
        <code class="html hljs xml">
			&lt;?php
			include("Includes/data.php");
			include("Includes/functions.php");

			if (isset($_GET["id"])) {
			    $id = $_GET["id"];
			
			    if (isset($catalog[$id])) {
			        $item = $catalog[$id];
			    }
			}

			if (!isset($item)) {
			    header("location:catalog.php");
			    exit;
			}

			$pageTitle = $item["title"];
			$section = null;

			include('Includes/header.php'); ?&gt;

			&lt;div class="section page"&gt;

			    &lt;div class="wrapper"&gt;

			        &lt;!-- Breadcrumbs --&gt;
			        &lt;div class="breadcrumb"&gt;
			            &lt;a href="catalog.php"&gt;Full Catalog&lt;/a&gt; &gt;
			            &lt;a href="catalog.php?cat=&lt;?php echo strtolower($item["category"]); ?&gt;"&gt;
			            &lt;?php echo $item["category"]; ?&gt;&lt;/a&gt;
			            &gt; &lt;?php echo $item["title"]; ?&gt;
			        &lt;/div&gt;

			        &lt;div class="media-picture"&gt;
			            &lt;span&gt;
			                &lt;img src="&lt;?php echo $item["img"]; ?&gt;" alt="&lt;?php echo $item["title"]; ?&gt;"&gt;
			            &lt;/span&gt;
			        &lt;/div&gt;

			        &lt;div class="media-details"&gt;
			            &lt;h1&gt;&lt;?php echo $item["title"]; ?&gt;&lt;/h1&gt;
			            &lt;table&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;Category&lt;/th&gt;
			                    &lt;td&gt;&lt;?php echo $item["category"]; ?&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;Genre&lt;/th&gt;
			                    &lt;td&gt;&lt;?php echo $item["genre"]; ?&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;Format&lt;/th&gt;
			                    &lt;td&gt;&lt;?php echo $item["format"]; ?&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;Year&lt;/th&gt;
			                    &lt;td&gt;&lt;?php echo $item["year"]; ?&gt;&lt;/td&gt;
			                &lt;/tr&gt;

			                &lt;!-- Books condition --&gt;
			                &lt;?php if (strtolower($item["category"]) == "books") { ?&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;Authors&lt;/th&gt;
			                    &lt;td&gt;&lt;?php echo implode(", ", $item["authors"]); ?&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;Publisher&lt;/th&gt;
			                    &lt;td&gt;&lt;?php echo $item["publisher"]; ?&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;ISBN&lt;/th&gt;
			                    &lt;td&gt;&lt;?php echo $item["isbn"]; ?&gt;&lt;/td&gt;
			                &lt;/tr&gt;
							
			                &lt;!-- Movies condition --&gt;
			                &lt;?php } else if (strtolower($item["category"]) == "movies") { ?&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;Director&lt;/th&gt;
			                    &lt;td&gt;&lt;?php echo $item["director"]; ?&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;Writers&lt;/th&gt;
			                    &lt;td&gt;&lt;?php echo implode(", ", $item["writers"]); ?&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;Stars&lt;/th&gt;
			                    &lt;td&gt;&lt;?php echo implode(", ", $item["stars"]); ?&gt;&lt;/td&gt;
			                &lt;/tr&gt;
							
			                &lt;!-- Music condition --&gt;
			                &lt;?php } else if (strtolower($item["category"]) == "music") { ?&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;Artist&lt;/th&gt;
			                    &lt;td&gt;&lt;?php echo $item["artist"]; ?&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;?php } ?&gt;
			            &lt;/table&gt;
			        &lt;/div&gt;
							
			    &lt;/div&gt;
							
			&lt;/div&gt;
        </code>
    </pre>
    <hr>


    <h2>Setting up Initial Form and Creating Input Fields</h2>
    <p>ကျွန်တော်တို့ရဲ့ suggest.php file ထဲမှာ Form တစ်ခုတည်ဆောက်ပါမယ်။ ပြီးရင် အဲ့ဒီ form ထဲမှာ နောက်ထပ် fields တွေထပ်ထည့်မှာဖြစ်ပါတယ်။ Multiple fields တွေနဲ့ forms အတွက်ဆိုရင် HTML table element ကိုအသုံးများကြပါတယ်။ Table တည်ဆောက်ပြီး သူ့ထဲမှာ tr နှစ်ခုနဲ့ two column layout ရှိပါမယ်။ ပထမ column က label အတွက်ဖြစ်ပြီး ဒုတိယ column က input field အတွက်ဖြစ်ပါတယ်။ ကျွန်တော်တို့တစ်ခုသတိထားရမှာက label ထဲက for attribute ထဲက name နဲ့ input ထဲက id name ဟာ အတူတူဖြစ်နေရပါမယ်။ </p>
    <p>Example of suggest.php File:</p>
    <pre>
        <code class="html hljs xml">
			&lt;?php
			$pageTitle = "Suggest a Media Item";
			$section = "suggest";

			include('Includes/header.php');

			 ?&gt;

			&lt;div class="section page"&gt;
			    &lt;div class="wrapper"&gt;
			        &lt;h1&gt;Suggest a Media Item&lt;/h1&gt;
			        &lt;p&gt;If you think there is something I&rsquo;m missing, let me know! Complete the form to send me an email.&lt;/p&gt;
			        &lt;form method="post"&gt;
			            &lt;table&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="name"&gt;Name&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="name" name="name" placeholder="Enter a name..."&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="email"&gt;Email&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="email" name="email" placeholder="Enter an email..."&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="name"&gt;Suggest Item Details&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;textarea name="details" id="details" cols="30" rows="5" placeholder="Enter a suggestion..."&gt;&lt;/textarea&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			            &lt;/table&gt;
			            &lt;input type="submit" value="Send" /&gt;
			        &lt;/form&gt;
			    &lt;/div&gt;
			&lt;/div&gt;

			&lt;?php include('Includes/footer.php'); ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Working with Post Variables</h2>
	<p>အခုကျွန်တော်တို့မှာ Form တစ်ခုရှိနေပါပြီ။ အဲ့ဒီ contact form ကို submit လုပ်တဲ့အခါမှာ ဘာဖြစ်မလဲဆိုတာ ကြည့်ရအောင်ပါ။ User တွေဟာ ပထမဆုံး form ထဲမှာ information တွေကို ဖြည့်ပြီး Send ဆိုတဲ့ button ကိုနှိပ်ရပါမယ်။ အဲ့ဒီလိုနှိပ်လိုက်တဲ့အခါ browser က request တစ်ခုကို web server ဆီလှမ်းပို့လိုက်ပါတယ်။ ကျွန်တော်တို့ဖြည့်လိုက်တဲ့ form ထဲက values တွေကိုယူပြီး request တစ်ခုအနေနဲ့ web server ဆီပို့လိုက်ပါတယ်။ အဲ့ဒီနောက် server က အဲ့ဒီvalues တွေကို access လုပ်ပြီးတော့ PHP code နဲ့ execute လုပ်ပေးပါတယ်။ Visitor က Send ကိုနှိပ်တဲ့အချိန်မှာ browser က Form တစ်ခုကနေ particular PHP file ဆီကို information တွေကို ပို့ပါလိမ့်မယ်။ ကျွန်တော်တို့ဟာ browser ကို ကျွန်တော်တို့ form ထဲမှာ action attribute ကို သတ်မှတ်ပေးခြင်းဖြင့် ပြောပြပေးနိုင်ပါတယ်။ Form ထဲက action attribute ထဲမှာ ကျွန်တော်တို့က php file တစ်ခုထည့်ပါမယ်။ အဲ့ဒီ file name နဲ့ပဲ form ရဲ့ submittion ကို handle လုပ်ဖို့ process.php file တစ်ခုတည်ဆောက်လိုက်ပါမယ်။ သူ့ထဲမှာ temporary message တစ်ခုထည့်ထားလိုက်မယ်။ ပြီးရင် form ကိုဖြည့်ပြီး send ကိုနှိပ်လိုက်တဲ့ အခါ ကျွန်တော်တို့ရဲ့ process.php file ကိုရောက်သွားမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ send လုပ်လိုက်တဲ့ form ထဲက data တွေကို access လုပ်ဖို့အတွက်ဆိုရင် ကျွန်တော်တို့သုံးဖူးပြီးသားဖြစ်ပြီး special variable ဖြစ်တဲ့ $_GET ကိုသုံးပေးရပါမယ်။ POST method နဲ့ form တစ်ခုကို PHP file တစ်ခုအဖြစ် submit လုပ်လိုက်တဲ့အချိန်မှာ အဲ့ဒီ form က information တွေက same way နဲ့ $_POST ဆိုတဲ့ variable တစ်ခုအတွင်းမှာသာလျှင် store လုပ်သွားမှာပါ။ အဲ့ဒီ $_POST variable ထဲကအရာအားလုံးကို screen ဆီ display လုပ်ဖို့အတွက် ကျွန်တော်တို့က var_dump cmd ကိုသုံးပြီးထုတ်မှာဖြစ်ပါတယ်။ ဒီလိုထုတ်လိုက်မယ်ဆိုရင်တော့ ကျွန်တော်တို့ form ကို submit လုပ်လိုက်တာနဲ့ သူ့ထဲက information တွေကို process.php file ထဲမှာ ဖော်ပြပေးမှာဖြစ်ပါတယ်။  $_POST ဟာ form ထဲက variables တွေအားလုံးပါတဲ့  array တစ်ခုပဲဖြစ်ပါတယ်။ ကျွန်တော်တို့ submit လုပ်လိုက်တဲ့ form ထဲက information တွေကို retrieve လုပ်ပြီး array တစ်ခုနဲ့ဖော်ပြပေးတာဖြစ်ပါတယ်။ ဒါကိုကျွန်တော်တို့က variable သတ်မှတ်ပြီး HTML format နဲ့ထုတ်ကြည့်လို့ရပါတယ်။ </p>
	<p>Example of suggest.php File:</p>
	<pre>
		<code class="html hljs xml">
			&lt;?php
			$pageTitle = "Suggest a Media Item";
			$section = "suggest";

			include('Includes/header.php');

			 ?&gt;

			&lt;div class="section page"&gt;
			    &lt;div class="wrapper"&gt;
			        &lt;h1&gt;Suggest a Media Item&lt;/h1&gt;
			        &lt;p&gt;If you think there is something I&rsquo;m missing, let me know! Complete the form to send me an email.&lt;/p&gt;
			        &lt;form method="post" action="process.php"&gt;
			            &lt;table&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="name"&gt;Name&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="name" name="name" placeholder="Enter a name..."&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="email"&gt;Email&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="email" name="email" placeholder="Enter an email..."&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="name"&gt;Suggest Item Details&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;textarea name="details" id="details" cols="30" rows="5" placeholder="Enter a suggestion..."&gt;&lt;/textarea&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			            &lt;/table&gt;
			            &lt;input type="submit" value="Send" /&gt;
			        &lt;/form&gt;
			    &lt;/div&gt;
			&lt;/div&gt;

			&lt;?php include('Includes/footer.php'); ?&gt;
		</code>
	</pre>

    <p>Example of process.php File:</p>
    <pre>
        <code class="html hljs xml">
			&lt;?php

			$name = $_POST["name"];
			$email = $_POST["email"];
			$details = $_POST["details"];

			echo $name . "&lt;br&gt;";
			echo $email . "&lt;br&gt;";
			echo $details . "&lt;br&gt;";

			?&gt;
        </code>
    </pre>
    <hr>


    <h2>Working with Concatenation and Whitespace</h2>
    <p>အခုသင်ခန်းစာမှာတော့ ကျွန်တော်တို့က concatenation ကိုသုံးပြီး data တွေကိုဖော်ပြဖို့အတွက် text အချို့ကို echo နဲ့ထုတ်ပြမှာဖြစ်ပါတယ်။ Echo statements တွေဟာ separate lines ပေါ်မှာရှိတယ်ဆိုပေမယ့် browser ဆီကို echo ထုတ်လိုက်တဲ့အခါမှာတော့ line break မရှိပါဘူး။ ကျွန်တော်တို့ဟာ line breaks တွေလုပ်ဖို့အတွက် escape sequence ကိုအသုံးပြုနိုင်ပါတယ်။ ကျွန်တော်တို့အနေနဲ့ PHP က line break တစ်ခုအဖြစ် ဖော်ပြပေးတဲ့ sequence of characters တွေကို အသုံးပြုနိုင်ပါတယ်။ ကျွန်တော်တို့အသုံးပြုမယ့် sequence ကတော့ \n ပဲဖြစ်ပါတယ်။ ကျွန်တော်တို့ရဲ့ browser မှာ line breaks တွေဖော်ပြဖို့ဆိုရင် break tag ကိုအသုံးပြုရပါမယ်။ HTML မှာလည်း pre-formatted text element လို့ခေါ်တဲ့ pre tag တစ်ခုရှိပါတယ်။ Pre tag ဟာ browser ပေါ်မှာ white space အနေနဲ့ဖော်ပြပေးပါတယ်။ နောက်တစ်ခုကျန်သေးတာကတော့ ကျွန်တော်တို့ email ကို ပို့လိုက်တဲ့အချိန်မှာ email ရဲ့ entire body တစ်ခုလုံးကို single variable တစ်ခုထဲမှာ ထည့်ထားဖို့လိုပါတယ်။ ကျွန်တော်တို့အနေနဲ့ variables တွေကို တစ်ကြိမ်တည်းနဲ့ echo ထုတ်လို့မရနိုင်ပါဘူး။ ဒါကြောင့် $email_body ဆိုတဲ့ variable တစ်ခု တည်ဆောက်ပြီး blank value နဲ့စမယ်လို့ပြောလိုက်ပါမယ်။ Next line မှာ echo ထုတ်မယ့်အစား ကျွန်တော်တို့က concatenation ကိုသုံးပါမယ်။ ဆိုလိုချင်တာကတော့ ကျွန်တော်တို့ echo ထုတ်မယ့် values တွေကို $email_body ဆိုတဲ့ variable ထဲမှာထည့်ပြီး အကုန်လုံးထည့်ပြီးတဲ့ အချိန်မှ $email_body ကို echo ထုတ်ပေးလိုက်တာဖြစ်ပါတယ်။ </p>
    <p>Example of process.php File:</p>
    <pre>
        <code class="html hljs xml">
			&lt;?php

			$name = $_POST["name"];
			$email = $_POST["email"];
			$details = $_POST["details"];

			echo "&lt;pre&gt;";
			$email_body = "";
			$email_body .= "Name " . $name . "\n";
			$email_body .= "Email " . $email . "\n";
			$email_body .= "Details " . $details . "\n";
			echo $email_body;
			echo "&lt;/pre&gt;";

			?&gt;
        </code>
    </pre>
    <hr>


    <h2>Redirecting After a Form Submission</h2>
    <p>ကျွန်တော်တို့ အခုဆိုရင် email send လုပ်ဖို့အတွက် PHP code ထဲမှာ လိုအပ်တဲ့ information အားလုံးရှိနေပါပြီ။ PHP မှာ ကျွန်တော်တို့အသုံးပြုနိုင်တဲ့ mail function ရှိတယ်ဆိုပေမယ့် သူဟာ server configuration တိုင်းအလုပ်မလုပ်ပါဘူး။ ကျွန်တော်တို့ computer ထဲမှာ PHP code တွေ process လုပ်ဖို့အတွက် PHP development environment ကို locally အရ install လုပ်ရပါတယ်။ ကျွန်တော့်အနေနဲ့ကတော့ email send လုပ်ဖို့အတွက်ဆိုရင် third-party library ကိုသုံးဖို့ အကြံပေးချင်ပါတယ်။ ပြီးတော့ သီးခြား email server တစ်ခုနဲ့ပေါ့။ ဒါတွေကို set up လုပ်ဖို့အတွက် ကျွန်တော်တို့လေ့လာရမယ့် အရာတွေရှိပါတယ်။ အခုကတော့ ကျွန်တော်တို့ email က sent ဖြစ်သွားပြီး နောက်ထပ်ဘာဆက်လုပ်ရမလဲကြည့်ရအောင်။ ကျွန်တော်တို့က email sent ဖြစ်သွားတဲ့အခါမှာ user ဆီကို form က completed ဖြစ်ကြောင်းပြပေးတဲ့ Thank you page ကိုတည်ဆောက်မှာဖြစ်ပါတယ်။ တည်ဆောက်ပြီး browser ကို run ကြည့်တဲ့အခါ browser က process.php file ကို navigate လုပ်သွားပြီး Thank you ဆိုတဲ့ message နဲ့ဖော်ပြပေးမှာဖြစ်ပါတယ်။ အဲ့ဒီ approach ဟာ များသောအားဖြင့် အလုပ်လုပ်ပါတယ်။ သို့သော်လည်း ကျွန်တော်တို့ page ကို refresh လုပ်လိုက်မယ်ဆိုရင် server ကို နောက်ထပ် email တစ်ခုကို resend လုပ်သွားမှာဖြစ်ပါတယ်။ ဒီလိုဖြစ်တာကို browser အချို့က Confirm Form Resubmission ဆိုပြီး pop up နဲ့ပြပေးပါတယ်။ ဒါကို PHP က resend လုပ်မှာလားမေးပါလိမ့်မယ်။ ကျွန်တော်တို့က resend လုပ်မယ်ဆိုရင် email ကို resend လုပ်ပေးမှာဖြစ်ပြီး ၊ ကျွန်တော်တို့က မလုပ်ဘူးလို့ပြောလိုက်မယ်ဆိုရင် error တက်သွားမှာဖြစ်ပါတယ်။  ကျွန်တော်တို့က form ကို submit လုပ်လိုက်ရင် Thank you page ကိုရောက်သွားမှာဖြစ်ပြီး ကျွန်တော်တို့က browser ကို refresh လုပ်လိုက်မယ်ဆိုရင် login form ကိုပြန်ရောက်သွားမှာဖြစ်ပါတယ်။ အောက်က example ကို တစ်ချက်ကြည့်ရအောင်။ </p>
    <p>Example of process.php File:</p>
    <pre>
        <code class="html hljs xml">
			&lt;?php

			$name = $_POST["name"];
			$email = $_POST["email"];
			$details = $_POST["details"];

			echo "&lt;pre&gt;";
			$email_body = "";
			$email_body .= "Name" . $name . "\n";
			$email_body .= "Email " . $email . "\n";
			$email_body .= "Details " . $details . "\n";
			echo $email_body;
			echo "&lt;/pre&gt;";

			//To Do: Send Email
			header("location:thanks.php");

			?&gt;
        </code>
    </pre>
    <p>Example of thanks.php File:</p>
    <pre>
        <code class="html hljs xml">
			&lt;?php

			$pageTitle = "Thank you";
			$section = null;

			include("Includes/header.php");
			?&gt;


			&lt;div class="section page"&gt;
			    &lt;h1&gt;Thank You&lt;/h1&gt;
			    &lt;p&gt;Thanks for the email! I&rsquo;ll check out your suggestion shortly!&lt;/p&gt;
			&lt;/div&gt;

			&lt;?php include("Includes/footer.php"); ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Checking the Request Method</h2>
    <p>ကျွန်တော်တို့ရဲ့ form ကို process လုပ်ဖို့အတွက် PHP file သုံး file ဖြစ်တဲ့ suggest.php ၊ process.php နဲ့ thanks.php တွေကို တည်ဆောက်ခဲ့ပြီးပါပြီ။ ဒါဟာ အဆင်ပြေတယ်ဆိုပေမယ့် single PHP file တစ်ခုတည်းနဲ့ အဲ့ဒီ activities သုံးခုကို through လုပ်ဖို့လိုပါသေးတယ်။ ကျွန်တော်တို့ဟာ အခြေနေအမျိုးမျိုးထဲက activity တစ်ခုချင်းစီအတွက် code ကို execute လုပ်ဖို့ conditionals တွေကို သုံးနိုင်ပါတယ်။ ကျွန်တော်တို့ suggest.php file ထဲကိုသွားပြီး လိုအပ်တာတွေထပ်လုပ်ပါမယ်။ အခုဆိုရင် အဲ့ဒီ file ဟာ suggest form ကိုပဲ display လုပ်ဦးမှာပါ။ ဒါကိုကျွန်တော်တို့က submission form ကို process.php ထဲက code ကိုသုံးပြီး handle လုပ်မှာဖြစ်ပါတယ်။ ပထမဆုံး suggest.php file ထဲက form tag ထဲက action attribute ထဲမှာ suggest.php လို့ပြောင်းလိုက်ပါမယ်။ အဲ့ဒီနောက် form submission ကို handle လုပ်မှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ webpage အတွက် regular request တွေအတွက်ဆိုရင် method က GET ပဲဖြစ်ပါတယ်။ ဒါပေမယ့် ကျွန်တော်တို့ suggest form ကနေ submission တစ်ခုနဲ့ဆိုရင် POST method နဲ့သတ်မှတ်ပေးရပါမယ်။ ကျွန်တော်တို့ရဲ့ request တွေကို PHP ရဲ့ နောက်ထပ် special variable တစ်ခုဖြစ်တဲ့ $_SERVER နဲ့ check လုပ်ရပါမယ်။ သူကလည်း $_POST နဲ့ $_GET variables တွေလိုပါပဲ။ $_SERVER  ဟာ သူ့ထဲမှာ multiple elements တွေပါတဲ့ array တစ်ခုဖြစ်ပါတယ်။ ကျွန်တော်တို့ check လုပ်ချင်တဲ့ element ကို REQUEST_METHOD လို့ခေါ်ပါတယ်။ ကျွန်တော်တို့ စစ်လိုက်တဲ့ REQUEST_METHOD ဟာ POST နဲ့မဟုတ်ဘူးဆိုရင် ကျွန်တော်တို့အရင် ပြထားတဲ့ suggest form ကို display လုပ်သွားမှာဖြစ်ပြီး POST ဟုတ်တယ်ဆိုရင် submitted form ကနေ information အားလုံးကို read လုပ်သွားမှာဖြစ်ပါတယ်။ </p>
    <p>Example of suggest.php File:</p>
    <pre>
        <code class="html hljs xml">
			&lt;?php

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			    $name = $_POST["name"];
			    $email = $_POST["email"];
			    $details = $_POST["details"];
			
			    echo "&lt;pre&gt;";
			    $email_body = "";
			    $email_body .= "Name" . $name . "\n";
			    $email_body .= "Email " . $email . "\n";
			    $email_body .= "Details " . $details . "\n";
			    echo $email_body;
			    echo "&lt;/pre&gt;";
			
			    //To Do: Send Email
			    header("location:suggest.php?status=thanks");
			}

			$pageTitle = "Suggest a Media Item";
			$section = "suggest";

			include('Includes/header.php');

			 ?&gt;

			&lt;div class="section page"&gt;
			    &lt;div class="wrapper"&gt;
			        &lt;h1&gt;Suggest a Media Item&lt;/h1&gt;
			        &lt;?php if (isset($_GET["status"]) && $_GET["status"] == "thanks") {
			            echo "&lt;p&gt;Thanks for the email! I&rsquo;ll check out your suggestion shortly!&lt;/p&gt;";
			        } else { ?&gt;
			        &lt;p&gt;If you think there is something I&rsquo;m missing, let me know! Complete the form to send me an email.&lt;/p&gt;
			        &lt;form method="post" action="suggest.php"&gt;
			            &lt;table&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="name"&gt;Name&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="name" name="name" placeholder="Enter a name..."&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="email"&gt;Email&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="email" name="email" placeholder="Enter an email..."&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="name"&gt;Suggest Item Details&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;textarea name="details" id="details" cols="30" rows="5" placeholder="Enter a suggestion..."&gt;&lt;/textarea&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			            &lt;/table&gt;
			            &lt;input type="submit" value="Send" /&gt;
			        &lt;/form&gt;
			        &lt;?php } ?&gt;
			    &lt;/div&gt;
			&lt;/div&gt;
					
			&lt;?php include('Includes/footer.php'); ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Validating Form Data</h2>
    <p>ကျွန်တော်တို့ဟာ visitor က suggest form ကို fill လုပ်ပြီး email တစ်ခုအနေနဲ့ send လုပ်လိုက်တယ်ဆိုတဲ့ code ကိုထည့်ဖို့လိုပါသေးတယ်။ ကျွန်တော်တို့ ပထမဆုံးအနေနဲ့ form ထဲက values တွေကို validate လုပ်ဖို့လိုပါလိမ့်မယ်။ ပြီးတော့ ကျွန်တော်တို့က sending လုပ်လိုက်တဲ့ data တွေကို handle လုပ်ဖို့ third party library တစ်ခုကို သုံးပါမယ်။ မှတ်ထားရမှာက suggest.php ဟာ suggest form process ရဲ့ steps သုံးခုကို handle လုပ်ပါတယ်။ အဲ့ဒီ step သုံးခုကတော့ displaying form, handling submission နဲ့ displaying thank you message တို့ဖြစ်ပါတယ်။ ဒါကို ကျွန်တော်တို့က user ဟာ form ထဲက values တွေကို မဖြည့်ဘဲ blank အနေနဲ့ထားပြီး form ကို submit လုပ်လိုက်ရင် error message ပြပေးမှာပါ။ အဲ့ဒီလို လုပ်ဖို့အတွက် if နဲ့ $name == "" အနေနဲ့စစ်ပါမယ်။ ဒါဟာ ကျွန်တော်တို့ input field ထဲက blank ကိုစစ်တာပါ။ တစ်ကယ်လို့ user က space or tab တို့နှိပ်မယ်ဆိုရင် အဲ့ဒါကိုစစ်ဖို့အတွက် trim function ကိုသုံးပါမယ်။ PHP မှာ trim function သုံးခုရှိပါမယ်။ ltrim (left trim) ၊ rtrim (right trim) နဲ့ trim (both right and left) တို့ဖြစ်ပါတယ်။ ကျွန်တော်တို့ရဲ့ array category function အတွက်ဆိုရင် ltrim function ကိုအသုံးပြုပါတယ်။ ကျွန်တော်တို့ ဖျက်ချင်တဲ့ string ကို သတ်မှတ်ပေးလို့ရပါတယ်။ Default အနေနဲ့ white space တွေကို ဖျက်မယ့်အစား အဲ့ဒီ trim function သုံးခုဟာ piece of text ရဲ့ beginning နဲ့ end က white space တွေကို ဖျက်ပေးပါတယ်။ White spaces တွေကတော့ spaces, tabs နဲ့ hard returns တွေဖြစ်ကြပါတယ်။ သူတို့ဟာ ကျွန်တော်တို့ words တွေကြားက space တွေကို leave လုပ်လိုက်ပါတယ်။ ဒါကိုရေးမယ်ဆိုရင်တော့ ကျွန်တော်တို့ trim လုပ်ချင်တဲ့ variable ရဲ့ရှေ့မှာ trim ဆိုတဲ့ keyword ကိုထည့်ပေးရမှာဖြစ်ပါတယ်။ ဒါဆိုရင်တော့ ကျွန်တော်တို့ form ကို ကွက်လပ်ထားခဲ့ပြီး submit လုပ်လိုက်တာနဲ့ error message တက်လာမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ code ရဲ့အပြင်ဘက်ကနေလာတဲ့ values တွေနဲ့ dealing ဖြစ်နေတဲ့ core principle နှစ်ခုရှိပါတယ်။ အဲ့ဒါကတော့ filter input နဲ့ escape output တို့ပဲဖြစ်ပါတယ်။ PHP မှာ အဲ့ဒီလို issues တွေကို address လုပ်ဖို့ကူညီပေးတဲ့ built-in function တစ်ခုရှိပါတယ်။ ကျွန်တော်တို့ရဲ့ _POST array ကနေ form fields တွေကို တိုက်ရိုက် accept လုပ်မယ့်အစား filter_input လို့ခေါ်တဲ့ function တစ်ခုကိုသုံးနိုင်ပါတယ်။ သူဟာ ကျွန်တော်တို့ variable ထဲကို apply လုပ်မယ့် input တွေကို filter လုပ်ပေးပါတယ်။ သူ့ကို ရေးမယ်ဆိုရင်တော့ အစောက trim function ထဲမှာရေးရမှာဖြစ်ပြီး သူ့မှာ argument နှစ်ခုရှိပါတယ်။ ပထမတစ်ခုက input ရဲ့ type ဖြစ်ပြီး ဒုတိယ argument ကတော့ variable ရဲ့ name ဖြစ်ပါတယ်။ တတိယ argument ကတော့ ကျွန်တော်တို့ရဲ့ filter ပဲဖြစ်ပါတယ်။ ဒါဆိုရင်တော့ ကျွန်တော်တို့ကြုံတတ်တဲ့ harmful attack တွေကို address လုပ်လိုက်ပါပြီ။ </p>
    <p>Example of suggest.php File:</p>
    <pre>
        <code class="html hljs xml">
			&lt;?php

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			    $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
			    $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
			    $details = trim(filter_input(INPUT_POST, "details", FILTER_SANITIZE_SPECIAL_CHARS));
			
			    if ($name == "" || $email == "" || $details == "") {
			        echo "Please fill in the required fields: Name, Email and Details";
			        exit;
			    }
			
			    if ($_POST["address"] != "") {
			        echo "Bad form input";
			        exit;
			    }
			
			    echo "&lt;pre&gt;";
			    $email_body = "";
			    $email_body .= "Name" . $name . "\n";
			    $email_body .= "Email " . $email . "\n";
			    $email_body .= "Details " . $details . "\n";
			    echo $email_body;
			    echo "&lt;/pre&gt;";
			
			    //To Do: Send Email
			    header("location:suggest.php?status=thanks");
			}

			$pageTitle = "Suggest a Media Item";
			$section = "suggest";

			include('Includes/header.php');

			 ?&gt;

			&lt;div class="section page"&gt;
			    &lt;div class="wrapper"&gt;
			        &lt;h1&gt;Suggest a Media Item&lt;/h1&gt;
			        &lt;?php if (isset($_GET["status"]) && $_GET["status"] == "thanks") {
			            echo "&lt;p&gt;Thanks for the email! I&rsquo;ll check out your suggestion shortly!&lt;/p&gt;";
			        } else { ?&gt;
			        &lt;p&gt;If you think there is something I&rsquo;m missing, let me know! Complete the form to send me an email.&lt;/p&gt;
			        &lt;form method="post" action="suggest.php"&gt;
			            &lt;table&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="name"&gt;Name&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="name" name="name" placeholder="Enter a name..."&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="email"&gt;Email&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="email" name="email" placeholder="Enter an email..."&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="name"&gt;Suggest Item Details&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;textarea name="details" id="details" cols="30" rows="5" placeholder="Enter a suggestion..."&gt;&lt;/textarea&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr style="display: none"&gt;
			                    &lt;th&gt;&lt;label for="address"&gt;Email&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="address" name="address"&gt;
			                    &lt;p&gt;Please leave this field blank&lt;/p&gt;
			                    &lt;/td&gt;
			                &lt;/tr&gt;
			            &lt;/table&gt;
			            &lt;input type="submit" value="Send" /&gt;
			        &lt;/form&gt;
			        &lt;?php } ?&gt;
			    &lt;/div&gt;
			&lt;/div&gt;
					
			&lt;?php include('Includes/footer.php'); ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Using A Third-Party Library</h2>
    <p>ကျွန်တော့်အနေနဲ့ကတော့ email ကို send လုပ်ဖို့အတွက် third-party library တစ်ခုကိုသုံးဖို့ အကြံပေးချင်ပါတယ်။ Third party library တစ်ခုဆိုတာ အခြေခံအားဖြင့် အခြားလူတွေ maintain လုပ်လို့ရတဲ့ set of include files တွေပဲဖြစ်ပါတယ်။ သူတို့ဟာ ကျွန်တော်တို့ project ထဲမှာ include လုပ်နိုင်တဲ့နည်းလမ်းနဲ့ ရေးနိုင်ပြီး အဲ့ဒီနောက်မှာ သူတို့ရဲ့ variables တွေနဲ့ functions တွေကို reference လုပ်ပေးပါတယ်။ Sending email လုပ်ဖို့အတွက်ဆိုရင် library တစ်ခုဖြစ်တဲ့ PHPMailer ကိုသုံးဖို့အကြံပေးချင်ပါတယ်။ Github ထဲက <a href="https://github.com/PHPMailer/PHPMailer/blob/master/examples/simple_contact_form.phps" target="_blank"> use case </a> မှာလေ့လာနိုင်ပါတယ်။ ကျွန်တော်တို့အခုသိဖို့လိုတာကတော့ use statement ဟာ PHPMailer class ကို တိုက်ရိုက် access လုပ်ပေးတယ်ဆိုတာကိုပါ။ လိုအပ်တဲ့ command က include လုပ်တာနဲ့ဆင်တူပါတယ်။ ကျွန်တော်တို့မှာ အသုံးပြုနိုင်တဲ့ commands လေးခုရှိပါတယ်။ အဲ့ဒါတွေကတော့ include, include_once, require နဲ့ require_once တို့ဖြစ်ပါတယ်။ Include နဲ့ require တို့ရဲ့ ခြားနားချက်ကတော့ သူတို့ထဲကို error တစ်ခု encounter ဖြစ်တဲ့အချိန် ဘာဖြစ်သွားမလဲဆိုတာပါ။ ကျွန်တော်တို့အနေနဲ့ include command ကိုသုံးမယ်ဆိုရင် ၊ ပြီးတော့ file က does not exit ဖြစ်နေမယ်ဆိုရင် PHP ဟာ warning တစ်ခုပေးမှာဖြစ်ပါတယ်။ ဒါပေမယ့် ကျန်နေတဲ့ code ကိုတော့ execute လုပ်နေမှာဖြစ်ပါတယ်။ တခြားနည်းနဲ့ပြောရရင် ကျွန်တော်တို့ဟာ require ကိုသုံးမယ် ၊ ပြီးတော့ file ကလည်း doesn't exit ဆိုရင် PHP ဟာ error ဖြစ်သွားပြီး နောက်ထပ်ဘယ် code ကိုမှ execute လုပ်ပေးမှာ မဟုတ်တော့ပါဘူး။ သူတို့နှစ်ခုရဲ့ နောက်ထပ်ခြားနားချက်တစ်ခုကတော့ PHP ဟာ file ဘယ်လောက်များများကို include လုပ်မလဲဆိုတာကိုပါ။ ကျွန်တော်တို့အနေနဲ့ same file ကိုမှာ အကြိမ်အရေအတွက် များများနဲ့  include or require ကိုသုံးမယ်ဆိုရင် သူဟာ အဲ့ဒီ file ကို multiple times အဖြစ် load လုပ်ပေးမှာ မဟုတ်ပါဘူး။ ဒါဟာ ကျွန်တော်တို့ရဲ့ header နဲ့ footer files တွေကဲ့သို့သော HTML Snippets တွေအတွက် အလုပ်လုပ်မပေးတော့ပါဘူး။ ဒါပေမယ့် create new function  လိုမျိုး အခြား files တွေနဲ့ဆိုရင် error တက်မှာဖြစ်ပါတယ်။ PHPMailer file ကလည်း အဲ့ဒီလိုပါပဲ။ သူ့ကို တစ်ကြိမ်တည်းပဲ load လုပ်သင့်ပါတယ်။ require_once ကိုသုံးပြီးတော့ တစ်ကြိမ်ထက်ပိုပြီး load မဖြစ်အောင် ပြုလုပ်နိုင်ပါတယ်။ သူဟာ functions တွေကို redefine လုပ်တဲ့အခါ တက်လာတဲ့ errors တွေကို ဖြေရှင်းပေးပါတယ်။ ကျွန်တော်တို့ change ချင်တဲ့ variables တွေကိုလည်း reset လုပ်နိုင်ပါသေးတယ်။ </p>
    <p>Example of suggest.php File:</p>
    <pre>
        <code class="html hljs xml">
			&lt;?php

			//Import the PHPMailer class into the global namespace
			use PHPMailer\PHPMailer\PHPMailer;

			require 'vendor/phpmailer/src/PHPMailer.php';
			require 'vendor/phpmailer/src/Exception.php';

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
				$email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
				$details = trim(filter_input(INPUT_POST, "details", FILTER_SANITIZE_SPECIAL_CHARS));
			
				if ($name == "" || $email == "" || $details == "") {
					echo "Please fill in the required fields: Name, Email and Details";
					exit;
				}
			
				if ($_POST["address"] != "") {
					echo "Bad form input";
					exit;
				}
			
				echo "&lt;pre&gt;";
				$email_body = "";
				$email_body .= "Name" . $name . "\n";
				$email_body .= "Email " . $email . "\n";
				$email_body .= "Details " . $details . "\n";
				echo $email_body;
				echo "&lt;/pre&gt;";
			
				//To Do: Send Email
				header("location:suggest.php?status=thanks");
			}

			$pageTitle = "Suggest a Media Item";
			$section = "suggest";

			include('Includes/header.php');

			 ?&gt;

			&lt;div class="section page"&gt;
				&lt;div class="wrapper"&gt;
					&lt;h1&gt;Suggest a Media Item&lt;/h1&gt;
					&lt;?php if (isset($_GET["status"]) && $_GET["status"] == "thanks") {
						echo "&lt;p&gt;Thanks for the email! I&rsquo;ll check out your suggestion shortly!&lt;/p&gt;";
					} else { ?&gt;
					&lt;p&gt;If you think there is something I&rsquo;m missing, let me know! Complete the form to send me an email.&lt;/p&gt;
					&lt;form method="post" action="suggest.php"&gt;
						&lt;table&gt;
							&lt;tr&gt;
								&lt;th&gt;&lt;label for="name"&gt;Name&lt;/label&gt;&lt;/th&gt;
								&lt;td&gt;&lt;input type="text" id="name" name="name" placeholder="Enter a name..."&gt;&lt;/td&gt;
							&lt;/tr&gt;
							&lt;tr&gt;
								&lt;th&gt;&lt;label for="email"&gt;Email&lt;/label&gt;&lt;/th&gt;
								&lt;td&gt;&lt;input type="text" id="email" name="email" placeholder="Enter an email..."&gt;&lt;/td&gt;
							&lt;/tr&gt;
							&lt;tr&gt;
								&lt;th&gt;&lt;label for="name"&gt;Suggest Item Details&lt;/label&gt;&lt;/th&gt;
								&lt;td&gt;&lt;textarea name="details" id="details" cols="30" rows="5" placeholder="Enter a suggestion..."&gt;&lt;/textarea&gt;&lt;/td&gt;
							&lt;/tr&gt;
							&lt;tr style="display: none"&gt;
								&lt;th&gt;&lt;label for="address"&gt;Email&lt;/label&gt;&lt;/th&gt;
								&lt;td&gt;&lt;input type="text" id="address" name="address"&gt;
								&lt;p&gt;Please leave this field blank&lt;/p&gt;
								&lt;/td&gt;
							&lt;/tr&gt;
						&lt;/table&gt;
						&lt;input type="submit" value="Send" /&gt;
					&lt;/form&gt;
					&lt;?php } ?&gt;
				&lt;/div&gt;
			&lt;/div&gt;
					
			&lt;?php include('Includes/footer.php'); ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Using Object and Validating Email</h2>
    <p>ကျွန်တော်တို့အနေနဲ့ object-oriented programming အကြောင်းကို လေ့လာခဲ့ပြီးပါပြီ။ အခုကျွန်တော်တို့က object တစ်ခုကို ဘယ်လိုအသုံးပြုရမလဲဆိုတာကို အသေးစိတ်ပြောပြသွားမှာဖြစ်ပါတယ်။ ဘာလို့လဲဆိုရင် အပေါ်ကသင်ခန်းစာမှာ လေ့လာခဲ့တဲ့ PHPMailer ဟာ objects တွေကို အသုံးပြုထားလို့ပဲဖြစ်ပါတယ်။ Object တစ်ခုဆိုတာ variable ရဲ့ robust type တစ်ခုပဲဖြစ်ပါတယ်။ သူဟာ အခြေခံသဘောတရားအရ variables တွေနဲ့ functions တွေအားလုံးကို အတူတကွ wrap up လုပ်ထားတဲ့ collection တစ်ခုပဲဖြစ်ပါတယ်။ Variables တွေဟာ object နဲ့ပတ်သတ်လို့ storing information တွေအတွက်ဖြစ်ပြီး ၊ functions တွေဟာ actions တွေကို ဆောင်ရွက်ပေးဖို့ပဲဖြစ်ပါတယ်။ ဥပမာ စက်ဘီးတစ်ခုအနေနဲ့ စဉ်းစားမယ်ဆိုရင် bicycle တစ်ခုဟာ object တစ်ခုဖြစ်မယ်ဆိုရင် သူ့မှာ frame color, number of gears နဲ့ current speed တွေရှိရပါမယ်။ Object တစ်ခုရဲ့ context ထဲမှာတော့ အဲ့ဒီ variables တွေကို properties လို့ခေါ်ပါတယ်။ သူ့မှာ brake, change_speeds နဲ့ change_gears လိုမျိုး functions အချို့ရှိပါမယ်။ Object တစ်ခုရဲ့ context ထဲမှာတော့ အဲ့ဒီ functions တွေကို methods လို့ခေါ်ပါတယ်။ Variables တွေနဲ့ functions တွေလိုပဲ ကျွန်တော်တို့အနေနဲ့ objects တွေကို ကိုယ်ပိုင်ကိုယ့်နည်းကိုယ့်ဟန်နဲ့ create လုပ်လို့ရတယ်ဆိုပေမယ့် ဒါဟာ နည်းနည်းတော့ ရှုပ်ထွေးပါတယ်။ အခုလောလာဆယ်ကျွန်တော်တို့သိထားဖို့ကတော့ object တစ်ခုကို ဘယ်လိုသုံးမလဲဆိုတာပါ။ ကျွန်တော်တို့အနေရဲ့ code ထဲကို PHPMailer library ထည့်မယ်ဆိုရင် new PHPMailer object တစ်ခု create လုပ်ဖို့ access လုပ်ဖို့လိုပါမယ်။ ပြီးတော့ သူ့ရဲ့ properties တွေနဲ့ methods တွေကို reference လုပ်ပေးရပါမယ်။ PHPMailer object မှာ validateAddress ဆိုတဲ့ method တစ်ခုရှိပါတယ်။ သူဟာ email validation လုပ်တဲ့အခါ သုံးဖို့ပဲဖြစ်ပါတယ်။ Special methods တွေဖြစ်တဲ့ static methods တွေဟာ ကျွန်တော်တို့ကို object တစ်ခု create လုပ်ဖို့မလိုပဲ method ကိုအသုံးပြုဖို့ ခွင့်ပြုပေးပါတယ်။ Methods နဲ့ properties အများစုမှာဆိုရင် object ကို create လုပ်ပြီးမှသာလျှင် ခေါ်တာဖြစ်ပါတယ်။ Single arrow ( -> )ဟာ objects တွေနဲ့ သူတို့ရဲ့ properties နဲ့ methods တွေနဲ့ ဆက်စပ်နေပါတယ်။ Method ဟာ function တစ်ခုနဲ့တူပါတယ်။ Single arrow ရဲ့နောက်မှာ method name သူ့နောက်မှာ parenthesis လိုက်ပြီး သတ်မှတ်နိုင်ပါတယ်။ Eg. $mail -> isSMTP(); ။ Parenthesis ထဲမှာတော့ လိုအပ်တဲ့ ဘယ် arguments တွေကိုမဆို pass လုပ်နိုင်ပါတယ်။ Functions တွေလိုမျိုးပဲ method ဟာလည်း return value တစ်ခုပေးနိုင်ပါတယ်။ </p>
    <p>Example of suggest.php File:</p>
    <pre>
        <code class="html hljs xml">
			&lt;?php

			//Import the PHPMailer class into the global namespace
			use PHPMailer\PHPMailer\PHPMailer;

			require 'vendor/phpmailer/src/PHPMailer.php';
			require 'vendor/phpmailer/src/Exception.php';

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			    $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
			    $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
			    $details = trim(filter_input(INPUT_POST, "details", FILTER_SANITIZE_SPECIAL_CHARS));
			
			    if ($name == "" || $email == "" || $details == "") {
			        echo "Please fill in the required fields: Name, Email and Details";
			        exit;
			    }
			
			    if ($_POST["address"] != "") {
			        echo "Bad form input";
			        exit;
			    }
			
			    //Checking Valid or Invalid email address with PHPMailer
			    if (!PHPMailer::validateAddress($email)) {
			        echo "Invalid Email Address!";
			        exit;
			    }
			
			    echo "&lt;pre&gt;";
			    $email_body = "";
			    $email_body .= "Name" . $name . "\n";
			    $email_body .= "Email " . $email . "\n";
			    $email_body .= "Details " . $details . "\n";
			    echo $email_body;
			    echo "&lt;/pre&gt;";
			
			    //To Do: Send Email
			    header("location:suggest.php?status=thanks");
			}

			$pageTitle = "Suggest a Media Item";
			$section = "suggest";

			include('Includes/header.php');

			 ?&gt;

			&lt;div class="section page"&gt;
			    &lt;div class="wrapper"&gt;
			        &lt;h1&gt;Suggest a Media Item&lt;/h1&gt;
			        &lt;?php if (isset($_GET["status"]) && $_GET["status"] == "thanks") {
			            echo "&lt;p&gt;Thanks for the email! I&rsquo;ll check out your suggestion shortly!&lt;/p&gt;";
			        } else { ?&gt;
			        &lt;p&gt;If you think there is something I&rsquo;m missing, let me know! Complete the form to send me an email.&lt;/p&gt;
			        &lt;form method="post" action="suggest.php"&gt;
			            &lt;table&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="name"&gt;Name&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="name" name="name" placeholder="Enter a name..."&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="email"&gt;Email&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="email" name="email" placeholder="Enter an email..."&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="name"&gt;Suggest Item Details&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;textarea name="details" id="details" cols="30" rows="5" placeholder="Enter a suggestion..."&gt;&lt;/textarea&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr style="display: none"&gt;
			                    &lt;th&gt;&lt;label for="address"&gt;Email&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="address" name="address"&gt;
			                    &lt;p&gt;Please leave this field blank&lt;/p&gt;
			                    &lt;/td&gt;
			                &lt;/tr&gt;
			            &lt;/table&gt;
			            &lt;input type="submit" value="Send" /&gt;
			        &lt;/form&gt;
			        &lt;?php } ?&gt;
			    &lt;/div&gt;
			&lt;/div&gt;
					
			&lt;?php include('Includes/footer.php'); ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Utilizing Object Properties and Methods</h2>
    <p>အခုကျွန်တော်တို့မှာ third party library နဲ့ PHPMailer object တို့ရှိနေပါပြီ။ Email ကို send လုပ်ဖို့လည်း ready ဖြစ်နေပါပြီ။ ကျွန်တော်တို့က form submission ရှိတဲ့အချိန်မှာ suggest.php file က POST array က variables အားလုံးကို receive လုပ်ပြီးတော့ data ကို validate ဖြစ်လားစစ်ပေးပါတယ်။ အဲ့ဒီနောက် Email ကို send လုပ်ဖို့အတွက် PHPMailer object တစ်ခုကို suggest.php ထဲမှာ create လုပ်ပါမယ်။ အဲ့ဒီလိုလုပ်ပြီးရင် form ကို submit ပြန်လုပ်တဲ့အခါ ကျွန်တော်တို့က Thank you message ကိုပြပေးမှာဖြစ်ပါတယ်။ ဒါဟာ အဲ့ဒီလို thank you message မပြပဲ email တစ်ခုရှိနေပြီလို့ ပြောပြသင့်ပါတယ်။ ဒါပေမယ့် workspaces တွေဟာ local mail server မရှိတဲ့အတွက် အမှန်တကယ် email ကို send out လုပ်လို့မရပါဘူး။ ကျွန်တော်တို့ရေးလိုက်တဲ့ code ဟာ local mail server ကို set up မလုပ်ဘဲ local development server မှာ အလုပ်လုပ်မှာမဟုတ်ပါဘူး။ ကျွန်တော်တို့ရဲ့ production server ပေါ်မှာ အလုပ်လုပ်ဖို့ chance တော့ရှိပါတယ်။ ဒါဟာ အလုပ်လုပ်သွားတယ်ဆိုရင်တောင် best idea တော့မဟုတ်ပါဘူး။ Email providers တွေက spam ဖြစ်လွယ်ပြီးတော့ serrver ကလည်း တစ်ကယ်လို့ server ပေါ်က ကျွန်တော်တို့ site က compromised (လျှော့) လုပ်လိုက်မယ်ဆိုရင် spam server တစ်ခုအဖြစ် နှေးသွားစေမှာဖြစ်ပါတယ်။ ဒါဟာ shared hosting accounts တွေပေါ်မှာ တစ်ကယ်ကို အသုံးဝင်ပါတယ်။ တစ်ကယ်လို့ကျွန်တော်တို့server က flag(နှေး) သွားမယ်ဆိုရင် form submission emails က blocked or ကျွန်တော်တို့ email inbox က skip ဖြစ်သွားပြီးတော့ spam folder ဖြစ်သွားမှာပါ။ Large part to spam တွေကြောင့် modern websites တွေဟာ email send လုပ်ဖို့အတွက် သီးခြား mail server ပေါ်မှာ rely လုပ်နေရပြီး SMTP ကိုဖြတ်ပြီး application ဆီကို မကြာခဏ connected လုပ်နေရပါတယ်။ ဒါဟာ တော်တော်လေးပြုလုပ်ရမယ်ဆိုပေမယ့် သီးခြား mail server ကိုသုံးခြင်းဟာ အမှန်ကန်ဆုံးဖြစ်ပါတယ်။ ဒါကြောင့် နောက်သင်ခန်းစာမှာ SMTP အကြောင်းကို လေ့လာသွားမှာဖြစ်ပါတယ်။ </p>
    <p>Example of suggest.php File:</p>
    <pre>
        <code class="html hljs xml">
			&lt;?php

			//Import the PHPMailer class into the global namespace
			use PHPMailer\PHPMailer\PHPMailer;

			require 'vendor/phpmailer/src/PHPMailer.php';
			require 'vendor/phpmailer/src/Exception.php';

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			    $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
			    $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
			    $details = trim(filter_input(INPUT_POST, "details", FILTER_SANITIZE_SPECIAL_CHARS));
			
			    if ($name == "" || $email == "" || $details == "") {
			        echo "Please fill in the required fields: Name, Email and Details";
			        exit;
			    }
			
			    if ($_POST["address"] != "") {
			        echo "Bad form input";
			        exit;
			    }
			
			    //Checking Valid or Invalid email address with PHPMailer
			    if (!PHPMailer::validateAddress($email)) {
			        echo "Invalid Email Address!";
			        exit;
			    }
			
			    $email_body = "";
			    $email_body .= "Name" . $name . "\n";
			    $email_body .= "Email " . $email . "\n";
			    $email_body .= "Details " . $details . "\n";
			
			    $mail = new PHPMailer;
			    //It's important not to use the submitter's address as the from address as it's forgery,
			    //which will cause your messages to fail SPF checks.
			    //Use an address in your own domain as the from address, put the submitter's address in a reply-to
			    $mail->setFrom('aungzinlatt007@gmail.com', $name);
			    $mail->addReplyTo($email, $name);
			    $mail->addAddress('aungzinlatt007@gmail.com', 'Aung Zin Latt');
			    $mail->Subject = 'Library Suggestion Form ' . $name;
			    $mail->Body = $email_body;
			    if (!$mail->send()) {
			        echo 'Mailer Error: ' . $mail->ErrorInfo;
			        exit;
			    }
			
			    header("location:suggest.php?status=thanks");
			}

			$pageTitle = "Suggest a Media Item";
			$section = "suggest";

			include('Includes/header.php');

			 ?&gt;

			&lt;div class="section page"&gt;
			    &lt;div class="wrapper"&gt;
			        &lt;h1&gt;Suggest a Media Item&lt;/h1&gt;
			        &lt;?php if (isset($_GET["status"]) && $_GET["status"] == "thanks") {
			            echo "&lt;p&gt;Thanks for the email! I&rsquo;ll check out your suggestion shortly!&lt;/p&gt;";
			        } else { ?&gt;
			        &lt;p&gt;If you think there is something I&rsquo;m missing, let me know! Complete the form to send me an email.&lt;/p&gt;
			        &lt;form method="post" action="suggest.php"&gt;
			            &lt;table&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="name"&gt;Name&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="name" name="name" placeholder="Enter a name..."&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="email"&gt;Email&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="email" name="email" placeholder="Enter an email..."&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="name"&gt;Suggest Item Details&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;textarea name="details" id="details" cols="30" rows="5" placeholder="Enter a suggestion..."&gt;&lt;/textarea&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr style="display: none"&gt;
			                    &lt;th&gt;&lt;label for="address"&gt;Email&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="address" name="address"&gt;
			                    &lt;p&gt;Please leave this field blank&lt;/p&gt;
			                    &lt;/td&gt;
			                &lt;/tr&gt;
			            &lt;/table&gt;
			            &lt;input type="submit" value="Send" /&gt;
			        &lt;/form&gt;
			        &lt;?php } ?&gt;
			    &lt;/div&gt;
			&lt;/div&gt;
					
			&lt;?php include('Includes/footer.php'); ?&gt;
        </code>
    </pre>
    <hr>


    <h2>SMTP with Google</h2>
    <p>ကျွန်တော်တို့ PHPMailer website ထဲက examples ထဲကိုသွားပြီး testing email sending အကြောင်းရေးထားတဲ့ note ကိုကြည့်ပါမယ်။ Hosting servers အများစုဟာ local mail server တစ်ခုကို provide လုပ်ပေးပါတယ်။ ဒါပေမယ့် တစ်ခါတစ်ရံ ကျွန်တော်တို့ရဲ့ personal development environment ကတော့ provide လုပ်မပေးပါဘူး။ Workspaces တွေဟာ development environment တစ်ခုဖြစ်ပြီး outgoing mail တွေအတွက် local mail server တစ်ခုကိုတော့ provide လုပ်ပေးပါတယ်။ အဲ့ဒါတွေအစား Simple Mail Transfer Protocol လို့ခေါ်တဲ့ SMTP ကို set up လုပ်ပါမယ်။ SMTP ဟာ applications တွေကနေ Google or Yahoo လိုမျိုး သီးသန့် email server တစ်ခုဆီကို connect လုပ်ပေးပါတယ်။ Email providers အများစုမှာ SMTP အတွက် special setup တွေလိုပါတယ်။ ဒါကြောင့် ကျွန်တော်တို့ရဲ့ တိကျတဲ့လိုအပ်ချက်တွေအတွက် email provider နဲ့ check လုပ်ဖို့လိုပါတယ်။ ကျွန်တော်က Google setup ကိုဘယ်လိုလုပ်ရမလဲဆိုတာ ပြောပြပေးသွားမှာပါ။ အဲ့ဒီပြောမယ့် steps တွေဟာ Gmail နဲ့ ဘယ် Google apps domain တွေမှာမဆို အလုပ်လုပ်ပါတယ်။ ပထမဆုံး ကျွန်တော်တို့ရဲ့ google account ထဲကိုဝင်ပြီး Sing-in & security ထဲကိုသွားမယ်။ အဲ့ဒီမှာကျွန်တော်တို့က two-factor authentication ကိုဖွင့်မထားဘူးဆိုရင် Apps with account access ထဲကိုသွားပြီး Allow less secure apps: ON ကိုဖွင့်ပေးရပါမယ်။ ကျွန်တော်တို့အနေနဲ့ two-factor authentication ကို set လုပ်သင့်ပါတယ်။ Signing in to Google ကိုသွားပြီး 2-step verification ကိုရွေးပြီး get started လုပ်လိုက်တဲ့အခါ password ကို verify လုပ်ရပါမယ်။ Two-step verification လုပ်ပြီးရင်တော့ Sign-in & security ကိုသွားနိုင်ပါပြီ။ ထို့နောက် ကျွန်တော်တို့ရဲ့ SMTP ကို setup လုပ်မှာပဲဖြစ်ပါတယ်။ အောက်က example ကိုကြည့်ရအောင်။ </p>
    <p>Example of suggest.php File:</p>
    <pre>
        <code class="html hljs xml">
			&lt;?php

			//Import the PHPMailer class into the global namespace
			use PHPMailer\PHPMailer\PHPMailer;
			use PHPMailer\PHPMailer\SMTP;

			require 'vendor/phpmailer/src/PHPMailer.php';
			require 'vendor/phpmailer/src/Exception.php';
			require 'vendor/phpmailer/src/SMTP.php';

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			    $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
			    $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
			    $details = trim(filter_input(INPUT_POST, "details", FILTER_SANITIZE_SPECIAL_CHARS));
			
			    if ($name == "" || $email == "" || $details == "") {
			        echo "Please fill in the required fields: Name, Email and Details";
			        exit;
			    }
			
			    if ($_POST["address"] != "") {
			        echo "Bad form input";
			        exit;
			    }
			
			    //Checking Valid or Invalid email address with PHPMailer
			    if (!PHPMailer::validateAddress($email)) {
			        echo "Invalid Email Address!";
			        exit;
			    }
			
			    $email_body = "";
			    $email_body .= "Name" . $name . "\n";
			    $email_body .= "Email " . $email . "\n";
			    $email_body .= "Details " . $details . "\n";
			
			    $mail = new PHPMailer;
			
			    //Tell PHPMailer to use SMTP
			    $mail->isSMTP();
			
			    //Enable SMTP debugging
			    // SMTP::DEBUG_OFF = off (for production use)
			    // SMTP::DEBUG_CLIENT = client messages
			    // SMTP::DEBUG_SERVER = client and server messages
			    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
			
			    //Set the hostname of the mail server
			    $mail->Host = 'smtp.gmail.com';
			    // use
			    // $mail->Host = gethostbyname('smtp.gmail.com');
			    // if your network does not support SMTP over IPv6
			
			    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
			    $mail->Port = 587;
			
			    //Set the encryption mechanism to use - STARTTLS or SMTPS
			    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
			
			    //Whether to use SMTP authentication
			    $mail->SMTPAuth = true;
			
			    //Username to use for SMTP authentication - use full email address for gmail
			    $mail->Username = 'aungzinlatt007@gmail.com';
			
			    //Password to use for SMTP authentication
			    $mail->Password = 'qavagulthlgvfauo';
			
			    //It's important not to use the submitter's address as the from address as it's forgery,
			    //which will cause your messages to fail SPF checks.
			    //Use an address in your own domain as the from address, put the submitter's address in a reply-to
			    $mail->setFrom('aungzinlatt007@gmail.com', $name);
			    $mail->addReplyTo($email, $name);
			    $mail->addAddress('aungzinlatt007@gmail.com', 'Aung Zin Latt');
			    $mail->Subject = 'Library Suggestion Form ' . $name;
			    $mail->Body = $email_body;
			    if (!$mail->send()) {
			        echo 'Mailer Error: ' . $mail->ErrorInfo;
			        exit;
			    }
			
			    header("location:suggest.php?status=thanks");
			}

			$pageTitle = "Suggest a Media Item";
			$section = "suggest";

			include('Includes/header.php');

			 ?&gt;

			&lt;div class="section page"&gt;
			    &lt;div class="wrapper"&gt;
			        &lt;h1&gt;Suggest a Media Item&lt;/h1&gt;
			        &lt;?php if (isset($_GET["status"]) && $_GET["status"] == "thanks") {
			            echo "&lt;p&gt;Thanks for the email! I&rsquo;ll check out your suggestion shortly!&lt;/p&gt;";
			        } else { ?&gt;
			        &lt;p&gt;If you think there is something I&rsquo;m missing, let me know! Complete the form to send me an email.&lt;/p&gt;
			        &lt;form method="post" action="suggest.php"&gt;
			            &lt;table&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="name"&gt;Name&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="name" name="name" placeholder="Enter a name..."&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="email"&gt;Email&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="email" name="email" placeholder="Enter an email..."&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="name"&gt;Suggest Item Details&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;textarea name="details" id="details" cols="30" rows="5" placeholder="Enter a suggestion..."&gt;&lt;/textarea&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr style="display: none"&gt;
			                    &lt;th&gt;&lt;label for="address"&gt;Email&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="address" name="address"&gt;
			                    &lt;p&gt;Please leave this field blank&lt;/p&gt;
			                    &lt;/td&gt;
			                &lt;/tr&gt;
			            &lt;/table&gt;
			            &lt;input type="submit" value="Send" /&gt;
			        &lt;/form&gt;
			        &lt;?php } ?&gt;
			    &lt;/div&gt;
			&lt;/div&gt;
					
			&lt;?php include('Includes/footer.php'); ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Requesting Specific Information</h2>
    <p>အခုသင်ခန်းစာမှာ specific information အတွက် user ကို ask လုပ်တဲ့ extra fields တွေကို create လုပ်မှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ informationတွေကိုရဖို့ spelling နဲ့ desire လုပ်ထားတဲ့ format နဲ့အတူ drop-downs တွေကို သုံးမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ရဲ့ suggest.php file ကိုသွားပြီး ရေးပါမယ်။ ပထမဆုံး ကျွန်တော်တို့သိရမှာကတော့ ဘယ် category က item fall ဖြစ်နေလဲဆိုတာပါ။ Books လား ၊ Movies လား ၊ Music လားပေါ့။ ကျွန်တော်တို့ Email <tr> row ရဲ့ အောက်မှာ select tag နဲ့ရေးပြီး ပထမဆုံး value က empty value ဖြစ်ရပါမယ်။ ဒါပြီးရင်တော့ ကျွန်တော်တို့ရဲ့ format အတွက် drop-down တစ်ခုအောက်မှာ ထပ်ရေးပါမယ်။ အဲ့ဒီနေရာမှာ ဘယ် category ရဲ့ type ပေါ်မဆို item က fall ဖြစ်တာကို အခြေခံပြီး fomats တွေအမျိုးမျိုးရှိပါတယ်။ ဥပမာ Books တွေအတွက်ဆိုရင် hard cover, paper back, audio or ebooks နဲ့ Movies တွေကလည်း DVD, Blu-Ray, streaming နဲ့ VHS တို့ဖြစ်နိုင်ပါတယ်။ အခု ကျွန်တော်တို့မေးစရာရှိလာတာကတော့ အဲ့ဒီ formats အမျိုးမျိုးကို ဘယ်လို group လုပ်မလဲပေါ့။ Group လုပ်ဖို့အတွက် နည်းလမ်းနှစ်ခုရှိပါတယ်။ ပထမတစ်ခုက category ပေါ်ကိုအခြေခံပြီး Format dropdown ကို change လုပ်ရမှာဖြစ်ပြီး ဒုတိယတစ်နည်းကတော့ options group ကိုသုံးပြီး options တွေကို group လုပ်ရမှာဖြစ်ပါတယ်။ အဲ့ဒီမှာ ပထမတစ်နည်းကတော့ ပိုပြီးအသုံးများပါတယ်။ သူ့ကိုသုံးဖို့အတွက်ဆိုရင်တော့ JavaScript အနည်းငယ်လိုပါလိမ့်မယ်။ ကျွန်တော်တို့ အခု project မှာတော့ ဒုတိယနည်းလမ်းကို အသုံးပြုသွားမှာဖြစ်ပါတယ်။ </p>
    <p>Example of suggest.php File:</p>
    <pre>
        <code class="html hljs xml">
			&lt;?php

			//Import the PHPMailer class into the global namespace
			use PHPMailer\PHPMailer\PHPMailer;
			use PHPMailer\PHPMailer\SMTP;

			require 'vendor/phpmailer/src/PHPMailer.php';
			require 'vendor/phpmailer/src/Exception.php';
			require 'vendor/phpmailer/src/SMTP.php';

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			    $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
			    $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
			    $details = trim(filter_input(INPUT_POST, "details", FILTER_SANITIZE_SPECIAL_CHARS));
			
			    if ($name == "" || $email == "" || $details == "") {
			        echo "Please fill in the required fields: Name, Email and Details";
			        exit;
			    }
			
			    if ($_POST["address"] != "") {
			        echo "Bad form input";
			        exit;
			    }
			
			    //Checking Valid or Invalid email address with PHPMailer
			    if (!PHPMailer::validateAddress($email)) {
			        echo "Invalid Email Address!";
			        exit;
			    }
			
			    $email_body = "";
			    $email_body .= "Name" . $name . "\n";
			    $email_body .= "Email " . $email . "\n";
			    $email_body .= "Details " . $details . "\n";
			
			    $mail = new PHPMailer;
			
			    //Tell PHPMailer to use SMTP
			    $mail->isSMTP();
			
			    //Enable SMTP debugging
			    // SMTP::DEBUG_OFF = off (for production use)
			    // SMTP::DEBUG_CLIENT = client messages
			    // SMTP::DEBUG_SERVER = client and server messages
			    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
			
			    //Set the hostname of the mail server
			    $mail->Host = 'smtp.gmail.com';
			    // use
			    // $mail->Host = gethostbyname('smtp.gmail.com');
			    // if your network does not support SMTP over IPv6
			
			    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
			    $mail->Port = 587;
			
			    //Set the encryption mechanism to use - STARTTLS or SMTPS
			    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
			
			    //Whether to use SMTP authentication
			    $mail->SMTPAuth = true;
			
			    //Username to use for SMTP authentication - use full email address for gmail
			    $mail->Username = 'aungzinlatt007@gmail.com';
			
			    //Password to use for SMTP authentication
			    $mail->Password = 'qavagulthlgvfauo';
			
			    //It's important not to use the submitter's address as the from address as it's forgery,
			    //which will cause your messages to fail SPF checks.
			    //Use an address in your own domain as the from address, put the submitter's address in a reply-to
			    $mail->setFrom('aungzinlatt007@gmail.com', $name);
			    $mail->addReplyTo($email, $name);
			    $mail->addAddress('aungzinlatt007@gmail.com', 'Aung Zin Latt');
			    $mail->Subject = 'Library Suggestion Form ' . $name;
			    $mail->Body = $email_body;
			    if (!$mail->send()) {
			        echo 'Mailer Error: ' . $mail->ErrorInfo;
			        exit;
			    }

			    header("location:suggest.php?status=thanks");
			}

			$pageTitle = "Suggest a Media Item";
			$section = "suggest";

			include('Includes/header.php');

			 ?&gt;

			&lt;div class="section page"&gt;
			    &lt;div class="wrapper"&gt;
			        &lt;h1&gt;Suggest a Media Item&lt;/h1&gt;
			        &lt;?php if (isset($_GET["status"]) && $_GET["status"] == "thanks") {
			            echo "&lt;p&gt;Thanks for the email! I&rsquo;ll check out your suggestion shortly!&lt;/p&gt;";
			        } else { ?&gt;
			        &lt;p&gt;If you think there is something I&rsquo;m missing, let me know! Complete the form to send me an email.&lt;/p&gt;
			        &lt;form method="post" action="suggest.php"&gt;
			            &lt;table&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="name"&gt;Name&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="name" name="name" placeholder="Enter a name..."&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="email"&gt;Email&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="email" name="email" placeholder="Enter an email..."&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="category"&gt;Category&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;
			                        &lt;select name="category" id="category"&gt;
			                            &lt;option value=""&gt;Select One&lt;/option&gt;
			                            &lt;option value="books"&gt;Books&lt;/option&gt;
			                            &lt;option value="movies"&gt;Movies&lt;/option&gt;
			                            &lt;option value="music"&gt;Music&lt;/option&gt;
			                        &lt;/select&gt;
			                    &lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="title"&gt;Title&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="title" id="title" name="title"&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="format"&gt;Format&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;
			                        &lt;select name="format" id="format"&gt;
			                            &lt;option value=""&gt;Select One&lt;/option&gt;
			                            &lt;option value=""&gt;Books&lt;/option&gt;
			                            &lt;option value=""&gt;Movies&lt;/option&gt;
			                            &lt;option value=""&gt;Music&lt;/option&gt;
			                        &lt;/select&gt;
			                    &lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="name"&gt;Suggest Item Details&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;textarea name="details" id="details" cols="30" rows="5" placeholder="Enter a suggestion..."&gt;&lt;/textarea&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr style="display: none"&gt;
			                    &lt;th&gt;&lt;label for="address"&gt;Email&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="address" name="address"&gt;
			                    &lt;p&gt;Please leave this field blank&lt;/p&gt;
			                    &lt;/td&gt;
			                &lt;/tr&gt;
			            &lt;/table&gt;
			            &lt;input type="submit" value="Send" /&gt;
			        &lt;/form&gt;
			        &lt;?php } ?&gt;
			    &lt;/div&gt;
			&lt;/div&gt;

			&lt;?php include('Includes/footer.php'); ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Grouping Options for More Detail</h2>
    <p>ကျွန်တော်တို့ရဲ့ options တွေထဲက ပထမတစ်ခုကိုကျော်ပြီး ဒုတိယတစ်ခုကို optgroup အဖြစ် change လုပ်မှာဖြစ်ပါတယ်။ အခုကျွန်တော်တို့က အဲ့ဒီ groups တွေထဲမှာ သက်ဆိုင်တဲ့ option tags တွေထပ်ထည့်မှာဖြစ်ပါတယ်။ နောက်ပြီး ကျွန်တော်တို့ array ထဲမှာ အဲ့ဒီ format values တွေကို ဘယ်လို store လုပ်ထားလဲဆိုတာ match လုပ်မှာဖြစ်ပါတယ်။ အဲ့ဒီလိုပဲ Movies နဲ့ Music ကိုလည်း optgroup နဲ့မှာ option tags တွေနဲ့ ရေးပါမယ်။ နောက်တစ်ခုကျွန်တော်တို့လိုတာကတော့ genre ပဲဖြစ်ပါတယ်။ သူ့ကိုလည်း အပေါ်ကလို အတူတူလုပ်လိုက်ပါမယ်။ နောက်ဆုံးတစ်ခုကတော့ categories အားလုံးကို across လုပ်မယ့် year ပဲဖြစ်ပါတယ်။ Year အတွက်ကတော့ text box ကိုပဲသုံးပါမယ်။ ဒါဆိုရင်တော့ ကျွန်တော်တို့ category ရဲ့ specific information တွေစုံသွားပြီဖြစ်ပါတယ်။ ကျွန်တော်တို့အပေါ်မှာ ပြောပြခဲ့သလိုပဲ JavaScript ကိုသုံးပြီး selection တစ်ခုချင်းစီကို မူတည်ပြီး ကျွန်တော်တို့ form ကို change လုပ်လို့ရပါတယ်။ </p>
    <p>Example of suggest.php File:</p>
    <pre>
        <code class="html hljs xml">
			&lt;?php

			//Import the PHPMailer class into the global namespace
			use PHPMailer\PHPMailer\PHPMailer;
			use PHPMailer\PHPMailer\SMTP;

			require 'vendor/phpmailer/src/PHPMailer.php';
			require 'vendor/phpmailer/src/Exception.php';
			require 'vendor/phpmailer/src/SMTP.php';

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			    $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
			    $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
			    $details = trim(filter_input(INPUT_POST, "details", FILTER_SANITIZE_SPECIAL_CHARS));
			
			    if ($name == "" || $email == "" || $details == "") {
			        echo "Please fill in the required fields: Name, Email and Details";
			        exit;
			    }
			
			    if ($_POST["address"] != "") {
			        echo "Bad form input";
			        exit;
			    }
			
			    //Checking Valid or Invalid email address with PHPMailer
			    if (!PHPMailer::validateAddress($email)) {
			        echo "Invalid Email Address!";
			        exit;
			    }
			
			    $email_body = "";
			    $email_body .= "Name" . $name . "\n";
			    $email_body .= "Email " . $email . "\n";
			    $email_body .= "Details " . $details . "\n";
			
			    $mail = new PHPMailer;
			
			    //Tell PHPMailer to use SMTP
			    $mail->isSMTP();
			
			    //Enable SMTP debugging
			    // SMTP::DEBUG_OFF = off (for production use)
			    // SMTP::DEBUG_CLIENT = client messages
			    // SMTP::DEBUG_SERVER = client and server messages
			    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
			
			    //Set the hostname of the mail server
			    $mail->Host = 'smtp.gmail.com';
			    // use
			    // $mail->Host = gethostbyname('smtp.gmail.com');
			    // if your network does not support SMTP over IPv6
			
			    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
			    $mail->Port = 587;
			
			    //Set the encryption mechanism to use - STARTTLS or SMTPS
			    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
			
			    //Whether to use SMTP authentication
			    $mail->SMTPAuth = true;
			
			    //Username to use for SMTP authentication - use full email address for gmail
			    $mail->Username = 'aungzinlatt007@gmail.com';
			
			    //Password to use for SMTP authentication
			    $mail->Password = 'qavagulthlgvfauo';
			
			    //It's important not to use the submitter's address as the from address as it's forgery,
			    //which will cause your messages to fail SPF checks.
			    //Use an address in your own domain as the from address, put the submitter's address in a reply-to
			    $mail->setFrom('aungzinlatt007@gmail.com', $name);
			    $mail->addReplyTo($email, $name);
			    $mail->addAddress('aungzinlatt007@gmail.com', 'Aung Zin Latt');
			    $mail->Subject = 'Library Suggestion Form ' . $name;
			    $mail->Body = $email_body;
			    if (!$mail->send()) {
			        echo 'Mailer Error: ' . $mail->ErrorInfo;
			        exit;
			    }
			
			    header("location:suggest.php?status=thanks");
			}

			$pageTitle = "Suggest a Media Item";
			$section = "suggest";

			include('Includes/header.php');

			 ?&gt;

			&lt;div class="section page"&gt;
			    &lt;div class="wrapper"&gt;
			        &lt;h1&gt;Suggest a Media Item&lt;/h1&gt;
			        &lt;?php if (isset($_GET["status"]) && $_GET["status"] == "thanks") {
			            echo "&lt;p&gt;Thanks for the email! I&rsquo;ll check out your suggestion shortly!&lt;/p&gt;";
			        } else { ?&gt;
			        &lt;p&gt;If you think there is something I&rsquo;m missing, let me know! Complete the form to send me an email.&lt;/p&gt;
			        &lt;form method="post" action="suggest.php"&gt;
			            &lt;table&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="name"&gt;Name&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="name" name="name" placeholder="Enter a name..."&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="email"&gt;Email&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="email" name="email" placeholder="Enter an email..."&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="category"&gt;Category&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;
			                        &lt;select name="category" id="category"&gt;
			                            &lt;option value=""&gt;Select One&lt;/option&gt;
			                            &lt;option value="books"&gt;Books&lt;/option&gt;
			                            &lt;option value="movies"&gt;Movies&lt;/option&gt;
			                            &lt;option value="music"&gt;Music&lt;/option&gt;
			                        &lt;/select&gt;
			                    &lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="title"&gt;Title&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="title" id="title" name="title" placeholder="Enter a year..."&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="format"&gt;Format&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;
			                        &lt;select name="format" id="format"&gt;
			                            &lt;option value=""&gt;Select One&lt;/option&gt;
			                            &lt;optgroup label="Books"&gt;
			                                &lt;option value="Audio"&gt;Audio&lt;/option&gt;
			                                &lt;option value="Ebook"&gt;Ebook&lt;/option&gt;
			                                &lt;option value="Hardback"&gt;Hardback&lt;/option&gt;
			                                &lt;option value="Paperback"&gt;Paperback&lt;/option&gt;
			                            &lt;/optgroup&gt;
			                            &lt;optgroup label="Movies"&gt;
			            						&lt;option value="Blu-ray"&gt;Blu-ray&lt;/option&gt;
			            						&lt;option value="DVD"&gt;DVD&lt;/option&gt;
			            						&lt;option value="Streaming"&gt;Streaming&lt;/option&gt;
			            						&lt;option value="VHS"&gt;VHS&lt;/option&gt;
			            					&lt;/optgroup&gt;
			            					&lt;optgroup label="Music"&gt;
			            						&lt;option value="Cassette"&gt;Cassette&lt;/option&gt;
			            						&lt;option value="CD"&gt;CD&lt;/option&gt;
			            						&lt;option value="MP3"&gt;MP3&lt;/option&gt;
			            						&lt;option value="Vinyl"&gt;Vinyl&lt;/option&gt;
			            					&lt;/optgroup&gt;
			                        &lt;/select&gt;
			                    &lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="title"&gt;Title&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;
			                        &lt;select name="genre" id="genre"&gt;
			                            &lt;option value=""&gt;Select One&lt;/option&gt;
			                            &lt;optgroup label="Books"&gt;
			            					&lt;option value="Action"&gt;Action&lt;/option&gt;
			            					&lt;option value="Advanture"&gt;Advanture&lt;/option&gt;
			            					&lt;option value="Comedy"&gt;Comedy&lt;/option&gt;
			            					&lt;option value="Fantasy"&gt;Fantasy&lt;/option&gt;
			            					&lt;option value="Historical"&gt;Historical&lt;/option&gt;
			            					&lt;option value="Historical Fiction"&gt;Historical Fiction&lt;/option&gt;
			            					&lt;option value="Horror"&gt;Horror&lt;/option&gt;
			            					&lt;option value="Magical Realism"&gt;Magical Realism&lt;/option&gt;
			            					&lt;option value="Mystery"&gt;Mystery&lt;/option&gt;
			            					&lt;option value="Paranoid"&gt;Paranoid&lt;/option&gt;
			            					&lt;option value="Philosophical"&gt;Philosophical&lt;/option&gt;
			            					&lt;option value="Political"&gt;Political&lt;/option&gt;
			            					&lt;option value="Romance"&gt;Romance&lt;/option&gt;
			            					&lt;option value="Saga"&gt;Saga&lt;/option&gt;
			            					&lt;option value="Satire"&gt;Satire&lt;/option&gt;
			            					&lt;option value="Sci-Fi"&gt;Sci-Fi&lt;/option&gt;
			            					&lt;option value="Tech"&gt;Tech&lt;/option&gt;
			            					&lt;option value="Thriller"&gt;Thriller&lt;/option&gt;
			            					&lt;option value="Urban"&gt;Urban&lt;/option&gt;
			            				&lt;/optgroup&gt;
			            				&lt;optgroup label="Movies"&gt; 
			            					&lt;option value="Action"&gt;Action&lt;/option&gt;
			            					&lt;option value="Adventure"&gt;Adventure&lt;/option&gt;
			            					&lt;option value="Animation"&gt;Animation&lt;/option&gt;
			            					&lt;option value="Biography"&gt;Biography&lt;/option&gt;
			            					&lt;option value="Comedy"&gt;Comedy&lt;/option&gt;
			            					&lt;option value="Crime"&gt;Crime&lt;/option&gt;
			            					&lt;option value="Documentary"&gt;Documentary&lt;/option&gt;
			            					&lt;option value="Drama"&gt;Drama&lt;/option&gt;
			            					&lt;option value="Family"&gt;Family&lt;/option&gt;
			            					&lt;option value="Fantasy"&gt;Fantasy&lt;/option&gt;
			            					&lt;option value="Film-Noir"&gt;Film-Noir&lt;/option&gt;
			            					&lt;option value="History"&gt;History&lt;/option&gt;
			            					&lt;option value="Horror"&gt;Horror&lt;/option&gt;
			            					&lt;option value="Musical"&gt;Musical&lt;/option&gt;
			            					&lt;option value="Mystery"&gt;Mystery&lt;/option&gt;
			            					&lt;option value="Romance"&gt;Romance&lt;/option&gt;
			            					&lt;option value="Sci-Fi"&gt;Sci-Fi&lt;/option&gt;
			            					&lt;option value="Sport"&gt;Sport&lt;/option&gt;
			            					&lt;option value="Thriller"&gt;Thriller&lt;/option&gt;
			            					&lt;option value="War"&gt;War&lt;/option&gt;
			            					&lt;option value="Western"&gt;Western&lt;/option&gt;
			            				&lt;/optgroup&gt;
			            				&lt;optgroup label="Music"&gt;			
			            					&lt;option value="Blues"&gt;Blues&lt;/option&gt;
			            					&lt;option value="Classical"&gt;Classical&lt;/option&gt;
			            					&lt;option value="Country"&gt;Country&lt;/option&gt;
			            					&lt;option value="Dance"&gt;Dance&lt;/option&gt;
			            					&lt;option value="Easy Listening"&gt;Easy Listening&lt;/option&gt;
			            					&lt;option value="Electronic"&gt;Electronic&lt;/option&gt;
			            					&lt;option value="Folk"&gt;Folk&lt;/option&gt;
			            					&lt;option value="Hip Hop/Rap"&gt;Hip Hop/Rap&lt;/option&gt;
			            					&lt;option value="Inspirational/Gospel"&gt;Inspirational/Gospel&lt;/option&gt;
			            					&lt;option value="Jazz"&gt;Jazz&lt;/option&gt;
			            					&lt;option value="Latin"&gt;Latin&lt;/option&gt;
			            					&lt;option value="New Age"&gt;New Age&lt;/option&gt;
			            					&lt;option value="Opera"&gt;Opera&lt;/option&gt;
			            					&lt;option value="Pop"&gt;Pop&lt;/option&gt;
			            					&lt;option value="R&B/Soul"&gt;R&amp;B/Soul&lt;/option&gt;
			            					&lt;option value="Reggae"&gt;Reggae&lt;/option&gt;
			            					&lt;option value="Rock"&gt;Rock&lt;/option&gt;
			            				&lt;/optgroup&gt;
			                        &lt;/select&gt;
			                    &lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="year"&gt;Year&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="year" name="year" id="year" placeholder="Enter a year..."&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="name"&gt;Suggest Item Details&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;textarea name="details" id="details" cols="30" rows="5" placeholder="Enter a suggestion..."&gt;&lt;/textarea&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr style="display: none"&gt;
			                    &lt;th&gt;&lt;label for="address"&gt;Email&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="address" name="address"&gt;
			                    &lt;p&gt;Please leave this field blank&lt;/p&gt;
			                    &lt;/td&gt;
			                &lt;/tr&gt;
			            &lt;/table&gt;
			            &lt;input type="submit" value="Send" /&gt;
			        &lt;/form&gt;
			        &lt;?php } ?&gt;
			    &lt;/div&gt;
			&lt;/div&gt;
					
			&lt;?php include('Includes/footer.php'); ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Specifying Required Fields</h2>
    <p>အခုဆိုရင် ကျွန်တော်တို့မှာ လိုချင်တဲ့ information တွေအားလုံးကို collect လုပ်ထားတဲ့ form တစ်ခုရှိပါတယ်။ Form ကို process မလုပ်ခင် ဘယ် fields တွေကို လိုချင်တာလဲဆိုတာပေါ့။ ပြီးတော့ ဘယ် fields တွေက ကျွန်တော်တို့လိုချင်တဲ့ optional တွေလဲပေါ့။ ကျွန်တော်တို့မှာ Name, email, category, title, format, genre, year နဲ့ additional details တွေလိုမျိုး fields တွေပါဝင်ပါတယ်။ ပထမဆုံးအနေနဲ့ ကျွန်တော်တို့ဟာ ဒီ suggestion ကို ဘယ်သူပို့နေတာလဲဆိုတာ သိအောင်လုပ်ရပါမယ်။ ဒါကြောင့် ကျွန်တော်တို့က name နဲ့ email ကို required လုပ်ဖို့လိုပါတယ်။ နောက်ထပ် ကျွန်တော်တို့သိဖို့လိုတဲ့ main details နှစ်ခုကတော့ category နဲ့ title ပဲဖြစ်ပါတယ်။ ကျွန်တော်တို့ အဲ့ဒီ item က တစ်ကယ်မရှိဘူးဆိုရင်တောင် နောင်တစ်ချိန်မှာ purchase လုပ်ဖို့အတွက် suggest လုပ်ပေးချင်တာဖြစ်ပါတယ်။ ပြီးတော့ သူ့ကို ကျွန်တော်တို့ library ထဲကို add လုပ်မှာဖြစ်ပါတယ်။ အခု ကျွန်တော်တို့ site ရဲ့ users တွေကို သူတို့ form ဖြည့်ပြီး submit button ကိုနှိပ်တဲ့အခါ ဘယ် field က required ဖြစ်နေလဲဆိုတာ ဘယ်လိုသိနိုင်မလဲ။ ဒါကိုလုပ်ဆောင်ဖို့အတွက် နည်းလမ်းအမျိုးမျိုးရှိပါတယ်။ လိုအပ်မယ့်အရာကတော့ ကျွန်တော်တို့က users တွေကို form ကို process မလုပ်ခင် ဘယ် fields တွေ require ဖြစ်နေလဲဆိုတာကို signify လုပ်ပေးရပါမယ်။ ဒါကိုလုပ်ဖို့ဆိုရင်တော့ အရိုးရှင်းဆုံးနည်းဖြစ်တဲ့ element တစ်ခုချင်းစီတိုင်းကို required ကိုတဲ့ word လေးထည့်ပေးရမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ရဲ့ suggest.php ထဲကိုသွားပြီး label tag ထဲက Name ရဲ့နောက်မှာ (required) လို့ထည့်ပေးရမှာဖြစ်ပါတယ်။ ဒါဆိုရင်တော့ user က ဘယ် fields တွေထည့်ဖို့လိုနေလဲဆိုတာ သိသွားမှာပဲဖြစ်ပါတယ်။ နောက်တစ်ခုကတော့ ကျွန်တော်တို့ form ဟာ new fields အားလုံးကို processing လုပ်ဖို့နဲ့ required ဖြစ်မယ့် fields တွေကို require လုပ်ဖို့လိုပါတယ်။ အောက်က example ကို တစ်ချက်ကြည့်ရအောင်။ </p>
    <p>Example of suggest.php File:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php 

        //Import the PHPMailer class into the global namespace
        use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\SMTP;
                        
        require 'vendor/phpmailer/src/PHPMailer.php';
        require 'vendor/phpmailer/src/Exception.php';
        require 'vendor/phpmailer/src/SMTP.php';
                        
                        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        	$name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
        	$email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
        	$category = trim(filter_input(INPUT_POST, "category", FILTER_SANITIZE_STRING));
        	$title = trim(filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING));
        	$format = trim(filter_input(INPUT_POST, "format", FILTER_SANITIZE_STRING));
        	$genre = trim(filter_input(INPUT_POST, "genre", FILTER_SANITIZE_STRING));
        	$year = trim(filter_input(INPUT_POST, "year", FILTER_SANITIZE_NUMBER_INT));
        	$details = trim(filter_input(INPUT_POST, "details", FILTER_SANITIZE_SPECIAL_CHARS));
        
        	if($name == "" || $email == "" || $category == "" || $title == "") {
        		echo "Please fill in the required fields: Name, Email, Category and Title";
        		exit;
        	}
        
        	if($_POST["address"] != "") {
        		echo "Bad form input";
        		exit;
        	}
        
        	if (!PHPMailer::validateAddress($email)) {
        		echo "Invalid Email Address";
        		exit;
        	}
        
        	$email_body = "";
        	$email_body .= "Name: " . $name . "\n";
        	$email_body .= "Email: " . $email . "\n";
        	$email_body .= "\n\nSuggested Item\n\n";
        	$email_body .= "Category: " . $category . "\n";
        	$email_body .= "Title: " . $title . "\n";
        	$email_body .= "Format: " . $format . "\n";
        	$email_body .= "Genre: " . $genre . "\n";
        	$email_body .= "Year: " . $year . "\n";
        	$email_body .= "Details: " . $details . "\n";
        
        	$mail = new PHPMailer;
        	//Tell PHPMailer to use SMTP
        	$mail->isSMTP();
        
        	//Enable SMTP debugging
        	// SMTP::DEBUG_OFF = off (for production use)
        	// SMTP::DEBUG_CLIENT = client messages
        	// SMTP::DEBUG_SERVER = client and server 	messages
        	$mail->SMTPDebug = 2;
        
        	//Set the hostname of the mail server
        	$mail->Host = 'smtp.gmail.com';
        	// use
        	// $mail->Host = 	gethostbyname('smtp.gmail.com');
        	// if your network does not support SMTP over IPv6
        
        	//Set the SMTP port number - 587 for 	authenticated TLS, a.k.a. RFC4409 SMTP submission
        	$mail->Port = 587;
        
        	//Set the encryption mechanism to use - STARTTLS or SMTPS
        	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        
        	//Whether to use SMTP authentication
        	$mail->SMTPAuth = true;
        
        	//Username to use for SMTP authentication - use full email address for gmail
        	$mail->Username = 'aungzinlatt007@gmail.com';
        
        	//Password to use for SMTP authentication
        	$mail->Password = 'lchgbitkhtsgekkq';
            //It's important not to use the submitter's address as the from address as it's forgery,
            //which will cause your messages to fail SPF checks.
            //Use an address in your own domain as the from address, put the submitter's address in a reply-to
            $mail->setFrom('aungzinlatt007@gmail.com', $name);
            $mail->addReplyTo($email, $name);
            $mail->addAddress('aungzinlatt007@gmail.com', 'Alena Holligan');
            $mail->Subject = 'Library suggestion from '. $name;
            $mail->Body = $email_body;
            if ($mail->send()) {
                echo "Email sent";
                exit;
            } else {
            	echo 'Mailer Error: '. $mail->ErrorInfo;
            }
        
        	header("location:suggest.php?status=thanks");
        }
        
        
        $pageTitle = "Suggest a Media Item";
        $section = "suggest";
        
        include("Includes/header.php"); ?&gt;
        
        &lt;div class="section page"&gt;
            &lt;div class="wrapper"&gt;
            	&lt;h1&gt;Suggest a Media Item&lt;/h1&gt;
            	&lt;?php if (isset($_GET["status"]) && $_GET["status"] == "thanks") {
            		echo "&lt;p&gt;Thanks for the email! I&rsquo;ll check out your suggestion shortly!&lt;/p&gt;";
            	} else { ?&gt;
            	&lt;p&gt;If you think there is something I&rsquo;m missing, let me know! Complete the form to send me an email.&lt;/p&gt;
            	&lt;form method="post" action="suggest.php"&gt;
            		&lt;table&gt;
            			&lt;tr&gt;
            				&lt;th&gt;&lt;label for="name"&gt;Name (required)&lt;/label&gt;&lt;/th&gt;
            				&lt;td&gt;&lt;input type="text" id="name" name="name"&gt;&lt;/td&gt;
            			&lt;/tr&gt;
            			&lt;tr&gt;
            				&lt;th&gt;&lt;label for="email"&gt;Email (required)&lt;/label&gt;&lt;/th&gt;
            				&lt;td&gt;&lt;input type="text" id="email" name="email"&gt;&lt;/td&gt;
            			&lt;/tr&gt;
            			&lt;tr&gt;
            				&lt;th&gt;&lt;label for="category"&gt;Category (required)&lt;/label&gt;&lt;/th&gt;
            				&lt;td&gt;&lt;select id="category" name="category"&gt;
            					&lt;option value=""&gt;Select One&lt;/option&gt;
            					&lt;option value="Books"&gt;Book&lt;/option&gt;
            					&lt;option value="Movies"&gt;Movie&lt;/option&gt;
            					&lt;option value="Music"&gt;Music&lt;/option&gt;
            				&lt;/select&gt;&lt;/td&gt;
            			&lt;/tr&gt;
            			&lt;tr&gt;
            				&lt;th&gt;&lt;label for="title"&gt;Title (required)&lt;/label&gt;&lt;/th&gt;
            				&lt;td&gt;&lt;input type="text" id="title" name="title" placeholder="Enter a title..."&gt;&lt;/td&gt;
            			&lt;/tr&gt;
            			&lt;tr&gt;
            				&lt;th&gt;&lt;label for="format"&gt;Format&lt;/label&gt;&lt;/th&gt;
            				&lt;td&gt;&lt;select id="format" name="format"&gt;
            					&lt;option value=""&gt;Select One&lt;/option&gt;
            					&lt;optgroup label="Books"&gt;
            						&lt;option value="Audio"&gt;Audio&lt;/option&gt;
            						&lt;option value="Ebook"&gt;Ebook&lt;/option&gt;
            						&lt;option value="Hardback"&gt;Hardback&lt;/option&gt;
            						&lt;option value="Paperback"&gt;Paperback&lt;/option&gt;
            					&lt;/optgroup&gt;
            					&lt;optgroup label="Movies"&gt;
            						&lt;option value="Blu-ray"&gt;Blu-ray&lt;/option&gt;
            						&lt;option value="DVD"&gt;DVD&lt;/option&gt;
            						&lt;option value="Streaming"&gt;Streaming&lt;/option&gt;
            						&lt;option value="VHS"&gt;VHS&lt;/option&gt;
            					&lt;/optgroup&gt;
            					&lt;optgroup label="Music"&gt;
            						&lt;option value="Cassette"&gt;Cassette&lt;/option&gt;
            						&lt;option value="CD"&gt;CD&lt;/option&gt;
            						&lt;option value="MP3"&gt;MP3&lt;/option&gt;
            						&lt;option value="Vinyl"&gt;Vinyl&lt;/option&gt;
            					&lt;/optgroup&gt;
            				&lt;/select&gt;&lt;/td&gt;
            			&lt;/tr&gt;
            			&lt;tr&gt;
            				&lt;th&gt;
            					&lt;label for="genre"&gt;Genre&lt;/label&gt;
            				&lt;/th&gt;
            				&lt;td&gt;
            					&lt;select name="genre" id="genre"&gt;
            						&lt;option value=""&gt;Select One&lt;/option&gt;
            						&lt;optgroup label="Books"&gt;
            							&lt;option value="Action"&gt;Action&lt;/option&gt;
            							&lt;option value="Advanture"&gt;Advanture&lt;/option&gt;
            							&lt;option value="Comedy"&gt;Comedy&lt;/option&gt;
            							&lt;option value="Fantasy"&gt;Fantasy&lt;/option&gt;
            							&lt;option value="Historical"&gt;Historical&lt;/option&gt;
            							&lt;option value="Historical Fiction"&gt;Historical Fiction&lt;/option&gt;
            							&lt;option value="Horror"&gt;Horror&lt;/option&gt;
            							&lt;option value="Magical Realism"&gt;Magical Realism&lt;/option&gt;
            							&lt;option value="Mystery"&gt;Mystery&lt;/option&gt;
            							&lt;option value="Paranoid"&gt;Paranoid&lt;/option&gt;
            							&lt;option value="Philosophical"&gt;Philosophical&lt;/option&gt;
            							&lt;option value="Political"&gt;Political&lt;/option&gt;
            							&lt;option value="Romance"&gt;Romance&lt;/option&gt;
            							&lt;option value="Saga"&gt;Saga&lt;/option&gt;
            							&lt;option value="Satire"&gt;Satire&lt;/option&gt;
            							&lt;option value="Sci-Fi"&gt;Sci-Fi&lt;/option&gt;
            							&lt;option value="Tech"&gt;Tech&lt;/option&gt;
            							&lt;option value="Thriller"&gt;Thriller&lt;/option&gt;
            							&lt;option value="Urban"&gt;Urban&lt;/option&gt;
            						&lt;/optgroup&gt;
            						&lt;optgroup label="Movies"&gt; 
            							&lt;option value="Action"&gt;Action&lt;/option&gt;
            							&lt;option value="Adventure"&gt;Adventure&lt;/option&gt;
            							&lt;option value="Animation"&gt;Animation&lt;/option&gt;
            							&lt;option value="Biography"&gt;Biography&lt;/option&gt;
            							&lt;option value="Comedy"&gt;Comedy&lt;/option&gt;
            							&lt;option value="Crime"&gt;Crime&lt;/option&gt;
            							&lt;option value="Documentary"&gt;Documentary&lt;/option&gt;
            							&lt;option value="Drama"&gt;Drama&lt;/option&gt;
            							&lt;option value="Family"&gt;Family&lt;/option&gt;
            							&lt;option value="Fantasy"&gt;Fantasy&lt;/option&gt;
            							&lt;option value="Film-Noir"&gt;Film-Noir&lt;/option&gt;
            							&lt;option value="History"&gt;History&lt;/option&gt;
            							&lt;option value="Horror"&gt;Horror&lt;/option&gt;
            							&lt;option value="Musical"&gt;Musical&lt;/option&gt;
            							&lt;option value="Mystery"&gt;Mystery&lt;/option&gt;
            							&lt;option value="Romance"&gt;Romance&lt;/option&gt;
            							&lt;option value="Sci-Fi"&gt;Sci-Fi&lt;/option&gt;
            							&lt;option value="Sport"&gt;Sport&lt;/option&gt;
            							&lt;option value="Thriller"&gt;Thriller&lt;/option&gt;
            							&lt;option value="War"&gt;War&lt;/option&gt;
            							&lt;option value="Western"&gt;Western&lt;/option&gt;
            						&lt;/optgroup&gt;
            						&lt;optgroup label="Music"&gt;			
            							&lt;option value="Blues"&gt;Blues&lt;/option&gt;
            							&lt;option value="Classical"&gt;Classical&lt;/option&gt;
            							&lt;option value="Country"&gt;Country&lt;/option&gt;
            							&lt;option value="Dance"&gt;Dance&lt;/option&gt;
            							&lt;option value="Easy Listening"&gt;Easy Listening&lt;/option&gt;
            							&lt;option value="Electronic"&gt;Electronic&lt;/option&gt;
            							&lt;option value="Folk"&gt;Folk&lt;/option&gt;
            							&lt;option value="Hip Hop/Rap"&gt;Hip Hop/Rap&lt;/option&gt;
            							&lt;option value="Inspirational/Gospel"&gt;Inspirational/Gospel&lt;/option&gt;
            							&lt;option value="Jazz"&gt;Jazz&lt;/option&gt;
            							&lt;option value="Latin"&gt;Latin&lt;/option&gt;
            							&lt;option value="New Age"&gt;New Age&lt;/option&gt;
            							&lt;option value="Opera"&gt;Opera&lt;/option&gt;
            							&lt;option value="Pop"&gt;Pop&lt;/option&gt;
            							&lt;option value="R&B/Soul"&gt;R&amp;B/Soul&lt;/option&gt;
            							&lt;option value="Reggae"&gt;Reggae&lt;/option&gt;
            							&lt;option value="Rock"&gt;Rock&lt;/option&gt;
            						&lt;/optgroup&gt;
            					&lt;/select&gt;
            				&lt;/td&gt;
            			&lt;/tr&gt;
            			&lt;tr&gt;
            				&lt;th&gt;&lt;label for="year"&gt;Year&lt;/label&gt;&lt;/th&gt;
            				&lt;td&gt;&lt;input type="year" id="year" name="year" placeholder="Enter a year..."&gt;&lt;/td&gt;
            			&lt;/tr&gt;
            			&lt;tr&gt;
            				&lt;th&gt;&lt;label for="email"&gt;Suggest Item Details&lt;/label&gt;&lt;/th&gt;
            				&lt;td&gt;&lt;textarea name="details" id="details"&gt;&lt;/textarea&gt;&lt;/td&gt;
            			&lt;/tr&gt;
            			&lt;tr style="display: none"&gt;
            				&lt;th&gt;&lt;label for="address"&gt;Address&lt;/label&gt;&lt;/th&gt;
            				&lt;td&gt;&lt;input type="text" id="address" name="address"&gt;
            					&lt;p&gt;Please leave this field blank&lt;/p&gt;&lt;/td&gt;
            			&lt;/tr&gt;
            		&lt;/table&gt;
            		&lt;input type="submit" value="Send"&gt;
                
            	&lt;/form&gt;
            &lt;?php } ?&gt;
            &lt;/div&gt;
        &lt;/div&gt;
                
        &lt;?php include("Includes/footer.php") ?&gt;
            </code>
        </pre>
    <hr>


    <h2>Setting An Error Message Variable</h2>
    <p>ကျွန်တော်တို့ suggest.php ရဲ့ ထိပ်ဆုံးနားမှာ form ထဲက method ကို POST နဲ့ထားထားတဲ့ condition တစ်ခုရှိပါတယ်။ တစ်ကယ်လို့ fields တွေထဲက တစ်ခုဖြစ်ဖြစ် blank ဖြစ်နေမယ်ဆိုရင် ကျွန်တော်တို့က Please fill in the required fields: Name, Email, Category and Title ဆိုတဲ့ error message ကိုပြပေးမှာဖြစ်ပါတယ်။ ဒါကိုကျွန်တော်တို့က echo အစား $error_message ဆိုတဲ့ variable ကို ထည့်လိုက်ပါမယ်။ ပြီးတော့ exit ဆိုတာကိုလည်း remove လုပ်ပါမယ်။ ကျွန်တော်တို့မှာ total check သုံးခုရှိမယ်။ ပထမတစ်ခုက ထည့်လိုက်တဲ့ required fields တွေကို check လုပ်ဖို့ ၊ ဒုတိယတစ်ခုက spam honeypot field က blank ဖြစ်နေလား check လုပ်ဖို့နဲ့ နောက်ဆုံးတစ်ခုကတော့ email address က valid format လားဆိုတာ check လုပ်ဖို့ပဲဖြစ်ပါတယ်။ ကျွန်တော်တို့က address နဲ့ email တွေကိုလည်း echo အစား $error_message တစ်ခုနဲ့ထည့်မှာဖြစ်ပါတယ်။ ဒါဆိုရင်တော့ error တွေကိုစစ်ပြီးပါပြီ။ နောက်တစ်ခုကတော့ errors တွေမဖြစ်ရင် လုပ်မယ်အလုပ်ကို ရေးမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့က $error_message ကို isset နဲ့ check လုပ်နိုင်ပါတယ်။ အဲ့ဒီ if block ထဲမှာတော့ email ကို send လုပ်တဲ့ code ကိုထည့်မှာဖြစ်ပါတယ်။ ကျွန်တော်တို့က error မရှိခဲ့ရင် email sent ဖြစ်သွားမယ်ဆိုတဲ့ code လေးပဲရေးချင်တာပါ။ အဲ့ဒီ mail send လုပ်တဲ့ if ထဲမှာမှ ဖြစ်နိုင်တဲ့ error တစ်ခုရှိပါသေးတယ်။ ကျွန်တော်တို့ send method ကို call တဲ့အချိန်မှာ သူက problem တစ်ခုရှိရင် false ဆိုတဲ့ return value ကိုပြန်ပေးမှာဖြစ်ပြီး Problem မရှိဘူးဆိုရင်တော့ error message တစ်ခုကို send  လုပ်ပေးချင်တာဖြစ်ပါတယ်။ ကျွန်တော်တို့က error တွေကို echo နဲ့ထုတ်မယ့်အစား error message တစ်ခု send လုပ်မှာဖြစ်ပါတယ်။ </p>
    <p>Example of suggest.php File:</p>
    <pre>
        <code class="html hljs xml">
			&lt;?php

			//Import the PHPMailer class into the global namespace
			use PHPMailer\PHPMailer\PHPMailer;
			use PHPMailer\PHPMailer\SMTP;

			require 'vendor/phpmailer/src/PHPMailer.php';
			require 'vendor/phpmailer/src/Exception.php';
			require 'vendor/phpmailer/src/SMTP.php';

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			    $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
			    $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
			    $category = trim(filter_input(INPUT_POST, "category", FILTER_SANITIZE_STRING));
			    $title = trim(filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING));
			    $format = trim(filter_input(INPUT_POST, "format", FILTER_SANITIZE_STRING));
			    $genre = trim(filter_input(INPUT_POST, "genre", FILTER_SANITIZE_STRING));
			    $year = trim(filter_input(INPUT_POST, "year", FILTER_SANITIZE_NUMBER_INT));
			    $details = trim(filter_input(INPUT_POST, "details", FILTER_SANITIZE_SPECIAL_CHARS)); 
			
			    if ($name == "" || $email =="" || $category == "" || $title == "") {
			        $error_message = "Please fill in the required fields: Name, Email, Category and Title";
			    }
			
			    if ($_POST["address"] != "") {
			        $error_message = "Bad form input";
			    }
			
			    //Checking Valid or Invalid email address with PHPMailer
			    if (!PHPMailer::validateAddress($email)) {
			        $error_message = "Invalid Email Address!";
			    }
			
			    if (!isset($error_message)) {
			        $email_body = "";
			        $email_body .= "Name " . $name . "\n";
			        $email_body .= "Email " . $email . "\n";
			        $email_body .= "\n\nSuggested Item\n\n";
			        $email_body .= "Category " . $category . "\n";
			        $email_body .= "Title " . $title . "\n";
			        $email_body .= "Format " . $format . "\n";
			        $email_body .= "Genre " . $genre . "\n";
			        $email_body .= "Year " . $year . "\n";
			        $email_body .= "Details " . $details . "\n";
				
			        $mail = new PHPMailer;
				
			        //Tell PHPMailer to use SMTP
			        $mail->isSMTP();
				
			        //Enable SMTP debugging
			        // SMTP::DEBUG_OFF = off (for production use)
			        // SMTP::DEBUG_CLIENT = client messages
			        // SMTP::DEBUG_SERVER = client and server messages
			        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
				
			        //Set the hostname of the mail server
			        $mail->Host = 'smtp.gmail.com';
			        // use
			        // $mail->Host = gethostbyname('smtp.gmail.com');
			        // if your network does not support SMTP over IPv6
				
			        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
			        $mail->Port = 587;
				
			        //Set the encryption mechanism to use - STARTTLS or SMTPS
			        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
				
			        //Whether to use SMTP authentication
			        $mail->SMTPAuth = true;
				
			        //Username to use for SMTP authentication - use full email address for gmail
			        $mail->Username = 'aungzinlatt007@gmail.com';
				
			        //Password to use for SMTP authentication
			        $mail->Password = 'qavagulthlgvfauo';
				
			        //It's important not to use the submitter's address as the from address as it's forgery,
			        //which will cause your messages to fail SPF checks.
			        //Use an address in your own domain as the from address, put the submitter's address in a reply-to
			        $mail->setFrom('aungzinlatt007@gmail.com', $name);
			        $mail->addReplyTo($email, $name);
			        $mail->addAddress('aungzinlatt007@gmail.com', 'Aung Zin Latt');
			        $mail->Subject = 'Library Suggestion Form ' . $name;
			        $mail->Body = $email_body;
			        if ($mail->send()) {
			            header("location:suggest.php?status=thanks");
			            exit;
			        }
			        $error_message = 'Mailer Error: ' . $mail->ErrorInfo;  
			    }
			}

			$pageTitle = "Suggest a Media Item";
			$section = "suggest";

			include('Includes/header.php');

			 ?&gt;

			&lt;div class="section page"&gt;
			    &lt;div class="wrapper"&gt;
			        &lt;h1&gt;Suggest a Media Item&lt;/h1&gt;
			        &lt;?php if (isset($_GET["status"]) && $_GET["status"] == "thanks") {
			            echo "&lt;p&gt;Thanks for the email! I&rsquo;ll check out your suggestion shortly!&lt;/p&gt;";
			        } else { ?&gt;
			        &lt;p&gt;If you think there is something I&rsquo;m missing, let me know! Complete the form to send me an email.&lt;/p&gt;
			        &lt;form method="post" action="suggest.php"&gt;
			            &lt;table&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="name"&gt;Name (required)&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="name" name="name" placeholder="Enter a name..."&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="email"&gt;Email (required)&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="email" name="email" placeholder="Enter an email..."&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="category"&gt;Category (required)&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;
			                        &lt;select name="category" id="category"&gt;
			                            &lt;option value=""&gt;Select One&lt;/option&gt;
			                            &lt;option value="books"&gt;Books&lt;/option&gt;
			                            &lt;option value="movies"&gt;Movies&lt;/option&gt;
			                            &lt;option value="music"&gt;Music&lt;/option&gt;
			                        &lt;/select&gt;
			                    &lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="title"&gt;Title (required)&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="title" id="title" name="title" placeholder="Enter a title..."&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="format"&gt;Format&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;
			                        &lt;select name="format" id="format"&gt;
			                            &lt;option value=""&gt;Select One&lt;/option&gt;
			                            &lt;optgroup label="Books"&gt;
			                                &lt;option value="Audio"&gt;Audio&lt;/option&gt;
			                                &lt;option value="Ebook"&gt;Ebook&lt;/option&gt;
			                                &lt;option value="Hardback"&gt;Hardback&lt;/option&gt;
			                                &lt;option value="Paperback"&gt;Paperback&lt;/option&gt;
			                            &lt;/optgroup&gt;
			                            &lt;optgroup label="Movies"&gt;
			            						&lt;option value="Blu-ray"&gt;Blu-ray&lt;/option&gt;
			            						&lt;option value="DVD"&gt;DVD&lt;/option&gt;
			            						&lt;option value="Streaming"&gt;Streaming&lt;/option&gt;
			            						&lt;option value="VHS"&gt;VHS&lt;/option&gt;
			            					&lt;/optgroup&gt;
			            					&lt;optgroup label="Music"&gt;
			            						&lt;option value="Cassette"&gt;Cassette&lt;/option&gt;
			            						&lt;option value="CD"&gt;CD&lt;/option&gt;
			            						&lt;option value="MP3"&gt;MP3&lt;/option&gt;
			            						&lt;option value="Vinyl"&gt;Vinyl&lt;/option&gt;
			            					&lt;/optgroup&gt;
			                        &lt;/select&gt;
			                    &lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="title"&gt;Title&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;
			                        &lt;select name="genre" id="genre"&gt;
			                            &lt;option value=""&gt;Select One&lt;/option&gt;
			                            &lt;optgroup label="Books"&gt;
			            					&lt;option value="Action"&gt;Action&lt;/option&gt;
			            					&lt;option value="Advanture"&gt;Advanture&lt;/option&gt;
			            					&lt;option value="Comedy"&gt;Comedy&lt;/option&gt;
			            					&lt;option value="Fantasy"&gt;Fantasy&lt;/option&gt;
			            					&lt;option value="Historical"&gt;Historical&lt;/option&gt;
			            					&lt;option value="Historical Fiction"&gt;Historical Fiction&lt;/option&gt;
			            					&lt;option value="Horror"&gt;Horror&lt;/option&gt;
			            					&lt;option value="Magical Realism"&gt;Magical Realism&lt;/option&gt;
			            					&lt;option value="Mystery"&gt;Mystery&lt;/option&gt;
			            					&lt;option value="Paranoid"&gt;Paranoid&lt;/option&gt;
			            					&lt;option value="Philosophical"&gt;Philosophical&lt;/option&gt;
			            					&lt;option value="Political"&gt;Political&lt;/option&gt;
			            					&lt;option value="Romance"&gt;Romance&lt;/option&gt;
			            					&lt;option value="Saga"&gt;Saga&lt;/option&gt;
			            					&lt;option value="Satire"&gt;Satire&lt;/option&gt;
			            					&lt;option value="Sci-Fi"&gt;Sci-Fi&lt;/option&gt;
			            					&lt;option value="Tech"&gt;Tech&lt;/option&gt;
			            					&lt;option value="Thriller"&gt;Thriller&lt;/option&gt;
			            					&lt;option value="Urban"&gt;Urban&lt;/option&gt;
			            				&lt;/optgroup&gt;
			            				&lt;optgroup label="Movies"&gt; 
			            					&lt;option value="Action"&gt;Action&lt;/option&gt;
			            					&lt;option value="Adventure"&gt;Adventure&lt;/option&gt;
			            					&lt;option value="Animation"&gt;Animation&lt;/option&gt;
			            					&lt;option value="Biography"&gt;Biography&lt;/option&gt;
			            					&lt;option value="Comedy"&gt;Comedy&lt;/option&gt;
			            					&lt;option value="Crime"&gt;Crime&lt;/option&gt;
			            					&lt;option value="Documentary"&gt;Documentary&lt;/option&gt;
			            					&lt;option value="Drama"&gt;Drama&lt;/option&gt;
			            					&lt;option value="Family"&gt;Family&lt;/option&gt;
			            					&lt;option value="Fantasy"&gt;Fantasy&lt;/option&gt;
			            					&lt;option value="Film-Noir"&gt;Film-Noir&lt;/option&gt;
			            					&lt;option value="History"&gt;History&lt;/option&gt;
			            					&lt;option value="Horror"&gt;Horror&lt;/option&gt;
			            					&lt;option value="Musical"&gt;Musical&lt;/option&gt;
			            					&lt;option value="Mystery"&gt;Mystery&lt;/option&gt;
			            					&lt;option value="Romance"&gt;Romance&lt;/option&gt;
			            					&lt;option value="Sci-Fi"&gt;Sci-Fi&lt;/option&gt;
			            					&lt;option value="Sport"&gt;Sport&lt;/option&gt;
			            					&lt;option value="Thriller"&gt;Thriller&lt;/option&gt;
			            					&lt;option value="War"&gt;War&lt;/option&gt;
			            					&lt;option value="Western"&gt;Western&lt;/option&gt;
			            				&lt;/optgroup&gt;
			            				&lt;optgroup label="Music"&gt;			
			            					&lt;option value="Blues"&gt;Blues&lt;/option&gt;
			            					&lt;option value="Classical"&gt;Classical&lt;/option&gt;
			            					&lt;option value="Country"&gt;Country&lt;/option&gt;
			            					&lt;option value="Dance"&gt;Dance&lt;/option&gt;
			            					&lt;option value="Easy Listening"&gt;Easy Listening&lt;/option&gt;
			            					&lt;option value="Electronic"&gt;Electronic&lt;/option&gt;
			            					&lt;option value="Folk"&gt;Folk&lt;/option&gt;
			            					&lt;option value="Hip Hop/Rap"&gt;Hip Hop/Rap&lt;/option&gt;
			            					&lt;option value="Inspirational/Gospel"&gt;Inspirational/Gospel&lt;/option&gt;
			            					&lt;option value="Jazz"&gt;Jazz&lt;/option&gt;
			            					&lt;option value="Latin"&gt;Latin&lt;/option&gt;
			            					&lt;option value="New Age"&gt;New Age&lt;/option&gt;
			            					&lt;option value="Opera"&gt;Opera&lt;/option&gt;
			            					&lt;option value="Pop"&gt;Pop&lt;/option&gt;
			            					&lt;option value="R&B/Soul"&gt;R&amp;B/Soul&lt;/option&gt;
			            					&lt;option value="Reggae"&gt;Reggae&lt;/option&gt;
			            					&lt;option value="Rock"&gt;Rock&lt;/option&gt;
			            				&lt;/optgroup&gt;
			                        &lt;/select&gt;
			                    &lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="year"&gt;Year&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="year" name="year" id="year" placeholder="Enter a year..."&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="name"&gt;Suggest Item Details&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;textarea name="details" id="details" cols="30" rows="5" placeholder="Enter a suggestion..."&gt;&lt;/textarea&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr style="display: none"&gt;
			                    &lt;th&gt;&lt;label for="address"&gt;Email&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="address" name="address"&gt;
			                    &lt;p&gt;Please leave this field blank&lt;/p&gt;
			                    &lt;/td&gt;
			                &lt;/tr&gt;
			            &lt;/table&gt;
			            &lt;input type="submit" value="Send" /&gt;
			        &lt;/form&gt;
			        &lt;?php } ?&gt;
			    &lt;/div&gt;
			&lt;/div&gt;
					
			&lt;?php include('Includes/footer.php'); ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Displaying the Error Message</h2>
	<p>အခု ကျွန်တော်တို့မှာ variable တစ်ခုထဲကို enconter လုပ်တဲ့ errors တွေနဲ့ related ဖြစ်နေတဲ့ messages တွေကို loading လုပ်ပြီးပြီးပါပြီ။ နောက်တစ်ဆင့်အနေနဲ့ ကျွန်တော်တို့က error message ကို suggest form မှာ dispaly လုပ်မှာဖြစ်ပါတယ်။ ပထမဆုံး REQUEST_METHOD ဟာ POST ဖြစ်လားဆိုတာကို check လုပ်ခဲ့ပါတယ်။ ကျွန်တော်တု့ိ suggest.php ထဲက conditional code မှာ possible outcome နှစ်ခုရှိပါတယ်။ ပထမက data က valid ဖြစ်ရမယ်။ အဲ့လိုဆိုရင် thank you message ကို redirect လုပ်မှာ ဖြစ်ပါတယ်။ အကယ်လို့ request method သာ post မဖြစ်ရင် code တစ်ခု လုံးကို skip လုပ်သွားမှာ ဖြစ်ပါတယ်။ ဒုတိယတစ်ခုကတော့ error_message ထဲကို check လေးခု ထဲက တစ်ခုကတော့ set လုပ်သွားမှာ ဖြစ်ပါတယ်။ တစ်ကယ်လို့ error message တစ်ခုရှိမယ်ဆိုရင် error message နဲ့အတူ page ကို display လုပ်ဖို့ code ကို execute လုပ်သွားပြီး condition ကိုဆက်သွားမှာပဲဖြစ်ပါတယ်။ ဒါကြောင့် ကျွန်တော်တို့ header ရဲ့အောက်မှာ error_message တစ်ခုရှိရင် error_message ထုတ်မယ်ဆိုတဲ့ echo နဲ့ condition တစ်ခုရေးလိုက်ပါမယ်။ တစ်ကယ်လို့ error_message မရှိဘူးဆိုရင်တော့ form ဖြည့်ပါဆိုတဲ့ message ကိုပြပေးမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ form ထဲမှာ invalid email ကိုထည့်လိုက်မယ်ဆိုရင်တော့ page ဟာ reload ဖြစ်သွားပြီး Invalid Email Address ဆိုတဲ့ message ကိုပြပေးမှာဖြစ်ပါတယ်။ Form ကိုမဖြည့်ဘဲ submit လုပ်ရင်လည်း error messageဖြစ်တဲ့ Invalid Email Address ကိုပဲပြမှာဖြစ်ပါတယ်။ တစ်ကယ်က form တစ်ခုလုံးကို မဖြည့်ရသေးပါဘူးဆိုတဲ့ error message ကိုပြရမှာပါ။ အခုဆိုရင် Invalid Email Address လို့ပြခြင်းဟာ မှန်ပေမယ့် meaningful ဖြစ်တယ့် error message တော့ မဟုတ်ပါဘူး။ ဒါကြောင့် message မှာ priority ရှိသင့် ပါတယ်။ priority ကို တိတိကျကျ ဘယ်လို သတ်မှတ်မလဲ။ ဆိုတာကို နောက် သင်ခန်းစာမှာ ပြောပြမှာ ဖြစ်ပါတယ်။ </p>
	<p>Example of suggest.php File:</p>
	<pre>
		<code class="html hljs xml">
			&lt;?php

			//Import the PHPMailer class into the global namespace
			use PHPMailer\PHPMailer\PHPMailer;
			use PHPMailer\PHPMailer\SMTP;

			require 'vendor/phpmailer/src/PHPMailer.php';
			require 'vendor/phpmailer/src/Exception.php';
			require 'vendor/phpmailer/src/SMTP.php';

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			    $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
			    $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
			    $category = trim(filter_input(INPUT_POST, "category", FILTER_SANITIZE_STRING));
			    $title = trim(filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING));
			    $format = trim(filter_input(INPUT_POST, "format", FILTER_SANITIZE_STRING));
			    $genre = trim(filter_input(INPUT_POST, "genre", FILTER_SANITIZE_STRING));
			    $year = trim(filter_input(INPUT_POST, "year", FILTER_SANITIZE_NUMBER_INT));
			    $details = trim(filter_input(INPUT_POST, "details", FILTER_SANITIZE_SPECIAL_CHARS)); 
			
			    if ($name == "" || $email =="" || $category == "" || $title == "") {
			        $error_message = "Please fill in the required fields: Name, Email, Category and Title";
			    }
			
			    if ($_POST["address"] != "") {
			        $error_message = "Bad form input";
			    }
			
			    //Checking Valid or Invalid email address with PHPMailer
			    if (!PHPMailer::validateAddress($email)) {
			        $error_message = "Invalid Email Address!";
			    }
			
			    if (!isset($error_message)) {
			        $email_body = "";
			        $email_body .= "Name " . $name . "\n";
			        $email_body .= "Email " . $email . "\n";
			        $email_body .= "\n\nSuggested Item\n\n";
			        $email_body .= "Category " . $category . "\n";
			        $email_body .= "Title " . $title . "\n";
			        $email_body .= "Format " . $format . "\n";
			        $email_body .= "Genre " . $genre . "\n";
			        $email_body .= "Year " . $year . "\n";
			        $email_body .= "Details " . $details . "\n";
				
			        $mail = new PHPMailer;
				
			        //Tell PHPMailer to use SMTP
			        $mail->isSMTP();
				
			        //Enable SMTP debugging
			        // SMTP::DEBUG_OFF = off (for production use)
			        // SMTP::DEBUG_CLIENT = client messages
			        // SMTP::DEBUG_SERVER = client and server messages
			        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
				
			        //Set the hostname of the mail server
			        $mail->Host = 'smtp.gmail.com';
			        // use
			        // $mail->Host = gethostbyname('smtp.gmail.com');
			        // if your network does not support SMTP over IPv6
				
			        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
			        $mail->Port = 587;
				
			        //Set the encryption mechanism to use - STARTTLS or SMTPS
			        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
				
			        //Whether to use SMTP authentication
			        $mail->SMTPAuth = true;
				
			        //Username to use for SMTP authentication - use full email address for gmail
			        $mail->Username = 'aungzinlatt007@gmail.com';
				
			        //Password to use for SMTP authentication
			        $mail->Password = 'qavagulthlgvfauo';
				
			        //It's important not to use the submitter's address as the from address as it's forgery,
			        //which will cause your messages to fail SPF checks.
			        //Use an address in your own domain as the from address, put the submitter's address in a reply-to
			        $mail->setFrom('aungzinlatt007@gmail.com', $name);
			        $mail->addReplyTo($email, $name);
			        $mail->addAddress('aungzinlatt007@gmail.com', 'Aung Zin Latt');
			        $mail->Subject = 'Library Suggestion Form ' . $name;
			        $mail->Body = $email_body;
			        if ($mail->send()) {
			            header("location:suggest.php?status=thanks");
			            exit;
			        }
			        $error_message = 'Mailer Error: ' . $mail->ErrorInfo;  
			    }
			}

			$pageTitle = "Suggest a Media Item";
			$section = "suggest";

			include('Includes/header.php');

			 ?&gt;

			&lt;div class="section page"&gt;
			    &lt;div class="wrapper"&gt;
			        &lt;h1&gt;Suggest a Media Item&lt;/h1&gt;
			        &lt;?php if (isset($_GET["status"]) && $_GET["status"] == "thanks") {
			            echo "&lt;p&gt;Thanks for the email! I&rsquo;ll check out your suggestion shortly!&lt;/p&gt;";
			        } else {
			            //Displaying Error Message with invalid email
			            if (isset($error_message)) {
			                echo '&lt;p class="message"&gt;' . $error_message . '&lt;/p&gt;';
			            } else {
			                echo '
			                &lt;p&gt;If you think there is something I&rsquo;m missing, let me know! Complete the form to send me an email.&lt;/p&gt;';
			            }
			        ?&gt;
			        &lt;form method="post" action="suggest.php"&gt;
			            &lt;table&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="name"&gt;Name (required)&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="name" name="name" placeholder="Enter a name..."&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="email"&gt;Email (required)&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="email" name="email" placeholder="Enter an email..."&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="category"&gt;Category (required)&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;
			                        &lt;select name="category" id="category"&gt;
			                            &lt;option value=""&gt;Select One&lt;/option&gt;
			                            &lt;option value="books"&gt;Books&lt;/option&gt;
			                            &lt;option value="movies"&gt;Movies&lt;/option&gt;
			                            &lt;option value="music"&gt;Music&lt;/option&gt;
			                        &lt;/select&gt;
			                    &lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="title"&gt;Title (required)&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="title" id="title" name="title" placeholder="Enter a title..."&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="format"&gt;Format&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;
			                        &lt;select name="format" id="format"&gt;
			                            &lt;option value=""&gt;Select One&lt;/option&gt;
			                            &lt;optgroup label="Books"&gt;
			                                &lt;option value="Audio"&gt;Audio&lt;/option&gt;
			                                &lt;option value="Ebook"&gt;Ebook&lt;/option&gt;
			                                &lt;option value="Hardback"&gt;Hardback&lt;/option&gt;
			                                &lt;option value="Paperback"&gt;Paperback&lt;/option&gt;
			                            &lt;/optgroup&gt;
			                            &lt;optgroup label="Movies"&gt;
			            						&lt;option value="Blu-ray"&gt;Blu-ray&lt;/option&gt;
			            						&lt;option value="DVD"&gt;DVD&lt;/option&gt;
			            						&lt;option value="Streaming"&gt;Streaming&lt;/option&gt;
			            						&lt;option value="VHS"&gt;VHS&lt;/option&gt;
			            					&lt;/optgroup&gt;
			            					&lt;optgroup label="Music"&gt;
			            						&lt;option value="Cassette"&gt;Cassette&lt;/option&gt;
			            						&lt;option value="CD"&gt;CD&lt;/option&gt;
			            						&lt;option value="MP3"&gt;MP3&lt;/option&gt;
			            						&lt;option value="Vinyl"&gt;Vinyl&lt;/option&gt;
			            					&lt;/optgroup&gt;
			                        &lt;/select&gt;
			                    &lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="title"&gt;Title&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;
			                        &lt;select name="genre" id="genre"&gt;
			                            &lt;option value=""&gt;Select One&lt;/option&gt;
			                            &lt;optgroup label="Books"&gt;
			            					&lt;option value="Action"&gt;Action&lt;/option&gt;
			            					&lt;option value="Advanture"&gt;Advanture&lt;/option&gt;
			            					&lt;option value="Comedy"&gt;Comedy&lt;/option&gt;
			            					&lt;option value="Fantasy"&gt;Fantasy&lt;/option&gt;
			            					&lt;option value="Historical"&gt;Historical&lt;/option&gt;
			            					&lt;option value="Historical Fiction"&gt;Historical Fiction&lt;/option&gt;
			            					&lt;option value="Horror"&gt;Horror&lt;/option&gt;
			            					&lt;option value="Magical Realism"&gt;Magical Realism&lt;/option&gt;
			            					&lt;option value="Mystery"&gt;Mystery&lt;/option&gt;
			            					&lt;option value="Paranoid"&gt;Paranoid&lt;/option&gt;
			            					&lt;option value="Philosophical"&gt;Philosophical&lt;/option&gt;
			            					&lt;option value="Political"&gt;Political&lt;/option&gt;
			            					&lt;option value="Romance"&gt;Romance&lt;/option&gt;
			            					&lt;option value="Saga"&gt;Saga&lt;/option&gt;
			            					&lt;option value="Satire"&gt;Satire&lt;/option&gt;
			            					&lt;option value="Sci-Fi"&gt;Sci-Fi&lt;/option&gt;
			            					&lt;option value="Tech"&gt;Tech&lt;/option&gt;
			            					&lt;option value="Thriller"&gt;Thriller&lt;/option&gt;
			            					&lt;option value="Urban"&gt;Urban&lt;/option&gt;
			            				&lt;/optgroup&gt;
			            				&lt;optgroup label="Movies"&gt; 
			            					&lt;option value="Action"&gt;Action&lt;/option&gt;
			            					&lt;option value="Adventure"&gt;Adventure&lt;/option&gt;
			            					&lt;option value="Animation"&gt;Animation&lt;/option&gt;
			            					&lt;option value="Biography"&gt;Biography&lt;/option&gt;
			            					&lt;option value="Comedy"&gt;Comedy&lt;/option&gt;
			            					&lt;option value="Crime"&gt;Crime&lt;/option&gt;
			            					&lt;option value="Documentary"&gt;Documentary&lt;/option&gt;
			            					&lt;option value="Drama"&gt;Drama&lt;/option&gt;
			            					&lt;option value="Family"&gt;Family&lt;/option&gt;
			            					&lt;option value="Fantasy"&gt;Fantasy&lt;/option&gt;
			            					&lt;option value="Film-Noir"&gt;Film-Noir&lt;/option&gt;
			            					&lt;option value="History"&gt;History&lt;/option&gt;
			            					&lt;option value="Horror"&gt;Horror&lt;/option&gt;
			            					&lt;option value="Musical"&gt;Musical&lt;/option&gt;
			            					&lt;option value="Mystery"&gt;Mystery&lt;/option&gt;
			            					&lt;option value="Romance"&gt;Romance&lt;/option&gt;
			            					&lt;option value="Sci-Fi"&gt;Sci-Fi&lt;/option&gt;
			            					&lt;option value="Sport"&gt;Sport&lt;/option&gt;
			            					&lt;option value="Thriller"&gt;Thriller&lt;/option&gt;
			            					&lt;option value="War"&gt;War&lt;/option&gt;
			            					&lt;option value="Western"&gt;Western&lt;/option&gt;
			            				&lt;/optgroup&gt;
			            				&lt;optgroup label="Music"&gt;			
			            					&lt;option value="Blues"&gt;Blues&lt;/option&gt;
			            					&lt;option value="Classical"&gt;Classical&lt;/option&gt;
			            					&lt;option value="Country"&gt;Country&lt;/option&gt;
			            					&lt;option value="Dance"&gt;Dance&lt;/option&gt;
			            					&lt;option value="Easy Listening"&gt;Easy Listening&lt;/option&gt;
			            					&lt;option value="Electronic"&gt;Electronic&lt;/option&gt;
			            					&lt;option value="Folk"&gt;Folk&lt;/option&gt;
			            					&lt;option value="Hip Hop/Rap"&gt;Hip Hop/Rap&lt;/option&gt;
			            					&lt;option value="Inspirational/Gospel"&gt;Inspirational/Gospel&lt;/option&gt;
			            					&lt;option value="Jazz"&gt;Jazz&lt;/option&gt;
			            					&lt;option value="Latin"&gt;Latin&lt;/option&gt;
			            					&lt;option value="New Age"&gt;New Age&lt;/option&gt;
			            					&lt;option value="Opera"&gt;Opera&lt;/option&gt;
			            					&lt;option value="Pop"&gt;Pop&lt;/option&gt;
			            					&lt;option value="R&B/Soul"&gt;R&amp;B/Soul&lt;/option&gt;
			            					&lt;option value="Reggae"&gt;Reggae&lt;/option&gt;
			            					&lt;option value="Rock"&gt;Rock&lt;/option&gt;
			            				&lt;/optgroup&gt;
			                        &lt;/select&gt;
			                    &lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="year"&gt;Year&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="year" name="year" id="year" placeholder="Enter a year..."&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="name"&gt;Suggest Item Details&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;textarea name="details" id="details" cols="30" rows="5" placeholder="Enter a suggestion..."&gt;&lt;/textarea&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr style="display: none"&gt;
			                    &lt;th&gt;&lt;label for="address"&gt;Email&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="address" name="address"&gt;
			                    &lt;p&gt;Please leave this field blank&lt;/p&gt;
			                    &lt;/td&gt;
			                &lt;/tr&gt;
			            &lt;/table&gt;
			            &lt;input type="submit" value="Send" /&gt;
			        &lt;/form&gt;
			        &lt;?php } ?&gt;
			    &lt;/div&gt;
			&lt;/div&gt;
					
			&lt;?php include('Includes/footer.php'); ?&gt;
		</code>
	</pre>
	<hr>


	<h2>Error Message Priority</h2>
	<p>အခု suggest.php file ရဲ့ ထိပ်ဆုံးနားကနေ စရအောင်။ ကျွန်တော်တို့ ပထမဆုံး if condition နဲ့ required fields တွေကို values ရှိမရှိ check လုပ်ထားပါတယ်။ တစ်ကယ်က ဒီ example မှာဆိုရင် values တွေမရှိတဲ့အတွက် error message ကိုပြပေးလိုက်တာဖြစ်ပါတယ်။ နောက်မှာ ကျွန်တော်တို့က email address က valid ဖြစ်လားဆိုတာ စစ်ထားပါတယ်။ ဒါကြောင့် error_message variable ထဲမှာ different values တွေကို put လုပ်ထားပါတယ်။ ပြောချင်တာက အရင်က ပြထားတဲ့ error message တွေပေါ်ကို override လုပ်သွားတာဖြစ်ပါတယ်။ ခု လုပ်ရမှာက error message တစ်ခုတွေ့တာနဲ့ အခြား check ကို မစစ်အောင် လုပ်ရမှာ ဖြစ်ပါတယ်။ ဒါကြောင့် ဒုတိယ check ဖြစ်တယ့် spam honey pot field ကို blank မဖြစ်ရင် စစ်ထားတယ့် conditional ထဲမှာ error_message မရှိရင် ဆိုတယ့် condition တစ်ခုကို isset နဲ့ ထပ်ထည့်လိုက်ပါမယ်။ သူတို့ ကို and operator ဖြစ်တယ့် && နဲ့ ဆက်မှာ ဖြစ်ပါတယ်။ ပီးရင် တတိယ condition ဖြစ်တယ့် email valid ဖြစ်မဖြစ် စစ်ထားတယ့် ထဲမှာလည်း error_message မရှိရင် ဆိုတယ့် condition တစ်ခု ထပ်ထည့်လိုက်ပါမယ်။ သူတို့ကို လည်း && နဲ့ ဆက်မှာ ဖြစ်ပါတယ်။ ဒါဟာ ကျွန်တော်တို့ form ရဲ့ ဘယ် fields တွေကို မဖြည့်ရင် ဘယ် error ကိုတက်ပါမယ်ဆိုတဲ့ Priority ကိုပြောပြသွားတာဖြစ်ပါတယ်။ </p>
	<p>Example of suggest.php File:</p>
	<pre>
		<code class="html hljs xml">
			&lt;?php

			//Import the PHPMailer class into the global namespace
			use PHPMailer\PHPMailer\PHPMailer;
			use PHPMailer\PHPMailer\SMTP;

			require 'vendor/phpmailer/src/PHPMailer.php';
			require 'vendor/phpmailer/src/Exception.php';
			require 'vendor/phpmailer/src/SMTP.php';

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			    $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
			    $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
			    $category = trim(filter_input(INPUT_POST, "category", FILTER_SANITIZE_STRING));
			    $title = trim(filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING));
			    $format = trim(filter_input(INPUT_POST, "format", FILTER_SANITIZE_STRING));
			    $genre = trim(filter_input(INPUT_POST, "genre", FILTER_SANITIZE_STRING));
			    $year = trim(filter_input(INPUT_POST, "year", FILTER_SANITIZE_NUMBER_INT));
			    $details = trim(filter_input(INPUT_POST, "details", FILTER_SANITIZE_SPECIAL_CHARS)); 
			
			    if ($name == "" || $email =="" || $category == "" || $title == "") {
			        $error_message = "Please fill in the required fields: Name, Email, Category and Title";
			    }
			    //Error Message Priority => !isset($error_message)
			    if (!isset($error_message) && $_POST["address"] != "") {
			        $error_message = "Bad form input";
			    }
			
			    //Checking Valid or Invalid email address with PHPMailer
			    //Error Message Priority => !isset($error_message)
			    if (!isset($error_message) && !PHPMailer::validateAddress($email)) {
			        $error_message = "Invalid Email Address!";
			    }
			
			    if (!isset($error_message)) {
			        $email_body = "";
			        $email_body .= "Name " . $name . "\n";
			        $email_body .= "Email " . $email . "\n";
			        $email_body .= "\n\nSuggested Item\n\n";
			        $email_body .= "Category " . $category . "\n";
			        $email_body .= "Title " . $title . "\n";
			        $email_body .= "Format " . $format . "\n";
			        $email_body .= "Genre " . $genre . "\n";
			        $email_body .= "Year " . $year . "\n";
			        $email_body .= "Details " . $details . "\n";
				
			        $mail = new PHPMailer;
				
			        //Tell PHPMailer to use SMTP
			        $mail->isSMTP();
				
			        //Enable SMTP debugging
			        // SMTP::DEBUG_OFF = off (for production use)
			        // SMTP::DEBUG_CLIENT = client messages
			        // SMTP::DEBUG_SERVER = client and server messages
			        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
				
			        //Set the hostname of the mail server
			        $mail->Host = 'smtp.gmail.com';
			        // use
			        // $mail->Host = gethostbyname('smtp.gmail.com');
			        // if your network does not support SMTP over IPv6
				
			        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
			        $mail->Port = 587;
				
			        //Set the encryption mechanism to use - STARTTLS or SMTPS
			        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
				
			        //Whether to use SMTP authentication
			        $mail->SMTPAuth = true;
				
			        //Username to use for SMTP authentication - use full email address for gmail
			        $mail->Username = 'aungzinlatt007@gmail.com';
				
			        //Password to use for SMTP authentication
			        $mail->Password = 'qavagulthlgvfauo';
				
			        //It's important not to use the submitter's address as the from address as it's forgery,
			        //which will cause your messages to fail SPF checks.
			        //Use an address in your own domain as the from address, put the submitter's address in a reply-to
			        $mail->setFrom('aungzinlatt007@gmail.com', $name);
			        $mail->addReplyTo($email, $name);
			        $mail->addAddress('aungzinlatt007@gmail.com', 'Aung Zin Latt');
			        $mail->Subject = 'Library Suggestion Form ' . $name;
			        $mail->Body = $email_body;
			        if ($mail->send()) {
			            header("location:suggest.php?status=thanks");
			            exit;
			        }
			        $error_message = 'Mailer Error: ' . $mail->ErrorInfo;  
			    }
			}

			$pageTitle = "Suggest a Media Item";
			$section = "suggest";

			include('Includes/header.php');

			 ?&gt;

			&lt;div class="section page"&gt;
			    &lt;div class="wrapper"&gt;
			        &lt;h1&gt;Suggest a Media Item&lt;/h1&gt;
			        &lt;?php if (isset($_GET["status"]) && $_GET["status"] == "thanks") {
			            echo "&lt;p&gt;Thanks for the email! I&rsquo;ll check out your suggestion shortly!&lt;/p&gt;";
			        } else {
			            //Displaying Error Message with invalid email
			            if (isset($error_message)) {
			                echo '&lt;p class="message"&gt;' . $error_message . '&lt;/p&gt;';
			            } else {
			                echo '
			                &lt;p&gt;If you think there is something I&rsquo;m missing, let me know! Complete the form to send me an email.&lt;/p&gt;';
			            }
			        ?&gt;
			        &lt;form method="post" action="suggest.php"&gt;
			            &lt;table&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="name"&gt;Name (required)&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="name" name="name" placeholder="Enter a name..."&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="email"&gt;Email (required)&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="email" name="email" placeholder="Enter an email..."&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="category"&gt;Category (required)&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;
			                        &lt;select name="category" id="category"&gt;
			                            &lt;option value=""&gt;Select One&lt;/option&gt;
			                            &lt;option value="books"&gt;Books&lt;/option&gt;
			                            &lt;option value="movies"&gt;Movies&lt;/option&gt;
			                            &lt;option value="music"&gt;Music&lt;/option&gt;
			                        &lt;/select&gt;
			                    &lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="title"&gt;Title (required)&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="title" id="title" name="title" placeholder="Enter a title..."&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="format"&gt;Format&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;
			                        &lt;select name="format" id="format"&gt;
			                            &lt;option value=""&gt;Select One&lt;/option&gt;
			                            &lt;optgroup label="Books"&gt;
			                                &lt;option value="Audio"&gt;Audio&lt;/option&gt;
			                                &lt;option value="Ebook"&gt;Ebook&lt;/option&gt;
			                                &lt;option value="Hardback"&gt;Hardback&lt;/option&gt;
			                                &lt;option value="Paperback"&gt;Paperback&lt;/option&gt;
			                            &lt;/optgroup&gt;
			                            &lt;optgroup label="Movies"&gt;
			            						&lt;option value="Blu-ray"&gt;Blu-ray&lt;/option&gt;
			            						&lt;option value="DVD"&gt;DVD&lt;/option&gt;
			            						&lt;option value="Streaming"&gt;Streaming&lt;/option&gt;
			            						&lt;option value="VHS"&gt;VHS&lt;/option&gt;
			            					&lt;/optgroup&gt;
			            					&lt;optgroup label="Music"&gt;
			            						&lt;option value="Cassette"&gt;Cassette&lt;/option&gt;
			            						&lt;option value="CD"&gt;CD&lt;/option&gt;
			            						&lt;option value="MP3"&gt;MP3&lt;/option&gt;
			            						&lt;option value="Vinyl"&gt;Vinyl&lt;/option&gt;
			            					&lt;/optgroup&gt;
			                        &lt;/select&gt;
			                    &lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="title"&gt;Title&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;
			                        &lt;select name="genre" id="genre"&gt;
			                            &lt;option value=""&gt;Select One&lt;/option&gt;
			                            &lt;optgroup label="Books"&gt;
			            					&lt;option value="Action"&gt;Action&lt;/option&gt;
			            					&lt;option value="Advanture"&gt;Advanture&lt;/option&gt;
			            					&lt;option value="Comedy"&gt;Comedy&lt;/option&gt;
			            					&lt;option value="Fantasy"&gt;Fantasy&lt;/option&gt;
			            					&lt;option value="Historical"&gt;Historical&lt;/option&gt;
			            					&lt;option value="Historical Fiction"&gt;Historical Fiction&lt;/option&gt;
			            					&lt;option value="Horror"&gt;Horror&lt;/option&gt;
			            					&lt;option value="Magical Realism"&gt;Magical Realism&lt;/option&gt;
			            					&lt;option value="Mystery"&gt;Mystery&lt;/option&gt;
			            					&lt;option value="Paranoid"&gt;Paranoid&lt;/option&gt;
			            					&lt;option value="Philosophical"&gt;Philosophical&lt;/option&gt;
			            					&lt;option value="Political"&gt;Political&lt;/option&gt;
			            					&lt;option value="Romance"&gt;Romance&lt;/option&gt;
			            					&lt;option value="Saga"&gt;Saga&lt;/option&gt;
			            					&lt;option value="Satire"&gt;Satire&lt;/option&gt;
			            					&lt;option value="Sci-Fi"&gt;Sci-Fi&lt;/option&gt;
			            					&lt;option value="Tech"&gt;Tech&lt;/option&gt;
			            					&lt;option value="Thriller"&gt;Thriller&lt;/option&gt;
			            					&lt;option value="Urban"&gt;Urban&lt;/option&gt;
			            				&lt;/optgroup&gt;
			            				&lt;optgroup label="Movies"&gt; 
			            					&lt;option value="Action"&gt;Action&lt;/option&gt;
			            					&lt;option value="Adventure"&gt;Adventure&lt;/option&gt;
			            					&lt;option value="Animation"&gt;Animation&lt;/option&gt;
			            					&lt;option value="Biography"&gt;Biography&lt;/option&gt;
			            					&lt;option value="Comedy"&gt;Comedy&lt;/option&gt;
			            					&lt;option value="Crime"&gt;Crime&lt;/option&gt;
			            					&lt;option value="Documentary"&gt;Documentary&lt;/option&gt;
			            					&lt;option value="Drama"&gt;Drama&lt;/option&gt;
			            					&lt;option value="Family"&gt;Family&lt;/option&gt;
			            					&lt;option value="Fantasy"&gt;Fantasy&lt;/option&gt;
			            					&lt;option value="Film-Noir"&gt;Film-Noir&lt;/option&gt;
			            					&lt;option value="History"&gt;History&lt;/option&gt;
			            					&lt;option value="Horror"&gt;Horror&lt;/option&gt;
			            					&lt;option value="Musical"&gt;Musical&lt;/option&gt;
			            					&lt;option value="Mystery"&gt;Mystery&lt;/option&gt;
			            					&lt;option value="Romance"&gt;Romance&lt;/option&gt;
			            					&lt;option value="Sci-Fi"&gt;Sci-Fi&lt;/option&gt;
			            					&lt;option value="Sport"&gt;Sport&lt;/option&gt;
			            					&lt;option value="Thriller"&gt;Thriller&lt;/option&gt;
			            					&lt;option value="War"&gt;War&lt;/option&gt;
			            					&lt;option value="Western"&gt;Western&lt;/option&gt;
			            				&lt;/optgroup&gt;
			            				&lt;optgroup label="Music"&gt;			
			            					&lt;option value="Blues"&gt;Blues&lt;/option&gt;
			            					&lt;option value="Classical"&gt;Classical&lt;/option&gt;
			            					&lt;option value="Country"&gt;Country&lt;/option&gt;
			            					&lt;option value="Dance"&gt;Dance&lt;/option&gt;
			            					&lt;option value="Easy Listening"&gt;Easy Listening&lt;/option&gt;
			            					&lt;option value="Electronic"&gt;Electronic&lt;/option&gt;
			            					&lt;option value="Folk"&gt;Folk&lt;/option&gt;
			            					&lt;option value="Hip Hop/Rap"&gt;Hip Hop/Rap&lt;/option&gt;
			            					&lt;option value="Inspirational/Gospel"&gt;Inspirational/Gospel&lt;/option&gt;
			            					&lt;option value="Jazz"&gt;Jazz&lt;/option&gt;
			            					&lt;option value="Latin"&gt;Latin&lt;/option&gt;
			            					&lt;option value="New Age"&gt;New Age&lt;/option&gt;
			            					&lt;option value="Opera"&gt;Opera&lt;/option&gt;
			            					&lt;option value="Pop"&gt;Pop&lt;/option&gt;
			            					&lt;option value="R&B/Soul"&gt;R&amp;B/Soul&lt;/option&gt;
			            					&lt;option value="Reggae"&gt;Reggae&lt;/option&gt;
			            					&lt;option value="Rock"&gt;Rock&lt;/option&gt;
			            				&lt;/optgroup&gt;
			                        &lt;/select&gt;
			                    &lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="year"&gt;Year&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="year" name="year" id="year" placeholder="Enter a year..."&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="name"&gt;Suggest Item Details&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;textarea name="details" id="details" cols="30" rows="5" placeholder="Enter a suggestion..."&gt;&lt;/textarea&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr style="display: none"&gt;
			                    &lt;th&gt;&lt;label for="address"&gt;Email&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="address" name="address"&gt;
			                    &lt;p&gt;Please leave this field blank&lt;/p&gt;
			                    &lt;/td&gt;
			                &lt;/tr&gt;
			            &lt;/table&gt;
			            &lt;input type="submit" value="Send" /&gt;
			        &lt;/form&gt;
			        &lt;?php } ?&gt;
			    &lt;/div&gt;
			&lt;/div&gt;
					
			&lt;?php include('Includes/footer.php'); ?&gt;
		</code>
	</pre>
	<hr>


	<h2>Re-Displaying the Submission</h2>
	<p>ကျွန်တော်တို့ရဲ့ site visitor က suggest form ကို email address လိုမျိုး invalid data ဖြည့်တဲ့အချိန်မှာ ကျွန်တော်တို့က form ရဲ့အပေါ်ထိပ်မှာ Error message တစ်ခုကို display လုပ်ပြထားတာဖြစ်ပါတယ်။ ဒါပေမယ့် အခုဆိုရင် ကျွန်တော်တို့ form က blank ပုံစံဖြစ်နေမှာပါ။ ဒါဟာ site visitors တွေကို ကျွန်တော်တို့က သူတို့ submit လုပ်လိုက်တဲ့ values တွေကို erase လုပ်လိုက်သလိုနဲ့ တူနေမှာပါ။ အဲ့ဒီလို ထင်သလိုမဟုတ်ပါဘူး။ ကျွန်တော်တို့ code က page ကို request လုပ်လိုက်တဲ့ အကြိမ်တစ်ခုချင်းစီတိုင်း blank form အနေနဲ့ display လုပ်နေတာဖြစ်ပါတယ်။ ဒါကိုကျွန်တော်တို့က user တွေ form fields ထဲမှာ submit လုပ်လိုက်တဲ့ values တွေကို re-display လုပ်မှာဖြစ်ပါတယ်။ တစ်ကယ်လို့ REQUEST_METHOD က POST ဖြစ်တယ်ဆိုရင် name, email address နဲ့ အခြား fields တွေကို သက်ဆိုရာ variable ထဲထည့်ပြီး load လုပ်မယ်။ ကျွန်တော်တို့ဟာ အဲ့ဒီ variables တွေကို အောက်က form ထဲမှာပြန်သုံးထားပါတယ်။ ကျွန်တော်တို့ form ထဲက input ထဲမှာ type, id နဲ့ name ဆိုပြီး HTML attribute သုံးခုရှိပါတယ်။ နောက်ထပ် ကျွန်တော်တို့ input ထဲမှာ default value အနေနဲ့ ပေါ်ပေးမယ့် HTML attribute တစ်ခုရှိပါတယ်။ အဲ့ဒါကတော့ value ဆိုတဲ့ attribute ဖြစ်ပါတယ်။ Value အတွက် name ဆိုတဲ့ variable ထဲမှာဘာလဲဆိုတာကို echo လုပ်ချင်တာဖြစ်ပါတယ်။ မှတ်ထားရမှာက REQUEST_METHOD က POST ဖြစ်တယ်ဆိုရင် ကျွန်တော်တို့ post လုပ်လိုက်တဲ့ field ထဲက value ကိုယူပြီး name variable ထဲမှာ loaded ဖြစ်သွားမှာဖြစ်ပါတယ်။ အဲ့ဒီ variable ဟာ ကျွန်တော်တို့ code ကို execute လုပ်တဲ့အခါမှာသာလျှင် အပေါ်က form ကို submit လုပ်ရင် REQUEST_METHOD က POST ဖြစ်တဲ့အချိန်မှာ exit ဖြစ်သွားမှာဖြစ်ပါတယ်။ ဒီလိုမဟုတ်ဘဲ blank form ကိုပဲ display လုပ်မယ်ဆိုရင် variable ဟာ set လုပ်မှာ မဟုတ်ပါဘူး။ အရင်ဆုံးကျွန်တော်တို့ variable က isset ဖြစ်လားဆိုတာစစ်သင့်ပါတယ်။ တစ်ခုရှိတာက text-area အတွက်ဆိုရင် အနည်းငယ် ပြောင်းလဲပါတယ်။ Text-area တွေမှာ value ဆိုတဲ့ attribute မရှိပါဘူး။ Text-area မှာ opening နဲ့ closing tag ရှိတဲ့အစား default value ကို tags တွေကြားမှာ content အဖြစ် add လုပ်လိုက်တာပါ။ ဒါကြောင့် ကျွန်တော်တို့က isset ဆိုတဲ့ if condition ကို value မပါဘဲ ဒီတိုင်းပဲရေးနိုင်ပါတယ်။ နောက်ဆုံးလုပ်ရမှာတစ်ခုကတော့ select boxes တွေပဲဖြစ်ပါတယ်။ ကျွန်တော်တို့က default အနေနဲ့ specific option တစ်ခုကို selected လုပ်ချင်တယ်ဆိုရင် selected ဆိုတဲ့ keyword ကိုသုံးပေးရမှာဖြစ်ပါတယ်။ တစ်ခုရှိတာက selected ကိုရေးတဲ့အခါမှာ သူ့ရှေ့မှာ space တစ်ချက်ခြားပြီးရေးပေးရမှာဖြစ်ပါတယ်။ </p>
	<p>Example of suggest.php File:</p>
	<pre>
		<code class="html hljs xml">
			&lt;?php

			//Import the PHPMailer class into the global namespace
			use PHPMailer\PHPMailer\PHPMailer;
			use PHPMailer\PHPMailer\SMTP;

			require 'vendor/phpmailer/src/PHPMailer.php';
			require 'vendor/phpmailer/src/Exception.php';
			require 'vendor/phpmailer/src/SMTP.php';

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			    $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
			    $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
			    $category = trim(filter_input(INPUT_POST, "category", FILTER_SANITIZE_STRING));
			    $title = trim(filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING));
			    $format = trim(filter_input(INPUT_POST, "format", FILTER_SANITIZE_STRING));
			    $genre = trim(filter_input(INPUT_POST, "genre", FILTER_SANITIZE_STRING));
			    $year = trim(filter_input(INPUT_POST, "year", FILTER_SANITIZE_NUMBER_INT));
			    $details = trim(filter_input(INPUT_POST, "details", FILTER_SANITIZE_SPECIAL_CHARS)); 
			
			    if ($name == "" || $email =="" || $category == "" || $title == "") {
			        $error_message = "Please fill in the required fields: Name, Email, Category and Title";
			    }
			    //Error Message Priority => !isset($error_message)
			    if (!isset($error_message) && $_POST["address"] != "") {
			        $error_message = "Bad form input";
			    }
			
			    //Checking Valid or Invalid email address with PHPMailer
			    //Error Message Priority => !isset($error_message)
			    if (!isset($error_message) && !PHPMailer::validateAddress($email)) {
			        $error_message = "Invalid Email Address!";
			    }
			
			    if (!isset($error_message)) {
			        $email_body = "";
			        $email_body .= "Name " . $name . "\n";
			        $email_body .= "Email " . $email . "\n";
			        $email_body .= "\n\nSuggested Item\n\n";
			        $email_body .= "Category " . $category . "\n";
			        $email_body .= "Title " . $title . "\n";
			        $email_body .= "Format " . $format . "\n";
			        $email_body .= "Genre " . $genre . "\n";
			        $email_body .= "Year " . $year . "\n";
			        $email_body .= "Details " . $details . "\n";
				
			        $mail = new PHPMailer;
				
			        //Tell PHPMailer to use SMTP
			        $mail->isSMTP();
				
			        //Enable SMTP debugging
			        // SMTP::DEBUG_OFF = off (for production use)
			        // SMTP::DEBUG_CLIENT = client messages
			        // SMTP::DEBUG_SERVER = client and server messages
			        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
				
			        //Set the hostname of the mail server
			        $mail->Host = 'smtp.gmail.com';
			        // use
			        // $mail->Host = gethostbyname('smtp.gmail.com');
			        // if your network does not support SMTP over IPv6
				
			        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
			        $mail->Port = 587;
				
			        //Set the encryption mechanism to use - STARTTLS or SMTPS
			        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
				
			        //Whether to use SMTP authentication
			        $mail->SMTPAuth = true;
				
			        //Username to use for SMTP authentication - use full email address for gmail
			        $mail->Username = 'aungzinlatt007@gmail.com';
				
			        //Password to use for SMTP authentication
			        $mail->Password = 'qavagulthlgvfauo';
				
			        //It's important not to use the submitter's address as the from address as it's forgery,
			        //which will cause your messages to fail SPF checks.
			        //Use an address in your own domain as the from address, put the submitter's address in a reply-to
			        $mail->setFrom('aungzinlatt007@gmail.com', $name);
			        $mail->addReplyTo($email, $name);
			        $mail->addAddress('aungzinlatt007@gmail.com', 'Aung Zin Latt');
			        $mail->Subject = 'Library Suggestion Form ' . $name;
			        $mail->Body = $email_body;
			        if ($mail->send()) {
			            header("location:suggest.php?status=thanks");
			            exit;
			        }
			        $error_message = 'Mailer Error: ' . $mail->ErrorInfo;  
			    }
			}

			$pageTitle = "Suggest a Media Item";
			$section = "suggest";

			include('Includes/header.php');

			 ?&gt;

			&lt;div class="section page"&gt;
			    &lt;div class="wrapper"&gt;
			        &lt;h1&gt;Suggest a Media Item&lt;/h1&gt;
			        &lt;?php if (isset($_GET["status"]) && $_GET["status"] == "thanks") {
			            echo "&lt;p&gt;Thanks for the email! I&rsquo;ll check out your suggestion shortly!&lt;/p&gt;";
			        } else {
			            //Displaying Error Message with invalid email
			            if (isset($error_message)) {
			                echo '&lt;p class="message"&gt;' . $error_message . '&lt;/p&gt;';
			            } else {
			                echo '
			                &lt;p&gt;If you think there is something I&rsquo;m missing, let me know! Complete the form to send me an email.&lt;/p&gt;';
			            }
			        ?&gt;
			        &lt;form method="post" action="suggest.php"&gt;
			            &lt;table&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="name"&gt;Name (required)&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="name" name="name" value="&lt;?php if (isset($name)) echo $name; ?&gt;"&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="email"&gt;Email (required)&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="email" name="email" value="&lt;?php if (isset($email)) echo $email; ?&gt;"&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="category"&gt;Category (required)&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;
			                        &lt;select name="category" id="category"&gt;
			                            &lt;option value=""&gt;Select One&lt;/option&gt;
			                            &lt;option value="books"&lt;?php if (isset($name) && $category == "Books") echo " selected"; ?&gt;Books&lt;/option&gt;
			                            &lt;option value="movies"&lt;?php if (isset($name) && $category == "Movies") echo " selected"; ?&gt;Movies&lt;/option&gt;
			                            &lt;option value="music"&lt;?php if (isset($name) && $category == "Music") echo " selected"; ?&gt;Music&lt;/option&gt;
			                        &lt;/select&gt;
			                    &lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="title"&gt;Title (required)&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="title" id="title" name="title" value="&lt;?php if (isset($title)) echo $title; ?&gt;"&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="format"&gt;Format&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;
			                        &lt;select name="format" id="format"&gt;
			                            &lt;option value=""&gt;Select One&lt;/option&gt;
			                            &lt;optgroup label="Books"&gt;
			                                &lt;option value="Audio"&lt;?php if (isset($format) && $format == "Audio") echo " selected"; ?&gt;Audio&lt;/option&gt;
			                                &lt;option value="Ebook"&lt;?php if (isset($format) && $format == "Ebook") echo " selected"; ?&gt;Ebook&lt;/option&gt;
			                                &lt;option value="Hardback"&lt;?php if (isset($format) && $format == "Hardback") echo " selected"; ?&gt;Hardback&lt;/option&gt;
			                                &lt;option value="Paperback"&lt;?php if (isset($format) && $format == "Paperback") echo " selected"; ?&gt;Paperback&lt;/option&gt;
			                            &lt;/optgroup&gt;
			                            &lt;optgroup label="Movies"&gt;
			            						&lt;option value="Blu-ray"&lt;?php if (isset($format) && $format == "Blu-ray") echo " selected"; ?&gt;Blu-ray&lt;/option&gt;
			            						&lt;option value="DVD"&lt;?php if (isset($format) && $format == "DVD") echo " selected"; ?&gt;DVD&lt;/option&gt;
			            						&lt;option value="Streaming"&lt;?php if (isset($format) && $format == "Streaming") echo " selected"; ?&gt;Streaming&lt;/option&gt;
			            						&lt;option value="VHS"&lt;?php if (isset($format) && $format == "VHS") echo " selected"; ?&gt;VHS&lt;/option&gt;
			            					&lt;/optgroup&gt;
			            					&lt;optgroup label="Music"&gt;
			            						&lt;option value="Cassette"&lt;?php if (isset($format) && $format == "Cassette") echo " selected"; ?&gt;Cassette&lt;/option&gt;
			            						&lt;option value="CD"&lt;?php if (isset($format) && $format == "CD") echo " selected"; ?&gt;CD&lt;/option&gt;
			            						&lt;option value="MP3"&lt;?php if (isset($format) && $format == "MP3") echo " selected"; ?&gt;MP3&lt;/option&gt;
			            						&lt;option value="Vinyl"&lt;?php if (isset($format) && $format == "Vinyl") echo " selected"; ?&gt;Vinyl&lt;/option&gt;
			            					&lt;/optgroup&gt;
			                        &lt;/select&gt;
			                    &lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="title"&gt;Genre&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;
			                        &lt;select name="genre" id="genre"&gt;
			                            &lt;option value=""&gt;Select One&lt;/option&gt;
			                            &lt;optgroup label="Books"&gt;
			            					&lt;option value="Action"&lt;?php if (isset($genre) && $genre == "Action") echo " selected"; ?&gt;Action&lt;/option&gt;
			            					&lt;option value="Advanture"&lt;?php if (isset($genre) && $genre == "Advanture") echo " selected"; ?&gt;Advanture&lt;/option&gt;
			            					&lt;option value="Comedy"&lt;?php if (isset($genre) && $genre == "Comedy") echo " selected"; ?&gt;Comedy&lt;/option&gt;
			            					&lt;option value="Fantasy"&lt;?php if (isset($genre) && $genre == "Fantasy") echo " selected"; ?&gt;Fantasy&lt;/option&gt;
			            					&lt;option value="Historical"&lt;?php if (isset($genre) && $genre == "Historical") echo " selected"; ?&gt;Historical&lt;/option&gt;
			            					&lt;option value="Historical Fiction"&lt;?php if (isset($genre) && $genre == "Historical Fiction") echo " selected"; ?&gt;Historical Fiction&lt;/option&gt;
			            					&lt;option value="Horror"&lt;?php if (isset($genre) && $genre == "Horror") echo " selected"; ?&gt;Horror&lt;/option&gt;
			            					&lt;option value="Magical Realism"&lt;?php if (isset($genre) && $genre == "Magical Realism") echo " selected"; ?&gt;Magical Realism&lt;/option&gt;
			            					&lt;option value="Mystery"&lt;?php if (isset($genre) && $genre == "Mystery") echo " selected"; ?&gt;Mystery&lt;/option&gt;
			            					&lt;option value="Paranoid"&lt;?php if (isset($genre) && $genre == "Paranoid") echo " selected"; ?&gt;Paranoid&lt;/option&gt;
			            					&lt;option value="Philosophical"&lt;?php if (isset($genre) && $genre == "Philosophical") echo " selected"; ?&gt;Philosophical&lt;/option&gt;
			            					&lt;option value="Political"&lt;?php if (isset($genre) && $genre == "Political") echo " selected"; ?&gt;Political&lt;/option&gt;
			            					&lt;option value="Romance"&lt;?php if (isset($genre) && $genre == "Romance") echo " selected"; ?&gt;Romance&lt;/option&gt;
			            					&lt;option value="Saga"&lt;?php if (isset($genre) && $genre == "Saga") echo " selected"; ?&gt;Saga&lt;/option&gt;
			            					&lt;option value="Satire"&lt;?php if (isset($genre) && $genre == "Satire") echo " selected"; ?&gt;Satire&lt;/option&gt;
			            					&lt;option value="Sci-Fi"&lt;?php if (isset($genre) && $genre == "Sci-Fi") echo " selected"; ?&gt;Sci-Fi&lt;/option&gt;
			            					&lt;option value="Tech"&lt;?php if (isset($genre) && $genre == "Tech") echo " selected"; ?&gt;Tech&lt;/option&gt;
			            					&lt;option value="Thriller"&lt;?php if (isset($genre) && $genre == "Thriller") echo " selected"; ?&gt;Thriller&lt;/option&gt;
			            					&lt;option value="Urban"&lt;?php if (isset($genre) && $genre == "Urban") echo " selected"; ?&gt;Urban&lt;/option&gt;
			            				&lt;/optgroup&gt;
			            				&lt;optgroup label="Movies"&gt; 
			            					&lt;option value="Action"&lt;?php if (isset($genre) && $genre == "Action") echo " selected"; ?&gt;Action&lt;/option&gt;
			            					&lt;option value="Adventure"&lt;?php if (isset($genre) && $genre == "Adventure") echo " selected"; ?&gt;Adventure&lt;/option&gt;
			            					&lt;option value="Animation"&lt;?php if (isset($genre) && $genre == "Animation") echo " selected"; ?&gt;Animation&lt;/option&gt;
			            					&lt;option value="Biography"&lt;?php if (isset($genre) && $genre == "Biography") echo " selected"; ?&gt;Biography&lt;/option&gt;
			            					&lt;option value="Comedy"&lt;?php if (isset($genre) && $genre == "Comedy") echo " selected"; ?&gt;Comedy&lt;/option&gt;
			            					&lt;option value="Crime"&lt;?php if (isset($genre) && $genre == "Crime") echo " selected"; ?&gt;Crime&lt;/option&gt;
			            					&lt;option value="Documentary"&lt;?php if (isset($genre) && $genre == "Documentary") echo " selected"; ?&gt;Documentary&lt;/option&gt;
			            					&lt;option value="Drama"&lt;?php if (isset($genre) && $genre == "Drama") echo " selected"; ?&gt;Drama&lt;/option&gt;
			            					&lt;option value="Family"&lt;?php if (isset($genre) && $genre == "Family") echo " selected"; ?&gt;Family&lt;/option&gt;
			            					&lt;option value="Fantasy"&lt;?php if (isset($genre) && $genre == "Fantasy") echo " selected"; ?&gt;Fantasy&lt;/option&gt;
			            					&lt;option value="Film-Noir"&lt;?php if (isset($genre) && $genre == "Film-Noir") echo " selected"; ?&gt;Film-Noir&lt;/option&gt;
			            					&lt;option value="History"&lt;?php if (isset($genre) && $genre == "History") echo " selected"; ?&gt;History&lt;/option&gt;
			            					&lt;option value="Horror"&lt;?php if (isset($genre) && $genre == "Horror") echo " selected"; ?&gt;Horror&lt;/option&gt;
			            					&lt;option value="Musical"&lt;?php if (isset($genre) && $genre == "Musical") echo " selected"; ?&gt;Musical&lt;/option&gt;
			            					&lt;option value="Mystery"&lt;?php if (isset($genre) && $genre == "Mystery") echo " selected"; ?&gt;Mystery&lt;/option&gt;
			            					&lt;option value="Romance"&lt;?php if (isset($genre) && $genre == "Romance") echo " selected"; ?&gt;Romance&lt;/option&gt;
			            					&lt;option value="Sci-Fi"&lt;?php if (isset($genre) && $genre == "Sci-Fi") echo " selected"; ?&gt;Sci-Fi&lt;/option&gt;
			            					&lt;option value="Sport"&lt;?php if (isset($genre) && $genre == "Sport") echo " selected"; ?&gt;Sport&lt;/option&gt;
			            					&lt;option value="Thriller"&lt;?php if (isset($genre) && $genre == "Thriller") echo " selected"; ?&gt;Thriller&lt;/option&gt;
			            					&lt;option value="War"&lt;?php if (isset($genre) && $genre == "War") echo " selected"; ?&gt;War&lt;/option&gt;
			            					&lt;option value="Western"&lt;?php if (isset($genre) && $genre == "Western") echo " selected"; ?&gt;Western&lt;/option&gt;
			            				&lt;/optgroup&gt;
			            				&lt;optgroup label="Music"&gt;			
			            					&lt;option value="Blues"&lt;?php if (isset($genre) && $genre == "Blues") echo " selected"; ?&gt;Blues&lt;/option&gt;
			            					&lt;option value="Classical"&lt;?php if (isset($genre) && $genre == "Classical") echo " selected"; ?&gt;Classical&lt;/option&gt;
			            					&lt;option value="Country"&lt;?php if (isset($genre) && $genre == "Country") echo " selected"; ?&gt;Country&lt;/option&gt;
			            					&lt;option value="Dance"&lt;?php if (isset($genre) && $genre == "Dance") echo " selected"; ?&gt;Dance&lt;/option&gt;
			            					&lt;option value="Easy Listening"&lt;?php if (isset($genre) && $genre == "Easy Listening") echo " selected"; ?&gt;Easy Listening&lt;/option&gt;
			            					&lt;option value="Electronic"&lt;?php if (isset($genre) && $genre == "Electronic") echo " selected"; ?&gt;Electronic&lt;/option&gt;
			            					&lt;option value="Folk"&lt;?php if (isset($genre) && $genre == "Folk") echo " selected"; ?&gt;Folk&lt;/option&gt;
			            					&lt;option value="Hip Hop/Rap"&lt;?php if (isset($genre) && $genre == "Hip Hop/Rap") echo " selected"; ?&gt;Hip Hop/Rap&lt;/option&gt;
			            					&lt;option value="Inspirational/Gospel"&lt;?php if (isset($genre) && $genre == "Inspirational/Gospel") echo " selected"; ?&gt;Inspirational/Gospel&lt;/option&gt;
			            					&lt;option value="Jazz"&lt;?php if (isset($genre) && $genre == "Jazz") echo " selected"; ?&gt;Jazz&lt;/option&gt;
			            					&lt;option value="Latin"&lt;?php if (isset($genre) && $genre == "Latin") echo " selected"; ?&gt;Latin&lt;/option&gt;
			            					&lt;option value="New Age"&lt;?php if (isset($genre) && $genre == "New Age") echo " selected"; ?&gt;New Age&lt;/option&gt;
			            					&lt;option value="Opera"&lt;?php if (isset($genre) && $genre == "Opera") echo " selected"; ?&gt;Opera&lt;/option&gt;
			            					&lt;option value="Pop"&lt;?php if (isset($genre) && $genre == "Pop") echo " selected"; ?&gt;Pop&lt;/option&gt;
			            					&lt;option value="R&B/Soul"&lt;?php if (isset($genre) && $genre == "R&B/Soul") echo " selected"; ?&gt;R&amp;B/Soul&lt;/option&gt;
			            					&lt;option value="Reggae"&lt;?php if (isset($genre) && $genre == "Reggae") echo " selected"; ?&gt;Reggae&lt;/option&gt;
			            					&lt;option value="Rock"&lt;?php if (isset($genre) && $genre == "Rock") echo " selected"; ?&gt;Rock&lt;/option&gt;
			            				&lt;/optgroup&gt;
			                        &lt;/select&gt;
			                    &lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="year"&gt;Year&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="year" name="year" id="year" value="&lt;?php if (isset($year)) echo $year; ?&gt;"&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr&gt;
			                    &lt;th&gt;&lt;label for="name"&gt;Suggest Item Details&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;textarea name="details" id="details" cols="30" rows="5"&gt;&lt;?php if (isset($details)) echo $details; ?&gt;&lt;/textarea&gt;&lt;/td&gt;
			                &lt;/tr&gt;
			                &lt;tr style="display: none"&gt;
			                    &lt;th&gt;&lt;label for="address"&gt;Email&lt;/label&gt;&lt;/th&gt;
			                    &lt;td&gt;&lt;input type="text" id="address" name="address"&gt;
			                    &lt;p&gt;Please leave this field blank&lt;/p&gt;
			                    &lt;/td&gt;
			                &lt;/tr&gt;
			            &lt;/table&gt;
			            &lt;input type="submit" value="Send" /&gt;
			        &lt;/form&gt;
			        &lt;?php } ?&gt;
			    &lt;/div&gt;
			&lt;/div&gt;
					
			&lt;?php include('Includes/footer.php'); ?&gt;
		</code>
	</pre>
	<hr>


	<h2>Escaping Output</h2>
	<p>ကျွန်တော်တို့ အစောပိုင်းမှာ core principle နှစ်ခုဖြစ်တဲ့ filtering input နဲ့ escaping output အကြောင်းကို ပြောခဲ့ပါတယ်။ ကျွန်တော်တို့ဟာ user ဆီကနေ input ကို filter လုပ်ပြီး data ကို sanitize လုပ်ခဲ့ပါတယ်။ ကျွန်တော်တို့က data က user, file, API or database တစ်ခုခုကလာသည်ဖြစ်စေ ဘယ် external data ရဲ့ content ပေါ်ကိုမှ  မမှီခိုချင်ပါဘူး။ ဒါဟာ browser ကို ဘယ် output ကိုမဆို sending လုပ်ခြင်းကနေ escape ဖြစ်စေပါတယ်။ ကျွန်တော်တို့က အဲ့ဒီ principle ရဲ့ serverity ကို sanitized details variable အစား details field ရဲ့ output အတွက် POST variable ကိုသုံးပြီးတော့ ရေးမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ code ထဲက Additional Details ထဲက if condition ထဲမှာ _POST['details'] လို့ change လိုက်ပါမယ်။ အခုဆိုရင် form ထဲက details field ထဲမှာ simple text အနေနဲ့ရှိနေမှာပါ။ ဒါကို ကျွန်တော်တို့က textarea ထဲမှာ code တစ်ခုခုထည့်လိုက်ရင် သူ့အောက်မှာလာပေါ်ချင်တာပါ။ textarea tag အဖွင့်ဟာ ကျွန်တော်တို့ code ထဲကနေလာတာဖြစ်ပေမယ့် textarea tag အပိတ်နဲ့ malicious headline ကတော့ users တွေ submit လုပ်လိုက်တဲ့ form ကနေလာတာဖြစ်ပါတယ်။ ပြောချင်တာက ကျွန်တော်တို့ရဲ့ text area ထဲမှာ HTML code နဲ့ CSS code တွေရေးပြီး user က form ဖြည့်ပြီး submit လုပ်လိုက်မယ်ဆိုရင် text area ထဲမှာ ရေးခဲ့တဲ့ code အတိုင်း အောက်မှာပေါ်ပေးမှာဖြစ်ပါတယ်။ နောက်တစ်ခုကတော့ malicious person ဟာ သူ့ရဲ့ server ပေါ်က ကျွန်တော်တို့ server ပေါ်က form submission တစ်ခုကို Javascript သုံးပြီး webpage တစ်ခုတည်ဆောက်နိုင်မှာဖြစ်ပါတယ်။ ပြီးတော့ အဲ့ဒီ link ကိုအတိုချုပ်ပြီး mass email တစ်ခုအတွင်းမှာ လူသန်းပေါင်းများစွာဆီကို ပို့ပေးလိုက်မှာဖြစ်ပါတယ်။ အခြားလူတစ်ယောက်ရဲ့ server ပေါ်မှာ running လုပ်နေတဲ့ unsecure contact form တစ်ခုလည်းဖြစ်နိုင်ပါတယ်။ ကံကောင်းစွာပဲ HTML document တစ်ခုအတွင်းမှာ display လုပ်မယ့် escaping output ဟာ PHP မှာဆိုရင် တစ်ကယ်ကို ရိုးရှင်းပါတယ်။ အဲ့ဒါအတွက် htmlspecialchars ဆိုတဲ့ function တစ်ခုရှိပါတယ်။ သူဟာ filter input လိုပဲ အလုပ်လုပ်တာချင်းတူပါတယ်။ ကျွန်တော်တို့ရဲ့ text area ထဲမှာ malicious code ကိုထည့်ပြီး submit လုပ်မယ်ဆိုရင် browser မှာ HTML form တစ်ခုအနေနဲ့ပေါ်မှာပဲဖြစ်ပါတယ်။ </p>
	<p>Example of suggest.php File:</p>
	<pre>
		<code class="html hljs xml">
		&lt;tr&gt;
    		&lt;th&gt;&lt;label for="email"&gt;Suggest Item Details&lt;/label&gt;&lt;/th&gt;
    		&lt;td&gt;&lt;textarea name="details" id="details"&gt;&lt;?php if (isset($details)) echo htmlspecialchars($_POST['details']); ?&gt;&lt;/textarea&gt;&lt;/td&gt;
    	&lt;/tr&gt;
		</code>
	</pre>
	<p>
		<a href="index.php" target="_blank" class="output">The result of above code:</a>
	</p>

</body>
</html>