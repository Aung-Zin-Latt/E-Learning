<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integrating PHP with SQL</title>
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
    

    <h2>Getting to Know the Project</h2>
    <p>အခုသင်ခန်းစာမှာတော့ ကျွန်တော်တို့က basic PHP website တစ်ခုကို database တစ်ခုနဲ့ ဘယ်လို connect လုပ်ရမလဲဆိုတာကို လေ့လာသွားမှာဖြစ်ပါတယ်။ ဒီလိုပြုလုပ်ခြင်းဟာ information တွေရုတ်တရက် change လုပ်ချင်တဲ့အခါမှာ ကျွန်တော်တို့ web pages တွေကို dynamically အရ update ဖြစ်သွားမှာဖြစ်ပါတယ်။ PHP ရဲ့ power ကတော့ ကျွန်တော်တို့ဟာ PHP နဲ့ API တစ်ခု (သို့) Database ကဲ့သို့သော data source တစ်ခုကို connect လုပ်လိုက်တဲ့အချိန်ဖြစ်ပါတယ်။ Database တစ်ခုဟာဆိုရင် data တွေကို store လုပ်ဖို့အတွက် design လုပ်ထားခြင်းဖြစ်ပါတယ်။ တစ်ကယ်လို့ ကျွန်တော်တို့ဟာ data တွေကို store လုပ်ဖို့လိုအပ်လာပြီဆိုရင် database ဟာ အကောင်းဆုံးရွေးချယ်မှုပဲဖြစ်ပါတယ်။ ပြီးတော့ နောက်ထပ်အရေးကြီးတဲ့တစ်ခုကတော့ ကျွန်တော်တို့ database ထဲက array တစ်ခုနဲ့ store လုပ်ထားတဲ့ data တွေကို အသုံးပြုချင်တယ်ဆိုရင် အဲ့ဒီ array တစ်ခုလုံးကို include လုပ်ပေးဖို့လိုပါတယ်။ ဥပမာ စဉ်းစားကြည့်မယ်ဆိုရင် ကျွန်တော်တို့က 12 items ကိုလိုချင်တယ်ဆိုရင် ပြသနာမရှိသေးပါဘူး။ ဒါပေမယ့် 1200 items လောက်လိုချင်တယ်ဆိုရင်တော့ page ဟာ slow down ဖြစ်သွားပါမယ်။ အဲ့ဒီ problem အတွက် database ဟာ advanced sorting နဲ့ search capabilities တွေကို provide လုပ်ပေးပါတယ်။ အခု example မှာဆိုရင် media items တွေကို store လုပ်ဖို့အတွက် database တစ်ခုကိုအသုံးပြုသွားမှာ ဖြစ်ပါတယ်။ ဒီလိုပြုလုပ်ခြင်းဖြင့် ကျွန်တော်တို့ application ကို easier & faster ဖြစ်လာစေမှာ ဖြစ်ပါတယ်။ ပြီးတော့ functionality တွေ add လုပ်ဖို့လည်း ပိုပြီးလွယ်ကူစေမှာ ဖြစ်ပါတယ်။ ကျွန်တော်တို့ project မှာ search နဲ့ pagination functionality တွေ ထပ်ထည့်သွားမှာ ဖြစ်ပါတယ်။ အဲ့ဒီ library data တွေကိုသုံးပြီး PHP Data Object (PDO) နဲ့ ဘယ်လို communicate လုပ်ပြီး အသုံးပြုရမလဲဆိုတာ လေ့လာသွားမှာ ဖြစ်ပါတယ်။ PDO ဟာ databases တွေနဲ့ အပြန်အလှန် interact လုပ်ပေးတဲ့ object-oriented methodology ကိုအသုံးပြုပါတယ်။ ကျွန်တော်တို့ဟာ အခု project အတွက် relational database ကိုအသုံးပြုသွားမှာဖြစ်ပါတယ်။ ဘာလို့လဲဆိုရင် ကျွန်တော်တို့ရဲ့ related ဖြစ်နေတဲ့ data တွေကို fit ဖြစ်စေလို့ပဲ ဖြစ်ပါတယ်။ </p>
    <hr>


    <h2>Introducing Objects</h2>
    <p>PHP ရဲ့ version 5.1 မှာ database တစ်ခုနဲ့ connect လုပ်ဖို့အတွက် built-in mechanism တစ်ခုထွက်လာပါတယ်။ အဲ့ဒါကတော့ PHP Data Object လို့ခေါ်တဲ့ PDO ပဲဖြစ်ပါတယ်။ PDO ဟာ SQLite နဲ့ MySQL အပါအဝင် databases တွေအားလုံးနဲ့ ကောင်းစွာအလုပ်လုပ်နိုင်ပါတယ်။ ကျွန်တော်တို့ဟာ PDO object နဲ့ အလုပ်လုပ်မှာ ဖြစ်တဲ့အတွက် objects တွေရဲ့ terminology နဲ့ syntax တွေကို နားလည်ထားဖို့လိုပါတယ်။ Object တစ်ခုဟာ complex variable type တစ်ခုဖြစ်ပါတယ်။ Object ဟာ variables တွေနဲ့ functions တွေကို single unit တစ်ခုဖြစ်အောင် ပေါင်းစည်းပေးပါတယ်။ အဲ့ဒီ variables တွေကို properties လို့ခေါ်ပြီး ၊ အဲ့ဒီ functions တွေကိုတော့ methods တွေလို့ ခေါ်ပါတယ်။ Objects, properties နဲ့ methods တွေကို access လုပ်ဖို့အတွက် hyphen + greater then sign ( ->) ကို အသုံးပြုပါတယ်။ Eg.( $mail -> subject, $mail -> send(); ) ။ အဲ့ဒီမှာဆိုရင် methods တွေဟာ functions တွေလိုပါပဲ။ သူတို့ထဲက parenthesis ထဲမှာ arguments တွေလက်ခံနိုင်ပါတယ်။ နောက်တစ်ခုက PHP မှာ class တစ်ခုဟာ object ရဲ့ type (သို့) object definition တစ်ခုပဲဖြစ်ပါတယ်။ Class ဟာ မည်သည့် class နဲ့ မည်သည့်အရာများတွင်မဆို properties နဲ့ methods တွေရှိမယ်လို့ define လုပ်ပါတယ်။ အဲ့ဒီလိုပဲ PDO ဟာလည်း class တစ်ခုပဲ ဖြစ်ပါတယ်။ သူ့မှာလည်း class က define လုပ်လိုက်တဲ့ properties နဲ့ methods တွေရှိကြပါတယ်။ PDO class ကို instantiate လုပ်တဲ့ object တစ်ခုကို create လုပ်ပြီး database နဲ့ query လုပ်နိုင်ပါတယ်။ </p>
    <p>Definition of an Object:</p>
    <div class="img-size">
        <img src="images/object.png" alt="Definition of Object">
    </div>
    <hr>


    <h2>Getting Started with PDO</h2>
    <p>အခုကျွန်တော်တို့ဟာ objects, methods, properties နဲ့ classes တွေရဲ့ အခြေခံကိုလေ့လာပြီးတဲ့နောက်မှာ PDO class ကိုသုံးပြီး instance object တစ်ခုကို create လုပ်သွားမှာ ဖြစ်ပါတယ်။ ပြီးတော့မှ အဲ့ဒီ object ကိုသုံးပြီး database နဲ့ connect လုပ်မှာ ဖြစ်ပါတယ်။ ကျွန်တော်တို့ရဲ့ project folder ထဲက inc folder ထဲမှာ database နဲ့ connect လုပ်ဖို့ connection.php file ကို create လုပ်လိုက်ပါမယ်။ Object တစ်ခုတည်ဆောက်ဖို့ အရင်ဆုံး variable name(eg. $db) တစ်ခုသတ်မှတ်ရပါမယ်။ အဲ့ဒီ variable ထဲကို value တစ်ခု assign လုပ်ပါမယ်။ new object ကို create လုပ်ဖို့ new ဆိုတဲ့ keyword နဲ့ သူနောက်မှာ class name ကိုသတ်မှတ်ပေးရပါတယ်။ ပြီးရင်တော့ class name နောက်က parenthesis ထဲမှာ arguments တွေကို pass လုပ်နိုင်ပါတယ်။ အခု PDO class မှာဆိုရင် database နဲ့ connect လုပ်ဖို့ လိုအပ်တဲ့ information တွေကို pass လုပ်ရပါမယ်။ အခု example မှာတော့ SQLite ကို အသုံးပြုထားပါတယ်။ သူ့ရဲ့ ချိတ်ဆက်ပုံကိုတော့ PDO drivers မှာ လေ့လာနိုင်ပါတယ်။ SQLite ထဲမှာ PDO_SQLITE ဟာ PHP data object interfacce ကို 3 SQLite databases တွေကို access လုပ်ပေးနိုင်ဖို့အတွက်သုံးတဲ့ driver တစ်ခုဖြစ်ပါတယ်။ ဒီလိုလုပ်ဖို့အတွက် PDO_SQLITE DSN လိုအပ်ပါတယ်။ ဒါကြောင့် ကျါန်တော်တို့မှာ disk ပေါ်က database တစ်ခုက access ဖြစ်ဖို့ SQLite ဆိုတဲ့ data source name လိုအပ်ပါလိမ့်မယ်။ ပြီးနောက် ကျွန်တော်တို့ဟာ DSN prefix ဆီကို absolute path ကို append လုပ်ဖို့လိုပါတယ်။ ဒါကြောင့် PDO class ထဲမှာ "sqlite:" လို့ရေးပြီး သူ့နောက်မှာ full path အစား __DIR__ လို့ခေါ်တဲ့ special magic constant တစ်ခုကို အသုံးပြုပါမယ်။ __DIR__ ဟာ file ဘယ်နားမှာ located ဖြစ်လဲဆိုတဲ့ exact directory ကို ရှာပေးပါတယ်။ ထို့နောက် "/database.db" ဆိုပြီး ရေးပေးရမှာ ဖြစ်ပါတယ်။ </p>
    <p>Example of connection.php File:</p>
    <pre>
        <code class="html hljs xml">
            $db = new PDO("sqlite:" . __DIR__ . "/database.db");
            var_dump($db);
        </code>
    </pre>
    <p>
        <a href="Includes/connection.php" target="_blank" class="output">The result of above code:</a>
    </p>
    <hr>


    <h2>Handling Exceptions</h2>
    <p>ကျွန်တော်တို့ရဲ့ code က external system တစ်ခုကို rely လုပ်တဲ့အချိန်တိုင်း တစ်ခုခုမှားနိုင်တဲ့ အခြေအနေ ရှိနိုင်ပါတယ်။ Database က ပျက်နေရင် ဘယ်လိုလုပ်မလဲ?။ ပြီးတော့ ကျွန်တော်တို့ code ကို ဘယ်လို respond လုပ်သင့်လဲ?။ အဲ့ဒါတွေကိုတော့ exceptions တွေလို့ခေါ်ပြီး ဘယ် code မဆို external system တစ်ခုနဲ့ connect လုပ်မယ်ဆိုရင် သူတို့ကို အမြဲတမ်း handle လုပ်ပေးရပါတယ်။ ဘယ် application တွေမဆို errors တွေကို manage လုပ်ခြင်းဟာ အလွန်အရေးကြီးပါတယ်။ အထူးသဖြင့် database errors တွေဖြစ်လာတဲ့အခါမျိုးမှာ ဖြစ်ပါတယ်။ ကျွန်တော်တို့သိထားရမှာက exceptions တွေဟာ exceptional ဖြစ်ပါတယ်။ ကျွန်တော်တို့အနေနဲ့ ကိုယ်မျှော်လင့်ထားတဲ့ error ဖြစ်လိမ့်မယ်လို့ထင်တဲ့ code ကိုတော့ မသုံးသင့်ပါဘူး။ တစ်ကယ်လို့ code က function ကျကျရှိနေမယ်ဆိုရင် exception တစ်ခုမှ hit ဖြစ်မှာမဟုတ်ပါဘူး။ တစ်ကယ်လို့ code က function က allow မလုပ်တဲ့အရာကို encounter လုပ်မယ်ဆိုရင်တော့ ကျွန်တော်တို့က အဲ့ဒီ exception ကို catch လုပ်ပေးမှာ ဖြစ်ပါတယ်။ PHP မှာ exception တစ်ခုကို handling လုပ်မယ့် block of code ကို try catch block လို့ခေါ်ပါတယ်။ ကျွန်တော်တို့ code ကို execute မလုပ်ခင်မှာ try ဆိုတဲ့ command တစ်ခုထည့်ပေးရပါမယ်။ ပြီးရင်ကျွန်တော်တို့ try လုပ်ချင်တဲ့ code ကို curly bracket ထဲမှာ surround လုပ်ပေးရပါမယ်။ Try block ပြီးသွားရင်တော့ catch command ကိုထည့်ပေးရမှာ ဖြစ်ပါတယ်။ တစ်ကယ်လို့ Exception တစ်ခုတွေမယ်ဆိုရင် PHP က catch block ထဲက code ကိုပဲ execute လုပ်ပေးမှာ ဖြစ်ပါတယ်။ catch ရဲ့နောက်မှာတော့ parenthesis တစ်ခုနဲ့ သူ့ထဲမှာ Exception $e ဆိုပြီးထည့်ပေးရပါမယ်။ Exception ကိုတွေ့ပြီဆိုရင် အဲ့ဒီ exception တစ်ခုက catch block မှာ pass လုပ်သွားမှာ ဖြစ်ပါတယ်။ ဒါဟာ PHP ရဲ့ object တစ်ခုကို instantiate လုပ်တဲ့ native exception class တစ်ခုပဲ ဖြစ်ပါတယ်။ Exception ကို catch block ထဲကို pass လုပ်သွားတဲ့ နည်းလမ်းဟာ argument တစ်ခုက function ထဲကို pass လုပ်သွားတာနဲ့ တူတူပါပဲ။ Catch block အတွင်းမှာတော့ variable $e ဟာ exception ရဲ့ details တွေ ပါဝင်မှာဖြစ်ပါတယ်။ ပြီးရင်တော့ curly bracket ထဲမှာ exception တစ်ခုဖြစ်နေပါတယ်ဆိုတဲ့ message တစ်ခုကို display လုပ်ပေးမှာ ဖြစ်ပါတယ်။ နောက်ပြီး ဘယ် code ကိုမှာ execute မလုပ်တော့ဖို့အတွက် exit ဆိုတဲ့ command ကို catch block ထဲမှာ ရေးပေးရမှာ ဖြစ်ပါတယ်။ </p>
    <p>Example of connection.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            try {
                $db = new PDO("sqlite:" . __DIR__ . "/database.db");
                var_dump($db);
            } catch (Exception $e) {
                echo "Unable to connect";
                exit;
            }

            echo "Connected to the database";

        </code>
    </pre>
    <p>
        <a href="Includes/connection.php" target="_blank" class="output">The result of above code:</a>
    </p>
    <hr>



    <h2>More Exceptions</h2>
    <p>ကျွန်တော်တို့ဟာ exceptions တွေနဲ့ပတ်သတ်ပြီး ပိုပြီး details ကျအောင် ပြုလုပ်သွားမှာ ဖြစ်ပါတယ်။ တစ်ကယ်လို့ တစ်ခုခုမှားသွားခဲ့ရင် ကျွန်တော်တို့က information တွေကို ဖြစ်နိုင်သလောက် ထုတ်ပြချင်တာဖြစ်ပါတယ်။ ဒီလိုမှသာ အဲ့ဒီ problem ကို မြန်မြန်ဆန်ဆန် diagnose & fix လုပ်နိုင်မှာ ဖြစ်ပါတယ်။ PHP ရဲ့ exceptions တွေကို <a href=https://www.php.net/manual/en/language.exceptions.extending.php" target="_blank">Extending Exceptions</a> မှာ လေ့လာနိုင်ပါတယ်။ ကျွန်တော်တို့ အခုအသုံးပြုချင်တဲ method ကတော့ getMessage() ပဲဖြစ်ပါတယ်။ သူဟာ ဘာမှားနေတာလဲဆိုတာကို detail ကျတဲ့ message တစ်ခုနဲ့ ပြပေးပြီး အဲ့ဒီ message ကို string တစ်ခုအနေနဲ့ return ပြန်ပေးပါတယ်။ Method တစ်ခုဟာ function တစ်ခုလိုပဲ function or method တစ်ခုကို call လုပ်တာဖြစ်တဲ့အတွက် သူ့နောက်မှာ parenthesis ထည့်ပေးရပါမယ်။ နောက်ဆုံးတစ်ခုကတော့ PDO object ကိုယ်တိုင်ပေါ်မှာရှိတဲ့ command တစ်ခု (သို့) method တစ်ခုဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ ဖြစ်လာတဲ့ ဘယ် issue မဆို silence လုပ်မယ့်အစား exception တစ်ခု (သို့) warning တစ်ခုအနေနဲ့ throw လုပ်မှာဖြစ်ပါတယ်။ တစ်ကယ်လို့ issue တစ်ခုရှိရင် သိနိုင်မယ်။ သိရင် သူတို့ကို မြန်ဆန်စွာ fix လုပ်နိုင်မှာ ဖြစ်ပါတယ်။ ဒါဟာ exception handling ရဲ့ သဘောတရားပဲဖြစ်ပါတယ်။ နောက်ပြီးတော့ ကျွန်တော်တို့က PDO class တစ်ခု ထပ်ပြီးလိုအပ်ပါမယ်။ PHP ရဲ့ PDO class တွေကို <a href="https://www.php.net/manual/en/class.pdo.php" target="_blank"> php.net</a> မှာ လေ့လာနိုင်ပါတယ်။ အဲ့ဒီ classes တွေထဲက setAttribute() ဆိုတဲ့ class ကို attribute တစ်ခု set လုပ်ဖို့အတွက် အသုံးပြုသွားမှာ ဖြစ်ပါတယ်။ serAttribute() ထဲမှာတော့ PDO::ATTR_ERRMODE နဲ့ PDO:ERRMODE_EXCEPTION ဆိုတဲ့ argument နှစ်ခုကို ထည့်သွားမှာဖြစ်ပါတယ်။ ဒါဆိုရင်တော့ ကျွန်တော်တို့ရဲ့ catalog အတွက် SQLite database တစ်ခုရလာမှာ ဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ PDO class ရဲ့ object တစ်ခုကိုသုံးပြီး database ကို connect လုပ်လိုက်တာပဲဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ တက်လာမယ့် error ကို try catch block နဲ့ စစ်ခဲ့တာဖြစ်ပါတယ်။ အခုဆိုရင်တော့ database ထဲက data တွေကို retrieve လုပ်ဖို့ ready ဖြစ်ပါပြီ။ </p>
    <p>Example of connection.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            try {
                $db = new PDO("sqlite:" . __DIR__ . "/database.db");
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(Exception $e) {
                echo "Unable to connect";
                echo $e->getMessage();
                exit;
            }

            echo "Connected to the database";
        </code>
    </pre>
    <hr>


    <h2>Querying the Database</h2>
    <p>ဒီသင်ခန်းစာမှာတော့ ကျွန်တော်တို့က database ထဲက data တွေကို retrieve လုပ်သွားမှာ ဖြစ်ပါတယ်။ အဲ့ဒီ data ကိုတော့ associative array တစ်ခုထဲကို place လုပ်ထားပါမယ်။ ပထမဆုံး results အားလုံးကို ဆွဲထုတ်ပြီးတော့ အဲ့ဒီ results တွေကို array နဲ့ populate လုပ်ပါမယ်။ ထိုနောက် ကျွန်တော်တို့ရဲ့ functions တွေနဲ့ ကျွန်တော်တို့ အလုပ်လုပ်ချင်တဲ့ specific data ကိုပဲ ဆွဲထုတ်မှာ ဖြစ်ပါတယ်။ ဥပမာ Home page ကို refresh လုပ်တိုင်း random items လေးခုကို show လုပ်ချင်တာပါ။ ကျွန်တော်တို့ဟာ smaller ဖြစ်တဲ့ subset of data နဲ့စပြီးအသုံးပြုခြင်းက memory consumption ကို လျှော့ချပေးနိုင်ပြီး၊ speed ကိုလည်း တိုးစေမှာဖြစ်ပါတယ်။ Performance ကလည်း တစ်ကယ်ကိုကောင်းလာမှာ ဖြစ်ပါတယ်။ တစ်ကယ်လို့ ကျွန်တော်တို့ site က loading လုပ်တာကြာနေရင်တော့ visitors တွေက လာကြည့်ချင်မှာ မဟုတ်တော့ပါဘူး။ Database တစ်ခုထဲက information တွေအားလုံးကိုလိုချင်တဲ့အခါ အသုံးပြုတဲ့ command ကတော့ SELECT ပဲဖြစ်ပါတယ်။ Select statement တစ်ခုဆိုတာ database ထဲက data အချို့ကို select လုပ်ဖို့သုံးတဲ့ query တစ်ခုပဲဖြစ်ပြီး results တွေကိုလည်း return ပြန်ပေးပါတယ်။ အဲ့ဒီ queries တွေလုပ်ဆောင်ဖို့အတွက် PDO ကို ဘယ်လိုသုံးရမလဲဆိုတာ ကြည့်ရအောင်။ တစ်ခုမှတ်ထားရမှာကတော့ ကျွန်တော်တို့ဟာ တစ်ခုခုမှားသွားခဲ့ရင် အဲ့ဒီ errors တွေကို catch လုပ်ဖို့အတွက် အမြဲတမ်းပြင်ဆင်ထားသင့်ပါတယ်။ ကျွန်တော်တို့ site visitor တွေကို simple explanation တစ်ခုတော့ ပေးရပါမယ်။ ဒါမှသာလျှင် ဘယ်နားလေးက ဘာ error တက်နေပါတယ်ဆိုတာကို အလွယ်တကူသိနိုင်မှာဖြစ်ပါတယ်။ ဒါဟာ database လိုမျိုး external system တစ်ခုနဲ့ interact လုပ်မယ်ဆိုရင် တစ်ကယ်ကို အသုံးဝင်မှာဖြစ်ပါတယ်။ အခု items တွေကို retrieve လုပ်မယ့် query ကို run ပါမယ်။ အဲ့ဒီမှာ ကျွန်တော်တို့ create လုပ်ခဲ့တဲ့ database object က    အခုလို query run ဖို့ method တစ်ခုပါဝင်ပါတယ်။ အဲ့ဒါကတော့ query method ပဲဖြစ်ပါတယ်။ Query method မှာ argument တစ်ခုပဲ ပါဝင်ပြီး ကျွန်တော်တို့ run ချင်တဲ့ query statement တစ်ခုပဲဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ အဲ့ဒီ query ကို method ထဲမှာ string တစ်ခုအဖြစ် pass လုပ်ခဲ့ပါတယ်။ ဒါကြောင့် query() ထဲမှာ double quote ထည့်ပေးရပါမယ်။ ပြီးရင်တော့ SELECT statement နဲ့ ကျွန်တော်တို့လိုချင်တဲ့ data ကို ဆွဲထုတ်နိုင်ပါတယ်။ ထို့နောက် query လုပ်ထားတဲ့ return value ကို $result ဆိုတဲ့ variable ထဲကိုထည့်ပြီး အဲ့ဒီ variable ကို database က return ပြန်မယ့် data ကို access လုပ်ဖို့အတွက် အသုံးပြုနိုင်ပါတယ်။ </p>
    <p>Example of connection.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            try {
                $db = new PDO("sqlite:" . __DIR__ . "/database.db");
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(Exception $e) {
                echo "Unable to connect";
                //echo $e->getMessage();
                exit;
            }

            try {
                $results = $db->query("SELECT title, category, img FROM Media");
                echo "Retrieved Results";
            } catch (Exception $e) {
                echo "Unable to retrieve results";
                exit;
            }
        </code>
    </pre>
    <hr>


    <h2>Retrieving the Result Set</h2>
    <p>ကျွန်တော်တို့မှာ database နဲ့ ချိတ်ဆက်ပြီးတော့ query တစ်ခုကို run ထားတဲ့ code တစ်ခုရှိပါတယ်။ အခု အဲ့ဒီ results တွေကို retrieve လုပ်သွားမှာဖြစ်ပါတယ်။ သူတို့ကို variable $results ထဲမှာ ထည့်ထားတာဖြစ်ပါတယ်။ ဒါပေမယ့် အဲ့ဒီ variable က ကျွန်တော်တို့ထင်သလို array တစ်ခုတော့ မဟုတ်ပါဘူး။ အမှန်တကယ်က $results ဟာ PHP object အမျိုးအစားအသစ်တစ်ခုပဲ ဖြစ်ပါတယ်။ အခုကျွန်တော်တို့က $result variable ကို var_dump နဲ့ထုတ်ကြည့်မယ်ဆိုရင် အဲ့ဒီ variable ဟာ object တစ်ခုဖြစ်နေတာကို တွေ့ရမှာပါ။ သူဟာ PHP Mailer class ထဲက object တစ်ခုမဟုတ်သလို PDO class ထဲက object တစ်ခုလည်းမဟုတ်ပါဘူး။ သူဟာ PDO statement object တစ်ခုပဲဖြစ်ပါတယ်။ အဲ့ဒီမှာ မှတ်ထားရမှာက PHPမှာ object တစ်ခုဆိုတာ collection of variables တစ်ခုဖြစ်ဖြစ်ပြီး properties တွေလို့လည်းခေါ်ပြီး functions တွေကိုတော့ methods တွေလို့ခေါ်တယ်ဆိုတာကိုပါ။ အဲ့ဒီ object မှာ queryString ဆိုတဲ့ property တစ်ခုရှိပါတယ်။ ဒါပေမယ့် အဲ့ဒီ object ဟာ ဘာ method လဲ?။ PDO statement ဟာ PHP မှာ native class တစ်ခုဖြစ်ပါတယ်။ PDO statement ဟာ prepare statement တစ်ခုကို ကိုယ်စားပြုပါတယ်။ ပြီးတော့ အဲ့ဒီ statement ကို executed & associated လုပ်ပြီး result ကိုထည့်ပေးပါတယ်။ အဲ့ဒီ methods တွေထဲကမှ အခု project အတွက် fetchAll() ကိုအသုံးပြုမှာဖြစ်ပါတယ်။ သူဟာ result set rows တွေအားလုံးပါတဲ့ array တစ်ခုအနေနဲ့ return ပြန်ပေးပါတယ်။ တစ်နည်းအားဖြင့် database ထဲက data တွေက array တစ်ခုထဲကို organize လုပ်လိုက်တာပါ။ ကျွန်တော်တို့က fetchAll() method နဲ့ထုတ်လိုက်မယ်ဆိုရင်တော့ database ထဲမှာရှိတဲ့ data တွေကို array တစ်ခုနဲ့ display လုပ်ထားတာကို တွေ့ရမှာပါ။ </p>
    <p>Example of connection.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            try {
                $db = new PDO("sqlite:" . __DIR__ . "/database.db");
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(Exception $e) {
                echo "Unable to connect";
                echo $e->getMessage();
                exit;
            }

            try {
                $results = $db->query("SELECT title, category, img FROM Media");
            } catch (Exception $e) {
                echo "Unable to retrieve results";
                exit;
            }

            // Retrieving the result set => fetchAll
            var_dump($results->fetchAll());
        </code>
    </pre>
    <hr>


    <h2>Working with Query Results</h2>
    <p>ပြီးခဲ့တဲ့သင်ခန်းစာမှာ ကျွန်တော်တို့ရဲ့ PDO object ပေါ်မှာ fetchAll() method ကိုသုံးပြီး database ထဲက data တွေကို array တစ်ခုအနေနဲ့ထုတ်ပြခဲ့တာဖြစ်ပါတယ်။ အခု fetchAll() ရဲ့ Docs ကိုသွားပြီး ကျွန်တော်တို့ catalog array နဲ့ ပိုပြီး match ဖြစ်အောင် query ကို modify လုပ်ပါမယ်။ ကျွန်တော်တို့ fetchAll() method နဲ့လုပ်လိုက်တဲ့ data တွေက view page source မှာ multi-dimensional array တစ်ခုအနေနဲ့  item တစ်ခုချင်းစီအတွက် element တစ်ခုနဲ့အတူ return ပြန်ပေးထားတာတွေ့ရမှာပါ။ Item တစ်ခုချင်းစီမှာလည်း item attributes တစ်ခုချင်းစီအတွက် element တစ်ခုနဲ့ secondary array တစ်ခုပါဝင်နေပါမယ်။ အဲ့ဒီမှာ data တစ်ခုချင်းစီက နှစ်ခါထပ်ပြနေတာကို သတိထားမိမှာပါ။ တစ်ခုက associative key တစ်ခုနဲ့ဖြစ်ပြီး တစ်ခုက integer key တစ်ခုနဲ့ဖြစ်ပါတယ်။ ဒါဟာကျွန်တော်တို့အနေနဲ့ data တွေနဲ့အလုပ်လုပ်တဲ့အခါ ရှုပ်ထွေးစေပါတယ်။ ဒါကို fix လုပ်ဖို့အတွက် fetchAll() ထဲက fectch_style ကို အသုံးပြုပါမယ်။ fetch_styleဟာ return ပြန်လိုက်တဲ့ array ရဲ့ content တွေက ဘာလဲဆိုတာကို control လုပ်ပေးပါတယ်။ fetch_style ရဲ့ default ကတော့ FETCH_BOTH ပဲဖြစ်ပါတယ်။ FETCH_BOTH style ဟာ column name နဲ့ index ထောက်ထားတဲ့ array တစ်ခု နဲ့ 0-indexed column number ကို return ပြန်ပေးပါတယ်။ နောက်တစ်ခု FETCH_NUM ဆိုတာရှိပါသေးတယ်။ သူကတော့ array တစ်ခုကို column number နဲ့ return ပြန်ပေးပါတယ်။ Single arrow(->) ဟာ actual object နဲ့ property or method ကိုသွားတာဖြစ်ပါတယ်။ Classes တွေမှာ class ရဲ့ actual instantiation တစ်ခုတောင်မလိုတဲ့ properties နဲ့ methods တွေရှိနိုင်ပါတယ်။ ဒါကြောင်း :: နဲ့ရေးထားတာဖြစ်ပြီး left ဘက်က class name ၊ right ဘက်က property or method အနေနဲ့ going လုပ်ပါတယ်။ ကျွန်တော်တို့မှာ တိကျတဲ့ class တစ်ခုရှိတယ်ဆိုရင် single arrow ကိုသုံးပြီး၊ ကျွန်တော်တို့က property or method တစ်ခုကို class ကိုယ်တိုင်က call လုပ်ချင်ရင် double colon(::) ကိုအသုံးပြုရပါတယ်။ ပြီးတော့ FETCH_ASSOC ဟာ column name နဲ့ index ထောက်ပြီး array တစ်ခုကို return ပြန်ပေးပါတယ်။ ASSOC ဆိုတာ associative လို့ခေါ်တာဖြစ်ပြီး associative array တစ်ခုအဖြစ် အလုပ်လုပ်ပါတယ်။ သူ့ကို အခု ကျွန်တော်တို့ရဲ့ catalog array အတွက်သုံးမှာဖြစ်ပါတယ်။ နောက်တစ်ခုကတော့ image URL ကို modify လုပ်မှာဖြစ်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            try {
                $db = new PDO("sqlite:" . __DIR__ . "/database.db");
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(Exception $e) {
                echo "Unable to connect";
                //echo $e->getMessage();
                exit;
            }

            try {
                $results = $db->query("SELECT title, category, img FROM Media");
            } catch (Exception $e) {
                echo "Unable to retrieve results";
                exit;
            }

            // Retrieving the result set => fetchAll
            // Working query results with fetch_style => PDO::FETCH_ASSOC
            var_dump($results->fetchAll(PDO::FETCH_ASSOC));
        </code>
    </pre>
    <hr>


    <h2>Integrating Database Results</h2>
    <p>ကျွန်တော်တို့မှာ database ထဲကနေ item ရဲ့ information တွေကို retrieve လုပ်ဖို့ လိုအပ်တဲ့ code ရှိပါတယ်။ အဲ့ဒီ results တွေကို ကျွန်တေ်ာတို့ရဲ့ media items မှာ display လုပ်ရမှာဖြစ်ပါတယ်။ ဒါပေမယ့် simple array တစ်ခုအစား database တစ်ခုကိုသုံးဖို့ site ကို changing လုပ်ခြင်းဟာ အစကနေတစ်ခုချင်း ပြန်ရေးနေရသလိုဖြစ်နေပါလိမ့်မယ်။ တစ်ကယ်က မဟုတ်ပါဘူး။ ကျွန်တော်တို့ original data.php file ထဲမှာ catalog information တွေပါတဲ့ array တစ်ခုရှိပါတယ်။ ကျွန်တော်တို့လုပ်ရမှာက database ကနေ catalog information တွေကို pull လုပ်ပြီး data.php file ကို update လုပ်ပေးရမှာဖြစ်ပါတယ်။ အဲ့ဒါပြီးရင်တော့ ကျွန်တော်တို့ရဲ့ functions တွေကို database ကနေ data တွေကို ပိုပြီးအသုံးပြုလို့ကောင်းအောင် update လုပ်မှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ရဲ့ functions file ထဲမှာ catalog information တွေကို တွက်ထုတ်ဖို့အတွက် code တွေရှိပြီး site ထဲကို add လုပ်မှာဖြစ်ပါတယ်။ data.php file ထဲမှာတော့ data တွေပါဝင်နေပါတယ်။ ဒါဟာ separating concerns လို့ခေါ်တဲ့ programming concept တစ်ခုပဲဖြစ်ပါတယ်။ Separating concerns လုပ်ရခြင်းရဲ့ အကျိုးကျေးဇူးကတော့ ကျွန်တော်တို့အနေနဲ့ major changes တွေကို အခြား area တွေ effect မဖြစ်စေဘဲ just one area တစ်ခုတည်းနဲ့ ပြုလုပ်နိုင်မှာဖြစ်ပါတယ်။ </p>
    <p>Example of data.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            include("connection.php");

            /*
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
            */
        </code>
    </pre>
    <p>Example of connection.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt?php

            try {
                $db = new PDO("sqlite:" . __DIR__ . "/database.db");
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(Exception $e) {
                echo "Unable to connect";
                //echo $e->getMessage();
                exit;
            }

            try {
                $results = $db->query('SELECT title, category, img FROM Media');
            } catch (Exception $e) {
                echo "Unable to retrieve results";
                exit;
            }

            // Retrieving the result set => fetchAll
            // Working query results with fetch_style => PDO::FETCH_ASSOC
            $catalog = $results->fetchAll(PDO::FETCH_ASSOC);
        </code>
    </pre>
    <hr>


    <h2>Improve with Refactoring</h2>
    <p>အခုကျွန်တော်တို့မှာ catalog page နဲ့ အလုပ်လုပ်ဖို့အတွက် data.php နဲ့ functions.php file နှစ်ခုကို include လုပ်ထားပါတယ်။ functions.php file က catalog ကို read လုပ်ဖို့အတွက် အလုပ်လုပ်ပြီး items တွေကို web page ဆီကို adding လုပ်ပေးပါတယ်။ ကျွန်တော်တို့ data.php file ကတော့ connection file နဲ့ include လုပ်ထားပါတယ်။ အခုကျွန်တော်တို့ရဲ့ function file ကို connection နဲ့ include လုပ်ဖို့ change လုပ်လိုက်ပါမယ်။ ပြီးတော့ functions.php file ထဲမှာ database ကနေ query နဲ့ဆွဲထုတ်ထားတဲ့ code တွေကို function အသစ်တစ်ခုနဲ့ create လုပ်ပေးလိုက်ပါမယ်။ ဒါဟာ code ကို duplicate ဖြစ်တာနည်းစေပြီးတော့ maintain လုပ်ရတာလည်း ပိုပြီးလွယ်ကူမှာ ဖြစ်ပါတယ်။ ကျွန်တော်တို့ connection.php file ထဲမှာ database ကို query လုပ်လိုက်တိုင်း PHP data object လို့ခေါ်တဲ့ PDO object နဲ့ instantiate လုပ်ရပါတယ်။ အဲ့ဒီ $db ဆိုတဲ့ variable နဲ့ ကျွန်တော်တို့ query လုပ်ချင်တဲ့နေရာတိုင်း include လုပ်နိုင်ပါတယ်။ ပြီးတော့ $results ကို fetchAll() နဲ့ ထုတ်ပြထားတဲ့ block of code ကို cut လုပ်ပြီး functions.php file ထဲကိုသွားပြီး function အသစ်တစ်ခုဆောက်ကာ code ကို paste လုပ်ပါမယ်။ ပြီးရင်တော့ function ရဲ့ သဘောတရားအရ $results ကို return ပြန်ပေးရပါမယ်။ နောက်ဆုံးလုပ်ရမှာကတော့ index.php file ထဲက data.php include လုပ်ထားတာကို remove လုပ်ရပါမယ်။ အဲ့လို remove လုပ်လိုက်တဲ့အတွက် ကျွန်တော်တို့က catalog array ရဖို့ full_catalog_array ဆိုတဲ့ function ကိုခေါ်ပေးရပါမယ်။ အဲ့ဒီ function ကို data.php file ခေါ်တဲ့နေရာတိုင်း လိုက်ထည့်ပေးရမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ အခုလိုလုပ်တာကို refactoring လုပ်တယ်လို့ခေါ်ပါတယ်။ Code refactoring ဆိုတာ process တစ်ခုကို restructure လုပ်လိုက်တာဖြစ်ပြီး သူ့ရဲ့ external behavior ကိုမပြောင်းဘဲ existing code ကိုပဲ improve လုပ်လိုက်တာဖြစ်ပါတယ်။ </p>
    <p>Example of connection.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            try {
                $db = new PDO("sqlite:" . __DIR__ . "/database.db");
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(Exception $e) {
                echo "Unable to connect";
                echo $e->getMessage();
                exit;
            }
        </code>
    </pre>
    <p>Example of functions.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            // improve with refactoring
            function full_catalog_array() {
                include("connection.php");
            
                try {
                    $results = $db->query('SELECT title, category, img FROM Media');
                } catch (Exception $e) {
                    echo "Unable to retrieve results";
                    exit;
                }

                // Retrieving the result set => fetchAll
                // Working query results with fetch_style => PDO::FETCH_ASSOC
                $catalog = $results->fetchAll(PDO::FETCH_ASSOC);
                return $catalog;
            }

            function get_item_html ($id, $item) {
                $output = "&lt;li&gt;&lt;a href='details.php?id="
                    . $id . "'&gt;&lt;img src='" 
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

            ?>
        </code>
    </pre>
    <p>Example of index.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            include("Includes/functions.php");

            // improve with refactoring
            $catalog = full_catalog_array();

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
    <p>Example of details.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            include("Includes/functions.php");

            // improve with refactoring
            $catalog = full_catalog_array();

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
    <p>Example of catalog.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            include("Includes/functions.php");

            // improve with refactoring
            $catalog = full_catalog_array();

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
                            echo "&lt;a class='full-catalog' href='catalog.php'&gt; Full Catalog&lt;/a&gt; &gt; ";
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


    <h2>Understanding Relationship Tables</h2>
    <p>ယနေ့ခေတ်အသုံးပြုနေတဲ့ main database model နှစ်ခုရှိပါတယ်။ အဲ့ဒါတွေကတော့ Relational နဲ့ no SQL တို့ပဲဖြစ်ပါတယ်။ ကျွန်တော်တို့ရဲ့ data structure က tables တွေနဲ့ rows တွေထဲကို fit ဖြစ်နေမယ်ဆိုရင် relational database တစ်ခုဟာ လွယ်ကူပြီးတော့ robust ဖြစ်တဲ့ interaction လုပ်နိုင်တဲ့ data တွေကိုပေးပါလိမ့်မယ်။ ကျွန်တော်တို့အနေနဲ့ arrays တွေထဲမှာ store လုပ်ထားမယ်ဆိုရင် (သို့) Json objects တွေနဲ့ store လုပ်ထားမယ်ဆိုရင် အဲ့ဒီ object တစ်ခုချင်းစီအတွက် fields တွေအမျိုးမျိုးတောင် ရှိနိုင်ပါတယ်။ ဒါဟာ ကျွန်တော်တို့ no SQL database ကိုသုံးတဲ့အခါမှာ ကောင်းမွန်တဲ့အချက်တစ်ခုဖြစ်ပါတယ်။ အခု ကျွန်တော်တို့ project အတွက် relational database တစ်ခုဖြစ်တဲ့ SQLite ကိုအသုံးပြုမှာ ဖြစ်ပါတယ်။ Relational database တစ်ခုဆိုတာ relationships တွေအားလုံးနဲ့ ပတ်သတ်တဲ့အရာပဲဖြစ်ပါတယ်။ Database တစ်ခုအတွင်းက relational database တစ်ခုမှာ relationships ရဲ့ type သုံးခုရှိပါတယ်။ အဲ့ဒါတွေကတော့ one to one, many to one နဲ့ many to many တို့ပဲဖြစ်ပါတယ်။ </p>
    <hr>


    <h2>Querying Multiple Tables with JOIN</h2>
    <p>အခုလက်ရှိမှာ ကျွန်တော်တို့ရဲ့ full catalog array function က array တစ်ခုကို title, category နဲ့ image ဆိုပြီး သုံးခုကို return ပြန်ပေးထားပါတယ်။ တစ်ကယ်လို့ ကျွန်တော်တို့က details page ကိုနှိပ်လိုက်တဲ့အခါ ကျွန်တော်တို့အနေနဲ့ အခြား tables တွေဆီက specific item တွေပါတဲ့ information တွေကို ဆွဲထုတ်ဖို့လိုအပ်ပါတယ်။ ဒီလိုလုပ်ဖို့ဆိုရင်တော့ ကျွန်တော်တို့က JOIN ကိုအသုံးပြုရမှာဖြစ်ပါတယ်။ JOIN ဆိုတာကတော့ tables အများကြီးထဲက data တွေကို အတူတကွ combining or joining လုပ်တဲ့ method တစ်ခုပဲဖြစ်ပါတယ်။ ဒီလိုလုပ်ဖို့အတွက် functions.php ထဲမှာ နောက်ထပ် function တစ်ခု create လုပ်ရမှာဖြစ်ပါတယ်။ အဲ့ဒီမှာ ကျွန်တော်တို့လိုချင်တဲ့ specific data တွေကို query နဲ့ ရေးပေးရမှာဖြစ်ပါတယ်။ Table နှစ်ခုရဲ့ relationship ကိုချိတ်မယ်ဆိုရင် JOIN method ကိုအသုံးပြုရပါတယ်။ JOIN &lt;table&gt; ON table1.table_id = table2.table_id ဆိုပြီး ချိတ်ပေးရမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ books table ထဲက details ကို select လုပ်ဖို့အတွက် OUTER JOIN ကိုလည်း အသုံးပြုမှာဖြစ်ပါတယ်။ အခုကျွန်တော်တို့ဟာ database ထဲက items တွေအားလုံးကိုလိုချင်တာမဟုတ်ဘဲ single item တစ်ခုကိုပဲ select လုပ်ချင်တာဖြစ်တဲ့အတွက် လိုချင်တဲ့ item ကို function ထဲကို pass လုပ်ပေးရမှာဖြစ်ပါတယ်။ ဒါကြောင့် single_item_array() function ထဲမှာ $id ကို pass လုပ်ပေးရမှာဖြစ်ပါတယ်။ </p>
    <p>Example of functions.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            // improve with refactoring
            function full_catalog_array() {
                include("connection.php");
            
                try {
                    $results = $db->query('SELECT media_id, title, category, img FROM Media');
                } catch (Exception $e) {
                    echo "Unable to retrieve results";
                    exit;
                }

                // Retrieving the result set => fetchAll
                // Working query results with fetch_style => PDO::FETCH_ASSOC
                $catalog = $results->fetchAll(PDO::FETCH_ASSOC);
                return $catalog;
            }

            // Querying Multiple Tables with JOIN
            function single_item_array($id) {
                include("connection.php");
            
                try {
                    $results = $db->query("SELECT Media.media_id, title, category, img, format, year, genre, publisher, isbn
                    FROM Media
                    JOIN Genres ON Media.genre_id = Genres.genre_id 
                    LEFT OUTER JOIN Books ON Media.media_id = Books.media_id 
                    WHERE Media.media_id = $id");
                } catch (Exception $e) {
                    echo "Unable to retrieved results";
                    exit;
                }
            
                $catalog = $results->fetch();
                return $catalog;
            }
            var_dump(single_item_array(1));

            function get_item_html ($id, $item) {
                $output = "&lt;li&gt;&lt;a href='details.php?id="
                    . $id . "'&gt;&lt;img src='" 
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
    <hr>


    <h2>Understanding SQL Injections</h2>
    <p> အခု ကျွန်တော်တို့ရဲ့ single_item_array() function ထဲမှာ $id ကို attribute တစ်ခုအဖြစ် accept လုပ်ဖို့အတွက် ထည့်ခဲ့တာဖြစ်ပါတယ်။ အဲ့ဒီ $id ဟာ ကျွန်တော်တို့ browser ထဲက query string ကနေလာတာဖြစ်ပါတယ်။ တစ်ကယ်လို့ တစ်ယောက်ယောက်က details.php?id=1 ကို ရိုက်ပြီး visit လုပ်လိုက်မယ်ဆိုရင် ကျွန်တော်တို့ code က single_item_array() function ထဲကို pass ဖြစ်သွားပါမယ်။ အဲ့ကျမှ function က database ထဲက data တွေကို query လုပ်ပြီး အသုံးပြုလိုက်ပါတယ်။ ဒါပေမယ့် visitor က web address ကို ဥပမာ details.php?id=2;DROP TABLE Media လို့ရိုက်မယ်ဆိုရင် အဲ့ဒီ string က ကျွန်တော်တို့ရဲ့ SELECT query ထဲကို execute မလုပ်ခင် ဝင်သွားမှာဖြစ်ပါတယ်။ အဲ့ဒီ ဝင်သွားတဲ့ query ပုံစံကတော့ SELECT * FROM Media WHERE media_id=1; DROP TABLE Media ပဲဖြစ်ပါတယ်။ တစ်ခုက item information တွေကို ဆွဲထုတ်ပြီး တစ်ခုက Media table တစ်ခုလုံးကို DROP(delete) လုပ်နေမှာဖြစ်ပါတယ်။ အဲ့ဒီ query နှစ်ခုကို execute လုပ်ပြီးတိုင်း database ထဲက Media table ကို remove လုပ်နေမှာဖြစ်ပါတယ်။ ဒါဟာ malicious hackers တွေအမြဲလုပ်လေ့ရှိတဲ့အရာပဲဖြစ်ပါတယ်။ ဒီလို attack လုပ်တာမျိုးကို Sequel Injection လို့ခေါ်ပါတယ်။ ဘာလို့လဲဆိုရင် ကျွန်တော်တို့ run ဖို့မရည်ရွယ်ထားတဲ့ query က ကျွန်တော်တို့ code ထဲကို inject လုပ်လာလို့ဖြစ်ပါတယ်။ အဲ့ဒီ attacks တွေကို ကာကွယ်ဖို့အတွက် နည်းလမ်းနှစ်ခုရှိပါတယ်။ အဲ့ဒါတွေကတော့ Filter Input နဲ့ Escape Output တို့ပဲဖြစ်ပါတယ်။ ကျွန်တော်တို့က user data ကို receive လုပ်တဲ့အချိန်နဲ့ database ထဲက data ကို query လုပ်တဲ့ အချိန်မှာ harmful attack တွေကာကွယ်ဖို့ input တွေကို filter လုပ်ရပါမယ်။ details.php ထဲမှာ query string က $id အတွက် value ဟာ $_GET variable နဲ့သုံးထားပါတယ်။ ပြီးတော့ $id ဆိုတဲ့ variable ထဲကို assign လုပ်ထားပါတယ်။ အဲ့ဒီ value ကို ကျွန်တော်တို့က input အဖြစ် စဉ်းစားရမှာဖြစ်ပါတယ်။ အခုဆိုရင် ကျွန်တော်တို့ $id က integer ပဲဖြစ်နေရပါတယ်။ ဒါကြောင့် အဲ့ဒီနေရာမှာ sequel injection လုပ်ဖို့အတွက် filter_input function ကိုအသုံးပြုပေးရမှာဖြစ်ပါတယ်။ ပြီးရင်တော့ details page ထဲမှာ single_item_array() function ကိုခေါ်ပေးရမှာဖြစ်ပါတယ်။ အောက်က example ကိုကြည့်ရအောင်။ </p>
    <p>Example of details.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            include("Includes/functions.php");

            // improve with refactoring
            //$catalog = full_catalog_array();

            if (isset($_GET["id"])) {
                // prevent SQL injections
                $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
            
                $item = single_item_array($id);
                var_dump($item);
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
    <p>Example of functions.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            // improve with refactoring
            function full_catalog_array() {
                include("connection.php");
            
                try {
                    $results = $db->query('SELECT media_id, title, category, img FROM Media');
                } catch (Exception $e) {
                    echo "Unable to retrieve results";
                    exit;
                }

                // Retrieving the result set => fetchAll
                // Working query results with fetch_style => PDO::FETCH_ASSOC
                $catalog = $results->fetchAll(PDO::FETCH_ASSOC);
                return $catalog;
            }

            // Querying Multiple Tables with JOIN
            function single_item_array($id) {
                include("connection.php");
            
                try {
                    $results = $db->query("SELECT Media.media_id, title, category, img, format, year, genre, publisher, isbn
                    FROM Media
                    JOIN Genres ON Media.genre_id = Genres.genre_id
                    LEFT OUTER JOIN Books ON Media.media_id = Books.media_id 
                    WHERE Media.media_id = $id");
                } catch (Exception $e) {
                    echo "Unable to retrieved results";
                    exit;
                }
            
                $catalog = $results->fetch();
                return $catalog;
            }

            function get_item_html ($id, $item) {
                $output = "&lt;li&gt;&lt;a href='details.php?id="
                    . $item["media_id"] . "'&gt;&lt;img src='" 
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
    <hr>


    <h2>Preparing SQL Statements</h2>
    <p>ကျွန်တော်တို့ filter_input() လုပ်လိုက်တဲ့ code ဟာ web address ကနေ သူreceive လုပ်လိုက်တဲ့ $id ကို sanitize လုပ်လိုက်ပါတယ်။ ပြီးတော့ အဲ့ဒီ web address ဟာ single_item_array() function ထဲကို pass လုပ်လိုက်ပါတယ်။ ထို့နောက်ကျွန်တော်တို့ function ထဲမှာ $id ကို argument တစ်ခုအဖြစ် လက်ခံပြီးတော့ အဲ့ဒီ $id ကို database ပေါ်က query တစ်ခုအတွင်းမှာ အသုံးပြုလိုက်တာဖြစ်ပါတယ်။ ဒီလို  database နဲ့အသုံးပြုမယ့် ဘယ် input မဆို sanitize လုပ်ခြင်းဟာ good idea ပဲဖြစ်ပါတယ်။ ကျွန်တော်တို့အနေနဲ့ နေရာနှစ်ခုလုံးက input တွေကို sanitize လုပ်ရမယ်လို့ ထင်ပါလိမ့်မယ်။ ဒါပေမယ့် ကျွန်တော်တို့သိထားရမှာက functions တွေကို multiple places တွေကနေ လှမ်းခေါ်လို့ရတယ်ဆိုတာကိုပါ။ ကျွန်တော်တို့ဟာ ဝင်လာတဲ့ input တွေကို filter or sanitize လုပ်ချင်တယ်ဆိုရင်တော့ ကျွန်တော်တို့ရဲ့ function ထဲမှာ new method တစ်ခုဖြစ်တဲ့ PDO class ကိုအသုံးပြုရပါမယ်။ ကျွန်တော်တို့ query အတွက် SQL inject ဟာ subject တစ်ခုမဟုတ်ပါဘူးလို့ သတ်မှတ်ဖို့အတွက် prepare() ဆိုတဲ့ method ကို အသုံးပြုရပါတယ်။ ဒါကြောင့် single_item_array() function ထဲက query နေရာမှာ prepare ကိုထည့်လိုက်ပါမယ်။ ဒီလိုလုပ်ရုံနဲ့ မပြီးသေးပါဘူး။ ကျွန်တော်တို့ရဲ့ $id နေရာမှာ question mark (?) တစ်ခုကို placeholder အဖြစ်ထားလိုက်ပါမယ်။ ဒါဟာ un-named placeholder တစ်ခုလို့ ယူဆနိုင်ပါတယ်။ $results variable ကတော့ PDO statement object တစ်ခုဖြစ်နေမှာပဲဖြစ်ပါတယ်။ ဒါပေမယ့် အဲ့ဒီ statement ကတော့ အခု run လို့မရသေးပါဘူး။ ဒါကြောင့် မrun ခင်မှာ $id ကို ဘယ် placeholder မှာထားရမလဲဆိုတာ အရင်စဉ်းစားပါမယ်။ ဒါကြောင့် $results object ပေါ်မှာ method တစ်ခုခေါ်တဲ့နည်းဖြစ်တဲ့ bindParam() ကိုထည့်ပေးရပါမယ်။ Eg. $results->bindParam();။ bindParam() ကတော့ variable တစ်ခု (သို့) parameter တစ်ခုကို SQL statement ထဲက placeholder တစ်ခုနဲ့ connect လုပ်ပေးတာဖြစ်ပါတယ်။ အဲ့ဒီ method မှာ argument နှစ်ခုနဲ့ optional data type  တစ်ခုလက်ခံနိုင်ပြီး ၊ ပထမ argument ကတော့ placeholder ဆီသွားမယ့် reference တစ်ခုဖြစ်ပါတယ်။ ဒုတိယ argument ကတော့ အဲ့ဒီ placeholder ကို ကျွန်တော်တို့ bind လုပ်ချင်တဲ့ variable ဆီကိုသွားမယ့် reference တစ်ခုဖြစ်ပါတယ်။ ကျွန်တော်တို့ project မှာတော့ $id ပဲဖြစ်ပါတယ်။ နောက်ဆုံးတစ်ခုကတော့ optional data type ဖြစ်တဲ့ PDO::PARAM_INT ကိုရေးပေးရပါမယ်။ Eg. $results->bindParam(1, $id, PDO::PARAM_INT) ။ ဒါဆိုရင်တော့ ကျွန်တော်တို့ query ကို execute() method နဲ့ run နိုင်ပါပြီ။ </p>
    <p>Example of functions.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            // improve with refactoring
            function full_catalog_array() {
                include("connection.php");
            
                try {
                    $results = $db->query('SELECT media_id, title, category, img FROM Media');
                } catch (Exception $e) {
                    echo "Unable to retrieve results";
                    exit;
                }

                // Retrieving the result set => fetchAll
                // Working query results with fetch_style => PDO::FETCH_ASSOC
                $catalog = $results->fetchAll(PDO::FETCH_ASSOC);
                return $catalog;
            }

            // Querying Multiple Tables with JOIN
            function single_item_array($id) {
                include("connection.php");
            
                try {
                    $results = $db->prepare("SELECT Media.media_id, title, category, img, format, year, genre, publisher, isbn
                    FROM Media
                    JOIN Genres ON Media.genre_id = Genres.genre_id
                    LEFT OUTER JOIN Books ON Media.media_id = Books.media_id 
                    WHERE Media.media_id = ?");

                    $results->bindParam(1, $id, PDO::PARAM_INT);
                    $results->execute();
                } catch (Exception $e) {
                    echo "Unable to retrieved results";
                    exit;
                }
            
                $catalog = $results->fetch();
                return $catalog;
            }

            function get_item_html ($id, $item) {
                $output = "&lt;li&gt;&lt;a href='details.php?id="
                    . $item["media_id"] . "'&gt;&lt;img src='" 
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
    <p>Example of details.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            include("Includes/functions.php");

            // improve with refactoring
            //$catalog = full_catalog_array();

            if (isset($_GET["id"])) {
                // prevent SQL injections
                $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
            
                $item = single_item_array($id);
                var_dump($item);
            }

            // redirect to catalog page
            if (empty($item)) {
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


    <h2>Adding a Second Query</h2>
    <p>ကျွန်တော်တို့ functions.php ထဲမှာ Media table, Genre table နဲ့ Books table ထဲက data တွေကို ဆွဲထုတ်ထားတဲ့ query တစ်ခုပဲရှိပါတယ်။ နောက်ထပ်ထုတ်ပြမှာကတော့ အဲ့ဒီ item နဲ့ပတ်သတ်တဲ့ people ပဲဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ item array ထဲကို people တွေကို သူတို့ရဲ့ role နဲ့ကိုက်ညီတဲ့အထဲကို ထည့်မှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ data.php ထဲက authors မှာ person တစ်ယောက်ဆီအတွက် element တစ်ခုရှိပါတယ်။ ကျွန်တော်တို့ဟာ key ကိုမသတ်မှတ်ထားတဲ့အတွက် index 0, 1,2 ဆိုပြီး ယူသွားမှာဖြစ်ပါတယ်။ functions.php ထဲကိုသွားပြီး တစ်ကယ်လို့ $catalog = $results->fetch() ထဲမှာ item တစ်ခုရှိတယ်ဆိုရင် people ကိုကြည့်ပါမယ်။ ဒါကြောင့် $catalog ကို $item လို့ပြောင်းလိုက်ပါမယ်။ တစ်ကယ်လို့ အဲ့ဒီ $item က ဘာမှမရှိတဲ့အခါ boolean value false ကိုပြန်ပေးမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ conditional statements တွေထဲမှာ multiple return statements တွေထည့်လို့ရပါတယ်။ People နဲ့ ပတ်သတ်တဲ့ roles တွေကိုရဖို့အတွက် Media_People table နဲ့ People table ကို JOIN လုပ်ပေးရမှာဖြစ်ပါတယ်။ </p>
    <p>Example of functions.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            // improve with refactoring
            function full_catalog_array() {
                include("connection.php");
            
                try {
                    $results = $db->query('SELECT media_id, title, category, img FROM Media');
                } catch (Exception $e) {
                    echo "Unable to retrieve results";
                    exit;
                }

                // Retrieving the result set => fetchAll
                // Working query results with fetch_style => PDO::FETCH_ASSOC
                $catalog = $results->fetchAll(PDO::FETCH_ASSOC);
                return $catalog;
            }

            // Querying Multiple Tables with JOIN
            function single_item_array($id) {
                include("connection.php");
            
                try {
                    $results = $db->prepare("SELECT Media.media_id, title, category, img, format, year, genre, publisher, isbn
                    FROM Media
                    JOIN Genres ON Media.genre_id = Genres.genre_id
                    LEFT OUTER JOIN Books ON Media.media_id = Books.media_id 
                    WHERE Media.media_id = ?");

                    $results->bindParam(1, $id, PDO::PARAM_INT);
                    $results->execute();
                } catch (Exception $e) {
                    echo "Unable to retrieved results";
                    exit;
                }
            
                $item = $results->fetch();
                if (empty($item)) return $item;
            
                // adding a second query
                try {
                    $results = $db->prepare("SELECT fullname, role
                    FROM Media_People
                    JOIN People ON Media_People.people_id = People.people_id
                    WHERE Media_People.media_id = ?");

                    $results->bindParam(1, $id, PDO::PARAM_INT);
                    $results->execute();
                } catch (Exception $e) {
                    echo "Unable to retrieved results";
                    exit;
                }
            
                return $item;
            }

            function get_item_html ($id, $item) {
                $output = "&lt;li&gt;&lt;a href='details.php?id="
                    . $item["media_id"] . "'&gt;&lt;img src='" 
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
                return array_keys($outsput);
            }

            ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Fetching in a While Loop</h2>
    <p>ကျွန်တော်တို့ရဲ့ result object တစ်ခုအတွင်းမှာ people နဲ့ roles တွေရှိနေပြီးတော့ သူတို့ကို $item ဆိုတဲ့ variable ထဲကို add လုပ်ဖို့လိုပါတယ်။ ဒါကြောင့် ကျွန်တော်တို့ရဲ့ function call ကို return ပြန်နိုင်ပါတယ်။ ကျွန်တော်တို့ဟာ authors အားလုံးကို ဆွဲထုတ်ဖို့အတွက် fetchAll() method ကိုသုံးလို့ရတယ်ဆိုပေမယ့် ဒါဟာ ကျွန်တော်တို့လိုအပ်တဲ့ exact format မဟုတ်သေးပါဘူး။ ဘာလို့လဲဆိုတော့ author တစ်ယောက်ချင်းစီဟာ database ထဲမှာ row တစ်ခုအတွင်းမှာပဲရှိနေလို့ဖြစ်ပါတယ်။ fetchAll() ဟာ  simple variable တစ်ခုအစား author တစ်ယောက်စီရဲ့ whole array ကိုပဲ ပေးတာဖြစ်ပါတယ်။ ကျွန်တော်တို့က simple array တစ်ခုအပြင် results တွေကိုလိုချင်ရင်တော့ while loop ကိုသုံးပေးရမှာဖြစ်ပါတယ်။ While loop မှာ condition တစ်ခုရှိပြီး condition က true ဖြစ်နေသရွေ့ while block ထဲက statement ကို run ပေးနေမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ row တိုင်းကို while loop ထဲက statement ထဲမှာ wrap လုပ်ပြီး ထုတ်လို့ရပါတယ်။ while condition ဟာ if condition နဲ့မတူပါဘူး။ ဘာလို့လဲဆိုရင် သူဟာ value နှစ်ခုပဲ compare လုပ်လို့ရတာမဟုတ်ဘဲ command တစ်ခုကိုပါ execute လုပ်ပေးနိုင်ပါတယ်။ သူဟာ fetch() method ကို call လိုက်ပြီး return value ကို variable တစ်ခုအတွင်းမှာ load လုပ်လိုက်ပါတယ်။ Variable ဖြစ်တဲ့ $row ဟာ အခုဆိုရင် first person နဲ့ role တစ်ခုပါဝင်နေပါပြီ။ $row variable က false မဖြစ်မချင်း curly brackets ထဲက code ကို execute လုပ်ပေးနေမှာဖြစ်ပါတယ်။ While loop အတွင်းမှာတော့ new internal array တစ်ခုနဲ့ $item_array variable ထဲကိုထည့်ပါမယ်။ အဲ့ဒီမှာဆိုရင် new array ဟာ old array ရဲ့ nested array တစ်ခုဖြစ်ပါတယ်။ Example ထဲမှာ internal array ရဲ့ key ဟာ role ပဲဖြစ်ပါတယ်။ ပြီးတော့ အဲ့ဒီ internal array ထဲက item တစ်ခုချင်းစီဟာလည်း သူ့ရဲ့ ကိုယ်ပိုင် assign လုပ်ထားတဲ့ key ရှိပါလိမ့်မယ်။ Existing array တစ်ခုထဲကို new element တစ်ခုထည့်မယ်ဆိုရင် while loop ထဲက opening & closing square brackets [] ထဲမှာ add လုပ်ရပါမယ်။  အောက်က example ကိုကြည့်ရအောင်။ </p>
    <p>Example of functions.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            // improve with refactoring
            function full_catalog_array() {
                include("connection.php");
            
                try {
                    $results = $db->query('SELECT media_id, title, category, img FROM Media');
                } catch (Exception $e) {
                    echo "Unable to retrieve results";
                    exit;
                }

                // Retrieving the result set => fetchAll
                // Working query results with fetch_style => PDO::FETCH_ASSOC
                $catalog = $results->fetchAll(PDO::FETCH_ASSOC);
                return $catalog;
            }

            // Querying Multiple Tables with JOIN
            function single_item_array($id) {
                include("connection.php");
            
                try {
                    $results = $db->prepare("SELECT Media.media_id, title, category, img, format, year, genre, publisher, isbn
                    FROM Media
                    JOIN Genres ON Media.genre_id = Genres.genre_id
                    LEFT OUTER JOIN Books ON Media.media_id = Books.media_id 
                    WHERE Media.media_id = ?");

                    $results->bindParam(1, $id, PDO::PARAM_INT);
                    $results->execute();
                } catch (Exception $e) {
                    echo "Unable to retrieved results";
                    exit;
                }
            
                $item = $results->fetch();
                if (empty($item)) return $item;
            
                // adding a second query
                try {
                    $results = $db->prepare(
                       "SELECT fullname, role
                        FROM Media_People
                        JOIN People ON Media_People.people_id = People.people_id
                        WHERE Media_People.media_id = ?");
                    $results->bindParam(1, $id, PDO::PARAM_INT);
                    $results->execute();
                } catch (Exception $e) {
                    echo "Unable to retrieved results";
                    exit;
                }
            
                // fetching in a while loop
                while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
                    $item[$row["role"]][] = $row["fullname"];
                }
                return $item;
            }

            function get_item_html ($id, $item) {
                $output = "&lt;li&gt;&lt;a href='details.php?id="
                    . $item["media_id"] . "'&gt;&lt;img src='" 
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
    <p>Example of details.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            include("Includes/functions.php");

            // improve with refactoring
            //$catalog = full_catalog_array();

            if (isset($_GET["id"])) {
                // prevent SQL injections
                $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
            
                $item = single_item_array($id);
            }

            // redirect to catalog page
            if (empty($item)) {
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
                                &lt;td&gt;&lt;?php echo implode(", ", $item["author"]); ?&gt;&lt;/td&gt;
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
                                &lt;td&gt;&lt;?php echo implode(", ", $item["director"]); ?&gt;&lt;/td&gt;
                            &lt;/tr&gt;
                            &lt;tr&gt;
                                &lt;th&gt;Writers&lt;/th&gt;
                                &lt;td&gt;&lt;?php echo implode(", ", $item["writer"]); ?&gt;&lt;/td&gt;
                            &lt;/tr&gt;
                            &lt;tr&gt;
                                &lt;th&gt;Stars&lt;/th&gt;
                                &lt;td&gt;&lt;?php echo implode(", ", $item["star"]); ?&gt;&lt;/td&gt;
                            &lt;/tr&gt;
                            
                            &lt;!-- Music condition --&gt;
                            &lt;?php } else if (strtolower($item["category"]) == "music") { ?&gt;
                            &lt;tr&gt;
                                &lt;th&gt;Artist&lt;/th&gt;
                                &lt;td&gt;&lt;?php echo implode(", ", $item["artist"]); ?&gt;&lt;/td&gt;
                            &lt;/tr&gt;
                            &lt;?php } ?&gt;
                        &lt;/table&gt;
                    &lt;/div&gt;
                            
                &lt;/div&gt;
                            
            &lt;/div&gt;
        </code>
    </pre>
    <hr>


    <h2>RANDOM() function to Get Random Items</h2>
    <p>ဒီတစ်ခါမှာတော့ ကျွန်တော်တို့ဟာ sequel specific features တွေဖြစ်တဲ့ limits, ordering နဲ့ aggregate functions တွေကို လေ့လာပြီးတော့ index page မှာ 4 random items ကို sequel ကိုသုံးပြီး ထုတ်ပြသွားမှာဖြစ်ပါတယ်။ အခု စပြီးတော့ sequel ကိုသုံးပြီး ကျွန်တော်တို့ home page အတွက် four random items ကို grab လုပ်သွားမှာဖြစ်ပါတယ်။ ဒါပေမယ့် ကျွန်တော်တို့ဟာ random items တွေကို select လုပ်ဖို့အတွက် PHP ကိုမသုံးခင်မှာ database ထဲကနေ items အားလုံးကို pull လုပ်ခဲ့တာဖြစ်ပါတယ်။ အဲ့ဒီလိုလုပ်မယ့်အစား database ကနေ four random items ကို တိုက်ရိုက် pull လုပ်ဖို့အတွက် SQL query ကိုအသုံးပြုတဲ့ new function တစ်ခုကို create လုပ်သွားမှာဖြစ်ပါတယ်။ functions.php ထဲကိုသွားပြီး full_catalog_array() ကို duplicate(copy) လုပ်လိုက်ပါမယ်။ ပြီးတော့ random_catalog_array() လို့ rename လုပ်လိုက်မယ်။ ကျွန်တော်တို့ဟာ four random items ကိုထုတ်ဖို့အတွက် ORDER BY ဆိုတဲ့ keyword ကို query ထဲမှာ အသုံးပြုပါမယ်။ ပြီးရင်တော့ random လုပ်ဖို့အတွက် RANDOM() ဆိုတဲ့ SQLite function ကို ORDER BY ရဲ့နောက်မှာရေးပေးရပါမယ်။ ပြီးရင်တော့ random သတ်မှတ်ချင်တဲ့ LIMIT ကိုထည့်ပေးရမှာ ဖြစ်ပါတယ်။ ပြီးရင်တော့ index.php ထဲမှာ ရေးခဲ့တဲ့ full_catalog_array() function ကို remove လုပ်လိုက်ပါမယ်။ ပြီးရင်တော့ PHP နဲ့ random ထုတ်ခဲ့တဲ့ function ဖြစ်တဲ့ array_rand() နေရာမှာ functions.php ထဲက query နဲ့ရေးပြီး four random items ထုတ်ခဲ့တဲ့ random_catalog_array() function ကို အစားထိုးပေးရပါမယ်။ function ထဲမှာ အားလုံးရေးထားတဲ့အတွက် သူ့ထဲမှာ argument ထည့်စရာမလိုတော့ပါဘူး။ အခုဆိုရင်တော့ ကျွန်တော်တို့ random variable မှာ id အစား items တွေရဲ့ full array တစ်ခုပါဝင်နေပါပြီ။ ဒါကြောင့် foreach loop ထဲမှာ $id ကို $item အဖြစ် change လုပ်လိုက်ပါမယ်။ ပြီးရင်တော့ get_item_html() function ထဲမှာ single variable ဖြစ်တဲ့ $item တစ်ခုတည်းကိုပဲ ထည့်လိုက်ပါမယ်။ ထို့နောက် functions.php ထဲက get_item_html() မှာရှိတဲ့ argument နှစ်ခုထဲက $id ကို ဖျက်လိုက်ပါမယ်။ ဒါဆိုရင်တော့ ကျွန်တော်တို့လိုချင်တဲ့ four random items ကို query တစ်ခုသုံးတဲ့နည်းနဲ့ home page မှာ ပြပေးလိုက်ပြီပဲဖြစ်ပါတယ်။ </p>
    <p>Example of functions.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            // improve with refactoring
            function full_catalog_array() {
                include("connection.php");
            
                try {
                    $results = $db->query('SELECT media_id, title, category, img FROM Media');
                } catch (Exception $e) {
                    echo "Unable to retrieve results";
                    exit;
                }

                // Retrieving the result set => fetchAll
                // Working query results with fetch_style => PDO::FETCH_ASSOC
                $catalog = $results->fetchAll(PDO::FETCH_ASSOC);
                return $catalog;
            }

            // getting four random items
            function random_catalog_array() {
                include("connection.php");
            
                try {
                    $results = $db->query('SELECT media_id, title, category, img
                    FROM Media
                    ORDER BY RANDOM()
                    LIMIT 4'
                    );
                } catch (Exception $e) {
                    echo "Unable to retrieve results";
                    exit;
                }
            
                $catalog = $results->fetchAll(PDO::FETCH_ASSOC);
                return $catalog;
            }

            // Querying Multiple Tables with JOIN
            function single_item_array($id) {
                include("connection.php");
            
                try {
                    $results = $db->prepare("SELECT Media.media_id, title, category, img, format, year, genre, publisher, isbn
                    FROM Media
                    JOIN Genres ON Media.genre_id = Genres.genre_id
                    LEFT OUTER JOIN Books ON Media.media_id = Books.media_id 
                    WHERE Media.media_id = ?");

                    $results->bindParam(1, $id, PDO::PARAM_INT);
                    $results->execute();
                } catch (Exception $e) {
                    echo "Unable to retrieved results";
                    exit;
                }
            
                $item = $results->fetch();
                if (empty($item)) return $item;
            
                // adding a second query
                try {
                    $results = $db->prepare(
                       "SELECT fullname, role
                        FROM Media_People
                        JOIN People ON Media_People.people_id = People.people_id
                        WHERE Media_People.media_id = ?");
                    $results->bindParam(1, $id, PDO::PARAM_INT);
                    $results->execute();
                } catch (Exception $e) {
                    echo "Unable to retrieved results";
                    exit;
                }
            
                // fetching in a while
                while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
                    $item[$row["role"]][] = $row["fullname"];
                }
                return $item;
            }

            function get_item_html ($item) {
                $output = "&lt;li&gt;&lt;a href='details.php?id="
                    . $item["media_id"] . "'&gt;&lt;img src='" 
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
    <p>Example of index.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            include("Includes/functions.php");

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
                            $random = random_catalog_array();

                            foreach ($random as $item) {
                                echo get_item_html($item);
                            }
                            ?&gt;
                        &lt;/ul&gt;
                        
                    &lt;/div&gt;
                        
                &lt;/div&gt;
                        
            &lt;?php include('Includes/footer.php'); ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Filtering Data by Category</h2>
    <p>ပြီးခဲ့တဲ့သင်ခန်းစာမှာ ကျွန်တော်တို့ရဲ့ index page ကို database ထဲကနေ four random items ကို ဆွဲထုတ်ခဲ့ပါတယ်။ ဒီလိုပြုလုပ်ခြင်းဟာ response ကိုမြန်ဆန်စေပြီးတော့ ကျွန်တော်တို့ရဲ့ database ကို grow ဖြစ်စေပါတယ်။ ဒီလိုပဲ catalog page ကိုလည်း random item တွေဆွဲထုတ်ပါမယ်။ Database ထဲကနေ items အားလုံးကို pull လုပ်မယ့်အစား specific category ထဲက items တွေကိုပဲ pull လုပ်ပါမယ်။ ကျွန်တော်တို့ရဲ့ category_catalog_array() function ထဲကို $category ဆိုတဲ့ variable တစ်ခု parameter တစ်ခုအနေနဲ့ pass လုပ်ပေးလိုက်ပါမယ်။ ပြီးရင်တော့ handful attack တွေကိုရှောင်ဖို့ query နေရာမှာ prepare method ကိုပြောင်းထည့်ပါမယ်။ Database ထဲမှာရှိတဲ့ category ဟာ capitalize နဲ့ store လုပ်ထားတာဖြစ်တဲ့အတွက် ကျွန်တော်တို့ pass လုပ်ထားတဲ့အတွက် strtolower() function နဲ့ lowercase ပြောင်းပေးရပါမယ်။ SQL ရဲ့ function မှာတော့ LOWER() ပဲဖြစ်ပါတယ်။ နောက်တစ်ခုကတော့ ကျွန်တော်တို့ရဲ့ items တွေကို alphabetically အရစီပေးမှာဖြစ်ပါတယ်။ ဒါကြောင့် ကျွန်တော်တို့ SQL ထဲမှာ items တွေကို sort လုပ်ပါမယ်။ SQL မှာ alphabetically အရစီမယ်ဆိုရင်တော့ REPLACE() function ကိုအသုံးပြုရမှာဖြစ်ပါတယ်။ ဒါဆိုရင်တော့ ကျွန်တော်တို့ category မှာ items တွေကို alphabetically အရာ sort လုပ်လိုက်ပြီဖြစ်ပါတယ်။ </p>
    <p>Example of functions.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            // improve with refactoring
            function full_catalog_array() {
                include("connection.php");
            
                try {
                    $results = $db->query('SELECT media_id, title, category, img FROM Media');
                } catch (Exception $e) {
                    echo "Unable to retrieve results";
                    exit;
                }

                // Retrieving the result set => fetchAll
                // Working query results with fetch_style => PDO::FETCH_ASSOC
                $catalog = $results->fetchAll(PDO::FETCH_ASSOC);
                return $catalog;
            }

            // filtering data by category
            function category_catalog_array($category) {
                include("connection.php");
                $category = strtolower($category);
            
                try {
                    $results = $db->prepare('SELECT media_id, title, category, img
                        FROM Media
                        WHERE LOWER(category) = ?
                        ORDER BY 
                        REPLACE(
                            REPLACE(
                                REPLACE(title, "The ", " "),
                                "An ",
                                " "
                            ),
                            "A ",
                            " "
                        )'
                    );
                    $results->bindParam(1, $category, PDO::PARAM_STR);
                    $results->execute();
                } catch (Exception $e) {
                    echo "Unable to retrieve results";
                    exit;
                }

                $catalog = $results->fetchAll(PDO::FETCH_ASSOC);
                return $catalog;
            }

            // getting four random items
            function random_catalog_array() {
                include("connection.php");
            
                try {
                    $results = $db->query('SELECT media_id, title, category, img
                    FROM Media
                    ORDER BY RANDOM()
                    LIMIT 4'
                    );
                } catch (Exception $e) {
                    echo "Unable to retrieve results";
                    exit;
                }
            
                $catalog = $results->fetchAll(PDO::FETCH_ASSOC);
                return $catalog;
            }

            // Querying Multiple Tables with JOIN
            function single_item_array($id) {
                include("connection.php");
            
                try {
                    $results = $db->prepare("SELECT Media.media_id, title, category, img, format, year, genre, publisher, isbn
                    FROM Media
                    JOIN Genres ON Media.genre_id = Genres.genre_id
                    LEFT OUTER JOIN Books ON Media.media_id = Books.media_id 
                    WHERE Media.media_id = ?");

                    $results->bindParam(1, $id, PDO::PARAM_INT);
                    $results->execute();
                } catch (Exception $e) {
                    echo "Unable to retrieved results";
                    exit;
                }
            
                $item = $results->fetch();
                if (empty($item)) return $item;
            
                // adding a second query
                try {
                    $results = $db->prepare(
                       "SELECT fullname, role
                        FROM Media_People
                        JOIN People ON Media_People.people_id = People.people_id
                        WHERE Media_People.media_id = ?");
                    $results->bindParam(1, $id, PDO::PARAM_INT);
                    $results->execute();
                } catch (Exception $e) {
                    echo "Unable to retrieved results";
                    exit;
                }
            
                // fetching in a while
                while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
                    $item[$row["role"]][] = $row["fullname"];
                }
                return $item;
            }

            function get_item_html ($item) {
                $output = "&lt;li&gt;&lt;a href='details.php?id="
                    . $item["media_id"] . "'&gt;&lt;img src='" 
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

            // filtering data by category
            if (empty($section)) {   
                $catalog = full_catalog_array();
            } else {
                $catalog = category_catalog_array($section);
            }

            include('Includes/header.php');

            ?&gt;

            &lt;div class="section catalog page"&gt;
                &lt;div class="wrapper"&gt;

                    &lt;h1&gt;
                        &lt;?php
                        if ($section != null) {
                            echo "&lt;a class='full-catalog' href='catalog.php'&gt; Full Catalog&lt;/a&gt; &gt; ";
                        }
                        echo $pageTitle; ?&gt;
                    &lt;/h1&gt;
                    
                    &lt;ul class="items"&gt;
                        &lt;?php

                        foreach ($catalog as $item) {
                            echo get_item_html($item);
                        }
                        ?&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
                    
            &lt;?php include('Includes/footer.php'); ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Setting up Pagination Variables</h2>
    <p>ဒီသင်ခန်းစာမှာတော့ ကျွန်တော်တို့က pagination အကြောင်းကို လေ့လာသွားမှာဖြစ်ပါတယ်။ Pagination ဟာ ကျွန်တော်တို့ site ထဲမှာရှိတဲ့ results တွေကို multiple pages တွေဖြစ်အောင် ခွဲထုတ်လိုက်တာဖြစ်ပါတယ်။ ဒီနည်းလမ်းနဲ့ပဲ site visitors တွေဆီကို ကျွန်တော်တို့ data တွေက bite sized chunks လေးတွေနဲ့ ဖော်ပြပေးမှာဖြစ်ပါတယ်။ ဥပမာ database ထဲက item 36 ခုလောက်ကိုထုတ်မယ်ဆိုရင် ဘာမှမဖြစ်ပေမယ့် item 100 or 1000 လောက်ထုတ်မယ်ဆိုရင်တော့ overwhelming ဖြစ်သွားစေမှာဖြစ်ပါတယ်။ အဲ့ဒါကိုမှာ နောက်ကျရင် ကျွန်တော်တို့က search feature ကိုလည်း add လုပ်သွားမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ site ထဲကို pagination ထည့်ဖို့အတွက် သိထားရမယ့်အချက် သုံးခုရှိပါတယ်။ ပထမဆုံး items တွေအားလုံးရဲ့ total ကိုသိဖို့လိုအပ်မယ်။ ဒါဟာ ကျွန်တော်တို့ site မှာ pages တွေဘယ်လောက်များများထည့်ပေးရမယ့်ဆိုတာ သိနိုင်ဖို့ ကူညီပေးပါတယ်။ Addition အနေနဲ့ ကျွန်တော်တို့ page တစ်ခုစီမှာ items ဘယ်နှစ်ခုထည့်ရမလဲဆိုတာ သိဖို့လိုပါတယ်။ နောက်ဆုံးကတော့ visitor က items တွေရဲ့ pages တွေကို move လုပ်တဲ့အခါ visitor က ဘယ် page ကို viewing လုပ်နေသလဲဆိုတာကို track လုပ်ထားဖို့လိုအပ်ပါတယ်။ ဥပမာ 10 pages ထဲက 1st page ကိုရောက်နေတယ်၊ 10 pages ထဲက 5 pages ကိုရောက်နေတာမျိုးပေါ့။ ကျွန်တော်တို့ page မှာရှိတဲ့ total items ကိုလိုချင်တယ်ဆိုရင်တော့ query မှာ COUNT() function ကိုအသုံးပြုရမှာဖြစ်ပါတယ်။ LIMIT ဆိုတာကတော့ items ဘယ်လောက်များများကို return ပြန်ချင်လဲလို့ ပြောတာဖြစ်ပါတယ်။ offset ကတော့ ဘယ်ကနေစမလဲဆိုတာ ပြောတာဖြစ်ပါတယ်။ PDO::PARAM_INT ဆိုတာက integer တစ်ခုကို filter လုပ်ဖို့သုံးတာဖြစ်ပါတယ်။ </p>
    <p>Example of functions.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            // setting up pagination
            function get_catalog_count($category = null) {
            
                $category = strtolower($category);
            
                include("connection.php");
            
                try {
                    $sql = "SELECT COUNT(media_id) FROM Media";
                    if (!empty($category)) {
                        $result = $db->prepare(
                            $sql
                            . " WHERE LOWER(category) = ?"
                        );
                    
                        $result->bindParam(1, $category, PDO::PARAM_STR);
                    } else {
                        $result = $db->prepare($sql);
                    }   
                    $result->execute(); 
                } catch (Exception $e) {
                    echo "Bad Query";
                }
            
                $count = $result->fetchColumn(0);
                return $count;
            }

            // improve with refactoring
            function full_catalog_array() {
                include("connection.php");
            
                try {
                    $results = $db->query('SELECT media_id, title, category, img FROM Media');
                } catch (Exception $e) {
                    echo "Unable to retrieve results";
                    exit;
                }

                // Retrieving the result set => fetchAll
                // Working query results with fetch_style => PDO::FETCH_ASSOC
                $catalog = $results->fetchAll(PDO::FETCH_ASSOC);
                return $catalog;
            }

            // filtering data by category
            function category_catalog_array($category) {
                include("connection.php");
                $category = strtolower($category);
            
                try {
                    $results = $db->prepare('SELECT media_id, title, category, img
                        FROM Media
                        WHERE LOWER(category) = ?
                        ORDER BY 
                        REPLACE(
                            REPLACE(
                                REPLACE(title, "The ", " "),
                                "An ",
                                " "
                            ),
                            "A ",
                            " "
                        )'
                    );
                    $results->bindParam(1, $category, PDO::PARAM_STR);
                    $results->execute();
                } catch (Exception $e) {
                    echo "Unable to retrieve results";
                    exit;
                }

                $catalog = $results->fetchAll(PDO::FETCH_ASSOC);
                return $catalog;
            }

            // getting four random items
            function random_catalog_array() {
                include("connection.php");
            
                try {
                    $results = $db->query('SELECT media_id, title, category, img
                    FROM Media
                    ORDER BY RANDOM()
                    LIMIT 4'
                    );
                } catch (Exception $e) {
                    echo "Unable to retrieve results";
                    exit;
                }
            
                $catalog = $results->fetchAll(PDO::FETCH_ASSOC);
                return $catalog;
            }

            // Querying Multiple Tables with JOIN
            function single_item_array($id) {
                include("connection.php");
            
                try {
                    $results = $db->prepare("SELECT Media.media_id, title, category, img, format, year, genre, publisher, isbn
                    FROM Media
                    JOIN Genres ON Media.genre_id = Genres.genre_id
                    LEFT OUTER JOIN Books ON Media.media_id = Books.media_id 
                    WHERE Media.media_id = ?");

                    $results->bindParam(1, $id, PDO::PARAM_INT);
                    $results->execute();
                } catch (Exception $e) {
                    echo "Unable to retrieved results";
                    exit;
                }
            
                $item = $results->fetch();
                if (empty($item)) return $item;
            
                // adding a second query
                try {
                    $results = $db->prepare(
                       "SELECT fullname, role
                        FROM Media_People
                        JOIN People ON Media_People.people_id = People.people_id
                        WHERE Media_People.media_id = ?");
                    $results->bindParam(1, $id, PDO::PARAM_INT);
                    $results->execute();
                } catch (Exception $e) {
                    echo "Unable to retrieved results";
                    exit;
                }
            
                // fetching in a while
                while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
                    $item[$row["role"]][] = $row["fullname"];
                }
                return $item;
            }

            function get_item_html ($item) {
                $output = "&lt;li&gt;&lt;a href='details.php?id="
                    . $item["media_id"] . "'&gt;&lt;img src='" 
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
            include("Includes/functions.php");

            $pageTitle = "Full Catalog";
            $section = null;

            // pagination
            $item_per_page = 8;

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

            // pagination
            if (isset($_GET["pg"])) {
                $current_page = filter_input(INPUT_GET, "pg", FILTER_SANITIZE_INT);
            }

            if (empty($current_page)) {
                $current_page = 1;
            }

            $total_items = get_catalog_count($section);

            // filtering data by category
            if (empty($section)) {   
                $catalog = full_catalog_array();
            } else {
                $catalog = category_catalog_array($section);
            }

            include('Includes/header.php');

            ?&gt;

            &lt;div class="section catalog page"&gt;
                &lt;div class="wrapper"&gt;

                    &lt;h1&gt;
                        &lt;?php
                        if ($section != null) {
                            echo "&lt;a class='full-catalog' href='catalog.php'&gt; Full Catalog&lt;/a&gt; &gt; ";
                        }
                        echo $pageTitle; ?&gt;
                    &lt;/h1&gt;
                    
                    &lt;ul class="items"&gt;
                        &lt;?php

                        foreach ($catalog as $item) {
                            echo get_item_html($item);
                        }
                        ?&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
                    
            &lt;?php include('Includes/footer.php'); ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Calculations and Links</h2>
    <p>အခုကျွန်တော်တို့ဟာ pagination ထည့်ဖို့အတွက် basic parameter setup လုပ်ပြီးပါပြီ။ နောက်ထပ် calculations တွေထပ်လုပ်ဖို့လိုပါတယ်။ ပထမဆုံး pages စုစုပေါင်းကို တွက်ရမယ်။ ဒါကြောင့် total_number ကို item_per_page နဲ့ divide လုပ်လိုက်မယ်။ ပြီးရင်တော့ သူ့ကို highest integer value အနေနဲ့ return ပြန်ပေးချင်တာကြောင့် value ကို round လုပ်ရပါမယ်။ ဒီလိုလုပ်ဖို့အတွက်ဆိုရင်တော့ ceil() လို့ခေါ်တဲ့ built-in function တစ်ခုရှိပါတယ်။ ကျွန်တော်တို့ရဲ့ calculation လုပ်ထားတဲ့ statement ကို ceil() ထဲမှာ round လုပ်ထားလိုက်ပါမယ်။ နောက်ဆုံးလိုအပ်တဲ့ calculation တစ်ခုကတော့ current page အတွက် items ဘယ်လောက်များများကို skip လုပ်ရမလဲဆိုတာပါ။ ကျွန်တော်တို့ဟာ current page အတွက် skip လုပ်မယ့် items အရေအတွက်ဖြစ်တဲ့ offset ကို determine လုပ်ပေးရပါမယ်။ ဥပမာ ကျွန်တော်တို့က page 3 ကိုရောက်နေပြီဆိုရင် offset က 16 ဖြစ်ပါလိမ့်မယ်။ Eg. $offset = ($current_page - 1) * $item_per_page; ။ ကျွန်တော်တို့မှာ $item_per_page ထက် item တွေကနည်းနေရင် ကျန်နေတဲ့ items တွေကိုပဲပြပေးပါမယ်။ နောက်ပြီး page number တွေက invalid ဖြစ်နေရင်လည်း redirect လုပ်ဖို့လိုပါတယ်။ </p>
    <p>Example of catalog.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            include("Includes/functions.php");

            $pageTitle = "Full Catalog";
            $section = null;

            // pagination
            $items_per_page = 8;

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

            // pagination
            if (isset($_GET["pg"])) {
                $current_page = filter_input(INPUT_GET, "pg", FILTER_SANITIZE_INT);
            }

            if (empty($current_page)) {
                $current_page = 1;
            }

            $total_items = get_catalog_count($section);

            // Calculations and Links
            $total_pages = ceil($total_items / $items_per_page);

            // limit results in redirect
            $limit_results = "";
            if (!empty($section)) {
                $limit_results = "cat=" . $section . "&";
            }

            // redirect too large page numbers to the last page
            if ($current_page > $total_pages) {
                header("location:catalog.php?"
                . $limit_results
                . "pg=" . $total_pages);
            }

            // redirect too small page numbers to the first page
            if ($current_page < 1) {
                header("location:catalog.php?"
                . $limit_results
                . "pg=1");
            }

            // determine the offset (number of items to skip) for the current page
            // for example: on page 3 with 8 items per page, the offset would be 16
            $offset = ($current_page - 1) * $items_per_page;

            // filtering data by category
            if (empty($section)) {   
                $catalog = full_catalog_array();
            } else {
                $catalog = category_catalog_array($section);
            }

            include('Includes/header.php');

            ?&gt;

            &lt;div class="section catalog page"&gt;
                &lt;div class="wrapper"&gt;

                    &lt;h1&gt;
                        &lt;?php
                        if ($section != null) {
                            echo "&lt;a class='full-catalog' href='catalog.php'&gt; Full Catalog&lt;/a&gt; &gt; ";
                        }
                        echo $pageTitle; ?&gt;
                    &lt;/h1&gt;
                    
                    &lt;ul class="items"&gt;
                        &lt;?php

                        foreach ($catalog as $item) {
                            echo get_item_html($item);
                        }
                        ?&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
                    
            &lt;?php include('Includes/footer.php'); ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Setting Limits</h2>
    <p>ကျွန်တော်တို့မှာ pagination လုပ်ဖို့အတွက် variables set အားလုံးရှိနေပါပြီ။ အခု limits တွေ add လုပ်ပါမယ်။ ကျွန်တော်တို့ရဲ့ page တစ်ခုချင်းစီပေါ်မှာရှိတဲ့ items တွေကို limit လုပ်သွားမှာဖြစ်ပါတယ်။ ဒါကြောင့် catalog ဆီက ခေါ်လိုက်တဲ့ items တွေကို limit လုပ်လိုက်ရုံပါပဲ။ ဒါဟာ database ကို limit လုပ်ထားတဲ့ items တွေကိုပဲ return ပြန်ပေးပါလို့ ပြောလိုက်တာပါ။ Page မှာ data ကိုလျှော့ချပြီး display လုပ်ထားခြင်းဟာ handle လုပ်ဖို့ တစ်ကယ်ကိုလွယ်ကူစေမှာပါ။ functions.php ထဲက full_catalog_array() ထဲမှာ optional arguments အချို့ကို pass လုပ်ပေးပါမယ်။ Eg. $limit = null, $offset = 0 ။ ကျွန်တော်တို့သိထားရမှာက default value တစ်ခုကို parameter အဖြစ်ပေးထားခြင်းဖြင့် အဲ့ဒီ argument ကို pass လုပ်ပေးစရာ မလိုတော့ပါဘူး။ full_catalog_array() function ကို အဲ့ဒီ arguments တွေ pass မလုပ်ဘဲခေါ်လိုက်မယ်ဆိုရင် ကျွန်တော်တို့မှာ limit မရှိတော့ဘဲ offset က 0 ဖြစ်သွားမှာဖြစ်ပါတယ်။ offset ကို default 0 ထားခြင်းဟာ offset တစ်ခုမပါဘဲ limit တစ်ခုကို pass လုပ်နိုင်ပါတယ်။ LIMIT ဟာ ကျွန်တော်တို့ return ပြန်ချင်တဲ့ items တွေဘယ်လောက်ရှိတယ်ဆိုတာကို ဖော်ပြပေးတာဖြစ်ပြီး၊ OFFSET ကတော့ ဘယ်ကနေစတယ်ဆိုတာ ပြောပြပေးတာဖြစ်ပါတယ်။ ပြီးရင်တော့ category_catalog_array() ထဲကိုသွားပြီး $limit = null နဲ့ $offset = 0 ကို parameters တွေအနေနဲ့ ထည့်ပေးရမှာဖြစ်ပါတယ်။ </p>
    <p>Example of catalog.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            include("Includes/functions.php");

            $pageTitle = "Full Catalog";
            $section = null;

            // pagination
            $items_per_page = 8;

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

            // pagination
            if (isset($_GET["pg"])) {
                $current_page = filter_input(INPUT_GET, "pg", FILTER_SANITIZE_INT);
            }

            if (empty($current_page)) {
                $current_page = 1;
            }

            $total_items = get_catalog_count($section);

            // Calculations and Links
            $total_pages = ceil($total_items / $items_per_page);

            // limit results in redirect
            $limit_results = "";
            if (!empty($section)) {
                $limit_results = "cat=" . $section . "&";
            }

            // redirect too large page numbers to the last page
            if ($current_page > $total_pages) {
                header("location:catalog.php?"
                . $limit_results
                . "pg=" . $total_pages);
            }

            // redirect too small page numbers to the first page
            if ($current_page < 1) {
                header("location:catalog.php?"
                . $limit_results
                . "pg=1");
            }

            // determine the offset (number of items to skip) for the current page
            // for example: on page 3 with 8 items per page, the offset would be 16
            $offset = ($current_page - 1) * $items_per_page;

            // filtering data by category
            if (empty($section)) {   
                $catalog = full_catalog_array($items_per_page, $offset);
            } else {
                $catalog = category_catalog_array($section, $items_per_page, $offset);
            }

            include('Includes/header.php');

            ?&gt;

            &lt;div class="section catalog page"&gt;
                &lt;div class="wrapper"&gt;

                    &lt;h1&gt;
                        &lt;?php
                        if ($section != null) {
                            echo "&lt;a class='full-catalog' href='catalog.php'&gt; Full Catalog&lt;/a&gt; &gt; ";
                        }
                        echo $pageTitle; ?&gt;
                    &lt;/h1&gt;
                    
                    &lt;ul class="items"&gt;
                        &lt;?php

                        foreach ($catalog as $item) {
                            echo get_item_html($item);
                        }
                        ?&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
                    
            &lt;?php include('Includes/footer.php'); ?&gt;
        </code>
    </pre>
    <p>Example of functions.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            // setting up pagination
            function get_catalog_count($category = null) {
            
                $category = strtolower($category);
            
                include("connection.php");
            
                try {
                    $sql = "SELECT COUNT(media_id) FROM Media";
                    if (!empty($category)) {
                        $result = $db->prepare(
                            $sql
                            . " WHERE LOWER(category) = ?"
                        );
                        $result->bindParam(1, $category, PDO::PARAM_STR);
                    } else {
                        $result = $db->prepare($sql);
                    }   
                    $result->execute(); 
                } catch (Exception $e) {
                    echo "Bad Query";
                }
            
                $count = $result->fetchColumn(0);
                return $count;
            }

            // improve with refactoring
            function full_catalog_array($limit = null, $offset = 0) {
                include("connection.php");
            
                try {
                    $sql = 'SELECT media_id, title, category, img
                        FROM Media
                        ORDER BY
                        REPLACE(
                            REPLACE(
                                REPLACE(title, "The ", ""),
                                "An ",
                                ""
                                ),
                                "A ",
                                ""
                            )';
                    if (is_integer($limit)) {
                        $results = $db->prepare($sql . " LIMIT ? OFFSET ?");
                        $results->bindParam(1, $limit, PDO::PARAM_INT);
                        $results->bindParam(2, $offset, PDO::PARAM_INT);
                    } else {
                        $results = $db->prepare($sql);
                    }
                    $results->execute();
                } catch (Exception $e) {
                    echo "Unable to retrieve results";
                    exit;
                }

                // Retrieving the result set => fetchAll
                // Working query results with fetch_style => PDO::FETCH_ASSOC
                $catalog = $results->fetchAll(PDO::FETCH_ASSOC);
                return $catalog;
            }

            // filtering data by category
            function category_catalog_array($category, $limit = null, $offset = 0) {
                include("connection.php");
                $category = strtolower($category);
            
                try {
                    $sql = 'SELECT media_id, title, category, img
                        FROM Media
                        WHERE LOWER(category) = ?
                        ORDER BY 
                        REPLACE(
                            REPLACE(
                                REPLACE(title, "The ", " "),
                                "An ",
                                " "
                            ),
                            "A ",
                            " "
                        )';

                    if (is_integer($limit)) {
                        $results = $db->prepare($sql . " LIMIT ? OFFSET ?");
                        $results->bindParam(1, $category, PDO::PARAM_STR);
                        $results->bindParam(2, $limit, PDO::PARAM_INT);
                        $results->bindParam(3, $offset, PDO::PAREM_INT);
                    } else {
                        $results = $db->prepare($sql);
                        $results->bindParam(1, $category, PDO::PARAM_STR);
                    }
                    $results->execute();
                } catch (Exception $e) {
                    echo "Unable to retrieve results";
                    exit;
                }

                $catalog = $results->fetchAll(PDO::FETCH_ASSOC);
                return $catalog;
            }

            // getting four random items
            function random_catalog_array() {
                include("connection.php");
            
                try {
                    $results = $db->query('SELECT media_id, title, category, img
                    FROM Media
                    ORDER BY RANDOM()
                    LIMIT 4'
                    );
                } catch (Exception $e) {
                    echo "Unable to retrieve results";
                    exit;
                }
            
                $catalog = $results->fetchAll(PDO::FETCH_ASSOC);
                return $catalog;
            }

            // Querying Multiple Tables with JOIN
            function single_item_array($id) {
                include("connection.php");
            
                try {
                    $results = $db->prepare("SELECT Media.media_id, title, category, img, format, year, genre, publisher, isbn
                    FROM Media
                    JOIN Genres ON Media.genre_id = Genres.genre_id
                    LEFT OUTER JOIN Books ON Media.media_id = Books.media_id 
                    WHERE Media.media_id = ?");

                    $results->bindParam(1, $id, PDO::PARAM_INT);
                    $results->execute();
                } catch (Exception $e) {
                    echo "Unable to retrieved results";
                    exit;
                }
            
                $item = $results->fetch();
                if (empty($item)) return $item;
            
                // adding a second query
                try {
                    $results = $db->prepare(
                       "SELECT fullname, role
                        FROM Media_People
                        JOIN People ON Media_People.people_id = People.people_id
                        WHERE Media_People.media_id = ?");
                    $results->bindParam(1, $id, PDO::PARAM_INT);
                    $results->execute();
                } catch (Exception $e) {
                    echo "Unable to retrieved results";
                    exit;
                }
            
                // fetching in a while
                while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
                    $item[$row["role"]][] = $row["fullname"];
                }
                return $item;
            }

            function get_item_html ($item) {
                $output = "&lt;li&gt;&lt;a href='details.php?id="
                    . $item["media_id"] . "'&gt;&lt;img src='" 
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
    <hr>


    <h2>Adding Pagination Links</h2>
    <p>ဒီတစ်ခါမှာတော့ ကျွန်တော်တို့ catalog page ထဲမှာ pagination တွေမြင်ရဖို့အတွက် catalog.php ထဲက unordered list မတိုင်ခင်မှာ pagination links တွေထည့်ပေးမှာဖြစ်ပါတယ်။ သူ့ကို div တစ်ခုနဲ့ class name ကို pagination လို့ပေးလိုက်မယ်။ ကျွန်တော်တို့ဟာ total pages အရေအတွက်ထက်နည်းတဲ့ numbers တွေရဲ့ count ကို create လုပ်ဖို့အတွက် while loop ကိုအသုံးပြုနိုင်ပါတယ်။ အဲ့ဒီလိုမဟုတ်ဘဲ for loop ကိုလည်း သုံးနိုင်ပါသေးတယ်။ တစ်ကယ်လို့ ကျွန်တော်တို့ စစ်လိုက်တဲ့ $i က $current_page နဲ့ညီတယ်ဆိုရင် $i ကိုထုတ်ပေးမှာဖြစ်ပြီး တစ်ကယ်လို့ $i က $current_page နဲ့မညီရင်တော့ အဲ့ဒီ page ကိုပဲ ပြပေးပါမယ်။ ဒီလိုလုပ်ဖို့အတွက် ကျွန်တော်တို့ဟာ category page ကို ရောက်နေသလား မရောက်နေဘူးလားဆိုတာ စစ်ဖို့ condition တစ်ခုလိုအပ်ပါတယ်။ Code အပြည့်အစုံကိုတော့ အောက်က example မှာ လေ့လာနိုင်ပါတယ်။ </p>
    <p>Example of catalog.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            include("Includes/functions.php");

            $pageTitle = "Full Catalog";
            $section = null;

            // pagination
            $items_per_page = 8;

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

            // pagination
            if (isset($_GET["pg"])) {
                $current_page = filter_input(INPUT_GET, "pg");
            }

            if (empty($current_page)) {
                $current_page = 1;
            }

            $total_items = get_catalog_count($section);

            // Calculations and Links
            $total_pages = ceil($total_items / $items_per_page);

            // limit results in redirect
            $limit_results = "";
            if (!empty($section)) {
                $limit_results = "cat=" . $section . "&";
            }

            // redirect too large page numbers to the last page
            if ($current_page > $total_pages) {
                header("location:catalog.php?"
                . $limit_results
                . "pg=" . $total_pages);
            }

            // redirect too small page numbers to the first page
            if ($current_page < 1) {
                header("location:catalog.php?"
                . $limit_results
                . "pg=1");
            }

            // determine the offset (number of items to skip) for the current page
            // for example: on page 3 with 8 items per page, the offset would be 16
            $offset = ($current_page - 1) * $items_per_page;

            // filtering data by category
            if (empty($section)) {   
                $catalog = full_catalog_array($items_per_page, $offset);
            } else {
                $catalog = category_catalog_array($section, $items_per_page, $offset);
            }

            //adding pagination links
            $pagination = "&lt;div clas=\"pagination\"&gt;";
            $pagination .= "Pages: ";
            for ($i = 1;$i <= $total_pages;$i++) {
                if ($i == $current_page) {
                    $pagination .= " &lt;span&gt;$i&lt;/span&gt;";
                } else {
                    $pagination .= " &lt;a href='catalog.php?";
                    if (!empty($section)) {
                        echo "cat=" . $section . "&";
                    }
                    $pagination .= "pg=$i'&gt;$i&lt;/a&gt;";
                }
            }
            $pagination .= "&lt;/div&gt;";

            include('Includes/header.php');

            ?&gt;

            &lt;div class="section catalog page"&gt;
                &lt;div class="wrapper"&gt;

                    &lt;h1&gt;
                        &lt;?php
                        if ($section != null) {
                            echo "&lt;a class='full-catalog' href='catalog.php'&gt; Full Catalog&lt;/a&gt; &gt; ";
                        }
                        echo $pageTitle; ?&gt;
                    &lt;/h1&gt;
                    
                    &lt;!-- adding pagination links --&gt;
                    &lt;?php echo $pagination; ?&gt;
                    
                    &lt;ul class="items"&gt;
                        &lt;?php

                        foreach ($catalog as $item) {
                            echo get_item_html($item);
                        }
                        ?&gt;
                    &lt;/ul&gt;
                    
                    &lt;!-- adding pagination links --&gt;
                    &lt;?php echo $pagination; ?&gt;
                    
                &lt;/div&gt;
            &lt;/div&gt;
                    
            &lt;?php include('Includes/footer.php'); ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Simplifying with a Function</h2>
    <p>ဒီတစ်ခါမှာ challenge တစ်ခုအနေနဲ့ ကျွန်တော်တို့က database ထဲက genre တွေကို drop down form ထဲမှာ pull လုပ်သွားမှာဖြစ်ပါတယ်။ ပထမဆုံးအနေနဲ့ database ထဲကနေ genres အားလုံးကို ဆွဲထုတ်ဖို့လိုပါတယ်။ ပြီးတော့ ရလာတဲ့ data တွေကို alphabetically အရ sort လုပ်လိုက်ပါမယ်။ ပြီးရင်တော့ category နဲ့ group လုပ်ရပါမယ်။ ဒုတိယအဆင့်အနေနဲ့ ရလာတဲ့ results တွေကို loop ပတ်ပြီးတော့ genre drop down အတွက် HTML ကို create လုပ်ရပါမယ်။ တတိယအဆင့်အနေနဲ့ user က post လုပ်လိုက်တဲ့ genre အတွက် HTML ဟာ optional selection တစ်ခုပါရဲ့လားဆိုတာကို check လုပ်ကြည့်ရပါမယ်။ Code အပြည့်အစုံကိုတော့ အောက်က example မှာ ကြည့်ရှုနိုင်ပါတယ်။ </p>
    <p>Example of functions.php</p>
    <pre>
        <code class="html hljs xml">
            // simplifying with a Function
            function genre_array($category = null) {
                $category = strtolower($category);
                include("connection.php");
            
                try {
                    $sql = "SELECT genre, category"
                        . " FROM Genres "
                        . " JOIN Genre_Categories "
                        . " ON Genres.genre_id = Genre_Categories.genre_id ";
                    if (!empty($category)) {
                        $results = $db->prepare($sql
                            . " WHERE LOWER(category) = ?"
                            . " ORDER BY genre");
                        $results->bindParam(1, $category, PDO::PARAM_STR);
                    } else {
                        $results = $db->prepare($sql . " ORDER BY genre");
                    }
                    $results->execute();
                } catch (Exception $e) {
                    echo "Bad Query";
                }
                $genres = array();
                while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
                    $genres[$row["category"]][] = $row["genre"];
                }
                return $genres;
            }
        </code>
    </pre>
    <p>Example of suggest.php</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            include("Includes/functions.php");

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
                                        &lt;?php
                                        $genre_array = genre_array();
                                        foreach($genre_array as $category => $options) {
                                            echo "&lt;optgroup label=\"$category\"&gt;";
                                            foreach ($options as $option) {
                                                echo "&lt;option value=\"$option\"";
                                                if (isset($genre) && $genre == "$option") {
                                                    echo " selected";
                                                }
                                                echo "&gt;$option&lt;/option&gt;";
                                            }			
                                            echo "&lt;/optgroup&gt;";
                                        }
                                        ?&gt;
                                    &lt;/select&gt;
                                &lt;/td&gt;
                            &lt;/tr&gt;
                            &lt;tr&gt;
                                &lt;th&gt;&lt;label for="year"&gt;Year&lt;/label&gt;&lt;/th&gt;
                                &lt;td&gt;&lt;input type="year" name="year" id="year" value="&lt;?php if (isset($year)) echo $year; ?&gt;"&gt;&lt;/td&gt;
                            &lt;/tr&gt;
                            &lt;tr&gt;
                                &lt;th&gt;&lt;label for="name"&gt;Additional Details&lt;/label&gt;&lt;/th&gt;
                                &lt;td&gt;&lt;textarea name="details" id="details" cols="30" rows="5"&gt;&lt;?php if (isset($details)) echo htmlspecialchars($_POST['details']); ?&gt;&lt;/textarea&gt;&lt;/td&gt;
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


    <h2>Setting Up the Search Form</h2>
    <p>ကျွန်တော်တို့က database နဲ့အလုပ်လုပ်ပြီဆိုရင် ဘယ် collection တွေကိုပဲဖြစ်ဖြစ် အရေးကြီးတဲ့ features တွေထဲကတစ်ခုဖြစ်တဲ့ search capabilities ကို add လုပ်ပေးရပါမယ်။ Searching လုပ်တာဟာ user ကို သူလိုချင်တဲ့ right information တွေကို ရဖို့အတွက်ဖြစ်ပါတယ်။ ဒါကြောင့် ကျွန်တော်တို့ project ရဲ့ page တိုင်းမှာ search box တစ်ခု add လုပ်သွားမှာဖြစ်ပါတယ်။ ဒီလိုလုပ်ဖို့အတွက် ကျွန်တော်တို့ page တိုင်းကို include လုပ်ထားတဲ့ header file ရှိတဲ့အတွက် ပိုပြီးလွယ်ကူပါတယ်။ Search box ကို header bar ရဲ့အောက်မှာထည့်သွားပြီး ကျွန်တော်တို့ catalog page ကို အနည်းငယ် modified လုပ်သွားမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ visitors တွေထည့်လိုက်တဲ့ data တွေကို server ဆီလှမ်းပြီးပို့ဖို့အတွက် form တစ်ခုရေးလိုက်ပါမယ်။ Form tag ထဲမှာတော့ search လုပ်မယ့် text field တစ်ခုနဲ့ အဲ့ဒီ search လုပ်လိုက်တဲ့ term ကို server ဆီပို့မယ့် submit button တစ်ခုလိုအပ်ပါတယ်။ အဲ့ဒီလိုထည့်ပြီး browser မှာ ဥပမာအနေနဲ့ search term တစ်ခုထည့်ပြီး submit လုပ်လိုက်တဲ့အချိန်မှာတော့ browser ဟာ current page ကို load လုပ်သွားပါတယ်။ ဒါပေမယ့် web address bar မှာတော့ ကျွန်တော်တို့ input field ထဲက name ပါတဲ့ get variable တစ်ခုပါဝင်နေပါတယ်။ နောက်ပြီးတော့ ကျွန်တော်တို့ search ထဲမှာ ရိုက်ထည့်လိုက်တဲ့ value တစ်ခုကို equal နဲ့ပြပေးပါတယ်။ Eg. ...../index.php/?s=alena ။ အဲ့ဒီမှာ ကျွန်တော်တို့သိထားရမှာက form တွေနဲ့အလုပ်ပြီဆိုရင် form elements တွေအတွက် action နဲ့ method ဆိုတဲ့ attribute နှစ်ခုကို လေ့လာထားခဲ့တယ်ဆိုတာပါ။ Action attribute ဟာ form data တွေကို submit လုပ်မယ့် destination ကို သတ်မှတ်ပေးတာဖြစ်ပါတယ်။ အဲ့ဒီမှာ ကျွန်တော်တို့ရဲ့ web address တစ်ခုကို specify လုပ်ပေးရပါတယ်။ ဒါကိုကျွန်တော်တို့က blank ထားခဲ့ရင်တော့ current page ကိုပဲ submit ပြန်လုပ်သွားပါမယ်။ Method attribute ကတော့ sumitted လုပ်ထားတဲ့ form data တွေပါတဲ့ next request တစ်ခုပေါ်မှာ request method ကို define လုပ်လိုက်တာဖြစ်ပါတယ်။ အဲ့ဒီ method ထဲက value နှစ်ခုကတော့ get နဲ့ post ပဲဖြစ်ပါတယ်။ Default value ကတော့ ဘာ method မှမသတ်မှတ်ထားတဲ့ get ပဲဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ post ကို email ပို့တာလိုမျိုး records တွေကိုမှတ်ထားချင်တာမျိုးအတွက် သုံးသင့်ပါတယ်။ get ကိုကျတော့ data တွေကို retrieve လုပ်ပြီး browser ပေါ်မှာပြချင်တဲ့အခါမျိုးမှာ အသုံးပြုသင့်ပါတ်ယ်။ get ဟာ submit လိုက်တဲ့ data တွေကို browser မှာ ပေါ်ပေးပြီးတော့ get ထဲမှာထည့်မယ့် character limit ကတော့ 2000 characters ပဲဖြစ်ပါတယ်။ ဒါပေမယ့် post ကကျတော့ submit လုပ်လိုက်တဲ့ data တွေကို browser ရဲ့ console မှာပဲ display လုပ်ပေးပြီး user မြင်အောင် မပြပေးပါဘူး။ </p>
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
                            &lt;li class="books&lt;?php if ($section == "books") { echo " on"; } ?&gt;"&gt;&lt;a href="catalog.php?cat=books"&gt;Books&lt;/a&gt;&lt;/li&gt;
                            &lt;li class="movies&lt;?php if ($section == "movies") { echo " on"; } ?&gt;"&gt;&lt;a href="catalog.php?cat=movies"&gt;Movies&lt;/a&gt;&lt;/li&gt;
                            &lt;li class="music&lt;?php if ($section == "music") { echo " on"; } ?&gt;"&gt;&lt;a href="catalog.php?cat=music"&gt;Music&lt;/a&gt;&lt;/li&gt;
                            &lt;li class="suggest&lt;?php if ($section == "suggest") { echo " on"; } ?&gt;"&gt;&lt;a href="suggest.php"&gt;Suggest&lt;/a&gt;&lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/div&gt;
                &lt;/div&gt;

                &lt;div class="search"&gt;
                    &lt;form class="header-submit" method="get" action="catalog.php"&gt;
                        &lt;label for="s"&gt;Search: &lt;/label&gt;
                        &lt;input type="text" name="s" id="s"&gt;
                        &lt;input class="btn-submit-style" type="submit" name="" id="" value="Go"&gt;
                    &lt;/form&gt;
                &lt;/div&gt;

                &lt;div id="content"&gt;
        </code>
    </pre>
    <hr>


    <h2>Matching Search Patterns</h2>
    <p>အခုဆိုရင် ကျွန်တော်တို့ form က ready ဖြစ်နေပါပြီ။ ကျွန်တော်တို့ site ကို ဝင်လာတဲ့ visitors တွေဟာ search box ထဲမှာ search term တစ်ခုကိုရိုက်ရှာလိုက်ရင် အဲ့ဒီရှာလိုက်တဲ့ information တွေကို server ဆီပို့နိုင်ပါတယ်။ ဒါပေမယ့် အဲ့ဒီ information တွေကို ဘာလုပ်ရမလဲဆိုတာကိုတော့ ချက်ချင်းမသိနိုင်ပါဘူး။ ဒါကြောင့် အရင်ဆုံး ကျွန်တော်တို့ catalog page မှာ user input ကို filter လုပ်ပြီး variable တစ်ခုထဲကို ထည့်လိုက်ပါမယ်။ ပြီးတော့ အဲ့ဒီ variable ကိုသုံးပြီး database ထဲမှာ searching စလုပ်မယ်၊ ပြီးရင်တော့ search လုပ်လို့ရတဲ့ results တွေကို display လုပ်ပါမယ်။ နောက်ပြီးတော့ ကျွန်တော်တို့ site visitors တွေ search လုပ်လိုက်တဲ့ results တွေကို count လုပ်ဖို့အတွက် get_catalog_count() ဆိုတဲ့ function တစ်ခုကို functions.php ထဲမှာ create လုပ်ပေးရပါမယ်။ ကျွန်တော်တို့ functions.php ထဲမှာ $search = null ကို နောက်ထပ် parameter တစ်ခုအဖြစ်ထည့်ပေးရပါမယ်။ နောက်ပြီးရင်တော့ ရှာလိုက်တဲ့ search term ဟာ Media table ထဲက title နဲ့ညီလားဆိုတဲ့ condition ကိုစစ်ပေးရပါမယ်။ အဲ့ဒါကို စစ်ဖို့အတွက်ဆိုရင်တော့ query မှာ LIKE ဆိုတဲ့ keyword ကိုအသုံးပြုရပါတယ်။ LIKE operator က column name ထဲက value ဟာ particular pattern တစ်ခုနဲ့ match ဖြစ်ရဲ့လားဆိုတာကို စစ်ပေးပါတယ်။ LIKE ကိုသုံးဖို့ဆိုရင် wildcard character တစ်ခုကို သုံးပေးဖို့လိုပါတယ်။ SQL မှာဆိုရင် wildcard character က percent(%) sign ပဲဖြစ်ပါတယ်။ % sign ဟာ any character လို့ပြောချင်တာဖြစ်ပြီး အဲ့ဒီ wildcard ကို beginning မှာရော end မှာရောထည့်ပေးရပါမယ်။ ပြီးရင်တော့ အဲ့ဒီ value ကို placeholder ထဲကို bind လုပ်ဖို့လိုပါတယ်။ အဲ့ဒီမှာဆိုရင် ကျွန်တော်တို့က variable တစ်ခုကို bind လုပ်ချင်တယ်ဆိုရင် bindParam() ကိုသုံးလို့ရပေမယ့် ဒီတစ်ခါမှာ placeholder ထဲကို search term ရော၊ percent sign(%) ရောလိုအပ်တဲ့အတွက် bindParam() အစား bindValue() ကိုပဲ အသုံးပြုပေးရပါမယ်။ ကျွန်တော်တို့ဟာ variable တစ်ခုကို ဘာ problems မှမရှိစေဘဲ bindValue() နဲ့ pass လုပ်ပေးလို့ရပါတယ်။ bindParam() ဟာ placeholder တစ်ခုကို specific variable ထဲကို အဲ့ဒီ variable က နောင်တစ်ချိန်မှာ ပြောင်းလဲသွားရင်တောင် bind လုပ်လိုက်တာဖြစ်ပြီး၊ bindValue() ကတော့ placeholder ကို binding လုပ်နေတဲ့အချိန်မှာပဲ variable ထဲက value ဆီကို bind လုပ်ပေးတာဖြစ်ပါတယ်။ bindValue() ကိုသုံးမယ်ဆိုရင်တော့ concatenation (.) တွေထည့်ပေးဖို့ လိုအပ်ပါတယ်။ </p>
    <p>Example of catalog.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            include("Includes/functions.php");

            $pageTitle = "Full Catalog";
            $section = null;

            // matching search patterns
            $search = null;

            // pagination
            $items_per_page = 8;

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

            // matching search patterns
            if (isset($_GET["s"])) {
                $search = filter_input(INPUT_GET, "s", FILTER_SANITIZE_STRING);
            }

            // pagination
            if (isset($_GET["pg"])) {
                $current_page = filter_input(INPUT_GET, "pg", FILTER_SANITIZE_NUMBER_INT);
            }

            if (empty($current_page)) {
                $current_page = 1;
            }

            $total_items = get_catalog_count($section);

            // Calculations and Links
            $total_pages = ceil($total_items / $items_per_page);

            // limit results in redirect
            $limit_results = "";
            if (!empty($section)) {
                $limit_results = "cat=" . $section . "&";
            }

            // redirect too large page numbers to the last page
            if ($current_page > $total_pages) {
                header("location:catalog.php?"
                    . $limit_results
                    . "pg=" . $total_pages);
            }

            // redirect too small page numbers to the first page
            if ($current_page < 1) {
                header("location:catalog.php?"
                    . $limit_results
                . "pg=1");
            }

            // determine the offset (number of items to skip) for the current page
            // for example: on page 3 with 8 items per page, the offset would be 16
            $offset = ($current_page - 1) * $items_per_page;

            // filtering data by category
            if (empty($section)) {   
                $catalog = full_catalog_array($items_per_page, $offset);
            } else {
                $catalog = category_catalog_array($section, $items_per_page, $offset);
            }

            //adding pagination links
            $pagination = "&lt;div clas=\"pagination\"&gt;";
            $pagination .= "Pages: ";
            for ($i = 1;$i &lt;= $total_pages;$i++) {
                if ($i == $current_page) {
                    $pagination .= " &lt;span&gt;$i&lt;/span&gt;";
                } else {
                    $pagination .= " &lt;a href='catalog.php?";
                    if (!empty($section)) {
                        $pagination .= "cat=" . $section . "&";
                    }
                    $pagination .= "pg=$i'&gt;$i&lt;/a&gt;";
                }
            }
            $pagination .= "&lt;/div&gt;";

            include('Includes/header.php');

            ?&gt;

            &lt;div class="section catalog page"&gt;
                &lt;div class="wrapper"&gt;

                    &lt;h1&gt;
                        &lt;?php
                        if ($section != null) {
                            echo "&lt;a class='full-catalog' href='catalog.php'&gt; Full Catalog&lt;/a&gt; &gt; ";
                        }
                        echo $pageTitle; ?&gt;
                    &lt;/h1&gt;
                    
                    &lt;!-- adding pagination links --&gt;
                    &lt;?php echo $pagination; ?&gt;
                    
                    &lt;ul class="items"&gt;
                        &lt;?php

                        foreach ($catalog as $item) {
                            echo get_item_html($item);
                        }
                        ?&gt;
                    &lt;/ul&gt;
                    
                    &lt;!-- adding pagination links --&gt;
                    &lt;?php echo $pagination; ?&gt;
                    
                &lt;/div&gt;
            &lt;/div&gt;
                    
            &lt;?php include('Includes/footer.php'); ?&gt;
        </code>
    </pre>
    <p>Example of functions.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            // setting up pagination
            function get_catalog_count($category = null, $search = null) {
            
                $category = strtolower($category);
            
                include("connection.php");
            
                try {
                    $sql = "SELECT COUNT(media_id) FROM Media";
                    // matching search patterns
                    if (!empty($search)) {
                        $result = $db->prepare(
                            $sql
                            . "WHERE title LIKE ?"
                        );
                        $result->bindValue(1, '%' . $search . '%', PDO::PARAM_STR);
                    // end matching searching patterns
                    } else if (!empty($category)) {
                        $result = $db->prepare(
                            $sql
                            . " WHERE LOWER(category) = ?"
                        );
                        $result->bindParam(1, $category, PDO::PARAM_STR);
                    } else {
                        $result = $db->prepare($sql);
                    }   
                    $result->execute();
                } catch (Exception $e) {
                    echo "Bad Query";
                }
            
                $count = $result->fetchColumn(0);
                return $count;
            }

            // improve with refactoring
            function full_catalog_array($limit = null, $offset = 0) {
                include("connection.php");
            
                try {
                    $sql = 'SELECT media_id, title, category, img
                        FROM Media
                        ORDER BY
                        REPLACE(
                            REPLACE(
                                REPLACE(title, "The ", ""),
                                "An ",
                                ""
                                ),
                                "A ",
                                ""
                            )';
                    if (is_integer($limit)) {
                        $results = $db->prepare($sql . " LIMIT ? OFFSET ?");
                        $results->bindParam(1, $limit, PDO::PARAM_INT);
                        $results->bindParam(2, $offset, PDO::PARAM_INT);
                    } else {
                        $results = $db->prepare($sql);
                    }
                    $results->execute();
                } catch (Exception $e) {
                    echo "Unable to retrieve results";
                    exit;
                }

                // Retrieving the result set => fetchAll
                // Working query results with fetch_style => PDO::FETCH_ASSOC
                $catalog = $results->fetchAll(PDO::FETCH_ASSOC);
                return $catalog;
            }

            // filtering data by category
            function category_catalog_array($category, $limit = null, $offset = 0) {
                include("connection.php");
                $category = strtolower($category);
            
                try {
                    $sql = 'SELECT media_id, title, category, img
                        FROM Media
                        WHERE LOWER(category) = ?
                        ORDER BY 
                        REPLACE(
                            REPLACE(
                                REPLACE(title, "The ", " "),
                                "An ",
                                " "
                            ),
                            "A ",
                            " "
                        )';

                    if (is_integer($limit)) {
                        $results = $db->prepare($sql . " LIMIT ? OFFSET ?");
                        $results->bindParam(1, $category, PDO::PARAM_STR);
                        $results->bindParam(2, $limit, PDO::PARAM_INT);
                        $results->bindParam(3, $offset, PDO::PARAM_INT);
                    } else {
                        $results = $db->prepare($sql);
                        $results->bindParam(1, $category, PDO::PARAM_STR);
                    }
                    $results->execute();
                } catch (Exception $e) {
                    echo "Unable to retrieve results";
                    exit;
                }

                $catalog = $results->fetchAll(PDO::FETCH_ASSOC);
                return $catalog;
            }

            // getting four random items
            function random_catalog_array() {
                include("connection.php");
            
                try {
                    $results = $db->query('SELECT media_id, title, category, img
                    FROM Media
                    ORDER BY RANDOM()
                    LIMIT 4'
                    );
                } catch (Exception $e) {
                    echo "Unable to retrieve results";
                    exit;
                }
            
                $catalog = $results->fetchAll(PDO::FETCH_ASSOC);
                return $catalog;
            }

            // Querying Multiple Tables with JOIN
            function single_item_array($id) {
                include("connection.php");
            
                try {
                    $results = $db->prepare("SELECT Media.media_id, title, category, img, format, year, genre, publisher, isbn
                    FROM Media
                    JOIN Genres ON Media.genre_id = Genres.genre_id
                    LEFT OUTER JOIN Books ON Media.media_id = Books.media_id 
                    WHERE Media.media_id = ?");

                    $results->bindParam(1, $id, PDO::PARAM_INT);
                    $results->execute();
                } catch (Exception $e) {
                    echo "Unable to retrieved results";
                    exit;
                }
            
                $item = $results->fetch();
                if (empty($item)) return $item;
            
                // adding a second query
                try {
                    $results = $db->prepare(
                       "SELECT fullname, role
                        FROM Media_People
                        JOIN People ON Media_People.people_id = People.people_id
                        WHERE Media_People.media_id = ?");
                    $results->bindParam(1, $id, PDO::PARAM_INT);
                    $results->execute();
                } catch (Exception $e) {
                    echo "Unable to retrieved results";
                    exit;
                }
            
                // fetching in a while
                while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
                    $item[$row["role"]][] = $row["fullname"];
                }
                return $item;
            }

            // simplifying with a Function
            function genre_array($category = null) {
                $category = strtolower($category);
                include("connection.php");
            
                try {
                    $sql = "SELECT genre, category"
                        . " FROM Genres "
                        . " JOIN Genre_Categories "
                        . " ON Genres.genre_id = Genre_Categories.genre_id ";
                    if (!empty($category)) {
                        $results = $db->prepare($sql
                            . " WHERE LOWER(category) = ?"
                            . " ORDER BY genre");
                        $results->bindParam(1, $category, PDO::PARAM_STR);
                    } else {
                        $results = $db->prepare($sql . " ORDER BY genre");
                    }
                    $results->execute();
                } catch (Exception $e) {
                    echo "Bad Query";
                }
                $genres = array();
                while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
                    $genres[$row["category"]][] = $row["genre"];
                }
                return $genres;
            }

            function get_item_html ($item) {
                $output = "&lt;li&gt;&lt;a href='details.php?id="
                    . $item["media_id"] . "'&gt;&lt;img src='" 
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
    <hr>


    <h2>Creating the Search Function</h2>
    <p>ကျွန်တော်တို့ page က search box ထဲမှာ search term ကိုသုံးပြီး items တွေကို အမှန်တကယ် pull လုပ်နိုင်ဖို့အတွက် functions.php file ထဲမှာ search_catalog_array() ဆိုတဲ့ function တစ်ခု တည်ဆောက်လိုက်ပါမယ်။ ပြီးရင်တော့ search_catalog_array() ထဲမှာ $search ဆိုတဲ့ parameter တစ်ခုထပ်ထည့်ပါမယ်။ ထို့နောက် ကျွန်တော်တို့ရဲ့ query မှာလည်း title နဲ့တူတာကို ရှာဖို့အတွက် WHERE နောက်မှာ LIKE ဆိုတဲ့ keyword ကိုသုံးပြီး စစ်ပေးရပါမယ်။ ပြီးရင်တော့ bind လုပ်ဖို့အတွက် bindValue() ကိုအသုံးပြုရမှာဖြစ်ပြီး LIKE ကိုသုံးထားတဲ့အတွက် သူ့ထဲမှာ percent(%) sign ကိုအသုံးပြုပေးဖို့လိုပါတယ်။ ထို့နောက် ကျွန်တော်တို့ catalog file ကိုသွားပြီး $total_items ထဲမှာ $search ဆိုတဲ့ parameter ကို ထပ်ထည့်ပေးရပါမယ်။ ပြီးရင်တော့ $search term က empty မဖြစ်ဘူးဆိုရင် $catalog ထဲကို search_catalog_array() ကို assign လုပ်ပေးမှာဖြစ်ပါတယ်။ ဒါဆိုရင်တော့ ကျွန်တော်တို့ page မှာ search term နဲ့ items တွေရဲ့ title ကို search လုပ်နိုင်ပါပြီ။ တစ်ကယ်လို့ search results နဲ့ ဘာမှ match ဖြစ်မနေရင်တော့ full catalog page ကို redirect လုပ်သွားမှာဖြစ်ပါတယ်။ ဒါပေမယ့် ကျွန်တော်တို့က user ဆီကို "There is no search results" လို့သိအောင်ပြောချင်တာပါ။ နောက်မှာ ဆက်လုပ်သွားပါမယ်။ </p>
    <p>Example of functions.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            // setting up pagination
            function get_catalog_count($category = null, $search = null) {
            
                $category = strtolower($category);
            
                include("connection.php");
            
                try {
                    $sql = "SELECT COUNT(media_id) FROM Media";
                    // matching search patterns
                    if (!empty($search)) {
                        $result = $db->prepare(
                            $sql
                            . " WHERE title LIKE ?"
                        );
                        $result->bindValue(1, '%' . $search . '%', PDO::PARAM_STR);
                    // end matching searching patterns
                    } else if (!empty($category)) {
                        $result = $db->prepare(
                            $sql
                            . " WHERE LOWER(category) = ?"
                        );
                        $result->bindParam(1, $category, PDO::PARAM_STR);
                    } else {
                        $result = $db->prepare($sql);
                    }   
                    $result->execute();
                } catch (Exception $e) {
                    echo "Bad Query";
                }
            
                $count = $result->fetchColumn(0);
                return $count;
            }

            // improve with refactoring
            function full_catalog_array($limit = null, $offset = 0) {
                include("connection.php");
            
                try {
                    $sql = 'SELECT media_id, title, category, img
                        FROM Media
                        ORDER BY
                        REPLACE(
                            REPLACE(
                                REPLACE(title, "The ", ""),
                                "An ",
                                ""
                                ),
                                "A ",
                                ""
                            )';
                    if (is_integer($limit)) {
                        $results = $db->prepare($sql . " LIMIT ? OFFSET ?");
                        $results->bindParam(1, $limit, PDO::PARAM_INT);
                        $results->bindParam(2, $offset, PDO::PARAM_INT);
                    } else {
                        $results = $db->prepare($sql);
                    }
                    $results->execute();
                } catch (Exception $e) {
                    echo "Unable to retrieve results";
                    exit;
                }

                // Retrieving the result set => fetchAll
                // Working query results with fetch_style => PDO::FETCH_ASSOC
                $catalog = $results->fetchAll(PDO::FETCH_ASSOC);
                return $catalog;
            }

            // filtering data by category
            function category_catalog_array($category, $limit = null, $offset = 0) {
                include("connection.php");
                $category = strtolower($category);
            
                try {
                    $sql = 'SELECT media_id, title, category, img
                        FROM Media
                        WHERE LOWER(category) = ?
                        ORDER BY 
                        REPLACE(
                            REPLACE(
                                REPLACE(title, "The ", " "),
                                "An ",
                                " "
                            ),
                            "A ",
                            " "
                        )';

                    if (is_integer($limit)) {
                        $results = $db->prepare($sql . " LIMIT ? OFFSET ?");
                        $results->bindParam(1, $category, PDO::PARAM_STR);
                        $results->bindParam(2, $limit, PDO::PARAM_INT);
                        $results->bindParam(3, $offset, PDO::PARAM_INT);
                    } else {
                        $results = $db->prepare($sql);
                        $results->bindParam(1, $category, PDO::PARAM_STR);
                    }
                    $results->execute();
                } catch (Exception $e) {
                    echo "Unable to retrieve results";
                    exit;
                }

                $catalog = $results->fetchAll(PDO::FETCH_ASSOC);
                return $catalog;
            }

            // creating search function
            function search_catalog_array($search, $limit = null, $offset = 0) {
                include("connection.php");
            
                try {
                    $sql = 'SELECT media_id, title, category, img
                        FROM Media
                        WHERE title LIKE ?
                        ORDER BY 
                        REPLACE(
                            REPLACE(
                                REPLACE(title, "The ", " "),
                                "An ",
                                " "
                            ),
                            "A ",
                            " "
                        )';

                    if (is_integer($limit)) {
                        $results = $db->prepare($sql . " LIMIT ? OFFSET ?");
                        $results->bindValue(1, "%" . $search . "%", PDO::PARAM_STR);
                        $results->bindParam(2, $limit, PDO::PARAM_INT);
                        $results->bindParam(3, $offset, PDO::PARAM_INT);
                    } else {
                        $results = $db->prepare($sql);
                        $results->bindParam(1, "%" . $search . "%", PDO::PARAM_STR);
                    }
                    $results->execute();
                } catch (Exception $e) {
                    echo "Unable to retrieve results";
                    exit;
                }

                $catalog = $results->fetchAll(PDO::FETCH_ASSOC);
                return $catalog;
            }

            // getting four random items
            function random_catalog_array() {
                include("connection.php");
            
                try {
                    $results = $db->query('SELECT media_id, title, category, img
                    FROM Media
                    ORDER BY RANDOM()
                    LIMIT 4'
                    );
                } catch (Exception $e) {
                    echo "Unable to retrieve results";
                    exit;
                }
            
                $catalog = $results->fetchAll(PDO::FETCH_ASSOC);
                return $catalog;
            }

            // Querying Multiple Tables with JOIN
            function single_item_array($id) {
                include("connection.php");
            
                try {
                    $results = $db->prepare("SELECT Media.media_id, title, category, img, format, year, genre, publisher, isbn
                    FROM Media
                    JOIN Genres ON Media.genre_id = Genres.genre_id
                    LEFT OUTER JOIN Books ON Media.media_id = Books.media_id 
                    WHERE Media.media_id = ?");

                    $results->bindParam(1, $id, PDO::PARAM_INT);
                    $results->execute();
                } catch (Exception $e) {
                    echo "Unable to retrieved results";
                    exit;
                }
            
                $item = $results->fetch();
                if (empty($item)) return $item;
            
                // adding a second query
                try {
                    $results = $db->prepare(
                       "SELECT fullname, role
                        FROM Media_People
                        JOIN People ON Media_People.people_id = People.people_id
                        WHERE Media_People.media_id = ?");
                    $results->bindParam(1, $id, PDO::PARAM_INT);
                    $results->execute();
                } catch (Exception $e) {
                    echo "Unable to retrieved results";
                    exit;
                }
            
                // fetching in a while
                while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
                    $item[$row["role"]][] = $row["fullname"];
                }
                return $item;
            }

            // simplifying with a Function
            function genre_array($category = null) {
                $category = strtolower($category);
                include("connection.php");
            
                try {
                    $sql = "SELECT genre, category"
                        . " FROM Genres "
                        . " JOIN Genre_Categories "
                        . " ON Genres.genre_id = Genre_Categories.genre_id ";
                    if (!empty($category)) {
                        $results = $db->prepare($sql
                            . " WHERE LOWER(category) = ?"
                            . " ORDER BY genre");
                        $results->bindParam(1, $category, PDO::PARAM_STR);
                    } else {
                        $results = $db->prepare($sql . " ORDER BY genre");
                    }
                    $results->execute();
                } catch (Exception $e) {
                    echo "Bad Query";
                }
                $genres = array();
                while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
                    $genres[$row["category"]][] = $row["genre"];
                }
                return $genres;
            }

            function get_item_html ($item) {
                $output = "&lt;li&gt;&lt;a href='details.php?id="
                    . $item["media_id"] . "'&gt;&lt;img src='" 
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
            include("Includes/functions.php");

            $pageTitle = "Full Catalog";
            $section = null;

            // matching search patterns
            $search = null;

            // pagination
            $items_per_page = 8;

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

            // matching search patterns
            if (isset($_GET["s"])) {
                $search = filter_input(INPUT_GET, "s", FILTER_SANITIZE_STRING);
            }

            // pagination
            if (isset($_GET["pg"])) {
                $current_page = filter_input(INPUT_GET, "pg", FILTER_SANITIZE_NUMBER_INT);
            }

            if (empty($current_page)) {
                $current_page = 1;
            }

            // assigning search parameter
            $total_items = get_catalog_count($section, $search);

            // Calculations and Links
            $total_pages = ceil($total_items / $items_per_page);

            // limit results in redirect
            $limit_results = "";
            if (!empty($section)) {
                $limit_results = "cat=" . $section . "&";
            }

            // redirect too large page numbers to the last page
            if ($current_page > $total_pages) {
                header("location:catalog.php?"
                    . $limit_results
                    . "pg=" . $total_pages);
            }

            // redirect too small page numbers to the first page
            if ($current_page < 1) {
                header("location:catalog.php?"
                    . $limit_results
                . "pg=1");
            }

            // determine the offset (number of items to skip) for the current page
            // for example: on page 3 with 8 items per page, the offset would be 16
            $offset = ($current_page - 1) * $items_per_page;

            // filtering data by search
            // filtering data by category
            if (!empty($search)) {
                $catalog = search_catalog_array($search, $items_per_page, $offset);
            } else if (empty($section)) {   
                $catalog = full_catalog_array($items_per_page, $offset);
            } else {
                $catalog = category_catalog_array($section, $items_per_page, $offset);
            }

            //adding pagination links
            $pagination = "&lt;div clas=\"pagination\"&gt;";
            $pagination .= "Pages: ";
            for ($i = 1;$i <= $total_pages;$i++) {
                if ($i == $current_page) {
                    $pagination .= " &lt;span&gt;$i&lt;/span&gt;";
                } else {
                    $pagination .= " &lt;a href='catalog.php?";
                    if (!empty($section)) {
                        $pagination .= "cat=" . $section . "&";
                    }
                    $pagination .= "pg=$i'&gt;$i&lt;/a&gt;";
                }
            }
            $pagination .= "&lt;/div&gt;";

            include('Includes/header.php');

            ?&gt;

            &lt;div class="section catalog page"&gt;
                &lt;div class="wrapper"&gt;

                    &lt;h1&gt;
                        &lt;?php
                        if ($section != null) {
                            echo "&lt;a class='full-catalog' href='catalog.php'&gt; Full Catalog&lt;/a&gt; &gt; ";
                        }
                        echo $pageTitle; ?&gt;
                    &lt;/h1&gt;
                    
                    &lt;!-- adding pagination links --&gt;
                    &lt;?php echo $pagination; ?&gt;
                    
                    &lt;ul class="items"&gt;
                        &lt;?php

                        foreach ($catalog as $item) {
                            echo get_item_html($item);
                        }
                        ?&gt;
                    &lt;/ul&gt;
                    
                    &lt;!-- adding pagination links --&gt;
                    &lt;?php echo $pagination; ?&gt;
                    
                &lt;/div&gt;
            &lt;/div&gt;
                    
            &lt;?php include('Includes/footer.php'); ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Accounting for Empty Results</h2>
    <p>နောက်ဆုံးမှာတော့ ကျွန်တော်တို့ search form က တော်တော်များများကို အလုပ်လုပ်နေပါပြီ။ ကျွန်တော်တို့ handle လုပ်ဖို့ကျန်နေတာ တစ်ခုကတော့ empty results list တစ်ခုအတွက်ပဲ ဖြစ်ပါတယ်။ ကျွန်တော်တို့ search box ထဲမှာရိုက်ထည့်လိုက်တဲ့ search term က database ထဲက ဘယ် items နဲ့ match မဖြစ်တဲ့အခါ ကျွန်တော်တို့သိချင်တာက ကျွန်တော်တို့ search results page တစ်ခုပေါ်ရောက်နေပါတယ် နဲ့ search term က ဘာဖြစ်နေပါတယ်ဆိုတာကို သိချင်တာပဲဖြစ်ပါတယ်။ ဥပမာ ကျွန်တော်တို့က Alena လို့ရိုက်ရှာလိုက်ရင် ကျွန်တော်တို့ဟာ search page ပေါ်မှာရောက်နေပြီး page title ကိုပြပေးမယ်။ ပြီးရင်တော့ ကျွန်တော်တို့ အစောက search term ဖြစ်တဲ့ Alena ကိုလည်း ပြပေးမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ရှာလိုက်တဲ့ search results က ဘာမှ return ပြန်မလာဘူးဆိုတာကိုပါ မြင်ရမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ user ဆီကဝင်လာတဲ့ input ကို output အဖြစ်ထုတ်ပြမယ်ဆိုရင် htmlspecialchars() ဆိုတဲ့ built in function တစ်ခုနဲ့ filter လုပ်ပေးဖို့ လိုအပ်ပါတယ်။ Code အပြည့်အစုံကိုတော့ အောက်က example မှာ ကြည့်နိုင်ပါတယ်။ </p>
    <p>Example of catalog.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            include("Includes/functions.php");

            $pageTitle = "Full Catalog";
            $section = null;

            // matching search patterns
            $search = null;

            // pagination
            $items_per_page = 8;

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

            // matching search patterns
            if (isset($_GET["s"])) {
                $search = filter_input(INPUT_GET, "s", FILTER_SANITIZE_STRING);
            }

            // pagination
            if (isset($_GET["pg"])) {
                $current_page = filter_input(INPUT_GET, "pg", FILTER_SANITIZE_NUMBER_INT);
            }

            if (empty($current_page)) {
                $current_page = 1;
            }

            // assigning search parameter
            $total_items = get_catalog_count($section, $search);
            $total_pages = 1;
            $offset = 0;

            if ($total_items > 0) {
                // Calculations and Links
                $total_pages = ceil($total_items / $items_per_page);
            
                // limit results in redirect
                $limit_results = "";
                if (!empty($section)) {
                    $limit_results = "cat=" . $section . "&";
                }
            
                // redirect too large page numbers to the last page
                if ($current_page > $total_pages) {
                    header("location:catalog.php?"
                        . $limit_results
                        . "pg=" . $total_pages);
                }
            
                // redirect too small page numbers to the first page
                if ($current_page < 1) {
                    header("location:catalog.php?"
                        . $limit_results
                    . "pg=1");
                }
            
                // determine the offset (number of items to skip) for the current page
                // for example: on page 3 with 8 items per page, the offset would be 16
                $offset = ($current_page - 1) * $items_per_page;
            
                //adding pagination links
                $pagination = "&lt;div clas=\"pagination\"&gt;";
                $pagination .= "Pages: ";
                for ($i = 1;$i <= $total_pages;$i++) {
                    if ($i == $current_page) {
                        $pagination .= " &lt;span&gt;$i&lt;/span&gt;";
                    } else {
                        $pagination .= " &lt;a href='catalog.php?";
                        if (!empty($section)) {
                            $pagination .= "cat=" . $section . "&";
                        }
                        $pagination .= "pg=$i'&gt;$i&lt;/a&gt;";
                    }
                }
                $pagination .= "&lt;/div&gt;";
            }

            // filtering data by search
            // filtering data by category
            if (!empty($search)) {
                $catalog = search_catalog_array($search, $items_per_page, $offset);
            } else if (empty($section)) {   
                $catalog = full_catalog_array($items_per_page, $offset);
            } else {
                $catalog = category_catalog_array($section, $items_per_page, $offset);
            }

            include('Includes/header.php');

            ?&gt;

            &lt;div class="section catalog page"&gt;
                &lt;div class="wrapper"&gt;

                    &lt;h1&gt;
                        &lt;?php
                        if ($search != null) {
                            echo "Search Results for \"" . htmlspecialchars($search) . "\"";
                        } else {
                            if ($section != null) {
                                echo "&lt;a class='full-catalog' href='catalog.php'&gt; Full Catalog&lt;/a&gt; &gt; ";
                            }
                            echo $pageTitle;
                        }
                        ?&gt;
                    &lt;/h1&gt;
                    
                    &lt;!-- adding pagination links --&gt;
                    &lt;?php
                    if ($total_items &lt; 1) {
                        echo "&lt;p&gt;No items were found matching that search term.&lt;/p&gt;";
                        echo "&lt;p&gt;Search Again or "
                            . "&lt;a href=\"catalog.php\"&gt;Browse the Full Catalog&lt;/a&gt;&lt;/p&gt;";
                    } else {
                        echo $pagination;
                    ?&gt;

                    &lt;ul class="items"&gt;
                        &lt;?php

                        foreach ($catalog as $item) {
                            echo get_item_html($item);
                        }
                        ?&gt;
                    &lt;/ul&gt;
                    
                    &lt;!-- adding pagination links --&gt;
                    &lt;?php echo $pagination;
                    }
                    ?&gt;

                &lt;/div&gt;
            &lt;/div&gt;
                
            &lt;?php include('Includes/footer.php'); ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Combining Search and Pagination</h2>
    <p>ကျွန်တော်တို့ရဲ့ search functionality ကတော့ ကောင်းစွာအလုပ်လုပ်နေပါပြီ။ User တစ်ယောက်ဟာ page တစ်ခုချင်းစီတိုင်းမှာ သူရိုက်ချင်တဲ့ term တစ်ခုကို search bar ရိုက်ပြီးရှာလို့ရပါတယ်။ User တွေဟာ သူတို့ရိုက်ရှာလိုက်တဲ့ item results တွေကို list တစ်ခုအနေနဲ့ မြင်တွေ့ရမှာဖြစ်ပါတယ်။ တစ်ကယ်လို့ results မရှိဘူးဆိုရင် user သိအောင်ပြောပြပေးမှာဖြစ်ပြီး၊ သူတို့ဟာ search term တစ်ခုမှမပါဘဲ submit လုပ်မယ်ဆိုရင် full catalog ကို မြင်ရမှာပဲဖြစ်ပါတယ်။ ကျွန်တော်တို့ အခုတွေ့ရမယ့် issue တစ်ခုကတော့ တစ်ကယ်လို့ search လုပ်လိုက်တဲ့ results တွေက ကျွန်တော်တို့ limit လုပ်ထားတဲ့အတိုင်း 8 ခုထပ်ပိုပြီး return ပြန်မယ်ဆိုရင် ကျွန်တော်တို့က ပထမဆုံး item 8 ခုကိုပဲ return ပြန်ပေးမှာဖြစ်ပြီး ကျန်နေတဲ့ items တွေကိုတော့ second page ဆိုပြီး ထပ်ပြမပေးတော့ပါဘူး။ ဒါကြောင့် ကျွန်တော်တို့က search results တွေနဲ့ pagination ကို integrate(စုစည်း) လုပ်ပေးဖို့လိုပါတယ်။ ဒါကြောင့် catalog.php ထဲမှာ search အတွက် conditional တစ်ခုထည့်ပါမယ်။ တစ်ကယ်လို့ ကျွန်တော်တို့မှာ search လုပ်ထားတာရှိတယ်ဆိုရင် သူ့ကို URL မှာ add လုပ်ပါမယ်။ ပြီးရင်တော့ အဲ့ဒီ data ကို run နိုင်ဖို့အသုံးပြုတဲ့ function နှစ်ခုရှိပါတယ်။ ပထမတစ်ခုက if ထဲမှာ search ရှိမရှိစစ်ထားတာဟာ user input ဖြစ်တဲ့အတွက် output ကို escape လုပ်ပေးရမှာဖြစ်လို့ htmlspecialchars() ဆိုတဲ့ function ကိုအသုံးပြုရပါမယ်။ ဒုတိယတစ်ခုကတော့ ကျွန်တော်တို့ pass လုပ်လိုက်တဲ့ အဲ့ဒီ data ကို query string က properly ပေါ်ဖို့အတွက် urlencode() ဆိုတဲ့ function ကို အသုံးပြုပေးရမှာ ဖြစ်ပါတယ်။ ဒါကို သေချာဖို့အတွက် နောက်ထပ် ထည့်လို့ရတဲ့နေရာတစ်ခုရှိပါသေးတယ်။ ကျွန်တော်တို့ page numbers တွေအတွက် redirects တွေပဲဖြစ်ပါတယ်။ အစောက စစ်ခဲ့တဲ့ if condition ကို copy ကူးပြီး $limit_results ရဲ့အောက်မှာထည့်ပေးလိုက်ပါမယ်။ အဲ့ဒီမှာ ကျွန်တော်တို့ change လုပ်ဖို့လိုတာတစ်ခုကတော့ $pagination variable ပဲဖြစ်ပြီး သူ့နေရာမှာ $limit_results လို့ပေးလိုက်ရုံပါပဲ။ ပြီးရင်တော့ ကျွန်တော်တို့ဟာ variable ကို replace လုပ်တာဖြစ်ပြီး add လုပ်တာမဟုတ်တဲ့အတွက် concatenation operator ကိုဖြုတ်ပေးရပါတယ်။ ဒါဆိုရင်တော့ ကျွန်တော်တို့ page မှာ search term တစ်ခုနဲ့ရှာတိုင်း search results ရှိသလောက်ကို page တစ်ခုချင်းမှာ item 8 ခုနဲ့အတူ page number တွေခွဲပြီး ပြပေးမှာဖြစ်ပါတယ်။ တစ်ကယ်လို့ ကျွန်တော်တို့က search results ရှိသလောက်ထက်ပိုပြီး page ကို URL bar မှာထည့်မယ်ဆိုရင် နောက်ဆုံး page number ကိုပဲ redirect လုပ်သွားမှာဖြစ်ပါတယ်။ </p>
    <p>Example of catalog.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            include("Includes/functions.php");

            $pageTitle = "Full Catalog";
            $section = null;

            // matching search patterns
            $search = null;

            // pagination
            $items_per_page = 8;

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

            // matching search patterns
            if (isset($_GET["s"])) {
                $search = filter_input(INPUT_GET, "s", FILTER_SANITIZE_STRING);
            }

            // pagination
            if (isset($_GET["pg"])) {
                $current_page = filter_input(INPUT_GET, "pg", FILTER_SANITIZE_NUMBER_INT);
            }

            if (empty($current_page)) {
                $current_page = 1;
            }

            // assigning search parameter
            $total_items = get_catalog_count($section, $search);
            $total_pages = 1;
            $offset = 0;

            if ($total_items > 0) {
                // Calculations and Links
                $total_pages = ceil($total_items / $items_per_page);
            
                // limit results in redirect
                $limit_results = "";
                if (!empty($search)) {
                    $limit_results = "s=" . urlencode(htmlspecialchars($search)) . "&";
                } else if (!empty($section)) {
                    $limit_results = "cat=" . $section . "&";
                }
            
                // redirect too large page numbers to the last page
                if ($current_page > $total_pages) {
                    header("location:catalog.php?"
                        . $limit_results
                        . "pg=" . $total_pages);
                }
            
                // redirect too small page numbers to the first page
                if ($current_page < 1) {
                    header("location:catalog.php?"
                        . $limit_results
                    . "pg=1");
                }
            
                // determine the offset (number of items to skip) for the current page
                // for example: on page 3 with 8 items per page, the offset would be 16
                $offset = ($current_page - 1) * $items_per_page;
            
                //adding pagination links
                $pagination = "&lt;div clas=\"pagination\" style=\"text-align: center;\"&gt;";
                $pagination .= "Pages: ";
                for ($i = 1;$i <= $total_pages;$i++) {
                    if ($i == $current_page) {
                        $pagination .= " &lt;span&gt;$i&lt;/span&gt;";
                    } else {
                        $pagination .= " &lt;a href='catalog.php?";
                        if (!empty($search)) {
                            $pagination .= "s=" . urlencode(htmlspecialchars($search)) . "&";
                        } else if (!empty($section)) {
                            $pagination .= "cat=" . $section . "&";
                        }
                        $pagination .= "pg=$i'&gt;$i&lt;/a&gt;";
                    }
                }
                $pagination .= "&lt;/div&gt;";
            }

            // filtering data by search
            // filtering data by category
            if (!empty($search)) {
                $catalog = search_catalog_array($search, $items_per_page, $offset);
            } else if (empty($section)) {   
                $catalog = full_catalog_array($items_per_page, $offset);
            } else {
                $catalog = category_catalog_array($section, $items_per_page, $offset);
            }

            include('Includes/header.php');

            ?&gt;

            &lt;div class="section catalog page"&gt;
                &lt;div class="wrapper"&gt;

                    &lt;h1&gt;
                        &lt;?php
                        if ($search != null) {
                            echo "Search Results for \"" . htmlspecialchars($search) . "\"";
                        } else {
                            if ($section != null) {
                                echo "&lt;a class='full-catalog' href='catalog.php'&gt; Full Catalog&lt;/a&gt; &gt; ";
                            }
                            echo $pageTitle;
                        }
                        ?&gt;
                    &lt;/h1&gt;
                    
                    &lt;!-- adding pagination links --&gt;
                    &lt;?php
                    if ($total_items &lt; 1) {
                        echo "&lt;p&gt;No items were found matching that search term.&lt;/p&gt;";
                        echo "&lt;p&gt;Search Again or "
                            . "&lt;a href=\"catalog.php\"&gt;Browse the Full Catalog&lt;/a&gt;&lt;/p&gt;";
                    } else {
                        echo $pagination;
                    ?&gt;

                    &lt;ul class="items"&gt;
                        &lt;?php

                        foreach ($catalog as $item) {
                            echo get_item_html($item);
                        }
                        ?&gt;
                    &lt;/ul&gt;
                    
                    &lt;!-- adding pagination links --&gt;
                    &lt;?php echo $pagination;
                    }
                    ?&gt;

                &lt;/div&gt;
            &lt;/div&gt;
                
            &lt;?php include('Includes/footer.php'); ?&gt;
        </code>
    </pre>
    <p>
        <a href="index.php" target="_blank" class="output">The result of above code:</a>
    </p>



</body>
</html>