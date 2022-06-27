<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Environment Variable with PHP</title>
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
            font-family: 'Changa One', sans-serif;
        }
    </style>
</head>
<body>
    

    <h2>Environment Variables</h2>
    <p>ဒီတစ်ခါမှာတော့ Environment Variables တွေအကြောင်းကို ဆွေးနွှေးသွားမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ projects တွေမှာဆိုရင် environments အမျိုးမျိုးကို အသုံးပြုပါတယ်။ ကျွန်တော်တို့ရဲ့ life မှာဆိုရင် eating, sleeping, working နဲ့ playing လုပ်တာတွေကလည်း actions အမျိုးမျိုးအတွက် environments တွေဖြစ်သလို programming မှာလည်း အဲ့ဒီလိုပါပဲ။ ကျွန်တော်တို့ code က reasons အမျိုးမျိုးအတွက် environments အမျိုးမျိုးမှာ run နိုင်ဖို့လိုအပ်ပါတယ်။ ကျွန်တော်တို့ရဲ့ applications တွေကို develop လုပ်မယ်ဆိုရင် new features တွေနဲ့ bugs တွေကို fixing & playing လုပ်မယ့် develop environment or dev environment နဲ့ အလုပ်လုပ်ရပါတယ်။ Dev environment တစ်ခုဆိုတာ mixture of test တစ်ခုနဲ့ production data တွေပါဝင်တဲ့ test database ကိုရည်ညွှန်းတာဖြစ်ပါတယ်။ Production data တွေက production environment နဲ့ closely ဖြစ်တဲ့ conditions တွေအောက်ရှိ application ကို test လုပ်ဖို့ခွင့်ပြုပေးတဲ့အချိန်မှာ test data တွေက application အတွင်းမှာရှိတဲ့ specific scenarios တွေကို test လုပ်ဖို့ ပိုပြီးတော့လွယ်ကူစေအောင် လုပ်ဆောင်ပေးပါတယ်။ တစ်ကယ်လို့ ကျွန်တော်တို့ application က third party services or mail servers နဲ့ human processors ကဲ့သို့သော APIs တွေနဲ့ connect လုပ်မယ်ဆိုရင် အဲ့ဒီ services တွေဟာ ကျွန်တော်တို့ impacting production or incurring additional expense တွေမပါဘဲ request လုပ်နိုင်တဲ့ own test environments or sandboxes တွေရှိပါတယ်။ နောက်ဆုံးမှာ Dev environment ဟာ developers တွေကို quickly access the situation ဖြစ်ဖို့ကူညီပေးတဲ့  additional debugging နဲ့  logging enabled တွေရှိပါတယ်။ ကျွန်တော်တို့ application ကိုလူတွေအသုံးပြုဖို့ web ပေါ်ကိုတင်လိုက်တဲ့အခါ ကျွန်တော်တို့ဟာ production တစ်ခု (သို့) prod environment တစ်ခုအတွင်းမှာ running လုပ်ရပါလိမ့်မယ်။ ဒါကြောင့် ကျွန်တော်တို့အနေနဲ့ prod environment မှာ application ကို ဖြစ်နိုင်သမျှ quickly & smoothly နဲ့ run အောင်ပြုလုပ်ပေးဖို့လိုပါတယ်။ Organizations အများစုက implement လုပ်ထားတဲ့ additional environments တွေကိုလေ့လာကြည့်ရအောင်။ New feature တစ်ခု (သို့) bug တစ်ခုကို issue or task တစ်ခုလို့ရည်ညွှန်းပါတယ်။ အဲ့ဒီ issue or task ကိုတော့ developer က implement or fix လုပ်ပေးရပါတယ်။ အဲ့ဒီမှာ developer က issue ကို resolve လုပ်ဖို့ (သို့) task ကို complete ဖြစ်ဖို့ သူ့ရဲ့ local development environment ကိုအသုံးပြုရပါတယ်။ Fix လုပ်ပြီးတာနဲ့ changes တွေကို sync လုပ်ပြီး version control system တစ်ခုဆီကိုပို့ပေးရပါတယ်။ အဲ့ဒီ changes တွေက Dev လို့ခေါ်တဲ့ shared environment တစ်ခုဆီကို deploy လုပ်လိုက်ပါတယ်။ ဒါဟာ development team ကနေ အလွယ်တကူ review & changes တွေကို test လုပ်နိုင်မှာဖြစ်ပါတယ်။ ကျွန်တော်တို့မှတ်ထားရမှာက dev environment မှာဆိုရင် သူက သူ့ရဲ့ own development services တွေနဲ့ database တွေနဲ့ကို connect လုပ်ရပါတယ်။ အဲ့ဒီမှာ development team က changes တွေလည်းအဆင်ပြေပြီ၊ အလုပ်လည်း ကောင်းကောင်းလုပ်နေပြီဆိုရင် အဲ့ဒီ application ကို နောက်ထပ် environment တစ်ခုဖြစ်တဲ့ Quality Assurance or QA or Testing ဆီပို့လိုက်ပါတယ်။ အဲ့ဒီ QA မှာဆိုရင် QA testers, key users or business stakeholders တွေက access လုပ်ပါတယ်။ အဲ့ဒါတွေစစ်ပြီးလို့အဆင်ပြေပြီဆိုရင်တော့ application ကို production or prod environment ဆီကို deploy လုပ်လိုက်ပါတယ်။ ဒါကတော့ environment variable အကြောင်းပဲဖြစ်ပြီး အချို့မှာဆိုရင် dev, testing နဲ့ prod ဆိုတဲ့ environment နဲ့ပဲ အလုပ်လုပ်သွားတာဖြစ်ပါတယ်။ Developer တစ်ယောက်အနေနဲ့ ကိုယ်ရေးလိုက်တဲ့ application က environment တိုင်းမှာ ကောင်းကောင်းအလုပ်လုပ်နိုင်အောင်ပြုလုပ်ဖို့ လိုအပ်ပါတယ်။ </p>
    <hr>


    <h2>Accessing Environment Variables</h2>
    <p>Variable တစ်ခုဟာ ကျွန်တော်တို့ရဲ့ information တွေကို store လုပ်ဖို့ခွင့်ပြုပေးပါတယ်။ ပြီးတော့ environment ဟာ ကျွန်တော်တို့ရဲ့ code တွေ run မယ့် system တစ်ခုဖြစ်ပါတယ်။ အဲ့ဒီမှာ environment variable တစ်ခုကတော့ ဘယ် system မှာကျွန်တော်တို့ running လုပ်မလဲဆိုတာကို အခြေခံပြီး ပြောင်းလဲပါတယ်။ အဲ့ဒီအတွက်ကြောင့်မို့ ကျွန်တော်တို့ရဲ့ code base ထဲကို environment variable တစ်ခု store မလုပ်ပါဘူး။ အဲ့ဒီအစား system ပေါ်မှာ sort of configuration file အချို့ကိုပဲ store လုပ်ပါမယ်။ Environment variables တွေကို ဘယ် program မှာမဆို အသုံးပြုနိုင်ပါတယ်။ Default အရ set လုပ်ထားတဲ့ environment variables တွေအများကြီးရှိပါတယ်။ ဆိုလိုတာက ကျွန်တော်တို့အနေနဲ့ အဲ့ဒီ variables တွေကို access လုပ်နိုင်ပါတယ်။ phpinfo() ဆိုတဲ့ function ကတော့ ကျွန်တော်တို့ php ထဲမှာရှိတဲ့ information တွေအကုန်လုံးကို ဖော်ပြပေးတာဖြစ်ပါတယ်။ PHP ဘယ် version နဲ့ run နေတယ်ဆိုတာကိုပါဖော်ပြပေးပါတယ်။ အဲ့ဒီမှာဆိုရင် Apache Environment ပေါ်မှာ section တစ်ခုရှိပါတယ်။ အဲ့ဒါတွေကတော့ ကျွန်တော်တို့ default အရပေးထားတဲ့ environment variables တွေဖြစ်ပါတယ်။ Environment variable တစ်ခုကို access လုပ်ဖို့ဆိုရင် getenv() ဆိုတဲ့ function ကို အသုံးပြုရပါတယ်။ ထို့နောက် environment variable ရဲ့ name ကို ကျွန်တော်တို့အသုံးပြုချင်တဲ့နေရာမှာ pass လုပ်ပေးရပါမယ်။ getenv() function ထဲမှာ SCRIPT_NAME ထည့်ပြီး var_dump ထုတ်ကြည့်လိုက်တဲ့အခါ ကျွန်တော်တို့ environment variable ကို တွေ့ရမှာဖြစ်ပါတယ်။ အဲ့ဒီမှာ getenv() ဟာ variable တစ်ခုကို တိုက်ရိုက်ခေါ်ထားတာမဟုတ်တဲ့အတွက် တစ်ကယ်လို့ getenv() ထဲမှာ variable မရှိတာပဲဖြစ်ဖြစ် သူ့ထဲက variable ကို change လုပ်တာပဲဖြစ်ဖြစ်လုပ်မယ်ဆိုရင် getenv() function က false ကို return ပြန်ပေးပါလိမ့်။ တစ်ကယ်လို့ non-existent variable တစ်ခုကိုတိုက်ရိုက်ခေါ်မယ်ဆိုရင် error တက်မှာဖြစ်ပါတယ်။ နောက်ထပ် variables တွေကို code ရဲ့ အပြင်ဘက်မှာထားခြင်းရဲ့ major advantage ကတော့ GitHub လိုမျိုး version control system တစ်ခုထဲကို add လုပ်တဲ့အခါ worry ဖြစ်စရာမလိုတာပါပဲ။ GitHub ပေါ်မှာ passwords တွေကို expose လုပ်ဖို့မလိုပါဘူး။ Environment variables တွေကို code ရဲ့ အပြင်ဘက်မှာ store လုပ်ခြင်းက ကျွန်တော်တို့ production credentials တွေဆီကို တိုက်ရိုက် access လုပ်မယ့် user တွေကို limit လုပ်နိုင်မှာဖြစ်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            var_dump(getenv('SCRIPT_NAME'));    // return string(16) "/AZL/phpinfo.php"
            var_dump(getenv('BLAH'));    // return bool(false)
            echo phpinfo();
        </code>
    </pre>
    <hr>


    <h2>Setting up the Project and Package</h2>
    <p>ဒီသင်ခန်းစာမှာ ကျွန်တော်တို့က Developers Say the Darnedest Things ဆိုတဲ့ simple application ကိုတည်ဆောက်မှာဖြစ်ပါတယ်။ အဲ့ဒီ app မှာဆိုရင် page နှစ်ခုရှိပြီး refresh လုပ်လိုက်တိုင်းမှာလည်း homepage မှာ developer says လုပ်တဲ့အရာကို display လုပ်ပေးပါမယ်။ Contact page မှာဆိုရင် comment or suggestion တစ်ခုကို email ပို့တဲ့ form တစ်ခုရှိပါမယ်။ ကျွန်တော်တို့ app ကို environment variables တွေကို အသုံးပြုသွားမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ SMTP နဲ့ reCAPTCHA တွေအတွက် credentials တွေကို move လုပ်ဖို့ environment variables တွေကို အသုံးပြုသွားမှာဖြစ်ပြီး ၊ quotes တွေအတွက် data source ကို change လုပ်ဖို့လည်း အသုံးပြုသွားမှာဖြစ်ပါတယ်။ ပထမဆုံး environment variables ကို set လုပ်ဖို့လိုပါတယ်။ ဒီလိုလုပ်ဖို့ နည်းလမ်းအများကြီးရှိပေမယ့် အဲ့ဒါတွေအားလုံးကလည်း အဓိကအချက်နှစ်ခုဖြစ်တဲ့ server ပေါ် set လုပ်တာနဲ့ code နဲ့ set လုပ်တာပဲဖြစ်ပါတယ်။ Environment variables တွေရဲ့ အားသာချက်က သူတို့ဟာ ကျွန်တော်တို့ code ထဲမှာ store မလုပ်တာပါပဲ။ Specifying required variables တွေကဲ့သို့သော additional functionality ကို provide လုပ်ပေးတဲ့ packages တွေရှိပါတယ်။ သူတို့ကို server ပေါ်မှာ manage လုပ်ထားတဲ့ environment variables တွေနဲ့ conjunction နေရာတွေမှာ အသုံးပြုနိုင်ပါတယ်။ ကျွန်တော်တို့အနေနဲ့ server ကို ဘယ်လို manage လုပ်မလဲဆိုတာ သိထားဖို့မလိုပါဘူး။ Same environment မှာဆိုရင် သူတို့ကို projects အမျိုးမျိုးမှာ variables အမျိုးမျိုးကို သုံးနိုင်ပါတယ်။ ကျွန်တော်တို့အနေနဲ့ အဲ့ဒီ variables တွေကို version control system တစ်ခု add လုပ်စရာမလိုတဲ့ separate file တစ်ခုအတွင်းမှာ store လုပ်နိုင်ပါတယ်။ ကျွန်တော်တို့ php.env လို့ခေါ်တဲ့ package တစ်ခုကို အသုံးပြုသွားမှာဖြစ်ပါတယ်။ .env files တွေဟာဆိုရင် same across languages တွေဖြစ်ကြပြီး command line ကနေလည်း အသုံးပြုနိုင်ပါတယ်။ ကျွန်တော်တို့အနေနဲ့ composer require vlucas/phpdotenv ဆိုတဲ့ command နဲ့ Composer ကို install လုပ်ပေးရပါမယ်။ ပထမဆုံးအနေနဲ့ ကျွန်တော်တို့သုံးမယ့် .env file က version control system နဲ့ check လုပ်ဖို့မလိုအောင် gitignore ထဲကို add လုပ်ထားသလား စစ်ရပါမယ်။ အဲ့ဒီ command ကတော့ nano .gitignore ပဲဖြစ်ပါတယ်။ ပြီးရင်တော့ nano inc/.env ဆိုပြီး install လုပ်ထားတဲ့ package တွေကို inc folder ထဲကို ထည့်ပေးရပါမယ်။ inc folder ထဲက bootstrap.php file ထဲမှာလည်း autoload.php ကို require လုပ်ပေးထားတာကို တွေ့ရမှာဖြစ်ပါတယ်။ </p>
    <p>Example of bootstrap.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php 
	        require __DIR__.'/../vendor/autoload.php';
	        $dotenv = new Dotenv\Dotenv(__DIR__);
	        $dotenv->load();
        </code>
    </pre>
    <p>Example of index.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            include 'inc/bootstrap.php';
            $pageTitle = "Developers Say the Darndest Things";
            $section = "home";
            require 'inc/header.php';
            ?&gt;
            &lt;div class="wrapper"&gt;
                &lt;?php
                echo getenv('SCRIPT');
                // get each line of file into an array
                $file = file('inc/quotes.txt');
                // grab a random array element
                $quote = $file[array_rand($file)];
                echo '&lt;h1&gt;' . $quote . '&lt;/h1&gt;';
                ?&gt;
            &lt;/div&gt;
            &lt;?php
            include 'inc/footer.php';
            ?&gt;
        </code>
    </pre>
    <hr>


    <h2></h2>
    <p></p>



</body>
</html>