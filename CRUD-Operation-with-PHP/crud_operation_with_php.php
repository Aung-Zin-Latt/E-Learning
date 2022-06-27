<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation with PHP</title>
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
    

    <h2>What is CRUD?</h2>
    <p>ကျွန်တော်တို့ဟာ ဘယ် dynamic application တစ်ခုကိုပဲဆောက်ဆောက် သူ့ရဲ့ အဓိကကျတဲ့အပိုင်းကတော့ Database ပဲဖြစ်ပါတယ်။ ကျွန်တော်တို့တည်ဆောက်လိုက်တဲ့ application က e-commerce or social network or phone ထဲက to-do-app စတဲ့ ဘယ် application တွေပဲဖြစ်ပါစေ သူတို့ထဲမှာရှိတဲ့ data တွေက အချိန်နဲ့အမျှ change လုပ်နေဖို့လိုပါတယ်။ ဥပမာ e-commerce site တစ်ခုမှာ ကျွန်တော်တို့က products တွေကို search လုပ်ချင်တယ်၊ stock counts ကို update လုပ်ချင်တယ်၊ new orders or new products တွေ create လုပ်ချင်တယ် နဲ့ မသုံးတော့တဲ့ products အားလုံးကို remove လုပ်ချင်တယ်ဆိုပါစို့။ ကျွန်တော်တို့ site က dynamic ဖြစ်တဲ့အတွက် state တွေကလည်း အချိန်တိုင်းပြောင်းလဲနေရမယ်။ အဲ့ဒီမှာဆိုရင် CRUD ဆိုတာက ကျွန်တော်တို့ database တစ်ခုအတွင်းမှာရှိတဲ့ data တွေကို operation 4ခုနဲ့ လုပ်ဆောင်ပါမယ်လို့ ရည်ညွှန်းပါတယ်။ အဲ့ဒီ operation 4ခုထဲက ပထမဆုံးတစ်ခုကတော့ database ထဲကို data တွေ create or add လုပ်တာပါ။ ဒုတိယတစ်ခုကတော့ data ကို read လုပ်တာဖြစ်ပါတယ်။ Reading မှာ results တွေကို searching နဲ့ filtering လုပ်တာတွေပါဝင်ပါတယ်။ တတိယတစ်ခုကတော့ table ထဲမှာရှိတဲ့ rows of data တွေကို update or edit လုပ်ချင်တာဖြစ်ပြီး နောက်ဆုံး operation တစ်ခုကတော့ data တွေကို delete လုပ်တာပဲဖြစ်ပါတယ်။ အဲ့ဒီ Create, Read, Update နဲ့ Delete ဆိုတဲ့ operation 4ခုကို အတိုကောက်အနေနဲ့ CRUD လို့ခေါ်တာဖြစ်ပါတယ်။ CRUD operations တစ်ခုစီမှာလည်း သူနဲ့သက်ဆိုင်တဲ့ SQL keyword တစ်ခုစီရှိပါတယ်။ ဥပမာ database ထဲက data တွေကို read လုပ်ချင်ရင် SELECT ဆိုတဲ့ keyword ကိုအသုံးပြုတာမျိုးပါ။ </p>
    <hr>


    <h2>Connecting to the Database</h2>
    <p>ကျွန်တော်တို့ အခုတည်ဆောက်မယ့် project မှာ database နဲ့ အရင်ဆုံးချိတ်ဆက်ဖို့အတွက် PHP data object လို့ခေါ်တဲ့ PDO ကိုအသုံးပြုသွားမှာဖြစ်ပါတယ်။ နောက်ပြီးတော့ ကျွန်တော်တို့ project ကို accessing လုပ်ဖို့နဲ့ data ကို test လုပ်ဖို့လည်း ဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ PDO class ကနေ object တစ်ခုရဲ့ instance တစ်ခုကို instantiate or create လုပ်ရမယ့် code ကို ရေးသွားမှာဖြစ်ပါတယ်။ အဲ့ဒီ object variable က ကျွန်တော်တို့ကို database နဲ့ အပြန်အလှန်လုပ်ဆောင်တဲ့အခါမှာ လိုအပ်တဲ့ attributes တွေနဲ့ actions တွေကို ပေးသွားမှာဖြစ်ပါတယ်။ Database နဲ့ connect လုပ်ဖို့အတွက် file အသစ်တစ်ခုထဲမှာ class တစ်ခုကနေ object တစ်ခုကို create လုပ်ဖို့ ပထမဆုံး ကျွန်တော်တို့ create လုပ်ချင်တဲ့ object ရဲ့ variable name တစ်ခုကို declare လုပ်ပေးရပါမယ်။ သူ့ကို $db လို့နာမည်ပေးလိုက်ပြီး သူ့ထဲကို object အသစ်တစ်ခု assign လုပ်ဖို့အတွက် equal sign ကိုသုံးပြီး new PDO() ဆိုတဲ့ object အသစ်တစ်ခုရေးလိုက်ပါမယ်။ ဒါဟာ PDO type ရဲ့ new empty object variable တစ်ခု create လုပ်လိုက်တာဖြစ်ပါတယ်။ PDO object ရဲ့ parenthesis ထဲမှာ array function ရေးသလိုပဲ arguments တွေ pass လုပ်ပေးလို့ရပါတယ်။ PDO object ထဲမှာတော့ database နဲ့ connect လုပ်ဖို့ လိုအပ်တဲ့ information တွေကို argument အနေနဲ့ pass လုပ်ပေးလိုက်ပါမယ်။ အခုကျွန်တော်တို့ project ထဲမှာ SQLite database ကို အသုံးပြုမှာဖြစ်တဲ့အတွက် <a href="https://www.php.net/manual/en/ref.pdo-sqlite.php">Documentation</a> မှာ SQLite ကို database နဲ့ ဘယ်လို connect လုပ်မလဲဆိုတာ လေ့လာပါမယ်။ PDO SQLite ဟာ PHP data object ကို SQLite 3 databases တွေမှာ access ဖြစ်ဖို့ implement လုပ်ပေးတဲ့ driver တစ်ခုဖြစ်ပါတယ်။ Driver တစ်ခုဆိုတာ တစ်ခုနဲ့ တစ်ခု connect လုပ်ပေးတဲ့ a piece of software တစ်ခုပဲဖြစ်ပါတယ်။ ဒီ project မှာတော့ PDO driver က PDO object ကိုအသုံးပြီး SQLite နဲ့ connect လုပ်ပေးတာဖြစ်ပါတယ်။ SQLite database ကို PDO နဲ့ချိတ်ဆက်အသုံးပြုဖို့အတွက် Data Source Name (or) DSN ကို pass လုပ်ပေးဖို့လိုပါတယ်။ Disk ပေါ်မှာ database တစ်ခုကို access လုပ်ဖို့အတွက် prefix SQLite နောက်က database ဆီကို သွားမယ့် absolute path နဲ့ pass လုပ်ပေးဖို့လိုပါတယ်။ __DIR__ကတော့ magic constant ဖြစ်ပြီး သူ့နောက်မှာတော့ /database.db ဆိုပြီ file path ကို ထည့်ပေးရတာဖြစ်ပါတယ်။ </p>
    <p>Example of connection.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;php

            $db = new PDO("sqlite:" . __DIR__ . "/database.db");
            var_dump($db);

            ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Handling Exceptions</h2>
    <p>ကျွန်တော်တို့ရေးလိုက်တဲ့ code ဟာ သူ့ရဲ့ external system အပေါ်မှာ မူတည်ပါတယ်။ အဲ့ဒီမှာဆိုရင် တစ်ခုခု wrong ဖြစ်ဖို့က chance အမြဲတမ်းရှိနိုင်ပါတယ်။ ကျွန်တော်တို့ database က down ဖြစ်နေရင် user ကို ဘယ်လို respond ပြန်မလဲ။ အဲ့ဒီလိုဖြစ်တာကိုတော့ exceptions တွေလို့ခေါ်ပြီး ကျွန်တော်တို့ဟာ external system နဲ့ connect လုပ်ထားတဲ့ ဘယ် code မဆို handle လုပ်ဖို့လိုအပ်ပါတယ်။ ဘယ် application မဆို errors တွေကို manage လုပ်တာဟာ အထူးသဖြင့် database errors တွေဝင်လာတဲ့အခါ တစ်ကယ်ကို အရေးကြီးပါတယ်။ အဲ့ဒီမှာ ကျွန်တော်တို့ မှတ်ထားရမှာက exceptions တွေဟာ exceptional တွေဖြစ်ပြီးတော့ သူတို့ကို မျှော်မှန်းထားသလို ဖြစ်မယ့်code ကို မရေးသင့်ပါဘူး။ ဆိုလိုတာက မျှော်လင့်ထားသလို မဖြစ်မှသာ exceptions တွေအလုပ်လုပ်သင့်ပါတယ်။ တစ်ကယ်လို့ code က function ထဲမှာ သူ့ကို allow လုပ်မထားဘူးဆိုတဲ့အချိန်မျိုးမှာ exception တစ်ခုနဲ့ catch လုပ်ပေးရမှာဖြစ်ပါတယ်။ External system တစ်ခုနဲ့ connect လုပ်မယ့် ဘယ်code မဆို exceptions တွေ handle လုပ်နိုင်မယ့် block of code အတွင်းမှာပဲ ထည့်သင့်ပါတယ်။ Exceptions တွေကို handle လုပ်ဖို့အတွက် PHP ရဲ့ block of code ကို try-catch block လို့ခေါ်ပါတယ်။ သူ့ကိုရေးမယ်ဆိုရင်တော့ ကျွန်တော်တို့ code ကို execute မလုပ်ခင် try {} ဆိုတဲ့ command ကို အရင်ရေးရပါတယ်။ သူ့ထဲမှာတော့ ကျွန်တော်တို့ execute လုပ်ချင်တဲ့ code ကို ရေးပေးရပါတယ်။ တစ်ကယ်လို့ try block ထဲက execute မလုပ်ရင် error ကို ဖမ်းဖို့အတွက် catch {} ဆိုတဲ့ command ထဲမှာ error code ကို ထည့်ရေးပေးရမှာဖြစ်ပါတယ်။ catch ရဲ့နောက်မှာတော့ parenthesis နဲ့ သူ့ထဲမှာ Exception $e ဆိုပြီးထည့်ပေးရမှာဖြစ်ပါတယ်။ Exception ကိုတွေ့ပြီဆိုရင် exception details ကို variable $e ထဲမှာ catch လုပ်မှာဖြစ်ပါတယ်။ တစ်ကယ်လို့ try block ထဲမှာရှိတဲ့ code က database နဲ့ connect မလုပ်ဘူးဆိုရင် catch block ထဲမှာ $->getMessage() ဆိုတဲ့ error message တစ်ခုကို ထုတ်ပြမှာဖြစ်ပါတယ်။ ထို့နောက် ဘယ်code မှာဆက်ပြီး အလုပ်မလုပ်တော့ဘူးဆိုတာကိုပြောဖို့ exit ဆိုတဲ့ command ကို အသုံးပြုပေးရမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ try block ထဲမှာ $db->setAttribute(PDP::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ဆိုတာ PDO ကို errors အားလုံးကို exception တစ်ခုအဖြစ် handle လုပ်သင့်တယ်လို့ ပြောလိုက်တာဖြစ်ပါတယ်။ </p>
    <p>Example of connection.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;php

            try {
                $db = new PDO("sqlite:" . __DIR__ . "/database.db");
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (Exception $e) {
                $e->getMessage();
                exit;
            }

            var_dump($db);

            ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Reading Project Data</h2>
    <p>အခုဆိုရင် ကျွန်တော်တို့အနေနဲ့ connection အားလုံးကို setup လုပ်ပြီးပြီဖြစ်တဲ့အတွက် data ကိုဆွဲထုတ်ဖို့ ready ဖြစ်နေပါပြီ။ ကျွန်တော်တို့ website ကို data နဲ့ connecting စမလုပ်ခင် ကျွန်တော်တို့ ဘာ data ကိုအသုံးပြုမလဲဆိုတာ နားလည်ဖို့လိုအပ်ပါတယ်။ ဒါကြောင့် ကျွန်တော်တို့ database ကိုအရင်ကြည့်မယ်။ အခု project အတွက် database ထဲမှာ tables နှစ်ခုပါဝင်ပါမယ်။ ပထမတစ်ခုကတော့ project_id ကို unique key အဖြစ်ထားထားတဲ့ projects table တစ်ခုဖြစ်ပြီး နောက်ထပ် title နဲ့ category fields တွေပါဝင်ပါမယ်။ ဒုတိယ table ကတော့ tasks table ဖြစ်ပြီး သူ့မှာ task_id ကို unique key အဖြစ်ထားတာရယ်၊ title, date နဲ့ time fields တွေပါဝင်ပါမယ်။ ပြီးတော့ tasks table မှာ projects table နဲ့ချိတ်ဖို့အတွက် project_id ဆိုတဲ့ field တစ်ခု ထပ်ပါဝင်ပါမယ်။ ဒါဆိုရင်တော့ သူတို့ကို ကျွန်တော်တို့ application နဲ့ စပြီး connect လုပ်လို့ရပါပြီ။ အဲ့ဒီမှာဆိုရင် ကျွန်တော်တို့ အရင်က လေ့လာထားဖူးသလိုပဲ separate concerns တွေထားဖို့လိုအပ်ပါတယ်။ ဆိုလိုတာကတော့ database ထဲက ဆွဲထုတ်မယ့် information တွေပါတဲ့ code ကို တစ်နေရာတည်းမှာ keep လုပ်ထားပြီး display လုပ်မယ့် data ကိုကျတော့ အခြားတစ်နေရာမှာ keep လုပ်ထားမယ်လို့ ဆိုလိုတာဖြစ်ပါတယ်။ ဒါကြောင့် database ထဲကနေ pull လုပ်မယ့် specific data တွေကိုရဖို့ functions တွေကို create လုပ်ရပါမယ်။ ထို့နောက် အဲ့ဒီ functions တွေကို application ရဲ့ လိုအပ်တဲ့နေရာမှာ ပြန်ခေါ်သုံးမှာဖြစ်ပါတယ်။ ဒီနည်းနဲ့ပဲ တစ်ကယ်လို့  database အစား API တစ်ခုနဲ့ connect လုပ်တာမျိုး data source ကို change လုပ်ချင်တဲ့အခါ functions တွေကိုပဲ အလွယ်တကူသွား change လိုက်မှာဖြစ်ပါတယ်။ function.php file ထဲမှာ ကျွန်တော်တို့က get_project_list() ဆိုတဲ့ function ကို create လုပ်လိုက်မယ်။ ပြီးတော့ project lists တွေကို ရယူဖို့အတွက် database ထဲကနေ ဆွဲထုတ်မှာဖြစ်ပါတယ်။ ဒါကြောင့် ကျွန်တော်တို့ function.php ထဲမှာ database နဲ့ချိတ်ဆက်မယ့် connection.php file ကို include လုပ်ပေးဖို့လိုအပ်ပါတယ်။ ပြီးရင်တော့ database ထဲက ရလာတဲ့ project lists data တွေကိုတော့ unordered list နဲ့ထုတ်ပြမှာဖြစ်ပါတယ်။ </p>
    <p>Example of functions.php File:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        // application functions

        function get_project_list() {
            include("connection.php");
        
            try {
                return $db->query('SELECT project_id, title, category FROM projects');
            } catch (Exception $e) {
                echo "ERROR!: " . $e->getMessage() . "&lt;br&gt;";
                return array();
            }
        }

        ?&gt;
        </code>
    </pre>
    <p>Example of project_list.php File:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php
        require 'Includes/functions.php';

        $page = "projects";
        $pageTitle = "Project List | Time Trucker";

        include("Includes/header.php");

        ?&gt;

        &lt;div class="section catalog random"&gt;

            &lt;div class="col-container page-container"&gt;
                &lt;div class="col col-70-md col-60-lg col-center"&gt;
                    &lt;h1 class="actions-header"&gt;Project List&lt;/h1&gt;
                    &lt;div class="actions-item"&gt;
                        &lt;a class="actions-link" href="project.php"&gt;
                            &lt;span class="actions-icon"&gt;
                                &lt;svg viewbox="0 0 64 64"&gt;&lt;use xlink:href="#project_icon"&gt;&lt;/use&gt;&lt;/svg&gt;
                            &lt;/span&gt;
                            Add Project
                        &lt;/a&gt;
                    &lt;/div&gt;

                    &lt;div class="class-container"&gt;
                        &lt;ul class="items"&gt;
                            &lt;?php
                            foreach (get_project_list() as $item) {
                                echo "&lt;li&gt;" . $item['title'] . "&lt;/li&gt;";
                            }
                            ?&gt;
                        &lt;/ul&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
                        
        &lt;/div&gt;
                        
        &lt;?php include("Includes/footer.php"); ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Accepting User Data</h2>
    <p>အခုဆိုရင် ကျွန်တော်တို့ရဲ့ database ထဲမှာ records တွေ create လုပ်ဖို့ ready ဖြစ်နေပါပြီ။ ကျွန်တော်တို့ဟာ new projects တွေ ထပ်ပြီး add လုပ်ဖို့အတွက် form တစ်ခုကနေ data ကို accept လုပ်ပေးရပါလိမ့်မယ်။ ကျွန်တော်တို့ code ရဲ့အပြင်ဘက်မှာရှိတဲ့ values တွေကို handling လုပ်တဲ့အခါ အဲ့ဒီ values တွေကို filter_input နဲ့ escape output လုပ်ပေးဖို့လိုအပ်ပါတယ်။ ဒါဟာ data တွေ handful မဖြစ်ဖို့အတွက် ပြုလုပ်ခြင်းဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ ကျွန်တော်တို့လိုချင်တဲ့ ဝင်လာတဲ့ form data တွေကို filter လုပ်သွားမှာဖြစ်ပါတယ်။ ထု့ိနောက် database နဲ့ interact လုပ်တဲ့အခါ SQL injection တွေကနေ ကာကွယ်ဖို့ prepare statement ကို အသုံးပြုပါမယ်။ SQL injection ဆိုတာ query တစ်ခုကို ကျွန်တော်တို့ code ထဲမှာ မသင့်လျှော်တဲ့ပုံစံနဲ့ မrun ချင်တဲ့အခါမျိုးပဲဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ user ဆီကနေ mynewproject တစ်ခုပေးဖို့ မျှော်လင့်ထားပေမယ့် ကျွန်တော်တို့ဆီမှာ mynewproject:DROP TABLE projects ဆိုတာကိုပဲ receive ဖြစ်နေမယ်ဆိုရင် အဲ့ဒီအချိန်မှာ ပထမတစ်ခုက new project ကို add လုပ်တဲ့ query နဲ့ ဒုတိယတစ်ခုက table ကြီးကို drop လုပ်တဲ့ query ဆိုပြီး query နှစ်ခုရှိနေမှာဖြစ်ပါတယ်။ ဒါကြောင့် ကျွန်တော်တို့က အရင်ဆုံး form data တွေကို accept လုပ်ပြီး ရလာတဲ့ results တွေကို filtering လုပ်ရခြင်းဖြစ်ပါတယ်။ ကျွန်တော်တို့မှာ form ကို submit လုပ်ဖို့အတွက် GET နဲ့ POST ဆိုပြီး method နှစ်ခုရှိပါတယ်။ General အားဖြင့် GET ကို browser address မှာဖော်ပြချင်တဲ့အခါ အသုံးပြုပြီးတော့ POST ကို sending email လုပ်တဲ့ အချိန်မျိုးမှာ အသုံးပြုပါတယ်။ POST မှာဆိုရင် main advantage သုံးခုရှိပါတယ်။ ပထမတစ်ခုက name value pairs ဟာ URL မှာ display မလုပ်ပေးပါဘူး။ ဒုတိယတစ်ခုကတော့ URLs တွေဟာ refresh အကြိမ်တော်တော်များများလုပ်ပေးတာဖြစ်ပြီး တတိယတစ်ခုကတော့ long descriptions ဖြစ်တဲ့ data တွေကို POST method နဲ့သုံးပြီး submit လုပ်နိုင်တာဖြစ်ပါတယ်။ ဒါဟာ ကျွန်တော်တို့တွေးထားသလို URL ရဲ့ max length ကိုရောက်ဖို့ 2000 characters လောက်ရှိပါမယ်။ အခု အောက်က example ကတော့ POST data တွေကို filter လုပ်ပြီးတော့ user input တွေကို collect လုပ်သွားမှာဖြစ်ပါတယ်။ </p>
    <p>Example of project.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            require 'Includes/functions.php';

            $pageTitle = "Project | Time Tracker";
            $page = "projects";

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $title = trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING));
                $category = trim(filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING));
            
                if (empty($title) || empty($category)) {
                    $error_message = 'Please fill in the required fields: Title, Category';
                } else {
                    echo "Title = $title &lt;br>";
                    echo "Category = $category &lt;br>";
                }
            }

            include 'Includes/header.php';
            ?&gt;

            &lt;div class="section page"&gt;
                &lt;div class="col-container page-container"&gt;
                    &lt;div class="col col-70-md col-60-lg col-center"&gt;
                        &lt;h1 class="actions-header"&gt;Project&lt;/h1&gt;
                        &lt;?php
                        if (isset($error_message)) {
                            echo "&lt;p class='message'&gt;$error_message&lt;/p&gt;";
                        }
                        ?&gt;
                        &lt;form class="form-container form-add" method="post" action="project.php"&gt;
                            &lt;table&gt;
                                &lt;tr&gt;
                                    &lt;th&gt;&lt;label for="title"&gt;Title&lt;span class="required"&gt;*&lt;/span&gt;&lt;/label&gt;&lt;/th&gt;
                                    &lt;td&gt;&lt;input type="text" id="title" name="title" value="" /&gt;&lt;/td&gt;
                                &lt;/tr&gt;
                                &lt;tr&gt;
                                    &lt;th&gt;&lt;label for="category"&gt;Category&lt;span class="required"&gt;*&lt;/span&gt;&lt;/label&gt;&lt;/th&gt;
                                    &lt;td&gt;&lt;select id="category" name="category"&gt;
                                            &lt;option value=""&gt;Select One&lt;/option&gt;
                                            &lt;option value="Billable"&gt;Billable&lt;/option&gt;
                                            &lt;option value="Charity"&gt;Charity&lt;/option&gt;
                                            &lt;option value="Personal"&gt;Personal&lt;/option&gt;
                                    &lt;/select&gt;&lt;/td&gt;
                                &lt;/tr&gt;
                            &lt;/table&gt;
                            &lt;input class="button button--primary button--topic-php" type="submit" value="Submit" /&gt;
                        &lt;/form&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
                    
            &lt;?php include "Includes/footer.php"; ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Adding Projects</h2>
    <p>Relational database တစ်ခုအတွင်းမှာရှိတဲ့ tables အများစုမှာ table ရဲ့ record တစ်ခုချင်းစီကို identify လုပ်ပေးတဲ့ primary key တစ်ခုရှိပါတယ်။ အဲ့ဒီ primary key နဲ့ table တွေကို join လုပ်ပေးရတာဖြစ်ပါတယ်။ ကျွန်တော်တို့ရဲ့ table ထဲမှာ auto increment fields တွေသုံးခြင်းဟာ integer key ကို auto တိုးသွားစေမှာဖြစ်ပါတယ်။ Database ထဲကို record တစ်ခု adding လုပ်တဲ့အချိန်မှာ database ထဲက key ကို automatically အရ add လုပ်လိုက်တာဖြစ်ပါတယ်။ Database ထဲမှာ record တစ်ခုကို update လုပ်တဲ့အချိန်မှာလည်း update လုပ်ဖို့အတွက် key ကို သတ်မှတ်ပေးရပါတယ်။ အခုကျွန်တော်တို့က user data ကို လက်ခံရရှိပြီဖြစ်တာကြောင့် prepare statements ကို အသုံးပြုဖို့ တစ်ကယ်ကို အရေးကြီးလာပါတယ်။ Prepare statement တစ်ခုဆိုတာ variables parameters တွေကိုသုံးပြီး customized လုပ်နိုင်တဲ့ SQL statement အတွက် template တစ်ခုလို့ ယူဆလို့ရပါတယ်။ Prepare statements တွေဟာ major benefits နှစ်ခုကို offer လုပ်ပေးထားပါတယ်။ ပထမတစ်ခုက query ဟာ တစ်ကြိမ်သာလျှင် parsed or prepared လုပ်ဖို့ပဲ လိုအပ်ပါတယ်။ ဒါပေမယ့် same or different parameters တွေနဲ့ အကြိမ်အရေအတွက်များစွာ execute လုပ်နိုင်ပါတယ်။ ဆိုလိုတာက prepare statement တစ်ခုဟာ fewer resources တွေရှိတာကြောင့် run တဲ့အခါမှာလည်း faster ဖြစ်ပါလိမ့်မယ်။ ဒုတိယတစ်ခုကတော့ ကျွန်တော်တို့ စိုးရိမ်ရမယ့်အရာဖြစ်ပြီး prepare statement တစ်ခုဟာ variables တွေကို escape ဖြစ်တဲ့အခါမှာ SQL injection တွေမဖြစ်အောင် properly ဖြစ်နေဖို့လိုပါတယ်။ အခု ကျွန်တော်တို့ရဲ့ functions.php ထဲမှာ function အသစ်တစ်ခုတည်ဆောက်ပြီး သူ့ထဲမှာ arguments နှစ်ခုအဖြစ် title နဲ့ category ကိုထည့်ပေးပါမယ်။ ပြီးရင်တော့ function အတွင်းထဲမှာ connection.php file ကို Include လုပ်ပြီး sql statement တစ်ခုရေးပြီး title နဲ့ category ကို insert လုပ်ပေးမှာဖြစ်ပါတယ်။ INSERT INTO VALUES ရဲ့နောက်မှာတော့ values တွေကို pass လုပ်ဖို့အတွက် actual value names တွေအစား placeholder တစ်ခုကို  အသုံးပြုမှာဖြစ်ပါတယ်။ ထို့နောက် values တွေကို statement ဆီမှာ bind လုပ်ပေးရမှာဖြစ်ပါတယ်။ ဒီလိုလုပ်ဖို့အတွက် ပထမဆုံး SQL statement ကို prepare လုပ်ဖို့လိုအပ်ပါတယ်။ PDO object တစ်ခုပေါ်မှာ method တစ်ခုကို run တဲ့အခါ SQL code ထဲမှာ error တွေကို catch လုပ်ဖို့အတွက် try catch block ခံပြီး ရေးပေးရမှာဖြစ်ပါတယ်။ </p>
    <p>Example of functions.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            // application functions

            // reading project data
            function get_project_list() {
                include("connection.php");
            
                try {
                    return $db->query('SELECT project_id, title, category FROM projects');
                } catch (Exception $e) {
                    echo "ERROR!: " . $e->getMessage() . "&lt;br&gt;";
                    return array();
                }
            }

            // adding project
            function add_project($title, $category) {
                include 'connection.php';
            
                $sql = 'INSERT INTO projects (title, category) VALUES (?, ?)';
            
                try {
                    $results = $db->prepare($sql);
                    $results->bindValue(1, $title, PDO::PARAM_STR);
                    $results->bindValue(2, $category, PDO::PARAM_STR);
                    $results->execute();
                } catch (Exception $e){
                    echo "Error!: " . $e->getMessage() . "&lt;br&gt;";
                    return false;
                }
                return true;
            }

            ?&gt;
        </code>
    </pre>
    <p>Example of project.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            require 'Includes/functions.php';

            $pageTitle = "Project | Time Tracker";
            $page = "projects";

            // accepting user data
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $title = trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING));
                $category = trim(filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING));
            
                if (empty($title) || empty($category)) {
                    $error_message = 'Please fill in the required fields: Title, Category';
                } else {
                    // adding project
                    if (add_project($title, $category)) {
                        header('location: project_list.php');
                        exit;
                    } else {
                        $error_message = 'Could not add project!';
                    }
                }
            }

            include 'Includes/header.php';
            ?&gt;

            &lt;div class="section page"&gt;
                &lt;div class="col-container page-container"&gt;
                    &lt;div class="col col-70-md col-60-lg col-center"&gt;
                        &lt;h1 class="actions-header"&gt;Project&lt;/h1&gt;
                        &lt;?php
                        if (isset($error_message)) {
                            echo "&lt;p class='message'&gt;$error_message&lt;/p&gt;";
                        }
                        ?&gt;
                        &lt;form class="form-container form-add" method="post" action="project.php"&gt;
                            &lt;table&gt;
                                &lt;tr&gt;
                                    &lt;th&gt;&lt;label for="title"&gt;Title&lt;span class="required"&gt;*&lt;/span&gt;&lt;/label&gt;&lt;/th&gt;
                                    &lt;td&gt;&lt;input type="text" id="title" name="title" value="" /&gt;&lt;/td&gt;
                                &lt;/tr&gt;
                                &lt;tr&gt;
                                    &lt;th&gt;&lt;label for="category"&gt;Category&lt;span class="required"&gt;*&lt;/span&gt;&lt;/label&gt;&lt;/th&gt;
                                    &lt;td&gt;&lt;select id="category" name="category"&gt;
                                            &lt;option value=""&gt;Select One&lt;/option&gt;
                                            &lt;option value="Billable"&gt;Billable&lt;/option&gt;
                                            &lt;option value="Charity"&gt;Charity&lt;/option&gt;
                                            &lt;option value="Personal"&gt;Personal&lt;/option&gt;
                                    &lt;/select&gt;&lt;/td&gt;
                                &lt;/tr&gt;
                            &lt;/table&gt;
                            &lt;input class="button button--primary button--topic-php" type="submit" value="Submit" /&gt;
                        &lt;/form&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
                    
            &lt;?php include "Includes/footer.php"; ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Reading Task Data</h2>
    <p>ကျွန်တော်တို့ projects တွေကို add လုပ်ပြီးတဲ့နောက်မှာ ကျွန်တော်တို့က tasks တွေကို adding လုပ်ဖို့အတွက် အဲ့ဒီ same processes တွေကို လုပ်ဆောင်သွားမှာဖြစ်ပါတယ်။ Task data တွေကို reading လုပ်ခြင်း၊ ကျွန်တော်တို့ task list တွေကို populating လုပ်ခြင်းနဲ့ user data တွေကို accepting & filtering လုပ်ခဲ့ပါတယ်။ နောက်ဆုံးမှာတော့ ရလာတဲ့ data တွေကို database ထဲမှာသွားပြီး writing လုပ်သွားမှာဖြစ်ပါတယ်။ ပထမဆုံး task list page ပေါ်မှာ ကျွန်တော်တို့ show လုပ်ချင်တဲ့ data တွေကို read လုပ်မယ်။ အဲ့ဒီလိုလုပ်ဖို့အတွက် functions.php ထဲမှာ get_task_list() ဆိုတဲ့ functions ကိုတည်ဆောက်လိုက်ပါမယ်။ အဲ့ဒီ function ထဲမှာ ကျွန်တော်တို့က task list နဲ့ title တွေထုတ်ပြချင်တာဖြစ်တဲ့အတွက် task table နဲ့ projects table တို့ကို join လုပ်ပေးဖို့လိုအပ်ပါတယ်။ ကျွန်တော်တို့ရဲ့ table နှစ်ခုလုံးမှာလည်း project_id ဆိုတဲ့ column ပါတဲ့အတွက် project_id ကိုသုံးပြီး table နှစ်ခုကို join လုပ်သွားမှာဖြစ်ပါတယ်။ ပြီးရင်တော့ task_list.php file ထဲမှာ get_task_list ဆိုတဲ့ function ကို ခေါ်ပြီး အသုံးပြုသွားမှာဖြစ်ပါတယ်။  </p>
    <p>Example of functions.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            // application functions

            // reading project data
            function get_project_list() {
                include("connection.php");
            
                try {
                    return $db->query('SELECT project_id, title, category FROM projects');
                } catch (Exception $e) {
                    echo "ERROR!: " . $e->getMessage() . "&lt;br&gt;";
                    return array();
                }
            }

            // reading task data
            function get_task_list() {
                include("connection.php");
            
                $sql = 'SELECT tasks.*, projects.title as project
                        FROM tasks JOIN projects ON tasks.project_id = projects.project_id';

                try {
                    return $db->query($sql);
                } catch (Exception $e) {
                    echo "ERROR!: " . $e->getMessage() . "&lt;br&gt;";
                    return array();
                }
            }

            // adding project
            function add_project($title, $category) {
                include 'connection.php';
            
                $sql = 'INSERT INTO projects (title, category) VALUES (?, ?)';
            
                try {
                    $results = $db->prepare($sql);
                    $results->bindValue(1, $title, PDO::PARAM_STR);
                    $results->bindValue(2, $category, PDO::PARAM_STR);
                    $results->execute();
                } catch (Exception $e){
                    echo "Error!: " . $e->getMessage() . "&lt;br&gt;";
                    return false;
                }
                return true;
            }

            ?&gt;
        </code>
    </pre>
    <p>Example of task_list.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            require 'Includes/functions.php';

            $page = "tasks";
            $pageTitle = "Task List | Time Tracker";

            include 'Includes/header.php';
            ?&gt;
            &lt;div class="section catalog random"&gt;

                &lt;div class="col-container page-container"&gt;
                    &lt;div class="col col-70-md col-60-lg col-center"&gt;

                        &lt;h1 class="actions-header"&gt;Task List&lt;/h1&gt;
                        &lt;div class="actions-item"&gt;
                            &lt;a href="task.php" class="actions-link"&gt;
                                &lt;span class="actions-icon"&gt;
                                    &lt;svg viewbox="0 0 64 64"&gt;&lt;use xlink:href="#task_icon"&gt;&lt;/use&gt;&lt;/svg&gt;
                                &lt;/span&gt;
                            Add Task&lt;/a&gt;
                        &lt;/div&gt;

                        &lt;div class="form-container"&gt;
                            &lt;ul class="items"&gt;
                                &lt;!-- reading task data --&gt;
                                &lt;?php
                                foreach (get_task_list() as $item) {
                                    echo "&lt;li&gt;" . $item['title'] . "&lt;/li&gt;";
                                }
                                ?&gt;
                            &lt;/ul&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
                            
            &lt;?php include 'Includes/footer.php'; ?&gt;   
        </code>
    </pre>
    <hr>


    <h2>Adding Tasks</h2>
    <p>ကျွန်တော်တို့ဟာ projects တွေကို add လုပ်ပြီးတဲ့နောက်မှာ အဲ့ဒီ projects တွေကို adding tasks တွေအတွက် minimal changes တွေအလုပ်လုပ်ဖို့ duplicate လုပ်သွားမှာဖြစ်ပါတယ်။ Applications အများစုဟာ သူတို့ တစ်ခါပဲ launch လုပ်ထားရုံနဲ့မပြီးဘဲ သူတို့ကို ဒီအတိုင်းထားထားလို့လည်း မရပါဘူး။ ကျွန်တော်တို့အနေနဲ့ application မှာရှိနေတဲ့ bugs တွေကို fix လုပ်ပေးရတာနဲ့ new features တွေထပ်ပြီး add လုပ်ပေးရပါတယ်။ ဒါကြောင့် code ကို လိုတိုရှင်းရေးထားခြင်းဖြင့် ကျွန်တော်တို့ app ကို version တွေထပ်မြှင့်တဲ့အခါမှာ လွယ်ကူစေမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ page ရဲ့ task ဆိုတဲ့ ထဲမှာ အရင်က projects တွေကို add လုပ်သလိုမျိုး ထည့်သွားမှာဖြစ်ပါတယ်။ ဒီလိုလုပ်ဖို့အတွက်ဆိုရင်တော့ ကျွန်တော်တို့အနေနဲ့ column တွေကိုပဲ ထပ်ဖြည့်ပေးရမှာဖြစ်ပါတယ်။ </p>
    <p>Example of functions.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            // application functions

            // reading project data
            function get_project_list() {
                include("connection.php");
            
                try {
                    return $db->query('SELECT project_id, title, category FROM projects');
                } catch (Exception $e) {
                    echo "ERROR!: " . $e->getMessage() . "&lt;br&gt;";
                    return array();
                }
            }

            // reading task data
            function get_task_list() {
                include("connection.php");
            
                $sql = 'SELECT tasks.*, projects.title as project
                        FROM tasks JOIN projects ON tasks.project_id = projects.project_id';

                try {
                    return $db->query($sql);
                } catch (Exception $e) {
                    echo "ERROR!: " . $e->getMessage() . "&lt;br&gt;";
                    return array();
                }
            }

            // adding project
            function add_project($title, $category) {
                include 'connection.php';
            
                $sql = 'INSERT INTO projects (title, category) VALUES (?, ?)';
            
                try {
                    $results = $db->prepare($sql);
                    $results->bindValue(1, $title, PDO::PARAM_STR);
                    $results->bindValue(2, $category, PDO::PARAM_STR);
                    $results->execute();
                } catch (Exception $e){
                    echo "Error!: " . $e->getMessage() . "&lt;br&gt;";
                    return false;
                }
                return true;
            }

            // adding task
            function add_task($project_id, $title, $date, $time) {
                include 'connection.php';
            
                $sql = 'INSERT INTO tasks (project_id, title, date, time) VALUES (?, ?, ?, ?)';
            
                try {
                    $results = $db->prepare($sql);
                    $results->bindValue(1, $project_id, PDO::PARAM_INT);
                    $results->bindValue(2, $title, PDO::PARAM_STR);
                    $results->bindValue(3, $date, PDO::PARAM_STR);
                    $results->bindValue(4, $time, PDO::PARAM_INT);
                    $results->execute();
                } catch (Exception $e){
                    echo "Error!: " . $e->getMessage() . "&lt;br&gt;";
                    return false;
                }
                return true;
            }

            ?&gt;
        </code>
    </pre>
    <p>Example of task.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            require 'Includes/functions.php';

            $pageTitle = "Project | Time Tracker";
            $page = "projects";

            // filtering user input
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $project_id = trim(filter_input(INPUT_POST, 'project_id', FILTER_SANITIZE_NUMBER_INT));
                $title = trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING));
                $date = trim(filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING));
                $time = trim(filter_input(INPUT_POST, 'time', FILTER_SANITIZE_NUMBER_INT));
            
                if (empty($project_id) || empty($title) || empty($date) || empty($time)) {
                    $error_message = 'Please fill in the required fields: Project, Title, Date, Time';
                } else {
                    // adding task
                    if (add_task($project_id, $title, $date, $time)) {
                        header('location: task_list.php');
                        exit;
                    } else {
                        $error_message = 'Could not add Task!';
                    }
                }
            }

            include 'Includes/header.php';
            ?&gt;

            &lt;div class="section page"&gt;
                &lt;div class="col-container page-container"&gt;
                    &lt;div class="col col-70-md col-60-lg col-center"&gt;
                        &lt;h1 class="actions-header"&gt;Add Task&lt;/h1&gt;
                        &lt;?php
                        if (isset($error_message)) {
                            echo "&lt;p class='message'&gt;$error_message&lt;/p&gt;";
                        }
                        ?&gt;
                        &lt;form class="form-container form-add" method="post" action="task.php"&gt;
                            &lt;table&gt;
                                &lt;tr&gt;
                                    &lt;th&gt;&lt;label for="title"&gt;Project&lt;span class="required"&gt;*&lt;/span&gt;&lt;/label&gt;&lt;/th&gt;
                                    &lt;td&gt;
                                        &lt;select name="project_id" id="project_id"&gt;
                                            &lt;option value=""&gt;Select One&lt;/option&gt;
                                            &lt;!-- adding task --&gt;
                                            &lt;?php
                                            foreach (get_project_list() as $item) {
                                                echo "&lt;option value='" . $item['project_id'] . "'&gt;" . $item['title'] . "&lt;/option&gt;";
                                            }
                                            ?&gt;
                                        &lt;/select&gt;
                                    &lt;/td&gt;
                                &lt;/tr&gt;
                                &lt;tr&gt;
                                    &lt;th&gt;&lt;label for="title"&gt;Title&lt;span class="required"&gt;*&lt;/span&gt;&lt;/label&gt;&lt;/th&gt;
                                    &lt;td&gt;&lt;input type="text" id="title" name="title" value=""&gt;&lt;/td&gt;
                                &lt;/tr&gt;
                                &lt;tr&gt;
                                    &lt;th&gt;&lt;label for="date"&gt;Date&lt;span class="required"&gt;*&lt;/span&gt;&lt;/label&gt;&lt;/th&gt;
                                    &lt;td&gt;&lt;input type="text" id="date" name="date" value="" placeholder="mm/dd/yyyy"&gt;&lt;/td&gt;
                                &lt;/tr&gt;
                                &lt;tr&gt;
                                    &lt;th&gt;&lt;label for="time"&gt;Time&lt;span class="required"&gt;*&lt;/span&gt;&lt;/label&gt;&lt;/th&gt;
                                    &lt;td&gt;&lt;input type="text" id="time" name="time" value=""&gt; minutes&lt;/td&gt;
                                &lt;/tr&gt;
                            &lt;/table&gt;
                            &lt;input class="button button--primary button--topic-php" type="submit" value="Submit" /&gt;
                        &lt;/form&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
                                        
            &lt;?php include "Includes/footer.php"; ?&gt;   
        </code>
    </pre>
    <hr>


    <h2>Remembering Form Data</h2>
    <p>အခု ကျွန်တော်တို့ဟာ task.php မှာရှိတဲ့ form fields ထဲက value တွေကို user data ဆီ set လုပ်သွားမှာဖြစ်ပါတယ်။ လက်ရှိမှာ ကျွန်တော်တို့က form fields တွေအတွက် variables တွေကို POST ပြီးတဲ့နောက်မှာ setting လုပ်ထားတာဖြစ်ပါတယ်။ ဆိုလိုတာကတော့ form ကို submit မလုပ်ခင် view လုပ်တဲ့အခါ အဲ့ဒီ variables တွေက exist ဖြစ်နေမှာ မဟုတ်ပါဘူး။ ဒါကြောင့် အဲ့ဒီ variables တွေကို form value ထဲမှာအသုံးမပြုခင် isset လုပ်လားဆိုတာကို check လုပ်ရပါမယ်။ ဒီလိုပြုလုပ်ဖို့အတွက် နောက်တစ်နည်းကတော့ အဲ့ဒီ variable set တစ်ခုချင်းစီကို ကျွန်တော်တို့ script ရဲ့ အစဆုံးမှာ empty string အဖြစ် set လုပ်လို့ရပါတယ်။ ဒါမှသာ variable က set ဖြစ်ပြီး သူ့ကို empty ဖြစ်နေရင်တောင် အသုံးပြုလို့ရနိုင်မှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ task.php file ရဲ့အပေါ်ဆုံးမှာ $project_id, $title, $date နဲ့ $time တို့ကို empty string တစ်ခုအဖြစ်ထားပြီး form ထဲက input tag ရဲ့ value ထဲမှာ htmlspecialchars ဆိုတဲ့ function ထည့်ပြီး အစောက variable တစ်ခုချင်းစီကို escape output လုပ်ပေးရမှာဖြစ်ပါတယ်။ ဘာလို့လဲဆိုတော့ user data ကို output ထုတ်ချင်ရင် အမြဲတမ်း အဲ့ဒီ output ကို escape လုပ်ပေးရပါတယ်။ </p>
    <p>Example of task.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            require 'Includes/functions.php';

            $pageTitle = "Project | Time Tracker";
            $page = "projects";

            // remembering form data
            $project_id = $title = $date = $time = '';

            // filtering user input
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $project_id = trim(filter_input(INPUT_POST, 'project_id', FILTER_SANITIZE_NUMBER_INT));
                $title = trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING));
                $date = trim(filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING));
                $time = trim(filter_input(INPUT_POST, 'time', FILTER_SANITIZE_NUMBER_INT));
            
                if (empty($project_id) || empty($title) || empty($date) || empty($time)) {
                    $error_message = 'Please fill in the required fields: Project, Title, Date, Time';
                } else {
                    // adding task
                    if (add_task($project_id, $title, $date, $time)) {
                        header('location: task_list.php');
                        exit;
                    } else {
                        $error_message = 'Could not add Task!';
                    }
                }
            }

            include 'Includes/header.php';
            ?&gt;

            &lt;div class="section page"&gt;
                &lt;div class="col-container page-container"&gt;
                    &lt;div class="col col-70-md col-60-lg col-center"&gt;
                        &lt;h1 class="actions-header"&gt;Add Task&lt;/h1&gt;
                        &lt;?php
                        if (isset($error_message)) {
                            echo "&lt;p class='message'&gt;$error_message&lt;/p&gt;";
                        }
                        ?&gt;
                        &lt;form class="form-container form-add" method="post" action="task.php"&gt;
                            &lt;table&gt;
                                &lt;tr&gt;
                                    &lt;th&gt;&lt;label for="title"&gt;Project&lt;span class="required"&gt;*&lt;/span&gt;&lt;/label&gt;&lt;/th&gt;
                                    &lt;td&gt;
                                        &lt;select name="project_id" id="project_id"&gt;
                                            &lt;option value=""&gt;Select One&lt;/option&gt;
                                            &lt;!-- adding task --&gt;
                                            &lt;?php
                                            foreach (get_project_list() as $item) {
                                                echo "&lt;option value='" . $item['project_id'] . "'";
                                                // remembering form data
                                                if ($project_id == $item['project_id']) {
                                                    echo ' selected';
                                                }
                                                echo "&gt;" . $item['title'] . "&lt;/option&gt;";
                                            }
                                            ?&gt;
                                        &lt;/select&gt;
                                    &lt;/td&gt;
                                &lt;/tr&gt;
                                &lt;tr&gt;
                                    &lt;th&gt;&lt;label for="title"&gt;Title&lt;span class="required"&gt;*&lt;/span&gt;&lt;/label&gt;&lt;/th&gt;
                                    &lt;td&gt;&lt;input type="text" id="title" name="title" value="&lt;?php echo htmlspecialchars($title); ?&gt;"&gt;&lt;/td&gt;
                                &lt;/tr&gt;
                                &lt;tr&gt;
                                    &lt;th&gt;&lt;label for="date"&gt;Date&lt;span class="required"&gt;*&lt;/span&gt;&lt;/label&gt;&lt;/th&gt;
                                    &lt;td&gt;&lt;input type="text" id="date" name="date" value="&lt;?php echo htmlspecialchars($date); ?&gt;" placeholder="mm/dd/yyyy"&gt;&lt;/td&gt;
                                &lt;/tr&gt;
                                &lt;tr&gt;
                                    &lt;th&gt;&lt;label for="time"&gt;Time&lt;span class="required"&gt;*&lt;/span&gt;&lt;/label&gt;&lt;/th&gt;
                                    &lt;td&gt;&lt;input type="text" id="time" name="time" value="&lt;?php echo htmlspecialchars($time); ?&gt;"&gt; minutes&lt;/td&gt;
                                &lt;/tr&gt;
                            &lt;/table&gt;
                            &lt;input class="button button--primary button--topic-php" type="submit" value="Submit" /&gt;
                        &lt;/form&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
                                        
            &lt;?php include "Includes/footer.php"; ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Validating Dates</h2>
    <p>ကျွန်တော်တို့ရဲ့ task form ထဲမှာ values တွေကို database ထဲကို add လုပ်လို့ရသွားပါပြီ။ ဒါပေမယ့် ကျွန်တော်တို့က task data တွေကို database ထဲမထည့်ခင် အရင်ဆုံး date format ကို မှန်ကန်အောင် ထည့်ပေးရပါမယ်။ ကျွန်တော်တို့မှာ လိုချင်တဲ့ suggested format အနေနဲ့ two-digit month, two-digit day နဲ့ four-digit year ဆိုပြီးရှိပါမယ်။ သူတို့သုံးခုကိုတော့ forward slash နဲ့ခံပြီးရေးပါမယ်။ ကျွန်တော်တို့ date ကို invalid or valid ဖြစ်မဖြစ် စစ်ဖို့အတွက် option တစ်ခုလိုအပ်ပါတယ်။ အဲ့ဒီ option ကတော့ explode() ဆိုတဲ့ function ပဲဖြစ်ပါတယ်။ Explode မှာ parameter နှစ်ခုလက်ခံပြီးတော့ ပထမ parameter က string delimiter တစ်ခုဖြစ်ပြီး၊ ဒုတိယတစ်ခုကတော့ string ပဲဖြစ်ပါတယ်။ explode() function ဟာ array တစ်ခုကို return ပြန်ပေးတာဖြစ်ပါတယ်။ ထို့နောက်ကျွန်တော်တို့ဟာ dateMatch ကိုစစ်ဖို့အတွက် conditional တွေ ရေးသွားမှာပဲဖြစ်ပါတယ်။ အဲ့ဒီ conditional ထဲမှာမှာ checkDate() ဆိုတဲ့ function မှာ $dateMatch[0], $dateMatch[1] နဲ့ $dateMatch[2] ဆိုပြီး parameter သုံးခုရှိပါမယ်။ </p>
    <p>Example of task.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            require 'Includes/functions.php';

            $pageTitle = "Project | Time Tracker";
            $page = "projects";

            // remembering form data
            $project_id = $title = $date = $time = '';

            // filtering user input
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $project_id = trim(filter_input(INPUT_POST, 'project_id', FILTER_SANITIZE_NUMBER_INT));
                $title = trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING));
                $date = trim(filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING));
                $time = trim(filter_input(INPUT_POST, 'time', FILTER_SANITIZE_NUMBER_INT));
            
                // validating date
                $dateMatch = explode('/', $date);
            
                if (empty($project_id) || empty($title) || empty($date) || empty($time)) {
                    $error_message = 'Please fill in the required fields: Project, Title, Date, Time';
                    // validating date
                } elseif (count($dateMatch) != 3
                          || strlen($dateMatch[0]) != 2
                          || strlen($dateMatch[1]) != 2
                          || strlen($dateMatch[2]) != 4
                          || !checkdate($dateMatch[0], $dateMatch[1], $dateMatch[2])) {
                    $error_message = "Invalid Date";
                } else {
                    // adding task
                    if (add_task($project_id, $title, $date, $time)) {
                        header('location: task_list.php');
                        exit;
                    } else {
                        $error_message = 'Could not add Task!';
                    }
                }
            }

            include 'Includes/header.php';
            ?&gt;

            &lt;div class="section page"&gt;
                &lt;div class="col-container page-container"&gt;
                    &lt;div class="col col-70-md col-60-lg col-center"&gt;
                        &lt;h1 class="actions-header"&gt;Add Task&lt;/h1&gt;
                        &lt;?php
                        if (isset($error_message)) {
                            echo "&lt;p class='message'&gt;$error_message&lt;/p&gt;";
                        }
                        ?&gt;
                        &lt;form class="form-container form-add" method="post" action="task.php"&gt;
                            &lt;table&gt;
                                &lt;tr&gt;
                                    &lt;th&gt;&lt;label for="title"&gt;Project&lt;span class="required"&gt;*&lt;/span&gt;&lt;/label&gt;&lt;/th&gt;
                                    &lt;td&gt;
                                        &lt;select name="project_id" id="project_id"&gt;
                                            &lt;option value=""&gt;Select One&lt;/option&gt;
                                            &lt;!-- adding task --&gt;
                                            &lt;?php
                                            foreach (get_project_list() as $item) {
                                                echo "&lt;option value='" . $item['project_id'] . "'";
                                                // remembering form data
                                                if ($project_id == $item['project_id']) {
                                                    echo ' selected';
                                                }
                                                echo "&gt;" . $item['title'] . "&lt;/option&gt;";
                                            }
                                            ?&gt;
                                        &lt;/select&gt;
                                    &lt;/td&gt;
                                &lt;/tr&gt;
                                &lt;tr&gt;
                                    &lt;th&gt;&lt;label for="title"&gt;Title&lt;span class="required"&gt;*&lt;/span&gt;&lt;/label&gt;&lt;/th&gt;
                                    &lt;td&gt;&lt;input type="text" id="title" name="title" value="&lt;?php echo htmlspecialchars($title); ?&gt;"&gt;&lt;/td&gt;
                                &lt;/tr&gt;
                                &lt;tr&gt;
                                    &lt;th&gt;&lt;label for="date"&gt;Date&lt;span class="required"&gt;*&lt;/span&gt;&lt;/label&gt;&lt;/th&gt;
                                    &lt;td&gt;&lt;input type="text" id="date" name="date" value="&lt;?php echo htmlspecialchars($date); ?&gt;" placeholder="mm/dd/yyyy"&gt;&lt;/td&gt;
                                &lt;/tr&gt;
                                &lt;tr&gt;
                                    &lt;th&gt;&lt;label for="time"&gt;Time&lt;span class="required"&gt;*&lt;/span&gt;&lt;/label&gt;&lt;/th&gt;
                                    &lt;td&gt;&lt;input type="text" id="time" name="time" value="&lt;?php echo htmlspecialchars($time); ?&gt;"&gt; minutes&lt;/td&gt;
                                &lt;/tr&gt;
                            &lt;/table&gt;
                            &lt;input class="button button--primary button--topic-php" type="submit" value="Submit" /&gt;
                        &lt;/form&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
                                        
            &lt;?php include "Includes/footer.php"; ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Totaling Time in Reports Page</h2>
    <p>ကျွန်တော်တို့ရဲ့ database ထဲမှာ data တွေအများကြီးရှိတယ်ဆိုရင် ကျွန်တော်တို့ကြည့်ချင်တဲ့ data က database ထဲမှာ အမှန်တကယ်ရှိမရှိဆိုတာကို သိဖို့ ခက်ခဲပါလိမ့်မယ်။ Data တွေကို organizing & filtering မလုပ်ဘဲ အဲ့ဒီ data ကအမှန်တကယ်ရှိတယ်ဆိုတာကို သိဖို့ ခက်ခဲပါတယ်။ Reports တွေဟာ အဲ့ဒီ data တွေကို story တစ်ခုရေးပြီး အသုံးပြုဖို့ ခွင့်ပြုပေးပါတယ်။ Report တစ်ခုဟာ visitors တွေကို ဘယ် pages တွေက popular အဖြစ်ဆုံးလဲဆိုတာကို ဖော်ပြပေးပါတယ်။ Reports တွေဟာ ကျွန်တော်တု့ိကို forecast inventory လုပ်ဖို့ လွန်ခဲ့တဲ့ 6 လက purchase လုပ်ခဲ့တဲ့ products တွေဘယ်လောက်ရှိပါတယ်လို ပြောခြင်းဖြင့် ကူညီပေးနိုင်ပါတယ်။ Reports တွေဟာ clients တွေကို bill ရှင်းပေးဖို့အတွက် လိုအပ်တဲ့ information တွေကိုလည်း ပေးနိုင်ပါသေးတယ်။ ဒီလိုလုပ်ဖို့အတွက် ကျွန်တော်တို့က အရင်ဆုံး task information တွေကို display လုပ်ဖို့ table တစ်ခုလိုအပ်ပြီး နောက်ဆုံးမှာ grand total တစ်ခုပါတဲ့ time spent ကို summarize လုပ်ရပါမယ်။ ကျွန်တော်တို့ site မှာ Reports ဆိုတာကိုရွေးလိုက်ရင် Grand Total တစ်ခုနဲ့ table တစ်ခုတွေ့ရမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့က actual grand total နဲ့ report information တွေကို database ကနေ add လုပ်ဖို့ လိုအပ်ပါတယ်။ ပြီးရင်တော့ အဲ့ဒီ grand total က ဘယ်ကလာသလဲဆိုတာကို ပြပေးရပါမယ်။ ဒါဆိုရင်တော့ ကျွန်တော်တို့ Reports page မှာ grand total စုစုပေါင်းကို ပြပေးတဲ့ table တစ်ခု ရလာမှာဖြစ်ပါတယ်။ နောက်သင်ခန်းစာမှာတော့ အဲ့ဒီ reports တွေကို တစ်ကယ်အသုံးဝင်အောင် ပြုလုပ်သွားမှာဖြစ်ပါတယ်။ </p>
    <p>Example of reports.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            require 'Includes/functions.php';

            $page = "reports";
            $pageTitle = "Reports | Time Tracker";

            include 'Includes/header.php';
            ?&gt;
            &lt;div class="col-container page-container"&gt;
                &lt;div class="col col-70-md col-60lg col-center"&gt;
                    &lt;h1 class="actions-header"&gt;Reports&lt;/h1&gt;
                &lt;/div&gt;
                &lt;div class="section page"&gt;
                    &lt;div class="wrapper"&gt;
                        &lt;table&gt;
                            &lt;?php
                            $total = 0;
                            foreach (get_task_list() as $item) {
                                $total += $item['time'];
                                echo "&lt;tr&gt;";
                                echo "&lt;td&gt;" . $item['title'] . "&lt;/td&gt;";
                                echo "&lt;td&gt;" . $item['date'] . "&lt;/td&gt;";
                                echo "&lt;td&gt;" . $item['time'] . "&lt;/td&gt;";
                                echo "&lt;/tr&gt;";
                            }
                            ?&gt;
                            &lt;tr&gt;
                                &lt;th class="grand-total-label" colspan="2"&gt;Grand Total&lt;/th&gt;
                                &lt;th class="grand-total-number"&gt;&lt;?php echo $total; ?&gt;&lt;/th&gt;
                            &lt;/tr&gt;
                        &lt;/table&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
                        
            &lt;?php include 'Includes/footer.php'; ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Summarizing Project Time</h2>
    <p>ကျွန်တော်တို့ project ကနေ tasks တွေကို grouping လုပ်ခြင်းဟာ တစ်ကယ်ကို အရေးပါတဲ့အပိုင်းတစ်ခုဖြစ်ပါတယ်။ ဒါဟာ ကျွန်တော်တို့ reports page အတွက် default view တစ်ခု ဖြစ်သင့်တာပါ။ ကျွန်တော်တို့ဟာ ဒီလိုလုပ်ဖို့အတွက် get_task_list() function ကို modify လုပ်ရုံသာမက ကျွန်တော်တို့ reports page မှာလည်း additional information တွေ add လုပ်ရပါမယ်။ ကျွန်တော်တို့ဟာ optional parameter တစ်ခုလက်ခံဖို့အတွက် get_task_list() function ကို update လုပ်သွားမှာဖြစ်ပါတယ်။ Function ထဲမှာ parameter name ကို $filter လို့ပေးထားပြီး ကျွန်တော်တို့ဟာ data ကို several ways တွေနဲ့ filter လုပ်မှာဖြစ်ပါတယ်။ ပထမဆုံးလုပ်ရမှာကတော့ sort လုပ်ရမှာပဲဖြစ်ပါတယ်။ ဒါကြောင့် ကျွန်တော်တို့ SQL statement ထဲကို order တစ်ခု add လုပ်ဖို့လိုအပ်ပါတယ်။ ကျွန်တော်တို့ဟာ SQL statement ထဲမှာ date ကို descending အနေနဲ့ စီပေးမှာဖြစ်ပါတယ်။ တစ်ကယ်လို့ ကျွန်တော်တို့ရဲ့ $filter ထဲမှာ data ရှိတယ်ဆိုရင်တော့ $orderBy ဆိုတဲ့ query ထဲမှာ project.title ကို ascending နဲ့ date ကို descending စီပေးလိုက်မှာဖြစ်ပါတယ်။ ပြီးရင်တော့ user data ကို လက်ခံမှာဖြစ်တဲ့အတွက် prepare statement ကို အသုံးပြုရမှာဖြစ်ပါတယ်။ နောက်တစ်ခုကတော့ ကျွန်တော်တို့ရဲ့ Reports page ကို update လုပ်ဖို့အတွက် filter parameter ကို pass လုပ်ပေးဖို့လိုအပ်ပါတယ်။ အောက်က example မှာ ဆက်ပြီးတော့ ကြည့်နိုင်ပါတယ်။ </p>
    <p>Example of functions.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            // application functions

            // reading project data
            function get_project_list() {
                include("connection.php");
            
                try {
                    return $db->query('SELECT project_id, title, category FROM projects');
                } catch (Exception $e) {
                    echo "ERROR!: " . $e->getMessage() . "&lt;br&gt;";
                    return array();
                }
            }

            // reading task data
            // summarizing project time => $filter = null
            function get_task_list($filter = null) {
                include("connection.php");
            
                $sql = 'SELECT tasks.*, projects.title as project
                        FROM tasks JOIN projects ON tasks.project_id = projects.project_id';

                $orderBy = ' ORDER BY date DESC';
            
                if ($filter) {
                    $orderBy = ' ORDER BY projects.title ASC, date DESC';
                }
            
                try {
                    $results = $db->prepare($sql . $orderBy);
                    $results->execute();
                } catch (Exception $e) {
                    echo "ERROR!: " . $e->getMessage() . "&lt;br&gt;";
                    return array();
                }
                return $results->fetchAll(PDO::FETCH_ASSOC);
            }

            // adding project
            function add_project($title, $category) {
                include 'connection.php';
            
                $sql = 'INSERT INTO projects (title, category) VALUES (?, ?)';
            
                try {
                    $results = $db->prepare($sql);
                    $results->bindValue(1, $title, PDO::PARAM_STR);
                    $results->bindValue(2, $category, PDO::PARAM_STR);
                    $results->execute();
                } catch (Exception $e){
                    echo "Error!: " . $e->getMessage() . "&lt;br&gt;";
                    return false;
                }
                return true;
            }

            // adding task
            function add_task($project_id, $title, $date, $time) {
                include 'connection.php';
            
                $sql = 'INSERT INTO tasks (project_id, title, date, time) VALUES (?, ?, ?, ?)';
            
                try {
                    $results = $db->prepare($sql);
                    $results->bindValue(1, $project_id, PDO::PARAM_INT);
                    $results->bindValue(2, $title, PDO::PARAM_STR);
                    $results->bindValue(3, $date, PDO::PARAM_STR);
                    $results->bindValue(4, $time, PDO::PARAM_INT);
                    $results->execute();
                } catch (Exception $e){
                    echo "Error!: " . $e->getMessage() . "&lt;br&gt;";
                    return false;
                }
                return true;
            }

            ?&gt;
        </code>
    </pre>
    <p>Example of reports.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            require 'Includes/functions.php';

            $page = "reports";
            $pageTitle = "Reports | Time Tracker";
            // // summarizing project time
            $filter = 'all';

            include 'Includes/header.php';
            ?&gt;
            &lt;div class="col-container page-container"&gt;
                &lt;div class="col col-70-md col-60lg col-center"&gt;
                    &lt;h1 class="actions-header"&gt;Reports&lt;/h1&gt;
                &lt;/div&gt;
                &lt;div class="section page"&gt;
                    &lt;div class="wrapper"&gt;
                        &lt;table&gt;
                            &lt;?php
                            $total = $project_id = $project_total = 0;
                            // to get our last project with Project Total
                            $tasks = get_task_list($filter);
                            foreach ($tasks as $item) {
                                if ($project_id != $item['project_id']) {
                                    $project_id = $item['project_id'];
                                    echo "&lt;thead&gt;\n";
                                    echo "&lt;tr&gt;\n";
                                    echo "&lt;th&gt;" . $item['project'] . "&lt;/th&gt;\n";
                                    echo "&lt;th&gt;Date&lt;/th&gt;\n";
                                    echo "&lt;th&gt;Time&lt;/th&gt;\n";
                                    echo "&lt;/tr&gt;\n";
                                }
                                $project_total += $item['time']; // add current time to project total
                                $total += $item['time'];
                                echo "&lt;tr&gt;";
                                echo "&lt;td&gt;" . $item['title'] . "&lt;/td&gt;";
                                echo "&lt;td&gt;" . $item['date'] . "&lt;/td&gt;";
                                echo "&lt;td&gt;" . $item['time'] . "&lt;/td&gt;";
                                echo "&lt;/tr&gt;";
                            }
                            // to get our last project with Project Total
                            if (next($tasks)['project_id'] != $item['project_id']) {
                                echo "&lt;tr&gt;\n";
                                echo "&lt;th class='project-total-label' colspan='2'&gt;Project Total&lt;/th&gt;\n";
                                echo "&lt;th class='project-total-number'&gt;$project_total&lt;/th&gt;\n";
                                echo "&lt;/tr&gt;\n";
                                // reset $project_total
                                $project_total = 0;
                            }
                            ?&gt;
                            &lt;tr&gt;
                                &lt;th class="grand-total-label" colspan="2"&gt;Grand Total&lt;/th&gt;
                                &lt;th class="grand-total-number"&gt;&lt;?php echo $total; ?&gt;&lt;/th&gt;
                            &lt;/tr&gt;
                        &lt;/table&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
                        
            &lt;?php include 'Includes/footer.php'; ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Filtering By Project</h2>
    <p>Grouping လုပ်ခြင်းဟာ ကျွန်တော်တို့ရဲ့ data တွေကို ပိုပြီးတော့ manage လုပ်နိုင်ပါတယ်။ ဒါပေမယ့် အခု project မှာဆိုရင် data အားလုံးကို အချိန်တိုင်း show လုပ်နေတာဖြစ်ပါတယ်။ ဒါဟာ ကျွန်တော်တို့ application ကို နေ့တိုင်းအသုံးပြုနေတယ်ဆိုရင် overwhelming ဖြစ်စေပါတယ်။ ဒါကြောင့် ကျွန်တော်တို့ ပြုလုပ်ရမှာက ကျွန်တော်တို့လိုချင်တဲ့ data portion ကိုပဲ show လုပ်ဖို့အတွက် အဲ့ဒီ data တွေကို filter လုပ်ရပါမယ်။ အခုကျွန်တော်တို့က projects ကို အရင်ဆုံး filter လုပ်ပါမယ်။ ပထမဆုံးပြုလုပ်ရမှာက report အတွက် project တစ်ခုကို select လုပ်ဖို့ user ကို option တစ်ခုပေးရပါမယ်။ ဒါကို drop-down တစ်ခုပါတဲ့ form တစ်ခုနဲ့ create လုပ်ပါမယ်။ PHP မှာ database ထဲက data တွေကို ဆွဲထုတ်ချင်ရင် foreach loop နဲ့ဆွဲထုတ်ရတာဖြစ်ပါတယ်။ ဒါကြောင့် ကျွန်တော်တို့က reports.php ထဲက select option အတွင်းမှာ data တွေကို foreach နဲ့ ဆွဲထုတ်လိုက်ပါမယ်။ ဒါဆိုရင်တော့ browser မှာ run လိုက်တဲ့အခါ GET method နဲ့ ပို့ထားတဲ့အတွက် data က query string အဖြစ် URL bar မှာ မြင်တွေ့ရပါလိမ့်မယ်။ ဒါပေမယ့် Reports page ကတော့ ပြောင်းလဲမသွားပါဘူး။ ဒါကြောင့် ကျွန်တော်တို့က data ကို filter လုပ်ဖို့အတွက် $filter variable ထဲကို all လို့ထည့်ခဲ့ပြီး သူ့အောက်မှာ $_GET['filter'] ဟာ empty မဖြစ်ဘူးဆိုရင်ဆိုတဲ့ condition တစ်ခုစစ်လိုက်မယ်။ $filter variable ထဲမှာ တစ်ခုခုရှိခဲ့ရင်တော့ ကျွန်တော်တို့က explode() ဆိုတဲ့ method ကိုအသုံးပြုရပါတယ်။ ကျွန်တော်တို့ filter လုပ်လိုက်တဲ့ data က string ဖြစ်တဲ့အတွက် filter_sanitize_string ကို အသုံးပြုရပါမယ်။ filter_input() function မှာ parameter သုံးခုရှိပါမယ်။ ပထမဆုံးတစ်ခုက input ရဲ့ type ဖြစ်ပြီး ဒုတိယတစ်ခုကတော့ variable_name ဖြစ်ပါတယ်။ နောက်ဆုံး parameter ကတော့ filter လုပ်ရမယ့် data က number or string ကို သတ်မှတ်ပေးရတာဖြစ်ပါတယ်။ Eg. FILTER_SANITIZE_STRING or FILTER_SANITIZE_NUMBER ။ ပြီးရင်တော့ filter လုပ်ထားတဲ့ value တွေကို is_array ဖြစ်ရဲ့လားဆိုတာကိုစစ်ပြီး bind လုပ်ပေးရမှာဖြစ်ပါတယ်။ </p>
    <p>Example of reports.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            require 'Includes/functions.php';

            $page = "reports";
            $pageTitle = "Reports | Time Tracker";
            // // summarizing project time
            $filter = 'all';

            if (!empty($_GET['filter'])) {
                $filter = explode(':', filter_input(INPUT_GET, 'filter', FILTER_SANITIZE_STRING));
            }

            include 'Includes/header.php';
            ?&gt;
            &lt;div class="col-container page-container"&gt;
                &lt;div class="col col-70-md col-60lg col-center"&gt;
                    &lt;h1 class="actions-header"&gt;Reports&lt;/h1&gt;
                    &lt;!-- filtering by project --&gt;
                    &lt;form class="form-container form-report" action="reports.php" method="get"&gt;
                        &lt;label for="filter"&gt;Filter:&lt;/label&gt;
                        &lt;select name="filter" id="filter"&gt;
                            &lt;option value=""&gt;Select One&lt;/option&gt;
                            &lt;?php
                            foreach (get_project_list() as $item) {
                                echo "&lt;option value='project:" . $item['project_id'] . "'&gt;";
                                echo $item['title'] . "&lt;/option&gt;\n";
                            }
                            ?&gt;
                        &lt;/select&gt;
                        &lt;input type="submit" class="button" value="Run"&gt;
                    &lt;/form&gt;
                &lt;/div&gt;
                &lt;div class="section page"&gt;
                    &lt;div class="wrapper"&gt;
                        &lt;table&gt;
                            &lt;?php
                            $total = $project_id = $project_total = 0;
                            // to get our last project with Project Total
                            $tasks = get_task_list($filter);
                            foreach ($tasks as $item) {
                                if ($project_id != $item['project_id']) {
                                    $project_id = $item['project_id'];
                                    echo "&lt;thead&gt;\n";
                                    echo "&lt;tr&gt;\n";
                                    echo "&lt;th&gt;" . $item['project'] . "&lt;/th&gt;\n";
                                    echo "&lt;th&gt;Date&lt;/th&gt;\n";
                                    echo "&lt;th&gt;Time&lt;/th&gt;\n";
                                    echo "&lt;/tr&gt;\n";
                                }
                                $project_total += $item['time']; // add current time to project total
                                $total += $item['time'];
                                echo "&lt;tr&gt;";
                                echo "&lt;td&gt;" . $item['title'] . "&lt;/td&gt;";
                                echo "&lt;td&gt;" . $item['date'] . "&lt;/td&gt;";
                                echo "&lt;td&gt;" . $item['time'] . "&lt;/td&gt;";
                                echo "&lt;/tr&gt;";
                            }
                            // to get our last project with Project Total
                            if (next($tasks)['project_id'] != $item['project_id']) {
                                echo "&lt;tr&gt;\n";
                                echo "&lt;th class='project-total-label' colspan='2'&gt;Project Total&lt;/th&gt;\n";
                                echo "&lt;th class='project-total-number'&gt;$project_total&lt;/th&gt;\n";
                                echo "&lt;/tr&gt;\n";
                                // reset $project_total
                                $project_total = 0;
                            }
                            ?&gt;
                            &lt;tr&gt;
                                &lt;th class="grand-total-label" colspan="2"&gt;Grand Total&lt;/th&gt;
                                &lt;th class="grand-total-number"&gt;&lt;?php echo $total; ?&gt;&lt;/th&gt;
                            &lt;/tr&gt;
                        &lt;/table&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
                        
            &lt;?php include 'Includes/footer.php'; ?&gt;
        </code>
    </pre>
    <p>Example of functions.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            // application functions

            // reading project data
            function get_project_list() {
                include("connection.php");
            
                try {
                    return $db->query('SELECT project_id, title, category FROM projects');
                } catch (Exception $e) {
                    echo "ERROR!: " . $e->getMessage() . "&lt;br&gt;";
                    return array();
                }
            }

            // reading task data
            // summarizing project time => $filter = null
            function get_task_list($filter = null) {
                include("connection.php");
            
                $sql = 'SELECT tasks.*, projects.title as project
                        FROM tasks JOIN projects ON tasks.project_id = projects.project_id';

                // filtering by project
                $where = '';
                if (is_array($filter)) {
                    if ($filter[0] == 'project') {
                        $where = ' WHERE projects.project_id = ?';
                    }
                }
            
                $orderBy = ' ORDER BY date DESC';
            
                if ($filter) {
                    $orderBy = ' ORDER BY projects.title ASC, date DESC';
                }
            
                try {
                    $results = $db->prepare($sql . $where . $orderBy);
                    if (is_array($filter)) {
                        $results->bindValue(1, $filter[1], PDO::PARAM_INT);
                    }
                    $results->execute();
                } catch (Exception $e) {
                    echo "ERROR!: " . $e->getMessage() . "&lt;br&gt;";
                    return array();
                }
                return $results->fetchAll(PDO::FETCH_ASSOC);
            }

            // adding project
            function add_project($title, $category) {
                include 'connection.php';
            
                $sql = 'INSERT INTO projects (title, category) VALUES (?, ?)';
            
                try {
                    $results = $db->prepare($sql);
                    $results->bindValue(1, $title, PDO::PARAM_STR);
                    $results->bindValue(2, $category, PDO::PARAM_STR);
                    $results->execute();
                } catch (Exception $e){
                    echo "Error!: " . $e->getMessage() . "&lt;br&gt;";
                    return false;
                }
                return true;
            }

            // adding task
            function add_task($project_id, $title, $date, $time) {
                include 'connection.php';
            
                $sql = 'INSERT INTO tasks (project_id, title, date, time) VALUES (?, ?, ?, ?)';
            
                try {
                    $results = $db->prepare($sql);
                    $results->bindValue(1, $project_id, PDO::PARAM_INT);
                    $results->bindValue(2, $title, PDO::PARAM_STR);
                    $results->bindValue(3, $date, PDO::PARAM_STR);
                    $results->bindValue(4, $time, PDO::PARAM_INT);
                    $results->execute();
                } catch (Exception $e){
                    echo "Error!: " . $e->getMessage() . "&lt;br&gt;";
                    return false;
                }
                return true;
            }

            ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Filtering by Category</h2>
    <p>Filtering လုပ်ခြင်းဟာ ကျွန်တော်တို့ report ကို clean up ဖြစ်စေဖို့ ကူညီပေးပါတယ်။ အခု ဒုတိယတစ်ခုအဖြစ် category နဲ့ filter လုပ်သွားမှာဖြစ်ပါတယ်။ ဒီလို filter လုပ်ဖို့အတွက် reports.php ထဲက ကျွန်တော်တို့ filter လုပ်ထားတဲ့ drop down list မှာသွားပြီး update လုပ်ပေးရပါမယ်။ ကျွန်တော်တို့ category ကို add မလုပ်ခင် projects တွေအတွက် optgroup တစ်ခု ထပ်ထည့်ပါမယ်။ ပြီးတော့မှာ category အတွက် optgroup တစ်ခုထပ်ပြီး တည်ဆောက်လိုက်ပါမယ်။ &lt;optgroup&gt; အတွင်းမှာတော့ ကျွန်တော်တို့ရဲ့ option value တစ်ခုချင်းစီက category: ဆိုပြီး နောက်က colon လေးခံပြီးတော့ စရပါတယ်။ ပြီးတော့မှာ colon ရဲ့နောက်မှာ name လိုက်ရပါတယ်။ Eg. value="category:Billable" ။ ပြီးရင်တော့ functions.php ကိုသွားပြီး modify လုပ်ပါမယ်။ ကျွန်တော်တို့က filters တွေအများကြီးလုပ်မှာဖြစ်တဲ့အတွက် if အစား switch statement ကို အသုံးပြုမှာဖြစ်ပါတယ်။ နောက်ဆုံးမှာတော့ filter လုပ်လိုက်တဲ့ project က int ဖြစ်နေပြီး category ကတော့ string ဖြစ်နေပါတယ်။ ကျွန်တော်တု့ိက category ကိုလည်း int အဖြစ်နဲ့ bind လုပ်ချင်တာပါ။ ကျွန်တော်တို့က filter ပါတဲ့ int အတွက် string category ကို bindValue method နဲ့ pass လုပ်မယ်ဆိုရင် method ဟာ category ကနေ non-integer values အားလုံးကို remove လုပ်သွားပါလိမ့်မယ်။ ဒါဆိုရင် category ထဲက value ကို empty အဖြစ်သတ်မှတ်ပြီး leaving လုပ်သွားမှာပါ။ ကျွန်တော်တို့က ဒီလိုလိုချင်တာမဟုတ်ပါဘူး။ ကျွန်တော်တို့က တိတိကျကျလိုချင်တဲ့အတွက် case statement ကို bind values ဆီ apply လုပ်ပေးရပါတယ်။ ဒါကြောင့် ကျွန်တော်တို့ bindValue() method ထဲက နောက်ဆုံး parameter ဟာ optional ဖြစ်တဲ့အတွက် သူ့ကို ဖြုတ်ပေးရပါမယ်။ ဒါဆိုရင်တော့ ကျွန်တော်တို့ဟာ category ကိုပါ filter လုပ်လိုက်ပြီ ဖြစ်ပါတယ်။ </p>
    <p>Example of reports.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            require 'Includes/functions.php';

            $page = "reports";
            $pageTitle = "Reports | Time Tracker";
            // // summarizing project time
            $filter = 'all';

            if (!empty($_GET['filter'])) {
                $filter = explode(':', filter_input(INPUT_GET, 'filter', FILTER_SANITIZE_STRING));
            }

            include 'Includes/header.php';
            ?&gt;
            &lt;div class="col-container page-container"&gt;
                &lt;div class="col col-70-md col-60lg col-center"&gt;
                    &lt;h1 class="actions-header"&gt;Reports&lt;/h1&gt;
                    &lt;!-- filtering by project --&gt;
                    &lt;form class="form-container form-report" action="reports.php" method="get"&gt;
                        &lt;label for="filter"&gt;Filter:&lt;/label&gt;
                        &lt;select name="filter" id="filter"&gt;
                            &lt;option value=""&gt;Select One&lt;/option&gt;
                            &lt;optgroup label="Project"&gt;
                                &lt;?php
                                foreach (get_project_list() as $item) {
                                    echo "&lt;option value='project:" . $item['project_id'] . "'&gt;";
                                    echo $item['title'] . "&lt;/option&gt;\n";
                                }
                                ?&gt;
                            &lt;/optgroup&gt;
                            &lt;!-- filtering by category --&gt;
                            &lt;optgroup label="Category"&gt;
                                &lt;option value="category:Billable"&gt;Billable&lt;/option&gt;
                                &lt;option value="category:Charity"&gt;Charity&lt;/option&gt;
                                &lt;option value="category:Personal"&gt;Personal&lt;/option&gt;
                            &lt;/optgroup&gt;
                        &lt;/select&gt;
                        &lt;input type="submit" class="button" value="Run"&gt;
                    &lt;/form&gt;
                &lt;/div&gt;
                &lt;div class="section page"&gt;
                    &lt;div class="wrapper"&gt;
                        &lt;table&gt;
                            &lt;?php
                            $total = $project_id = $project_total = 0;
                            // to get our last project with Project Total
                            $tasks = get_task_list($filter);
                            foreach ($tasks as $item) {
                                if ($project_id != $item['project_id']) {
                                    $project_id = $item['project_id'];
                                    echo "&lt;thead&gt;\n";
                                    echo "&lt;tr&gt;\n";
                                    echo "&lt;th&gt;" . $item['project'] . "&lt;/th&gt;\n";
                                    echo "&lt;th&gt;Date&lt;/th&gt;\n";
                                    echo "&lt;th&gt;Time&lt;/th&gt;\n";
                                    echo "&lt;/tr&gt;\n";
                                }
                                $project_total += $item['time']; // add current time to project total
                                $total += $item['time'];
                                echo "&lt;tr&gt;";
                                echo "&lt;td&gt;" . $item['title'] . "&lt;/td&gt;";
                                echo "&lt;td&gt;" . $item['date'] . "&lt;/td&gt;";
                                echo "&lt;td&gt;" . $item['time'] . "&lt;/td&gt;";
                                echo "&lt;/tr&gt;";
                            }
                            // to get our last project with Project Total
                            if (next($tasks)['project_id'] != $item['project_id']) {
                                echo "&lt;tr&gt;\n";
                                echo "&lt;th class='project-total-label' colspan='2'&gt;Project Total&lt;/th&gt;\n";
                                echo "&lt;th class='project-total-number'&gt;$project_total&lt;/th&gt;\n";
                                echo "&lt;/tr&gt;\n";
                                // reset $project_total
                                $project_total = 0;
                            }
                            ?&gt;
                            &lt;tr&gt;
                                &lt;th class="grand-total-label" colspan="2"&gt;Grand Total&lt;/th&gt;
                                &lt;th class="grand-total-number"&gt;&lt;?php echo $total; ?&gt;&lt;/th&gt;
                            &lt;/tr&gt;
                        &lt;/table&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
                        
            &lt;?php include 'Includes/footer.php'; ?&gt;
        </code>
    </pre>
    <p>Example of functions.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            // application functions

            // reading project data
            function get_project_list() {
                include("connection.php");
            
                try {
                    return $db->query('SELECT project_id, title, category FROM projects');
                } catch (Exception $e) {
                    echo "ERROR!: " . $e->getMessage() . "&lt;br&gt;";
                    return array();
                }
            }

            // reading task data
            // summarizing project time => $filter = null
            function get_task_list($filter = null) {
                include("connection.php");
            
                $sql = 'SELECT tasks.*, projects.title as project
                        FROM tasks JOIN projects ON tasks.project_id = projects.project_id';

                // filtering by project
                $where = '';
                if (is_array($filter)) {
                    switch ($filter[0]) {
                        case 'project' : $where = ' WHERE projects.project_id = ?';
                        break;
                    
                        case 'category' : $where = ' WHERE category = ?';
                        break;
                    }
                }
            
                $orderBy = ' ORDER BY date DESC';
            
                if ($filter) {
                    $orderBy = ' ORDER BY projects.title ASC, date DESC';
                }
            
                try {
                    $results = $db->prepare($sql . $where . $orderBy);
                    if (is_array($filter)) {
                        // bindValue() - the third parameter is optional, so removed 3th parameter
                        $results->bindValue(1, $filter[1]);
                    }
                    $results->execute();
                } catch (Exception $e) {
                    echo "ERROR!: " . $e->getMessage() . "&lt;br&gt;";
                    return array();
                }
                return $results->fetchAll(PDO::FETCH_ASSOC);
            }

            // adding project
            function add_project($title, $category) {
                include 'connection.php';
            
                $sql = 'INSERT INTO projects (title, category) VALUES (?, ?)';
            
                try {
                    $results = $db->prepare($sql);
                    $results->bindValue(1, $title, PDO::PARAM_STR);
                    $results->bindValue(2, $category, PDO::PARAM_STR);
                    $results->execute();
                } catch (Exception $e){
                    echo "Error!: " . $e->getMessage() . "&lt;br&gt;";
                    return false;
                }
                return true;
            }

            // adding task
            function add_task($project_id, $title, $date, $time) {
                include 'connection.php';
            
                $sql = 'INSERT INTO tasks (project_id, title, date, time) VALUES (?, ?, ?, ?)';
            
                try {
                    $results = $db->prepare($sql);
                    $results->bindValue(1, $project_id, PDO::PARAM_INT);
                    $results->bindValue(2, $title, PDO::PARAM_STR);
                    $results->bindValue(3, $date, PDO::PARAM_STR);
                    $results->bindValue(4, $time, PDO::PARAM_INT);
                    $results->execute();
                } catch (Exception $e){
                    echo "Error!: " . $e->getMessage() . "&lt;br&gt;";
                    return false;
                }
                return true;
            }

            ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Filtering by Time Period</h2>
    <p>နောက်ဆုံး ကျွန်တော်တို့ filter လုပ်ချင်တာတစ်ခုကတော့ filter by date ပဲဖြစ်ပါတယ်။ တစ်ခါတစ်ရံ ကျွန်တော်တို့က range တစ်ခုကို enter လုပ်လို့ရတဲ့ date reports တွေကိုပဲ မြင်ချင်တဲ့အခါမျိုးတွေ ရှိနိုင်ပါတယ်။ အခု ကျွန်တော်တို့ application မှာတော့ date reports အားလုံးကို simple drop-down တစ်ခုနဲ့ပဲ ပြပေးပါမယ်။ ကျွန်တော်တို့က range တစ်ခုအတွင်းလိုချင်တာဖြစ်တဲ့အတွက် အရင်ဆုံး range ကိုတော့ pre-define လုပ်သင့်ပါတယ်။ ဥပမာ last week, this week, last month or this month လိုမျိုးပေါ့။ ဒါကြောင့် ကျွန်တော်တို့ reports.php ထဲမှာ date ကို filter လုပ်ဖို့ &lt;optgroup&gt; တစ်ခု ထပ်ထည့်ပါမယ်။ သူ့ထဲက option တစ်ခုချင်းစီထဲက value attribute ထဲမှာ php tag နဲ့ date format ကို month, day, year ဆိုပြီး ထည့်လိုက်ပါမယ်။ ပြီးရင်တော့ strtotime() ထဲမှာ date ရဲ့ range ကို calculate လုပ်ပေးရမှာဖြစ်ပါတယ်။ ပြီးခဲ့တဲ့အပတ်က start date ကို calculate လုပ်ဖို့ strtotime('-2 Sundays') လို့ရေးပေးရပါမယ်။ နောက်ထပ် date range တွေ calculate လုပ်ထားတာကိုတော့ အောက်က example မှာ ဆက်ပြီးကြည့်နိုင်ပါတယ်။ ပြီးရင်တော့ functions.php ထဲကို သွားပြီး switch statement မှာ date ကို စစ်ပေးရမှာဖြစ်ပါတယ်။ </p>
    <p>Example of reports.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            require 'Includes/functions.php';

            $page = "reports";
            $pageTitle = "Reports | Time Tracker";
            // // summarizing project time
            $filter = 'all';

            if (!empty($_GET['filter'])) {
                $filter = explode(':', filter_input(INPUT_GET, 'filter', FILTER_SANITIZE_STRING));
            }

            include 'Includes/header.php';
            ?&gt;
            &lt;div class="col-container page-container"&gt;
                &lt;div class="col col-70-md col-60lg col-center"&gt;
                    &lt;h1 class="actions-header"&gt;Reports&lt;/h1&gt;
                    &lt;!-- filtering by project --&gt;
                    &lt;form class="form-container form-report" action="reports.php" method="get"&gt;
                        &lt;label for="filter"&gt;Filter:&lt;/label&gt;
                        &lt;select name="filter" id="filter"&gt;
                            &lt;option value=""&gt;Select One&lt;/option&gt;
                            &lt;optgroup label="Project"&gt;
                                &lt;?php
                                foreach (get_project_list() as $item) {
                                    echo "&lt;option value='project:" . $item['project_id'] . "'&gt;";
                                    echo $item['title'] . "&lt;/option&gt;\n";
                                }
                                ?&gt;
                            &lt;/optgroup&gt;
                            &lt;!-- filtering by category --&gt;
                            &lt;optgroup label="Category"&gt;
                                &lt;option value="category:Billable"&gt;Billable&lt;/option&gt;
                                &lt;option value="category:Charity"&gt;Charity&lt;/option&gt;
                                &lt;option value="category:Personal"&gt;Personal&lt;/option&gt;
                            &lt;/optgroup&gt;
                            &lt;!-- filtering by time period --&gt;
                            &lt;optgroup label="Date"&gt;
                                &lt;option value="date:&lt;?php
                                    echo date('m/d/Y', strtotime('-2 Sunday'));
                                    echo ":";
                                    echo date('m/d/Y', strtotime('-1 Saturday'));
                                ?&gt;"&gt;Last Week&lt;/option&gt;

                                &lt;option value="date:&lt;?php
                                    echo date('m/d/Y', strtotime('-1 Sunday'));
                                    echo ":";
                                    echo date('m/d/Y');
                                ?&gt;"&gt;This Week&lt;/option&gt;

                                &lt;option value="date:&lt;?php
                                    echo date('m/d/Y', strtotime('first day of last month'));
                                    echo ":";
                                    echo date('m/d/Y', strtotime('last day of last month'));
                                ?&gt;"&gt;Last Month&lt;/option&gt;

                                &lt;option value="date:&lt;?php
                                    echo date('m/d/Y', strtotime('first day of last month'));
                                    echo ":";
                                    echo date('m/d/Y');
                                ?&gt;"&gt;This Month&lt;/option&gt;
                            &lt;/optgroup&gt;
                        &lt;/select&gt;
                        &lt;input type="submit" class="button" value="Run"&gt;
                    &lt;/form&gt;
                &lt;/div&gt;
                &lt;div class="section page"&gt;
                    &lt;div class="wrapper"&gt;
                        &lt;table&gt;
                            &lt;?php
                            $total = $project_id = $project_total = 0;
                            // to get our last project with Project Total
                            $tasks = get_task_list($filter);
                            foreach ($tasks as $item) {
                                if ($project_id != $item['project_id']) {
                                    $project_id = $item['project_id'];
                                    echo "&lt;thead&gt;\n";
                                    echo "&lt;tr&gt;\n";
                                    echo "&lt;th&gt;" . $item['project'] . "&lt;/th&gt;\n";
                                    echo "&lt;th&gt;Date&lt;/th&gt;\n";
                                    echo "&lt;th&gt;Time&lt;/th&gt;\n";
                                    echo "&lt;/tr&gt;\n";
                                }
                                $project_total += $item['time']; // add current time to project total
                                $total += $item['time'];
                                echo "&lt;tr&gt;";
                                echo "&lt;td&gt;" . $item['title'] . "&lt;/td&gt;";
                                echo "&lt;td&gt;" . $item['date'] . "&lt;/td&gt;";
                                echo "&lt;td&gt;" . $item['time'] . "&lt;/td&gt;";
                                echo "&lt;/tr&gt;";
                            }
                            // to get our last project with Project Total
                            if (next($tasks)['project_id'] != $item['project_id']) {
                                echo "&lt;tr&gt;\n";
                                echo "&lt;th class='project-total-label' colspan='2'&gt;Project Total&lt;/th&gt;\n";
                                echo "&lt;th class='project-total-number'&gt;$project_total&lt;/th&gt;\n";
                                echo "&lt;/tr&gt;\n";
                                // reset $project_total
                                $project_total = 0;
                            }
                            ?&gt;
                            &lt;tr&gt;
                                &lt;th class="grand-total-label" colspan="2"&gt;Grand Total&lt;/th&gt;
                                &lt;th class="grand-total-number"&gt;&lt;?php echo $total; ?&gt;&lt;/th&gt;
                            &lt;/tr&gt;
                        &lt;/table&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
                        
            &lt;?php include 'Includes/footer.php'; ?&gt;
        </code>
    </pre>
    <p>Example of functions.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            // application functions

            // reading project data
            function get_project_list() {
                include("connection.php");
            
                try {
                    return $db->query('SELECT project_id, title, category FROM projects');
                } catch (Exception $e) {
                    echo "ERROR!: " . $e->getMessage() . "&lt;br&gt;";
                    return array();
                }
            }

            // reading task data
            // summarizing project time => $filter = null
            function get_task_list($filter = null) {
                include("connection.php");
            
                $sql = 'SELECT tasks.*, projects.title as project
                        FROM tasks JOIN projects ON tasks.project_id = projects.project_id';

                // filtering by project
                $where = '';
                if (is_array($filter)) {
                    switch ($filter[0]) {
                        case 'project' : $where = ' WHERE projects.project_id = ?';
                        break;
                        // filtering by category
                        case 'category' : $where = ' WHERE category = ?';
                        break;
                        // filtering by date
                        case 'date' : $where = ' WHERE date >= ? AND date <= ?';
                        break;
                    }
                }
            
                $orderBy = ' ORDER BY date DESC';
            
                if ($filter) {
                    $orderBy = ' ORDER BY projects.title ASC, date DESC';
                }
            
                try {
                    $results = $db->prepare($sql . $where . $orderBy);
                    if (is_array($filter)) {
                        // bindValue() - the third parameter is optional, so removed 3th parameter
                        $results->bindValue(1, $filter[1]);
                    
                        // filtering by date
                        if ($filter[0] == 'date') {
                            $results->bindValue(2, $filter[2], PDO::PARAM_STR);
                        }
                    }
                    $results->execute();
                } catch (Exception $e) {
                    echo "ERROR!: " . $e->getMessage() . "&lt;br&gt;";
                    return array();
                }
                return $results->fetchAll(PDO::FETCH_ASSOC);
            }

            // adding project
            function add_project($title, $category) {
                include 'connection.php';
            
                $sql = 'INSERT INTO projects (title, category) VALUES (?, ?)';
            
                try {
                    $results = $db->prepare($sql);
                    $results->bindValue(1, $title, PDO::PARAM_STR);
                    $results->bindValue(2, $category, PDO::PARAM_STR);
                    $results->execute();
                } catch (Exception $e){
                    echo "Error!: " . $e->getMessage() . "&lt;br&gt;";
                    return false;
                }
                return true;
            }

            // adding task
            function add_task($project_id, $title, $date, $time) {
                include 'connection.php';
            
                $sql = 'INSERT INTO tasks (project_id, title, date, time) VALUES (?, ?, ?, ?)';
            
                try {
                    $results = $db->prepare($sql);
                    $results->bindValue(1, $project_id, PDO::PARAM_INT);
                    $results->bindValue(2, $title, PDO::PARAM_STR);
                    $results->bindValue(3, $date, PDO::PARAM_STR);
                    $results->bindValue(4, $time, PDO::PARAM_INT);
                    $results->execute();
                } catch (Exception $e){
                    echo "Error!: " . $e->getMessage() . "&lt;br&gt;";
                    return false;
                }
                return true;
            }

            ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Naming Reports</h2>
    <p>ကျွန်တော်တို့ရဲ့ Reports page ဟာ ကြည့်လို့အဆင်ပြေနေပြီဆိုပေမယ့် တစ်ကယ်တမ်းမှာ ဘယ် report က အမှန်တကယ် run လဲဆိုတာတော့ သိဖို့ခက်နေပါသေးတယ်။ ဒါကြောင့် ကျွန်တော်တို့က ဒီထက်ပိုပြီး details ကျအောင် header text ကို ပြောင်းလဲပါမယ်။ ကျွန်တော်တို့ reports.php ထဲက h1 မှာ Report အစား Report on လို့ရေးကာ reports တွေကို filter လုပ်လိုက်ပါမယ်။ Condition မှာ တစ်ကယ်လို့ $filter က array မဟုတ်ဘူးဆိုရင် "All Tasks by Project" ဆိုတာကို echo ထုတ်ပေးပြီး၊ တကယ်လို့ $filter က array တစ်ခုဖြစ်တယ်ဆိုရင်တော့ ကျွန်တော်တို့ filter ကိုအသုံးပြုမယ့် item ဖြစ်တဲ့ ပထမဆုံး element ကို စပြီး display လုပ်ပါမယ်။ ကျွန်တော်တို့ဟာ title case အတွက် ပထမဆုံး letter ကို uppercase ဖြစ်ဖို့အတွက် ucwords() ဆိုတဲ့ function ကို အသုံးပြုပါမယ်။ ပြီးရင်တော့ အဲ့ဒီ filter array ရဲ့ first element က project နဲ့ညီလားရယ်၊ category နဲ့ညီလားရယ်၊ date နဲ့ညီလားရယ်ဆိုတာကို switch statement နဲ့ စစ်ရပါမယ်။ ပြီးရင်တော့ ကျွန်တော်တို့က functions.php ထဲကိုသွားပြီး get_project() function ကို create လုပ်ပါမယ်။ အဲ့ဒီ function ထဲမှာတော့ single parameter အဖြစ် project_id ကို accept လုပ်သွားမှာဖြစ်ပါတယ်။ ပြီးရင်တော့ sql statement မှာ projects table ထဲက project_id ဟာ placeholder နဲ့ညီတဲ့ကောင်အားလုံးကို ဆွဲယူလိုက်ပါမယ်။ ပြီးရင်တော့ အောက်မှာ return true ပြန်မယ့်အစား return $results ကိုပြန်ပေးပါမယ်။ ဒါဆိုရင်တော့ ကျွန်တော်တို့ Reports page မှာ header text နဲ့အတူ details ကျကျ ဖော်ပြပေးမှာဖြစ်ပါတယ်။ </p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            require 'Includes/functions.php';

            $page = "reports";
            $pageTitle = "Reports | Time Tracker";
            // // summarizing project time
            $filter = 'all';

            if (!empty($_GET['filter'])) {
                $filter = explode(':', filter_input(INPUT_GET, 'filter', FILTER_SANITIZE_STRING));
            }

            include 'Includes/header.php';
            ?&gt;
            &lt;div class="col-container page-container"&gt;
                &lt;div class="col col-70-md col-60lg col-center"&gt;
                    &lt;!-- naming reports --&gt;
                    &lt;h1 class="actions-header"&gt;Report on &lt;?php
                    if (!is_array($filter)) {
                        echo "All Tasks by Project";
                    } else {
                        echo ucwords($filter[0] . " : ");
                        switch ($filter[0]) {
                            case 'project' : $project = get_project($filter[1]);
                                             echo $project['title'];
                                             break;
                                         
                            case 'category' : echo $filter[1];
                                            break;
                                        
                            case 'datet' : echo $filter[1] . " - " . $filter[2];
                                            break;
                        }
                    }
                    ?&gt;&lt;/h1&gt;
                    &lt;!-- filtering by project --&gt;
                    &lt;form class="form-container form-report" action="reports.php" method="get"&gt;
                        &lt;label for="filter"&gt;Filter:&lt;/label&gt;
                        &lt;select name="filter" id="filter"&gt;
                            &lt;option value=""&gt;Select One&lt;/option&gt;
                            &lt;optgroup label="Project"&gt;
                                &lt;?php
                                foreach (get_project_list() as $item) {
                                    echo "&lt;option value='project:" . $item['project_id'] . "'&gt;";
                                    echo $item['title'] . "&lt;/option&gt;\n";
                                }
                                ?&gt;
                            &lt;/optgroup&gt;
                            &lt;!-- filtering by category --&gt;
                            &lt;optgroup label="Category"&gt;
                                &lt;option value="category:Billable"&gt;Billable&lt;/option&gt;
                                &lt;option value="category:Charity"&gt;Charity&lt;/option&gt;
                                &lt;option value="category:Personal"&gt;Personal&lt;/option&gt;
                            &lt;/optgroup&gt;
                            &lt;!-- filtering by time period --&gt;
                            &lt;optgroup label="Date"&gt;
                                &lt;option value="date:&lt;?php
                                    echo date('m/d/Y', strtotime('-2 Sunday'));
                                    echo ":";
                                    echo date('m/d/Y', strtotime('-1 Saturday'));
                                ?&gt;"&gt;Last Week&lt;/option&gt;

                                &lt;option value="date:&lt;?php
                                    echo date('m/d/Y', strtotime('-1 Sunday'));
                                    echo ":";
                                    echo date('m/d/Y');
                                ?&gt;"&gt;This Week&lt;/option&gt;

                                &lt;option value="date:&lt;?php
                                    echo date('m/d/Y', strtotime('first day of last month'));
                                    echo ":";
                                    echo date('m/d/Y', strtotime('last day of last month'));
                                ?&gt;"&gt;Last Month&lt;/option&gt;

                                &lt;option value="date:&lt;?php
                                    echo date('m/d/Y', strtotime('first day of last month'));
                                    echo ":";
                                    echo date('m/d/Y');
                                ?&gt;"&gt;This Month&lt;/option&gt;
                            &lt;/optgroup&gt;
                        &lt;/select&gt;
                        &lt;input type="submit" class="button" value="Run"&gt;
                    &lt;/form&gt;
                &lt;/div&gt;
                &lt;div class="section page"&gt;
                    &lt;div class="wrapper"&gt;
                        &lt;table&gt;
                            &lt;?php
                            $total = $project_id = $project_total = 0;
                            // to get our last project with Project Total
                            $tasks = get_task_list($filter);
                            foreach ($tasks as $item) {
                                if ($project_id != $item['project_id']) {
                                    $project_id = $item['project_id'];
                                    echo "&lt;thead&gt;\n";
                                    echo "&lt;tr&gt;\n";
                                    echo "&lt;th&gt;" . $item['project'] . "&lt;/th&gt;\n";
                                    echo "&lt;th&gt;Date&lt;/th&gt;\n";
                                    echo "&lt;th&gt;Time&lt;/th&gt;\n";
                                    echo "&lt;/tr&gt;\n";
                                }
                                $project_total += $item['time']; // add current time to project total
                                $total += $item['time'];
                                echo "&lt;tr&gt;";
                                echo "&lt;td&gt;" . $item['title'] . "&lt;/td&gt;";
                                echo "&lt;td&gt;" . $item['date'] . "&lt;/td&gt;";
                                echo "&lt;td&gt;" . $item['time'] . "&lt;/td&gt;";
                                echo "&lt;/tr&gt;";
                            }
                            // to get our last project with Project Total
                            if (next($tasks)['project_id'] != $item['project_id']) {
                                echo "&lt;tr&gt;\n";
                                echo "&lt;th class='project-total-label' colspan='2'&gt;Project Total&lt;/th&gt;\n";
                                echo "&lt;th class='project-total-number'&gt;$project_total&lt;/th&gt;\n";
                                echo "&lt;/tr&gt;\n";
                                // reset $project_total
                                $project_total = 0;
                            }
                            ?&gt;
                            &lt;tr&gt;
                                &lt;th class="grand-total-label" colspan="2"&gt;Grand Total&lt;/th&gt;
                                &lt;th class="grand-total-number"&gt;&lt;?php echo $total; ?&gt;&lt;/th&gt;
                            &lt;/tr&gt;
                        &lt;/table&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
                        
            &lt;?php include 'Includes/footer.php'; ?&gt;
        </code>
    </pre>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            // application functions

            // reading project data
            function get_project_list() {
                include("connection.php");
            
                try {
                    return $db->query('SELECT project_id, title, category FROM projects');
                } catch (Exception $e) {
                    echo "ERROR!: " . $e->getMessage() . "&lt;br&gt;";
                    return array();
                }
            }

            // reading task data
            // summarizing project time => $filter = null
            function get_task_list($filter = null) {
                include("connection.php");
            
                $sql = 'SELECT tasks.*, projects.title as project
                        FROM tasks JOIN projects ON tasks.project_id = projects.project_id';

                // filtering by project
                $where = '';
                if (is_array($filter)) {
                    switch ($filter[0]) {
                        case 'project' : $where = ' WHERE projects.project_id = ?';
                        break;
                        // filtering by category
                        case 'category' : $where = ' WHERE category = ?';
                        break;
                        // filtering by date
                        case 'date' : $where = ' WHERE date >= ? AND date <= ?';
                        break;
                    }
                }
            
                $orderBy = ' ORDER BY date DESC';
            
                if ($filter) {
                    $orderBy = ' ORDER BY projects.title ASC, date DESC';
                }
            
                try {
                    $results = $db->prepare($sql . $where . $orderBy);
                    if (is_array($filter)) {
                        // bindValue() - the third parameter is optional, so removed 3th parameter
                        $results->bindValue(1, $filter[1]);
                    
                        // filtering by date
                        if ($filter[0] == 'date') {
                            $results->bindValue(2, $filter[2], PDO::PARAM_STR);
                        }
                    }
                    $results->execute();
                } catch (Exception $e) {
                    echo "ERROR!: " . $e->getMessage() . "&lt;br&gt;";
                    return array();
                }
                return $results->fetchAll(PDO::FETCH_ASSOC);
            }

            // adding project
            function add_project($title, $category) {
                include 'connection.php';
            
                $sql = 'INSERT INTO projects (title, category) VALUES (?, ?)';
            
                try {
                    $results = $db->prepare($sql);
                    $results->bindValue(1, $title, PDO::PARAM_STR);
                    $results->bindValue(2, $category, PDO::PARAM_STR);
                    $results->execute();
                } catch (Exception $e){
                    echo "Error!: " . $e->getMessage() . "&lt;br&gt;";
                    return false;
                }
                return true;
            }

            // naming reports
            function get_project($project_id) {
                include 'connection.php';
            
                $sql = 'SELECT * FROM projects WHERE project_id = ?';
            
                try {
                    $results = $db->prepare($sql);
                    $results->bindValue(1, $project_id, PDO::PARAM_INT);
                    $results->execute();
                } catch (Exception $e){
                    echo "Error!: " . $e->getMessage() . "&lt;br&gt;";
                    return false;
                }
                return $results->fetch();
            }

            // adding task
            function add_task($project_id, $title, $date, $time) {
                include 'connection.php';
            
                $sql = 'INSERT INTO tasks (project_id, title, date, time) VALUES (?, ?, ?, ?)';
            
                try {
                    $results = $db->prepare($sql);
                    $results->bindValue(1, $project_id, PDO::PARAM_INT);
                    $results->bindValue(2, $title, PDO::PARAM_STR);
                    $results->bindValue(3, $date, PDO::PARAM_STR);
                    $results->bindValue(4, $time, PDO::PARAM_INT);
                    $results->execute();
                } catch (Exception $e){
                    echo "Error!: " . $e->getMessage() . "&lt;br&gt;";
                    return false;
                }
                return true;
            }

            ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Updating and Deleting Records</h2>
    <p>အခုဆိုရင်ကျွန်တော်တို့က CRUD acronym ရဲ့ ပထမဆုံးနှစ်ခုဖြစ်တဲ့ Create နဲ့ Read ကိုလေ့လာပြီးတဲ့နောက် Update နဲ့ Delete ကို ဆက်ပြီးလေ့လာဖို့ ready ဖြစ်နေပါပြီ။ Professional developer တစ်ယောက်အနေနဲ့ ပထမဆုံးလေ့လာသင့်တဲ့အရာကတော့ requirements change ပဲဖြစ်ပါတယ်။ ဥပမာ password requirements တွေမှာ user တစ်ယောက်ကို သူ enter လုပ်ချင်တဲ့ password ကို allow လုပ်ပေးရပါတယ်။ ဒါပေမယ့် ကျွန်တော်တို့ကတော့ user ရိုက်လိုက်တဲ့ password က weak ဖြစ်နေတာကို ရိုက်ထည့်နိုင်တယ်ဆိုတာ သိထားရပါမယ်။ အဲ့ဒီအတွက် additional password validation တစ်ခု ထပ်စစ်ပေးဖို့ ဆုံးဖြတ်ရပါတယ်။ User ရိုက်လိုက်တဲ့ password က minimum number of characters, at least one number, one special character နဲ့ user name မပါရဘူးဆိုတာတွေကို စစ်ရုံသာမက database ထဲမှာရှိတဲ့ data တွေကိုပါ update လုပ်ပေးဖို့လိုအပ်ပါတယ်။ တစ်ခါတစ်ရံမှာဆိုရင် updating လုပ်ရုံနဲ့တင် မလုံလောက်ပါဘူး။ တစ်ခါတစ်ရံမှာ entries တွေကို remove လုပ်ရနိုင်ပါတယ်။ ဥပမာ spam email or spam comment တစ်ခုလိုမျိုးပေါ့။ ကျွန်တော်တို့ ပြုလုပ်လိုက်တဲ့ mistake တွေကို update လုပ်ခြင်းနဲ့ some information တွေကို deleting လုပ်ခြင်း စတာတွေနဲ့ ပြန်လည်ပြီးတော့ fix လုပ်လို့ရပါတယ်။ ဘယ်လိုအခြေအနေမှာပဲဖြစ်ဖြစ် updating နဲ့ deleting ဟာ data တွေကို maintain လုပ်တဲ့နေရာမှာ integral part တစ်ခုအနေနဲ့ ပါဝင်ပါတယ်။ </p>
    <p>Example of project_list.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            require 'Includes/functions.php';

            $page = "projects";
            $pageTitle = "Project List | Time Trucker";

            include("Includes/header.php");

            ?&gt;

            &lt;div class="section catalog random"&gt;

                &lt;div class="col-container page-container"&gt;
                    &lt;div class="col col-70-md col-60-lg col-center"&gt;
                        &lt;h1 class="actions-header"&gt;Project List&lt;/h1&gt;
                        &lt;div class="actions-item"&gt;
                            &lt;a class="actions-link" href="project.php"&gt;
                                &lt;span class="actions-icon"&gt;
                                    &lt;svg viewbox="0 0 64 64"&gt;&lt;use xlink:href="#project_icon"&gt;&lt;/use&gt;&lt;/svg&gt;
                                &lt;/span&gt;
                                Add Project
                            &lt;/a&gt;
                        &lt;/div&gt;

                        &lt;div class="class-container"&gt;
                            &lt;ul class="items"&gt;
                                &lt;!-- reading project data --&gt;
                                &lt;?php
                                foreach (get_project_list() as $item) {
                                    // updating projects
                                    echo "&lt;li&gt;&lt;a href='project.php?id=" . $item['project_id'] . "'&gt;" . $item['title'] . "&lt;/a&gt;&lt;/li&gt;";
                                }
                                ?&gt;
                            &lt;/ul&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                            
            &lt;/div&gt;
                            
            &lt;?php include("Includes/footer.php"); ?&gt;
        </code>
    </pre>
    <p>Example of project.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            require 'Includes/functions.php';

            $pageTitle = "Project | Time Tracker";
            $page = "projects";
            $title = $category = '';

            // updating projects
            if (isset($_GET['id'])) {
                //$project_id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
                //list($project_id, $title, $category) = get_project($project_id)
                list($project_id, $title, $category) = get_project(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));
            }

            // accepting user data
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // grab project_id from the form
                $project_id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
                $title = trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING));
                $category = trim(filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING));
            
                if (empty($title) || empty($category)) {
                    $error_message = 'Please fill in the required fields: Title, Category';
                } else {
                    // adding project
                    if (add_project($title, $category, $project_id)) {
                        header('location: project_list.php');
                        exit;
                    } else {
                        $error_message = 'Could not add project!';
                    }
                }
            }

            include 'Includes/header.php';
            ?&gt;

            &lt;div class="section page"&gt;
                &lt;div class="col-container page-container"&gt;
                    &lt;div class="col col-70-md col-60-lg col-center"&gt;
                        &lt;!-- updating projects --&gt;
                        &lt;h1 class="actions-header"&gt;&lt;?php
                        if (!empty($project_id)) {
                            echo 'Update';
                        } else {
                            echo 'Add';
                        }
                        ?&gt; Project&lt;/h1&gt;
                        &lt;?php
                        if (isset($error_message)) {
                            echo "&lt;p class='message'&gt;$error_message&lt;/p&gt;";
                        }
                        ?&gt;
                        &lt;form class="form-container form-add" method="post" action="project.php"&gt;
                            &lt;table&gt;
                                &lt;tr&gt;
                                    &lt;th&gt;&lt;label for="title"&gt;Title&lt;span class="required"&gt;*&lt;/span&gt;&lt;/label&gt;&lt;/th&gt;
                                    &lt;td&gt;&lt;input type="text" id="title" name="title" value="&lt;?php echo $title; ?&gt;" /&gt;&lt;/td&gt;
                                &lt;/tr&gt;
                                &lt;tr&gt;
                                    &lt;th&gt;&lt;label for="category"&gt;Category&lt;span class="required"&gt;*&lt;/span&gt;&lt;/label&gt;&lt;/th&gt;
                                    &lt;td&gt;&lt;select id="category" name="category"&gt;
                                            &lt;option value=""&gt;Select One&lt;/option&gt;
                                            &lt;option value="Billable"&lt;?php
                                                if ($category == 'Billable') {
                                                    echo ' selected';
                                                }
                                                ?&gt;Billable&lt;/option&gt;
                                            &lt;option value="Charity"&lt;?php
                                                if ($category == 'Charity') {
                                                    echo ' selected';
                                                }
                                                ?&gt;Charity&lt;/option&gt;
                                            &lt;option value="Personal"&lt;?php
                                                if ($category == 'Personal') {
                                                    echo ' selected';
                                                }
                                                ?&gt;Personal&lt;/option&gt;
                                    &lt;/select&gt;&lt;/td&gt;
                                &lt;/tr&gt;
                            &lt;/table&gt;
                            &lt;?php
                            if (!empty($project_id)) {
                                echo '&lt;input type="hidden" name="id" value="' . $project_id . '" /&gt;';
                            }
                            ?&gt;
                            &lt;input class="button button--primary button--topic-php" type="submit" value="Submit" /&gt;
                        &lt;/form&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
                        
            &lt;?php include "Includes/footer.php"; ?&gt;
        </code>
    </pre>
    <p>Example of functions.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            // application functions

            // reading project data
            function get_project_list() {
                include("connection.php");
            
                try {
                    return $db->query('SELECT project_id, title, category FROM projects');
                } catch (Exception $e) {
                    echo "ERROR!: " . $e->getMessage() . "&lt;br&gt;";
                    return array();
                }
            }

            // reading task data
            // summarizing project time => $filter = null
            function get_task_list($filter = null) {
                include("connection.php");
            
                $sql = 'SELECT tasks.*, projects.title as project
                        FROM tasks JOIN projects ON tasks.project_id = projects.project_id';

                // filtering by project
                $where = '';
                if (is_array($filter)) {
                    switch ($filter[0]) {
                        case 'project' : $where = ' WHERE projects.project_id = ?';
                        break;
                        // filtering by category
                        case 'category' : $where = ' WHERE category = ?';
                        break;
                        // filtering by date
                        case 'date' : $where = ' WHERE date >= ? AND date <= ?';
                        break;
                    }
                }
            
                $orderBy = ' ORDER BY date DESC';
            
                if ($filter) {
                    $orderBy = ' ORDER BY projects.title ASC, date DESC';
                }
            
                try {
                    $results = $db->prepare($sql . $where . $orderBy);
                    if (is_array($filter)) {
                        // bindValue() - the third parameter is optional, so removed 3th parameter
                        $results->bindValue(1, $filter[1]);
                    
                        // filtering by date
                        if ($filter[0] == 'date') {
                            $results->bindValue(2, $filter[2], PDO::PARAM_STR);
                        }
                    }
                    $results->execute();
                } catch (Exception $e) {
                    echo "ERROR!: " . $e->getMessage() . "&lt;br&gt;";
                    return array();
                }
                return $results->fetchAll(PDO::FETCH_ASSOC);
            }

            // adding project
            function add_project($title, $category, $project_id = null) {
                include 'connection.php';
            
                if ($project_id) {
                    $sql = 'UPDATE projects SET title = ?, category = ? WHERE project_id = ?';
                }else {
                    $sql = 'INSERT INTO projects (title, category) VALUES (?, ?)';
                }
            
                try {
                    $results = $db->prepare($sql);
                    $results->bindValue(1, $title, PDO::PARAM_STR);
                    $results->bindValue(2, $category, PDO::PARAM_STR);
                    if ($project_id) {
                        $results->bindValue(3, $project_id, PDO::PARAM_INT); 
                    }
                    $results->execute();
                } catch (Exception $e){
                    echo "Error!: " . $e->getMessage() . "&lt;br&gt;";
                    return false;
                }
                return true;
            }

            // naming reports
            function get_project($project_id) {
                include 'connection.php';
            
                $sql = 'SELECT * FROM projects WHERE project_id = ?';
            
                try {
                    $results = $db->prepare($sql);
                    $results->bindValue(1, $project_id, PDO::PARAM_INT);
                    $results->execute();
                } catch (Exception $e){
                    echo "Error!: " . $e->getMessage() . "&lt;br&gt;";
                    return false;
                }
                return $results->fetch();
            }

            // adding task
            function add_task($project_id, $title, $date, $time) {
                include 'connection.php';
            
                $sql = 'INSERT INTO tasks (project_id, title, date, time) VALUES (?, ?, ?, ?)';
            
                try {
                    $results = $db->prepare($sql);
                    $results->bindValue(1, $project_id, PDO::PARAM_INT);
                    $results->bindValue(2, $title, PDO::PARAM_STR);
                    $results->bindValue(3, $date, PDO::PARAM_STR);
                    $results->bindValue(4, $time, PDO::PARAM_INT);
                    $results->execute();
                } catch (Exception $e){
                    echo "Error!: " . $e->getMessage() . "&lt;br&gt;";
                    return false;
                }
                return true;
            }

            ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Updating Tasks</h2>
    <p>အခု ကျွန်တော်တို့ရဲ့ Projects page မှာ update details ကို ဖော်ပြဖို့ allow လုပ်ထားပါပြီ။ အဲ့ဒီလို same changes ကိုလည်း ကျွန်တော်တို့ Tasks page မှာ ထပ်ပြီးလုပ်ပါမယ်။ ဒီလိုလုပ်ဖို့အတွက် functions.php ထဲက add_task() function မှာ update statement ကို ထပ်ပြီးထည့်ပါမယ်။ အဲ့ဒီ function ထဲမှာ $task_id = null ကို parameter အနေနဲ့ ထပ်ထည့်ပြီးတော့ အောက်မှာ condition ထည့်ပါမယ်။ တစ်ကယ်လို့ $task_id ရှိတယ်ဆိုရင် update statement ကို အလုပ်လုပ်သွားမှာဖြစ်ပြီး $task_id မရှိရင်တော့ insert statement ကိုပဲ အလုပ်လုပ်သွားမှာဖြစ်ပါတယ်။ ထို့နောက် update statement ဟာ နောက်ထပ် placeholder တစ်ခုရှိသေးတာကြောင့် အောက်မှာ bindValue() တစ်ခုထပ်ထည့်ပေးရပါတယ်။ ပြီးရင်တော့ get_task() function ကိုတည်ဆောက်ပြီး လိုအပ်တာတွေထပ်ထည့်မှာဖြစ်ပါတယ်။ </p>
    <p>Example of functions.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            // application functions

            // reading project data
            function get_project_list() {
                include("connection.php");
            
                try {
                    return $db->query('SELECT project_id, title, category FROM projects');
                } catch (Exception $e) {
                    echo "ERROR!: " . $e->getMessage() . "&lt;br&gt;";
                    return array();
                }
            }

            // reading task data
            // summarizing project time => $filter = null
            function get_task_list($filter = null) {
                include("connection.php");
            
                $sql = 'SELECT tasks.*, projects.title as project
                        FROM tasks JOIN projects ON tasks.project_id = projects.project_id';

                // filtering by project
                $where = '';
                if (is_array($filter)) {
                    switch ($filter[0]) {
                        case 'project' : $where = ' WHERE projects.project_id = ?';
                        break;
                        // filtering by category
                        case 'category' : $where = ' WHERE category = ?';
                        break;
                        // filtering by date
                        case 'date' : $where = ' WHERE date >= ? AND date <= ?';
                        break;
                    }
                }
            
                $orderBy = ' ORDER BY date DESC';
            
                if ($filter) {
                    $orderBy = ' ORDER BY projects.title ASC, date DESC';
                }
            
                try {
                    $results = $db->prepare($sql . $where . $orderBy);
                    if (is_array($filter)) {
                        // bindValue() - the third parameter is optional, so removed 3th parameter
                        $results->bindValue(1, $filter[1]);
                    
                        // filtering by date
                        if ($filter[0] == 'date') {
                            $results->bindValue(2, $filter[2], PDO::PARAM_STR);
                        }
                    }
                    $results->execute();
                } catch (Exception $e) {
                    echo "ERROR!: " . $e->getMessage() . "&lt;br&gt;";
                    return array();
                }
                return $results->fetchAll(PDO::FETCH_ASSOC);
            }

            // adding project
            function add_project($title, $category, $project_id = null) {
                include 'connection.php';
            
                if ($project_id) {
                    $sql = 'UPDATE projects SET title = ?, category = ? WHERE project_id = ?';
                }else {
                    $sql = 'INSERT INTO projects (title, category) VALUES (?, ?)';
                }
            
                try {
                    $results = $db->prepare($sql);
                    $results->bindValue(1, $title, PDO::PARAM_STR);
                    $results->bindValue(2, $category, PDO::PARAM_STR);
                    if ($project_id) {
                        $results->bindValue(3, $project_id, PDO::PARAM_INT); 
                    }
                    $results->execute();
                } catch (Exception $e){
                    echo "Error!: " . $e->getMessage() . "&lt;br&gt;";
                    return false;
                }
                return true;
            }

            // naming reports
            function get_project($project_id) {
                include 'connection.php';
            
                $sql = 'SELECT * FROM projects WHERE project_id = ?';
            
                try {
                    $results = $db->prepare($sql);
                    $results->bindValue(1, $project_id, PDO::PARAM_INT);
                    $results->execute();
                } catch (Exception $e){
                    echo "Error!: " . $e->getMessage() . "&lt;br&gt;";
                    return false;
                }
                return $results->fetch();
            }

            // updating tasks
            function get_task($task_id) {
                include 'connection.php';
            
                $sql = 'SELECT task_id, title, date, time, project_id FROM tasks WHERE task_id = ?';
            
                try {
                    $results = $db->prepare($sql);
                    $results->bindValue(1, $task_id, PDO::PARAM_INT);
                    $results->execute();
                } catch (Exception $e){
                    echo "Error!: " . $e->getMessage() . "&lt;br&gt;";
                    return false;
                }
                return $results->fetch();
            }

            // adding task
            // updating tasks
            function add_task($project_id, $title, $date, $time, $task_id = null) {
                include 'connection.php';
            
                if ($task_id) {
                    $sql = 'UPDATE tasks SET project_id = ?, title = ?, date = ?, time = ? WHERE task_id = ?';
                } else {
                    $sql = 'INSERT INTO tasks (project_id, title, date, time) VALUES (?, ?, ?, ?)';
                }
                try {
                    $results = $db->prepare($sql);
                    $results->bindValue(1, $project_id, PDO::PARAM_INT);
                    $results->bindValue(2, $title, PDO::PARAM_STR);
                    $results->bindValue(3, $date, PDO::PARAM_STR);
                    $results->bindValue(4, $time, PDO::PARAM_INT);
                
                    // updating tasks
                    if ($task_id) {
                        $results->bindValue(5, $task_id, PDO::PARAM_INT);
                    }
                    $results->execute();
                } catch (Exception $e){
                    echo "Error!: " . $e->getMessage() . "&lt;br&gt;";
                    return false;
                }
                return true;
            }

            ?&gt;
        </code>
    </pre>
    <p>Example of task_list.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;div class="form-container"&gt;
                &lt;ul class="items"&gt;
                    &lt;!-- reading task data --&gt;
                    &lt;?php
                    foreach (get_task_list() as $item) {
                        echo "&lt;li&gt;&lt;a href='task.php?id=" . $item['task_id'] . "'&gt;" . $item['title'] . "&lt;/a&gt;&lt;/li&gt;";
                    }
                    ?&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        </code>
    </pre>
    <p>Example of task.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            require 'Includes/functions.php';

            $pageTitle = "Project | Time Tracker";
            $page = "projects";

            // remembering form data
            $project_id = $title = $date = $time = '';

            // updating tasks
            if (isset($_GET['id'])) {
                list($task_id, $title, $date, $time, $project_id) = get_task(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));
            }

            // filtering user input
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $task_id = filter_input(INPUT_POST, 'task_id', FILTER_SANITIZE_NUMBER_INT);
                $project_id = trim(filter_input(INPUT_POST, 'project_id', FILTER_SANITIZE_NUMBER_INT));
                $title = trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING));
                $date = trim(filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING));
                $time = trim(filter_input(INPUT_POST, 'time', FILTER_SANITIZE_NUMBER_INT));
            
                // validating date
                $dateMatch = explode('/', $date);
            
                if (empty($project_id) || empty($title) || empty($date) || empty($time)) {
                    $error_message = 'Please fill in the required fields: Project, Title, Date, Time';
                    // validating date
                } elseif (count($dateMatch) != 3
                          || strlen($dateMatch[0]) != 2
                          || strlen($dateMatch[1]) != 2
                          || strlen($dateMatch[2]) != 4
                          || !checkdate($dateMatch[0], $dateMatch[1], $dateMatch[2])) {
                    $error_message = "Invalid Date";
                } else {
                    // adding task
                    if (add_task($project_id, $title, $date, $time, $task_id)) {
                        header('location: task_list.php');
                        exit;
                    } else {
                        $error_message = 'Could not add Task!';
                    }
                }
            }

            include 'Includes/header.php';
            ?&gt;

            &lt;div class="section page"&gt;
                &lt;div class="col-container page-container"&gt;
                    &lt;div class="col col-70-md col-60-lg col-center"&gt;
                        &lt;h1 class="actions-header"&gt;&lt;?php
                        if (!empty($task_id)) {
                            echo 'Update';
                        } else {
                            echo 'Add';
                        }
                        ?&gt; Task&lt;/h1&gt;
                        &lt;?php
                        if (isset($error_message)) {
                            echo "&lt;p class='message'&gt;$error_message&lt;/p&gt;";
                        }
                        ?&gt;
                        &lt;form class="form-container form-add" method="post" action="task.php"&gt;
                            &lt;table&gt;
                                &lt;tr&gt;
                                    &lt;th&gt;&lt;label for="title"&gt;Project&lt;span class="required"&gt;*&lt;/span&gt;&lt;/label&gt;&lt;/th&gt;
                                    &lt;td&gt;
                                        &lt;select name="project_id" id="project_id"&gt;
                                            &lt;option value=""&gt;Select One&lt;/option&gt;
                                            &lt;!-- adding task --&gt;
                                            &lt;?php
                                            foreach (get_project_list() as $item) {
                                                echo "&lt;option value='" . $item['project_id'] . "'";
                                                // remembering form data
                                                if ($project_id == $item['project_id']) {
                                                    echo ' selected';
                                                }
                                                echo "&gt;" . $item['title'] . "&lt;/option&gt;";
                                            }
                                            ?&gt;
                                        &lt;/select&gt;
                                    &lt;/td&gt;
                                &lt;/tr&gt;
                                &lt;tr&gt;
                                    &lt;th&gt;&lt;label for="title"&gt;Title&lt;span class="required"&gt;*&lt;/span&gt;&lt;/label&gt;&lt;/th&gt;
                                    &lt;td&gt;&lt;input type="text" id="title" name="title" value="&lt;?php echo htmlspecialchars($title); ?&gt;"&gt;&lt;/td&gt;
                                &lt;/tr&gt;
                                &lt;tr&gt;
                                    &lt;th&gt;&lt;label for="date"&gt;Date&lt;span class="required"&gt;*&lt;/span&gt;&lt;/label&gt;&lt;/th&gt;
                                    &lt;td&gt;&lt;input type="text" id="date" name="date" value="&lt;?php echo htmlspecialchars($date); ?&gt;" placeholder="mm/dd/yyyy"&gt;&lt;/td&gt;
                                &lt;/tr&gt;
                                &lt;tr&gt;
                                    &lt;th&gt;&lt;label for="time"&gt;Time&lt;span class="required"&gt;*&lt;/span&gt;&lt;/label&gt;&lt;/th&gt;
                                    &lt;td&gt;&lt;input type="text" id="time" name="time" value="&lt;?php echo htmlspecialchars($time); ?&gt;"&gt; minutes&lt;/td&gt;
                                &lt;/tr&gt;
                            &lt;/table&gt;
                            &lt;?php
                            if (!empty($task_id)) {
                                echo '&lt;input type="hidden" name="id" value="' . $task_id . '" /&gt;';
                            }
                            ?&gt;
                            &lt;input class="button button--primary button--topic-php" type="submit" value="Submit" /&gt;
                        &lt;/form&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
                        
            &lt;?php include "Includes/footer.php"; ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Deleting Tasks</h2>
    <p>Incorrect or spam data တွေဟာ important data တွေကို organize လုပ်ဖို့နဲ့ report လုပ်ဖို့အတွက် ကျွန်တော်တို့ရဲ့ ability ကို အနှောက်အယှက်ပေးနိုင်ပါတယ်။ ဒါကြောင့် တစ်ခါတစ်ရံမှာ data တွေကို update လုပ်ရုံနဲ့ မလုံလောက်ပါဘူး။ တစ်ခါတစ်ရံ ကျွန်တော်တို့အနေနဲ့ အဲ့ဒီ data entries တွေကို remove လုပ်ပေးရပါတယ်။ Deleting လုပ်ခြင်းဟာ powerful ဖြစ်သလို dangerous လည်းဖြစ်ပါတယ်။ တစ်ခါတစ်ရံ data တွေကို မှားပြီး insert လုပ်မိတဲ့အခါ အဲ့ဒီ data တွေကို ပြန်ဖျက်ဖို့အတွက် delete statement တွေကို အသုံးပြုရခြင်းဖြစ်ပါတယ်။ အခု ကျွန်တော်တို့ project မှာဆိုရင် tasks နဲ့ projects တွေကို delete လုပ်ပေးရမှာဖြစ်ပါတယ်။ ဒီလိုလုပ်ဖို့အတွက် functions.php ထဲမှာ DELETE ဆိုတဲ့ sql statement နဲ့ တည်ဆောက်ပေးရမှာဖြစ်ပါတယ်။ </p>
    <p>Example of functions.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            // application functions

            // reading project data
            function get_project_list() {
                include("connection.php");
            
                try {
                    return $db->query('SELECT project_id, title, category FROM projects');
                } catch (Exception $e) {
                    echo "ERROR!: " . $e->getMessage() . "&lt;br&gt;";
                    return array();
                }
            }

            // reading task data
            // summarizing project time => $filter = null
            function get_task_list($filter = null) {
                include("connection.php");
            
                $sql = 'SELECT tasks.*, projects.title as project
                        FROM tasks JOIN projects ON tasks.project_id = projects.project_id';

                // filtering by project
                $where = '';
                if (is_array($filter)) {
                    switch ($filter[0]) {
                        case 'project' : $where = ' WHERE projects.project_id = ?';
                        break;
                        // filtering by category
                        case 'category' : $where = ' WHERE category = ?';
                        break;
                        // filtering by date
                        case 'date' : $where = ' WHERE date >= ? AND date <= ?';
                        break;
                    }
                }
            
                $orderBy = ' ORDER BY date DESC';
            
                if ($filter) {
                    $orderBy = ' ORDER BY projects.title ASC, date DESC';
                }
            
                try {
                    $results = $db->prepare($sql . $where . $orderBy);
                    if (is_array($filter)) {
                        // bindValue() - the third parameter is optional, so removed 3th parameter
                        $results->bindValue(1, $filter[1]);
                    
                        // filtering by date
                        if ($filter[0] == 'date') {
                            $results->bindValue(2, $filter[2], PDO::PARAM_STR);
                        }
                    }
                    $results->execute();
                } catch (Exception $e) {
                    echo "ERROR!: " . $e->getMessage() . "&lt;br&gt;";
                    return array();
                }
                return $results->fetchAll(PDO::FETCH_ASSOC);
            }

            // adding project
            function add_project($title, $category, $project_id = null) {
                include 'connection.php';
            
                if ($project_id) {
                    $sql = 'UPDATE projects SET title = ?, category = ? WHERE project_id = ?';
                }else {
                    $sql = 'INSERT INTO projects (title, category) VALUES (?, ?)';
                }
            
                try {
                    $results = $db->prepare($sql);
                    $results->bindValue(1, $title, PDO::PARAM_STR);
                    $results->bindValue(2, $category, PDO::PARAM_STR);
                    if ($project_id) {
                        $results->bindValue(3, $project_id, PDO::PARAM_INT); 
                    }
                    $results->execute();
                } catch (Exception $e){
                    echo "Error!: " . $e->getMessage() . "&lt;br&gt;";
                    return false;
                }
                return true;
            }

            // naming reports
            function get_project($project_id) {
                include 'connection.php';
            
                $sql = 'SELECT * FROM projects WHERE project_id = ?';
            
                try {
                    $results = $db->prepare($sql);
                    $results->bindValue(1, $project_id, PDO::PARAM_INT);
                    $results->execute();
                } catch (Exception $e){
                    echo "Error!: " . $e->getMessage() . "&lt;br&gt;";
                    return false;
                }
                return $results->fetch();
            }

            // updating tasks
            function get_task($task_id) {
                include 'connection.php';
            
                $sql = 'SELECT task_id, title, date, time, project_id FROM tasks WHERE task_id = ?';
            
                try {
                    $results = $db->prepare($sql);
                    $results->bindValue(1, $task_id, PDO::PARAM_INT);
                    $results->execute();
                } catch (Exception $e){
                    echo "Error!: " . $e->getMessage() . "&lt;br&gt;";
                    return false;
                }
                return $results->fetch();
            }

            // deleting tasks
            function delete_task($task_id) {
                include 'connection.php';
            
                $sql = 'DELETE FROM tasks WHERE task_id = ?';
            
                try {
                    $results = $db->prepare($sql);
                    $results->bindValue(1, $task_id, PDO::PARAM_INT);
                    $results->execute();
                } catch (Exception $e){
                    echo "Error!: " . $e->getMessage() . "&lt;br&gt;";
                    return false;
                }
                return true;
            }

            // adding task
            // updating tasks
            function add_task($project_id, $title, $date, $time, $task_id = null) {
                include 'connection.php';
            
                if ($task_id) {
                    $sql = 'UPDATE tasks SET project_id = ?, title = ?, date = ?, time = ? WHERE task_id = ?';
                } else {
                    $sql = 'INSERT INTO tasks (project_id, title, date, time) VALUES (?, ?, ?, ?)';
                }
                try {
                    $results = $db->prepare($sql);
                    $results->bindValue(1, $project_id, PDO::PARAM_INT);
                    $results->bindValue(2, $title, PDO::PARAM_STR);
                    $results->bindValue(3, $date, PDO::PARAM_STR);
                    $results->bindValue(4, $time, PDO::PARAM_INT);
                
                    // updating tasks
                    if ($task_id) {
                        $results->bindValue(5, $task_id, PDO::PARAM_INT);
                    }
                    $results->execute();
                } catch (Exception $e){
                    echo "Error!: " . $e->getMessage() . "&lt;br&gt;";
                    return false;
                }
                return true;
            }

            ?&gt;
        </code>
    </pre>
    <p>Example of task_list.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            require 'Includes/functions.php';

            $page = "tasks";
            $pageTitle = "Task List | Time Tracker";

            if (isset($_POST['delete'])) {
                if (delete_task(filter_input(INPUT_POST, 'delete', FILTER_SANITIZE_NUMBER_INT))) {
                    header('location: task_list.php?msg=Task+Deleted');
                    exit;
                } else {
                    header('location: task_list.php?msg=Unable+to+Delete+Task');
                    exit;
                }
            }

            if (isset($_GET['msg'])) {
                $error_message = trim(filter_input(INPUT_GET, 'msg', FILTER_SANITIZE_STRING));
            }

            include 'Includes/header.php';
            ?&gt;
            &lt;div class="section catalog random"&gt;

                &lt;div class="col-container page-container"&gt;
                    &lt;div class="col col-70-md col-60-lg col-center"&gt;

                        &lt;h1 class="actions-header"&gt;Task List&lt;/h1&gt;
                        &lt;div class="actions-item"&gt;
                            &lt;a href="task.php" class="actions-link"&gt;
                                &lt;span class="actions-icon"&gt;
                                    &lt;svg viewbox="0 0 64 64"&gt;&lt;use xlink:href="#task_icon"&gt;&lt;/use&gt;&lt;/svg&gt;
                                &lt;/span&gt;
                            Add Task&lt;/a&gt;
                        &lt;/div&gt;

                        &lt;?php
                        if (isset($error_message)) {
                            echo "&lt;p class='message'&gt;$error_message&lt;/p&gt;";
                        }
                        ?&gt;

                        &lt;div class="form-container"&gt;
                            &lt;ul class="items"&gt;
                                &lt;!-- reading task data --&gt;
                                &lt;?php
                                foreach (get_task_list() as $item) {
                                    echo "&lt;li&gt;&lt;a href='task.php?id=" . $item['task_id'] . "'&gt;" . $item['title'] . "&lt;/a&gt;";
                                    // deleting tasks
                                    echo "&lt;form method='post' action='task_list.php'&gt;\n";
                                    echo "&lt;input type='hidden' value='" . $item['task_id'] . "' name='delete' /&gt;\n";
                                    echo "&lt;input type='submit' class='button--delete' value='Delete' /&gt;\n";
                                    echo "&lt;/form&gt;";
                                    echo "&lt;/li&gt;";
                                }
                                ?&gt;
                            &lt;/ul&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
                            
            &lt;?php include 'Includes/footer.php'; ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Preserving Data Integrity</h2>
    <p>Things တွေကို delete လုပ်တာဟာ လွယ်ကူတယ်လို့ထင်ရပေမယ့် အဲ့ဒီ delete လုပ်လိုက်တာဟာလည်း အမှားတစ်ခုဖြစ်နိုင်ပါတယ်။ အခု ကျွန်တော်တို့ရဲ့ Tasks page မှာတော့ ပြသနာကြီးကြီးမားမားရယ်လို့ မတွေ့ရပေမယ့် Projects ထဲက data တွေကို delete လုပ်မယ်ဆိုရင် အနည်းငယ်ရှုပ်ထွေးပါလိမ့်မယ်။ ကျွန်တော်တို့ရဲ့ tasks တွေက projects တွေအပေါ်မှာ မူတည်နေတာကြောင့် တကယ်လို့ tasks ထဲမှာ assign လုပ်ထားပြီးသားဖြစ်တဲ့ projects တွေကိုသာ ဖျက်ခဲ့မယ်ဆိုရင် projects မှာ assign လုပ်ထားတဲ့ tasks တွေကိုခြေရာခံဖို့ ခက်ခဲသွားပါလိမ့်မယ်။ ဘာကြောင့်လဲဆိုရင် tasks တွေဟာ assign လုပ်ထားတဲ့ project မရှိတော့တာကြောင့် ဘယ်နေရာမှ display လုပ်လို့မရတော့ဘဲ useless ဖြစ်သွားမှာဖြစ်ပါတယ်။ အဲ့ဒါကို ဖြေရှင်းဖို့အတွက် အပိုင်းနှစ်ပိုင်းရှိပါတယ်။ ပထမတစ်ခုက user ကို tasks မှာရော projects မှာရော အမှန်တကယ် delete လုပ်မှာလားဆိုတာကို ask လုပ်မယ်။ ဒုတိယတစ်ခုကတော့ ဘယ် tasks တွေကိုမှာ assign လုပ်မထားတဲ့ projects တွေကိုပဲ delete လုပ်ဖို့ ခွင့်ပြုပေးပါမယ်။ ဒါကို data integrity လို့ခေါ်ပါတယ်။ အောက်က example ကို ဆက်ကြည့်ရအောင်။ </p>
    <p>Example of task_list.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            foreach (get_task_list() as $item) {
                echo "&lt;li&gt;&lt;a href='task.php?id=" . $item['task_id'] . "'&gt;" . $item['title'] . "&lt;/a&gt;";
                // deleting tasks
                // preserving data integrity --- onsubmit=\"return confirm('Are you sure you want to delete this task?'); \"
                echo "&lt;form method='post' action='task_list.php' onsubmit=\"return confirm('Are you sure you want to delete this task?'); \"&gt;\n";
                echo "&lt;input type='hidden' value='" . $item['task_id'] . "' name='delete' /&gt;\n";
                echo "&lt;input type='submit' class='button--delete' value='Delete' /&gt;\n";
                echo "&lt;/form&gt;";
                echo "&lt;/li&gt;";
            }
            ?&gt;
        </code>
    </pre>
    <p>Example of project_list.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            require 'Includes/functions.php';

            $page = "projects";
            $pageTitle = "Project List | Time Trucker";

            // preserving data integrity
            if (isset($_POST['delete'])) {
                if (delete_project(filter_input(INPUT_POST, 'delete', FILTER_SANITIZE_NUMBER_INT))) {
                    header('location: project_list.php?msg=Project+Deleted');
                    exit;
                } else {
                    header('location: project_list.php?msg=Unable+to+Delete+Project');
                    exit;
                }
            }

            if (isset($_GET['msg'])) {
                $error_message = trim(filter_input(INPUT_GET, 'msg', FILTER_SANITIZE_STRING));
            }

            include("Includes/header.php");

            ?&gt;

            &lt;div class="section catalog random"&gt;

                &lt;div class="col-container page-container"&gt;
                    &lt;div class="col col-70-md col-60-lg col-center"&gt;
                        &lt;h1 class="actions-header"&gt;Project List&lt;/h1&gt;
                        &lt;div class="actions-item"&gt;
                            &lt;a class="actions-link" href="project.php"&gt;
                                &lt;span class="actions-icon"&gt;
                                    &lt;svg viewbox="0 0 64 64"&gt;&lt;use xlink:href="#project_icon"&gt;&lt;/use&gt;&lt;/svg&gt;
                                &lt;/span&gt;
                                Add Project
                            &lt;/a&gt;
                        &lt;/div&gt;

                        &lt;?php
                        if (isset($error_message)) {
                            echo "&lt;p class='message'&gt;$error_message&lt;/p&gt;";
                        }
                        ?&gt;

                        &lt;div class="class-container"&gt;
                            &lt;ul class="items"&gt;
                                &lt;!-- reading project data --&gt;
                                &lt;?php
                                foreach (get_project_list() as $item) {
                                    // updating projects
                                    echo "&lt;li&gt;&lt;a href='project.php?id=" . $item['project_id'] . "'&gt;" . $item['title'] . "&lt;/a&gt;";
                                    // preserving data integrity --- onsubmit=\"return confirm('Are you sure you want to delete this task?'); \"
                                    echo "&lt;form method='post' action='project_list.php' onsubmit=\"return confirm('Are you sure you want to delete this project?'); \"&gt;\n";
                                    echo "&lt;input type='hidden' value='" . $item['project_id'] . "' name='delete' /&gt;\n";
                                    echo "&lt;input type='submit' class='button--delete' value='Delete' /&gt;\n";
                                    echo "&lt;/form&gt;";
                                    echo "&lt;/li&gt;";
                                }
                                ?&gt;
                            &lt;/ul&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                            
            &lt;/div&gt;
                            
            &lt;?php include("Includes/footer.php"); ?&gt;
        </code>
    </pre>
    <p>Example of functions.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            // application functions

            // reading project data
            function get_project_list() {
                include("connection.php");
            
                try {
                    return $db->query('SELECT project_id, title, category FROM projects');
                } catch (Exception $e) {
                    echo "ERROR!: " . $e->getMessage() . "&lt;br&gt;";
                    return array();
                }
            }

            // reading task data
            // summarizing project time => $filter = null
            function get_task_list($filter = null) {
                include("connection.php");
            
                $sql = 'SELECT tasks.*, projects.title as project
                        FROM tasks JOIN projects ON tasks.project_id = projects.project_id';

                // filtering by project
                $where = '';
                if (is_array($filter)) {
                    switch ($filter[0]) {
                        case 'project' : $where = ' WHERE projects.project_id = ?';
                        break;
                        // filtering by category
                        case 'category' : $where = ' WHERE category = ?';
                        break;
                        // filtering by date
                        case 'date' : $where = ' WHERE date >= ? AND date <= ?';
                        break;
                    }
                }
            
                $orderBy = ' ORDER BY date DESC';
            
                if ($filter) {
                    $orderBy = ' ORDER BY projects.title ASC, date DESC';
                }
            
                try {
                    $results = $db->prepare($sql . $where . $orderBy);
                    if (is_array($filter)) {
                        // bindValue() - the third parameter is optional, so removed 3th parameter
                        $results->bindValue(1, $filter[1]);
                    
                        // filtering by date
                        if ($filter[0] == 'date') {
                            $results->bindValue(2, $filter[2], PDO::PARAM_STR);
                        }
                    }
                    $results->execute();
                } catch (Exception $e) {
                    echo "ERROR!: " . $e->getMessage() . "&lt;br&gt;";
                    return array();
                }
                return $results->fetchAll(PDO::FETCH_ASSOC);
            }

            // adding project
            function add_project($title, $category, $project_id = null) {
                include 'connection.php';
            
                if ($project_id) {
                    $sql = 'UPDATE projects SET title = ?, category = ? WHERE project_id = ?';
                }else {
                    $sql = 'INSERT INTO projects (title, category) VALUES (?, ?)';
                }
            
                try {
                    $results = $db->prepare($sql);
                    $results->bindValue(1, $title, PDO::PARAM_STR);
                    $results->bindValue(2, $category, PDO::PARAM_STR);
                    if ($project_id) {
                        $results->bindValue(3, $project_id, PDO::PARAM_INT); 
                    }
                    $results->execute();
                } catch (Exception $e){
                    echo "Error!: " . $e->getMessage() . "&lt;br&gt;";
                    return false;
                }
                return true;
            }

            // naming reports
            function get_project($project_id) {
                include 'connection.php';
            
                $sql = 'SELECT * FROM projects WHERE project_id = ?';
            
                try {
                    $results = $db->prepare($sql);
                    $results->bindValue(1, $project_id, PDO::PARAM_INT);
                    $results->execute();
                } catch (Exception $e){
                    echo "Error!: " . $e->getMessage() . "&lt;br&gt;";
                    return false;
                }
                return $results->fetch();
            }

            // updating tasks
            function get_task($task_id) {
                include 'connection.php';
            
                $sql = 'SELECT task_id, title, date, time, project_id FROM tasks WHERE task_id = ?';
            
                try {
                    $results = $db->prepare($sql);
                    $results->bindValue(1, $task_id, PDO::PARAM_INT);
                    $results->execute();
                } catch (Exception $e){
                    echo "Error!: " . $e->getMessage() . "&lt;br&gt;";
                    return false;
                }
                return $results->fetch();
            }

            // deleting tasks
            function delete_task($task_id) {
                include 'connection.php';
            
                $sql = 'DELETE FROM tasks WHERE task_id = ?';
            
                try {
                    $results = $db->prepare($sql);
                    $results->bindValue(1, $task_id, PDO::PARAM_INT);
                    $results->execute();
                } catch (Exception $e){
                    echo "Error!: " . $e->getMessage() . "&lt;br&gt;";
                    return false;
                }
                return true;
            }

            // preserving data integrity
            function delete_project($project_id) {
                include 'connection.php';
            
                $sql = 'DELETE FROM projects WHERE project_id = ? AND project_id NOT IN (SELECT project_id from tasks)';
            
                try {
                    $results = $db->prepare($sql);
                    $results->bindValue(1, $project_id, PDO::PARAM_INT);
                    $results->execute();
                } catch (Exception $e){
                    echo "Error!: " . $e->getMessage() . "&lt;br&gt;";
                    return false;
                }

                if ($results->rowCount() > 0) {
                    return true;
                } else {
                    return false;
                }
            }

            // adding task
            // updating tasks
            function add_task($project_id, $title, $date, $time, $task_id = null) {
                include 'connection.php';
            
                if ($task_id) {
                    $sql = 'UPDATE tasks SET project_id = ?, title = ?, date = ?, time = ? WHERE task_id = ?';
                } else {
                    $sql = 'INSERT INTO tasks (project_id, title, date, time) VALUES (?, ?, ?, ?)';
                }
                try {
                    $results = $db->prepare($sql);
                    $results->bindValue(1, $project_id, PDO::PARAM_INT);
                    $results->bindValue(2, $title, PDO::PARAM_STR);
                    $results->bindValue(3, $date, PDO::PARAM_STR);
                    $results->bindValue(4, $time, PDO::PARAM_INT);
                
                    // updating tasks
                    if ($task_id) {
                        $results->bindValue(5, $task_id, PDO::PARAM_INT);
                    }
                    $results->execute();
                } catch (Exception $e){
                    echo "Error!: " . $e->getMessage() . "&lt;br&gt;";
                    return false;
                }
                return true;
            }

            ?&gt;
        </code>
    </pre>
    <p>
        <a href="index.php" target="_blank" class="output">See Full Example Website:</a>
    </p>
    <hr>





</body>
</html>