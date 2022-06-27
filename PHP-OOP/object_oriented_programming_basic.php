<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Object Oriented Programming</title>
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

    <h2>Introduction to Object-Oriented Programming</h2>
    <p>ဒီသင်ခန်းစာမှာတော့ ကျွန်တော်တို့ဟာ PHP မှာရှိတဲ့ Object-Oriented Programming အကြောင်းကို မိတ်ဆက်ပေးသွားမှာဖြစ်ပါတယ်။ PHP ဟာ procedural language တစ်ခုဖြစ်ပါတယ်။ ကျွန်တော်တို့ code တွေ အများကြီးရေးလာတာနဲ့အမျှ အဲ့ဒီ code တွေကို read လုပ်ရတာခက်လာမယ်။
        ကျွန်တော်တို့ရေးတဲ့ code တွေက ဘာအတွက်ရေးမှန်း မသိတာမျိုးဖြစ်တတ်ပါတယ်။ ဒါကို ကျွန်တော်တို့ code တွေ organize လုပ်ခြင်းက ကူညီနိုင်ပါတယ်။ ကျွန်တော်တို့ဟာ code တွေကို group ဖွဲ့နိုင်ပြီး အဲ့ဒီ group ကို functions တစ်ခုကနေ reference လုပ်ပြီးတော့ ပြန်ခေါ်နိုင်ပါတယ်။
        ကျွန်တော်တို့ရဲ့ functions တွေကို single file တစ်ခုအဖြစ် သူတို့ကို ဘယ်လိုရှာရမလဲဆိုတာသိဖို့အတွက် group လုပ်လို့ရပါတယ်။ နောက်ထပ်အနေနဲ့ ကျွန်တော်တို့ဟာ functions တွေကို functionality ကိုအခြေခံပြီး organize လုပ်နိုင်တဲ့ separate file အဖြစ် group
        ဖွဲ့နိုင်ပါတယ်။ ဥပမာ ကျွန်တော်တို့ဟာ math နဲ့ပတ်သတ်တဲ့ function တွေကို group တစ်ခုနဲ့ထားပြီး ၊ products တွေနဲ့ပတ်သတ်တဲ့ functions အားလုံးကို အခြား file တစ်ခုနဲ့ group လုပ်လို့ရပါတယ်။ Object-oriented programming ဟာ ကျွန်တော်တို့ရဲ့ code တွေကို
        organize လုပ်ဖို့အတွက် powerful ဖြစ်တဲ့နည်းလမ်းကို ပေးပါတယ်။ ကျွန်တော်တို့ရဲ့ PHP မှာ object နဲ့ class ကို အပြန်အလှန်အသုံးပြုတယ်ဆိုပေမယ့် သူတို့ဟာ တူညီတဲ့အရာတွေမဟုတ်ပါဘူး။ Class ဆိုတာ booklet တစ်ခုနဲ့တူပြီး ဘယ်အပိုင်းတွေကိုသုံးမယ်ဆိုတာ ကျွန်တော်တို့ကို
        ပြောပြပြီး အဲ့ဒီအပိုင်းတွေကို အတူတကွထားပေးတာဖြစ်ပါတယ်။ Object ကတော့ finished piece ကိုဆိုလိုတာပါ။ Terminology နဲ့ concepts တွေရဲ့ ပိုပြီး detail ကျတဲ့ explanation ကိုလေ့လာမယ်ဆိုရင်တော့ object-oriented programming ရဲ့ power ကို နားလည်ထားဖို့လိုပါတယ်။
        </p>
    <hr>


    <h2>What is Object-Oriented Programming?</h2>
    <p>PHP programmer တိုင်းအတွက် Object-oriented programming ဟာ ခက်ခဲနက်နဲတဲ့ concept တစ်ခုဖြစ်ပါတယ်။ ဘာဖြစ်လို့လဲဆိုရင် သူဟာ new syntax တွေကို introduce လုပ်ပေးထားပြီးတော့ အမြင်အားဖြင့် ရှုပ်ထွေးတဲ့ terminology တစ်ခုဖြစ်ပါတယ်။ Object-oriented programming ဟာ simple procedural (သို့) inline code တွေထက် ပိုပြီးတော့ ရှုပ်ထွေးတယ်လို့ ထင်ရပါတယ်။ Object-oriented programming ဟာ problem ကိုပိုမိုလွယ်ကူစေဖို့အတွက် solution ကို visualize လုပ်ဖို့အတွက် ကူညီပေးပါတယ်။ Object-oriented programming (သို့) OOP ဟာ ကျွန်တော်တို့ developers တွေကို similar tasks တွေကို group လုပ်ပြီး containers တွေထဲကိုထည့်ပေးတဲ့ coding style တစ်ခုဖြစ်ပါတယ်။ PHP မှဆိုရင် containers တွေဆိုတာ classes တွေသုံးထားတာကို ခေါ်တာပါ။ Class တစ်ခုမှာ object တစ်ခုကို define လုပ်ပေးတဲ့ variables တွေနဲ့ functions တွေအားလုံးပါဝင်ပါတယ်။ အဲ့ဒီ functions တွေကို methods လို့ခေါ်ပြီး ၊ variables တွေ properties လို့ခေါ်ပါတယ်။ ဒါကို example တစ်ခုပေးရမယ်ဆိုရင် အိမ်တစ်လုံးကို ကြည့်ရအောင်။ အိမ်ရဲ့အပြင်ပိုင်းကနေကြည့်ရင် အိမ်အမိုး၊ ပြတင်းပေါက်တို့ဟာ အိမ်ရဲ့ design ဖြစ်ပါတယ်။ အဲဒီတော့ walls, roof, windows နဲ့ doors တွေက attributes တွေဖြစ်ပြီး သူတို့မှာ တခါးကို ဖွင့်တာမျိုးနဲ့ မီးဖွင့်တာမျိုးလို actions တွေရှိပါတယ်။ Class တစ်ခုအနေနဲ့ဆိုရင် walls, roof, windows နဲ့ doors တွေဟာ properties တွေပဲဖြစ်ပါတယ်။ မီးဖွင့်တာ ၊ တံခါးဖွင့်တာတို့ကတော့ methods တွေပဲဖြစ်ပါတယ်။ House object တစ်ခုချင်းစီဟာ house class ရဲ့ properties နဲ့ methods တွေကို share လုပ်နိုင်ပါတယ်။ ဒါပေမယ့် house တစ်ခုချင်းစီအတွက် individual values တွေကတော့ ကွဲပြားနိုင်ပါတယ်။ Grouping code တွေကို containers or classes ထဲထည့်ခြင်းဟာ don't repeat yourself (DRY) လို့ခေါ်တဲ့ code တွေထပ်ခါထပ်ခါရေးခြင်းကို ရှောင်ကြဉ်နိုင်ပါတယ်။ DRY principle ရဲ့ အဓိကအားသာချက်ကတော့ ကျွန်တော်တို့ webpage မှာရှိတဲ့ information တွေကိုပြင်ချင်တဲ့အခါ တစ်နေရာတည်းမှာပြင်လိုက်ရုံနဲ့ အကုန်ပြောင်းလဲသွားတာပဲဖြစ်ပါတယ်။ Developers အများစုရဲ့ အိပ်မက်ဆိုးကတော့ code တွေကို maintain လုပ်တဲ့အခါ data ကို ထပ်ခါထပ်ခါ ကြေငြာနေရပြီး error တက်သွားလို့ track လိုက်တဲ့အခါမှာ ကောက်ရိုးပုံထဲ အပ်ရှာရသလို ခက်ခဲပါလိမ့်မယ်။ </p>
    <hr>


    <h2>Why use Object-oriented Programming?</h2>
    <p>ကျွန်တော်တို့ ဒီသင်ခန်းစာမှာ ဘာကြောင့် object-oriented programming ကိုသုံးရလဲဆိုတာကို အချက်သုံးချက်နဲ့ဖော်ပြပေးသွားမှာဖြစ်ပါတယ်။ ပထမဆုံးတစ်ခုကတော့ programming paradigm ဟာ solution တစ်ခုနဲ့လာတဲ့ problem တစ်ခုကို ဖြေရှင်းပေးတဲ့ နည်းလမ်းတစ်ခု (သို့) style တစ်ခုဖြစ်ပါတယ်။ PHP မှာရှိတဲ့ အဓိက paradigms နှစ်ခုကတော့ procedural နဲ့ object-oriented ပဲဖြစ်ပါတယ်။ အခြား functional programming ကဲ့သို့သော paradigm တွေရှိပေမယ့် PHP မှာအသုံးမများတဲ့အတွက် မပြောတော့ပါဘူး။ ဒုတိယတစ်ခုကတော့ programming problem တိုင်းကို programming paradigm နဲ့ solve မလုပ်နိုင်ပါဘူး။ ဒါပေမယ့် ကျွန်တော်တို့ဟာ paradigm အမျိုးမျိုးကို လေ့လာသိရှိထားခြင်းဟာ ကျွန်တော်တို့အနေနဲ့ မှန်ကန်တဲ့ toolတွေရွေးနိုင်မယ်၊ code ကို organize ပိုလုပ်နိုင်ပြီးတော့ cleaner ဖြစ်အောင်ရေးနိုင်မှာဖြစ်ပါတယ်။ တတိယတစ်ခုကတော့ OOP အပါအဝင် ဘယ် paradigm မှာမဆို complicated ဖြစ်တဲ့ bad spaghetti code ( ရှည်လျားပြီး ရှုပ်ထွေးတဲ့ code ) ဟာ ကျွန်တော်တို့ application ရဲ့အားလုံးမှာ weak ဖြစ်စေတာဖြစ်ပါတယ်။ ဒါကြောင့် ကျွန်တော်တို့အနေနဲ့ ဘယ် style of code ကိုပဲသုံးသုံး programming ရဲ့မူဝါဒနှစ်ခုကို မှတ်သားထားရပါမယ်။ ပထမတစ်ခုက DRY principle (သို့) don't repeat yourself ဖြစ်ပြီး ကျွန်တော်တို့အနေနဲ့ တူညီတဲ့ code တွေကို multiple locations မှာထပ်ပြီးရေးမယ်ဆိုရင် သူတို့ကို update လုပ်တဲ့အခါမှာ အရမ်းကိုကြာပါလိမ့်မယ်။ ဒါကြောင့် reuseability ကိုများများသုံးပြီးတော့ repeating code တွေကို နည်းနိုင်သလောက်နည်းပြီး ရေးရပါမယ်။ function တစ်ခု (သို့) class တစ်ခုကို လိုအပ်တဲ့နေရာမှာ ပြန်ခေါ်သုံးတာမျိုးပေါ့။ နောက်တစ်ခု ဒုတိယအရေးပါတဲ့ programming နည်းစနစ်တစ်ခုကတော့ KISS principle ပဲဖြစ်ပါတယ်။ ကျွန်တော်တို့အနေနဲ့ Fancy ဖြစ်တဲ့ OOP features တွေကို သုံးနိုင်တယ်။ ဘာလို့လဲဆိုရင် သူတို့မှာ ကျွန်တော်တို့ problem ကို solve လုပ်ဖို့ရန် တိတိကျကျသတ်မှတ်ထားတဲ့ benefits တွေရှိနေလို့ပါ။ ဒါပေမယ့် Fancy ဖြစ်တဲ့ OOP features တွေကို မသုံးရပါဘူး။ Object-oriented programming ရဲ့ benefits တွေထဲကတစ်ခုကတော့ သူ့ရဲ့ modularity ပဲဖြစ်ပါတယ်။ ကျွန်တော်တို့ project ထဲမှာရှိတဲ့အရာတွေကို module ခွဲပြီးတော့ ပြင်ချင်တဲ့ အပိုင်းလေးကိုပဲ ရွေးပြင်တာကိုပြောတာဖြစ်ပြီး one programmer or group of programmers တွေအနေနဲ့ entire project ကြီးကို နားလည်ဖို့မလိုပဲ code ရဲ့ section တစ်ခုချင်းစီကို တာဝန်ယူလို့ရပါတယ်။ ဒါကြောင့် modularity လုပ်ခြင်းဟာ ကြီးမားတဲ့ applications တွေကို maintain လုပ်ရတာပိုပြီးလွယ်ကူပြီး bug တစ်ခုတွေ့လာတယ်ဆိုရင်တောင် code ကို fix လုပ်ရတာ နည်းသွားမှာဖြစ်ပါတယ်။ ဒီလို benefits တွေကြောင့် Laravel, Symphony နဲ့ Zend လိုမျိုး modern PHP Frameworks တွေမှာ Object-oriented methodology ကိုသုံးပြီး ရေးကြပါတယ်။ </p>
    <hr>


    <h2>Objects and Classes</h2>
    <p>အခုကျွန်တော်တို့လေ့လာသွားမှာကတော့ basic recipe ဖြစ်တဲ့ objects နဲ့ classes တွေပဲဖြစ်ပါတယ်။ Object ဆိုတာကတော့ ဥပမာပြောရရင် ထောက်လေးကြောင်းရယ် မျက်နှာပြင်ရယ်ပါတဲ့ စားပွဲတစ်ခုဟာ object ပါပဲ။ Storage, memory, operating system နဲ့ actions တွေလုပ်ဆောင်နိုင်တဲ့ Laptop တစ်ခုဟာလည်း object ပါပဲ။ ထို့နောက် အဲ့ဒီ object ကို define လုပ်ဖို့အတွက် class ကိုဆက်ပြောပါမယ်။ Actual recipe object တစ်ခု create လုပ်ဖို့အတွက်  အဲ့ဒီ class ဆိုတာကို သုံးပါမယ်။ Classes တွေကို create လုပ်ဖို့နဲ့ organize လုပ်ဖို့အတွက် standards တွေရှိပါတယ်။ File တစ်ခုမှာ class တစ်ခုရှိရမယ်လို့တော့ မဟုတ်ပါဘူး။ File name ဟာ class name နဲ့တူမယ် ပြီးတော့ class files တွေအားလုံးကို class folder ထဲမှာ stored လုပ်ပါမယ်။ ဒီလိုလုပ်ဖို့အတွက် ကျွန်တော်တို့ Editor ကိုသွားပြီး classes ဆိုတဲ့ folder တစ်ခုတည်ဆောက်မယ်။ သူ့ထဲမှာ recipe.php ဆိုတဲ့ file တစ်ခုဆောက်မယ်။ ကျွန်တော်တို့ဟာ class တစ်ခုတည်ဆောက်မယ်ဆိုရင် class ဆိုတဲ့ keyword ကိုသုံးရပြီး သူ့နောက်မှာ class name နဲ့ curly braces တစ်စုံလိုက်ရပါမယ်။ Class တည်ဆောက်ပြီးရင်တော့ object တစ်ခုကို စရေးလို့ရမှာဖြစ်ပြီး သူ့ကို variable တစ်ခုထဲကို ထည့်ထားပါမယ်။ Object ကိုတည်ဆောက်မယ်ဆိုရင်တော့ new ဆိုတဲ့ keyword ရေးပြီး သူ့နောက်မှာ ကျွန်တော်တို့တည်ဆောက်ခဲ့တဲ့ class name ကိုရေးပြီး parenthesis ရဲ့နောက်မှာ semi-colon နဲ့အဆုံးသတ်ပေးရမှာဖြစ်ပါတယ်။ အခုဆိုရင် ကျွန်တော်တို့ object ဟာ တကယ်အသုံးမဝင်သေးပါဘူး။ အောက်က example မှာကြည့်နိုင်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        class MyRecipe {
            //Write some actions
        }

        $recipe1 = new MyRecipe();

        var_dump($recipe1);


        ?&gt;
        </code>
    </pre>
    <p>
        <a href="directory/objects_classes.php" class="output" target="_blank">The result of above code:</a>
    </p>
    <hr>


    <h2>Adding Properties</h2>
    <p>ကျွန်တော်တို့ဟာ class တစ်ခုထဲကို data ထည့်ဖို့ဆိုရင် properties (သို့) class specific variables တွေကို သုံးရပါမယ်။ ဒါတွေဟာ အခြား variable တွေလိုပဲ သူတို့ဟာ object ကပိုင်ဆိုင်နေတာကလွဲပြီး ကျန်တဲ့အရာတွေမှာ တိတိကျကျ အလုပ်လုပ်ပါတယ်။ ဒါကြောင့် object ကိုသုံးပြီးသာလျှင် access လုပ်လို့ရပါတယ်။ Property ကို ကြေငြာမယ်ဆိုရင် access modifier နဲ့ visibility ကို define လုပ်ရပါမယ်။ အဲ့ဒီ access modifiers တွေဟာ public, private or protected တွေပဲဖြစ်ပါတယ်။ Access modifiers တွေဟာ ကျွန်တော်တို့ရဲ့ properties တွေ access လုပ်နိုင်ဖို့ control လုပ်ပေးပါတယ်။ အခုသင်ခန်းစာမှာ public ကိုသုံးမှာဖြစ်ပါတယ်။ Public ကိုသုံးဖို့ဆိုရင် class property ရဲ့ရှေ့မှာ public ဆိုတဲ့ keyword ကိုသုံးရမှာဖြစ်ပြီး ကျွန်တော်တို့ဟာ property တစ်ခုကို value ရော ၊ value မပါတာရောနဲ့ create လုပ်နိုင်ပါတယ်။ Properties တွေ set up လုပ်တာကို အောက်မှာ example နဲ့တကွပြထားပါတယ်။ နောက်သင်ခန်းစာမှာ တော့ အဲ့ဒီ properties တွေကို access လုပ်ပြီးတော့၊ independent objects တွေကို create လုပ်မှာဖြစ်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            
            class Recipe {
                public $title;
                public $ingredients = array();
                public $instructions = array();
                public $yield;
                public $tag = array();
                public $source = "Alena Holligan";
            }

            $recipe1 = new Recipe();
            var_dump($recipe1);

            ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Accessing Properties</h2>
    <p>ကျွန်တော်တို့ဟာ object တစ်ခုကို create လုပ်ပြီး သူ့ရဲ့ properties တွေကို access လုပ်နိုင်ပါတယ်။ ကျွန်တော်တို့ဟာ properties တွေ access လုပ်ဖို့ဆိုရင် object name နဲ့ reference လုပ်မယ်၊ သူ့နောက်က character dash(-) လိုက်ပြီးတော့ grater than (>) ထည့်ပေးရပါတယ်။ သူ့နောက်မှာတော့ property name လိုက်ပြီး မှတ်ထားရမှာတစ်ခုက အဲ့ဒီ property name ဟာ dollar sign ($) နဲ့မစရပါဘူး။ object name သာလျှင် dollar sign($) နဲ့စရမှာဖြစ်ပါတယ်။ ဘာလို့လဲဆိုရင် ဒီ reference တစ်ခုလုံးက variable တစ်ခုဖြစ်လို့ပါ။ OOP ရဲ့ power ကတော့ တူညီတဲ့ class တွေရဲ့ multiple instances တွေကိုသုံးတဲ့အချိန်မှာ တွေ့ရမှာဖြစ်ပါတယ်။ တစ်ခုထက်ပိုတဲ့ object ကို same time မှာပဲ same class ကနေတည်ဆောက်နိုင်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            &lt;php
             
            class Recipe {
                    public $title;
                    public $ingredients = array();
                    public $instructions = array();
                    public $yield;
                    public $tag = array();
                    public $source = "Alena Holligan";
                }

                $recipe1 = new Recipe();
                echo $recipe1 -> source;
                $recipe1 -> source = "Grandma Holligan";
                echo $recipe1 -> source;

                $recipe2 = new Recipe();
                $recipe2 -> source ="Betty Crocker";
                echo $recipe1 -> source;
                echo $recipe2 -> source;


            ?&gt;

        </code>
    </pre>
    <hr>


    <h2>Adding Methods</h2>
    <p>Methods တွေဟာ class specific functions တွေပဲဖြစ်ပါတယ်။ Object တစ်ခုက perform လုပ်မယ့် individual actions တွေကို အဲ့ဒီ class methods တွေထဲမှာ define လုပ်ရပါတယ်။ Method တစ်ခုကို ကြေငြာတဲ့အခါမှာ properties တွေမှာလုပ်ခဲ့သလိုမျိုး visibility ကိုလည်း define လုပ်ပေးရပါတယ်။ Methods တွေကို name ပေးတာဟာ properties တွေတုန်းက ပေးရတာနဲ့တူပြီး သူတို့ကိုပေးမယ်ဆိုရင် Camel case ဖြစ်တဲ့ ပထမ word ကို lowercase letter နဲ့စရေးပြီး ဒုတိယ word ကို capital letter တစ်ခုနဲ့ရေးရပါတယ်။ ကျွန်တော်တို့ရဲ့ method ကို အရင်ဆုံး  ထဲကိုသွားပြီး displayRecipe ဆိုတဲ့ function တစ်ခုဆောက်လိုက်ပါမယ်။ သူ့ကို အခြား function တွေလိုပဲ parenthesis သုံးပြီး ကျွန်တော်တို့ method ရဲ့ curly braces ထဲမှာတော့ ကျွန်တော်တို့ perform လုပ်ချင်တဲ့ actions တွေကို လုပ်ဆောင်ရမှာဖြစ်ပါတယ်။ PHP ဟာ objects တွေကို  သူတို့ကိုယ်တိုင် reference လုပ်ဖို့အတွက် keyword variable ဖြစ်တဲ့ $this ဆိုတာကို သုံးပါတယ်။ Method တစ်ခုရဲ့ scope ထဲမှာအလုပ်လုပ်တဲ့အခါ $this နဲ့ object name တွေကို class ရဲ့အပြင်ဘက်မှာသုံးပေးရပါတယ်။ $this ဆိုတဲ့ keyword ဟာ ကျွန်တော်တို့အသုံးပြုချင်တဲ့ object ရဲ့ own properties (သို့) methods တွေကို indicate လုပ်ပေးပြီးတော့  class scope အတွင်းမှာ သူတို့ကို access ရဖို့အတွက် ခွင့်ပြုပေးပါတယ်။ class ရဲ့ အပြင်ဘက်မှာရှိတဲ့ property ကို access လုပ်သလို this ကိုလည်း သူ့ရှေ့မှာ dollar sign ($) နဲ့ရေးရပါတယ်။ သူ့ကို properties နဲ့ methods တွေအတွက် ပြန်မသုံးတော့ပါဘူး။ $this ဟာ property name နဲ့အတူ single variable တစ်ခုဖြစ်အောင်လုပ်လိုက်တာပါ။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        class Recipe {
        	public $title;
        	// public $ingredients = array();
        	// public $instructions = array();
        	// public $yield;
        	// public $tag = array();
        	public $source = "Alena Holligan";
        	public function displayRecipe() {
        		return $this->title . " by " . $this->source;
        			}
        		}
            
        	$recipe1 = new Recipe();
        	$recipe1->source = "Grandma Holligan";
        	$recipe1->title = "My First Recipe";
            
        	$recipe2 = new Recipe();
        	$recipe2->source = "Betty Crocker";
        	$recipe2->title = "My Second Recipe";
            
        	echo $recipe1->displayRecipe();
        	echo "&lt;br&gt;";
        	echo $recipe2-&gt;displayRecipe();
            
        ?&gt;
        </code>
    </pre>
    <p>
        <a href="directory/adding_methods.php" class="output" target="_blank">The result of above code:</a>
    </p>
    <hr>


    <h2>Access Modifier (setter & getter)</h2>
    <p>လက်ရှိအရဆိုရင် properties တွေနဲ့ methods တွေအားလုံးဟာ public တွေဖြစ်ကြပါတယ်။ ဘာကိုဆိုလိုတာလဲဆိုရင် ဘယ် object မဆို အဲ့ဒီ properties နဲ့ methods တွေကို တိုက်ရိုက် access လုပ်နိုင်ပါတယ်။ ဒါပေမယ့် သူတို့အလုပ်လုပ်နေတဲ့အချိန်မှာတော့ data တွေကို store or retrieved ဘယ်လိုလုပ်ရမလဲဆိုတာ control လုပ်မပေးပါဘူး။ တစ်ခါတစ်ရံမှာတော့ data ကို object ထဲမှာ store မလုပ်ခင် အဲ့ဒီ data ကို sanitize or format လုပ်လို့ရပါတယ်။ ပြောချင်တာက input တွေထည့်ပြီးတော့ output ထုတ်တဲ့ နိယာမလိုပါပဲ။ ဥပမာ title ဆိုတဲ့ property ကိုတိုက်ရိုက်ထည့်မယ့်အစား setter ဆိုတဲ့ method ကို create လုပ်ပါမယ်။ အဲ့ဒီ method ဟာ property ကို set မလုပ်ခင် user ဆီက ဝင်လာတဲ့ data တွေကို format လုပ်ပေးပါတယ်။ ကျွန်တော်တို့ PHP file ထဲမှာ new public method တစ်ခု create လိုက်မယ်။ name ကိုတော့ setTitle လို့ပေးလိုက်ပြီး အဲ့မှာတစ်ခုရှိတာက name ပေးတဲ့အခါ function name ကို property name နဲ့အတူတူပေးခြင်းဟာ ဘယ် method က ဘာကိုအလုပ်လုပ်တယ်ဆိုတာ နားလည်ဖို့ပိုပြီး လွယ်ကူစေပါတယ်။ Argument တစ်ခုကို accept လုပ်ဖို့ function ရဲ့ parenthesis ထဲမှာ $title လို့ထည့်လိုက်ပါမယ်။ ပြီးရင် function ရဲ့ curly braces ထဲမှာ $this -> title = $title; လို့ရေးလိုက်မယ်။ this ဆိုတဲ့ keyword ကတော့ object ရဲ့ property ကို access လုပ်ပေးပြီး this ဆိုတဲ့ keyword မပါတဲ့ title ကတော့ argument ကို pass လုပ်ပေးပါတယ်။ ဒါကြောင့် $this -> title = $title ; ဆိုတာ title property ရဲ့ value ကိုထည့်လိုက်တာဖြစ်ပါတယ်။ အဲ့ဒီ value ကပဲ argument ကို pass လုပ်ပေးမှာပါ။ title ကို directly access ဖြစ်ချင်ရင်သုံးတဲ့နည်းပါ။ နောက်ထပ် title ကို value မထည့်ခင် လုပ်လို့ရတာကိုပြောပြပါမယ်။ ကျွန်တော်တို့က function ucwords ကိုသုံးရပါမယ်။ upword ဆိုတာကတော့ uppercase words ဖြစ်ပါတယ်။ uswords ကတော့ ကျွန်တော်တို့ setter တစ်ခုကိုဘယ်လိုအသုံးပြုရမလဲဆိုတာညွန်ကြားပေးမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့က property ကို directly မသုံးခြင်ဘူးဆိုရင် access modifier ကို public ကနေ private ပြောင်းပေးရမှာပါ။ နောက်ထပ် method တစ်ခုကတော့ getter ပဲဖြစ်ပါတယ်။ Getter နဲ့ setter က private properties တွေကို access ဖြစ်ဖို့အတူတူလုပ်ဆောင်ပါတယ်။ ကျွန်တော်တို့ ထဲမှာ getTitle ဆိုတဲ့ function တစ်ခုပေးလိုက်ပါမယ်။ name ပေးတဲ့အခါမှာ setter လိုပဲ method name ကို property name နဲ့ဆင်တူလေးပေးလိုက်ပါ။ setter လိုပဲ getter method ကိုခေါ်ပီး code တွေကို run နိုင်ပါတယ်။Getters နဲ့ Settersကိုcomplex formatting or parameterတစ်ခု return မပြန်ခင် calculation မလုပ်ခင်တွေမှာအသုံးပြုပါတယ်။ Methods တွေမှာ access modifier တွေရှိပါတယ်။ ဒါကြောင့်ကျွန်တော်တို့က private method တွေကို class အတွင်းမှာရှိတဲ့ တခြား method တွေအသုံးပြုနိုင်အောင် create လုပ်နိုင်ပါတယ်။ ဒါပေမယ့် class အပြင်က method တွေကိုတော့ directly အသုံးမပြုနိင်ပါဘူး။ နောက်သင်ခန်းစာမှာတော့ associative array ကိုသုံးပြီး complicated ဖြစ်တဲ့ setter တွေရေးသားမှာဖြစ်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        class Recipe {
        	private $title;
        	public $ingredients = array();
        	public $instructions = array();
        	public $yield;
        	public $tag = array();
        	public $source = "Alena Holligan";
        
        	public function setTitle($title) {
        		$this->title = ucwords($title);
        	}
        
        	public function getTitle() {
        		return $this->title;
        	}
        
        	public function displayRecipe()
        	{
        		return $this->title . " by " . $this->source;
        	}
        }

        	$recipe1 = new Recipe();
        	$recipe1->source = "Grandma Holligan";
        	$recipe1->setTitle ( "my first recipe" );

        	$recipe2 = new Recipe();
        	$recipe2->source = "Betty Crocker";
        	$recipe2->setTitle ( "my second recipe" ) ;


        	echo $recipe1->getTitle();
            echo $recipe1->displayRecipe();
            echo "&lt;br&gt;";
        	echo $recipe2->displayRecipe();


        ?&gt;
        </code>
    </pre>
    <p>
        <a href="directory/access_modifier.php" class="output" target="_blank">The result of above code:</a>
    </p>
    <hr>


    <h2>Associative Arrays</h2>
    <p>ကျွန်တော်တို့ဟာ အပေါ်ကသင်ခန်းစာမှာ title property ပေါ်မှာ getter နဲ့ setter methods တွေကို create လုပ်ခဲ့ပါတယ်။ ဘာလို့လဲဆိုရင် ကျွန်တော်တို့ဟာ incoming format ကို control လုပ်ချင်လို့ဖြစ်ပါတယ်။ နောက်ထပ် class ထဲမှာရှိတဲ့ property ကတော့ ingredients ရဲ့ array တစ်ခုပဲဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ ingredient တစ်ခုချင်းစီအတွက် single string ကိုသုံးမယ့်အစား ကျွန်တော်တို့ရဲ့ ingredients တွေကို associative array တစ်ခုအဖြစ် set up လုပ်ပါမယ်။ အဲ့ဒီ array ဟာ ကျွန်တော်တို့ရဲ့ ingredients တွေကို အစိတ်အပိုင်းတွေ (parts) အဖြစ် break လုပ်ပေးပြီး items တွေ ပေါင်းခြင်း( merging) လုပ်ခြင်းနဲ့ formatting တွေကို control လုပ်ရတာပိုမိုကောင်းမွန်ပါတယ်။ အခု အောက်က example မှာ data ကို ဘယ်လို store လုပ်မလဲဆိုတာ ကြည့်ရအောင်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        class Recipe {
        	public $title;
        	public $ingredients = array();
        	public $instructions = array();
        	public $yield;
        	public $tag = array();
        	public $source = "Alena Holligan";
        
        	private $measurements = array(
        		"tsp",
        		"tbsp",
        		"cup",
        		"oz",
        		"lb",
        		"fl oz",
        		"pint",
        		"quart",
        		"gallon"
        	);
        
        	public function setTitle($title) {
        		$this->title = ucwords($title);
        	}
        
        	public function getTitle() {
        		return $this->title;
        	}
        
        	public function addIngredient($item, $amount = null, $measure = null) {
        			if($amount != null && !is_float($amount) && !is_int($amount)) {
        				exit("The amount must be a float: " . gettype($amount) . " $amount given");
        			}
        			if ($measure != null && !in_array(strtolower($measure), $this -> measurements)) {
        				exit("Please enter a valid measurement: " . implode(", ", $this -> measurements));
        			}
        			$this -> ingredients[] = array(
        			"item" => ucwords($item),
        			"amount" => $amount,
        			"measure" => strtolower($measure)
        		);
        	}
        
        	public function displayRecipe()
        		{
        			return $this->title . " by " . $this->source;
        		}
        	}
        
        	$recipe1 = new Recipe();
        	$recipe1->source = "Grandma Holligan";
        	$recipe1->setTitle ( "my first recipe" );
        	$recipe1 -> addIngredient("egg", "one", "doz"); 
        
        	$recipe2 = new Recipe();
        	$recipe2->source = "Betty Crocker";
        	$recipe2->setTitle ( "my second recipe" ) ;
        
        
        	echo $recipe1->getTitle();
            echo $recipe1->displayRecipe();
            echo "&lt;br&gt;";
        	echo $recipe2->displayRecipe();
        
        
        ?&gt;
        </code>
    </pre>
    <p>
        <a href="directory/associative_arrays.php" class="output" target="_blank">The result of above code:</a>
    </p>
    <hr>
    <p>ကျွန်တော်တို့ project ထဲက code တွေများလာတဲ့အခါ ကျွန်တော်တို့ code တွေကို file တစ်ခုချင်းစီနဲ့ ရှင်းရှင်းလင်းလင်း ခွဲထားဖို့လိုပါတယ်။ ဒီလိုထားဖို့ဆိုရင် PHP မှာ include ကိုသုံးပြီးတော့ file တစ်ခုချင်းစီရဲ့ path ကို ချိတ်ဆက်လို့ရပါတယ်။ </p>
    <p>Example of clearing_up_arrays.php File:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        class Recipe {
        	public $title;
        	public $ingredients = array();
        	public $instructions = array();
        	public $yield;
        	public $tag = array();
        	public $source = "Alena Holligan";
        
        	private $measurements = array(
        		"tsp",
        		"tbsp",
        		"cup",
        		"oz",
        		"lb",
        		"fl oz",
        		"pint",
        		"quart",
        		"gallon"
        	);
        
        	public function setTitle($title) {
        		$this->title = ucwords($title);
        	}
        
        	public function getTitle() {
        		return $this->title;
        	}
        
        	public function addIngredient($item, $amount = null, $measure = null) {
        			if($amount != null && !is_float($amount) && !is_int($amount)) {
        				exit("The amount must be a float: " . gettype($amount) . " $amount given");
        			}
        			if ($measure != null && !in_array(strtolower($measure), $this -> measurements)) {
        				exit("Please enter a valid measurement: " . implode(", ", $this -> measurements));
        			}
        			$this -> ingredients[] = array(
        			"item" => ucwords($item),
        			"amount" => $amount,
        			"measure" => strtolower($measure)
        		);
        	}
        
        	public function getIngredients() {
        		return $this -> ingredients;
        	}
        
        	public function displayRecipe()
        		{
        			return $this->title . " by " . $this->source;
        		}
        	}
        

        ?&gt;
        </code>
    </pre>
    <p>Example of cookbook.php File:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        include "cleaning_up_class.php";
        $recipe1 = new Recipe();
        $recipe1->source = "Grandma Holligan";
        $recipe1->setTitle ( "my first recipe" );
        $recipe1 -> addIngredient("egg", 1); 
        $recipe1 -> addIngredient("flour", 2, "cup"); 


        $recipe2 = new Recipe();
        $recipe2->source = "Betty Crocker";
        $recipe2->setTitle ( "my second recipe" ) ;


        echo $recipe1->getTitle();
        foreach ($recipe1 -> getIngredients() as $ing) {
            echo "<br>";
            echo $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
        }
        //    echo $recipe1->displayRecipe();
        //    echo "&lt;br&gt;";
        // echo $recipe2->displayRecipe();

        ?&gt;
        </code>
    </pre>
    <p>
        <a href="directory/cookbook.php" class="output" target="_blank">The result of above code:</a>
    </p>
    <hr>


    <h2>Adding Getter and Setter</h2>
    <p>နောက်ထပ် properties လေးခုရှိပါသေးတယ်။ အဲ့ဒါတွေကတော့ array နှစ်ခု ၊ instructions and tags, two string နဲ့ yield and source တို့ပဲဖြစ်ပါတယ်။ ကျွန်တော်တို့အနေနဲ့ properties အားလုံးအတွက် getters နဲ့ setters တွေ add ချင်တယ်ဆိုရင် အဲ့ဒီ properties တွေကို set မလုပ်ခင် ဂရုစိုက်ဖို့မလိုပါဘူး။ သို့သော်လည်း အဲ့ဒါတွေအတွက် big reasons နှစ်ခုရှိပါတယ်။ ပထမတစ်ခုကတော့ consistency ဖြစ်ပြီး ကျွန်တော်တို့ properties အချို့ဟာ getters နဲ့ setters တွေကနေ access လုပ်ပါတယ်။ ဒါဟာ properties တွေအားလုံး တူညီတဲ့နည်းလမ်းနဲ့ access လုပ်ဖို့ ကောင်းတဲ့ idea တစ်ခုဖြစ်ပါတယ်။ ဒုတိယတစ်ခုကတော့ ချက်ချင်းဆိုသလို ဝင်လာတဲ့ incoming data တွေနဲ့ အလုပ်လုပ်ချင်တာပဲဖြစ်ပါတယ်။ Getters နဲ့ setters တွေ set up လုပ်ပြီး ကျွန်တော်တို့ ဝင်လာတဲ့ incoming data တွေကို future မှာ တစ်ခုခုလုပ်ချင်တယ်ဆိုရင် object နဲ့ interact လုပ်တဲ့ နည်းလမ်းကို ပြောင်းလဲဖို့မလိုပါဘူး။ ကျွန်တော်တို့ အပေါ်က example မှာ ကျန်နေတဲ့ getter နဲ့ setter ကို အောက်မှာ ထပ်ထည့်သွားမှာဖြစ်ပါတယ်။ </p>
    <p>Example of adding_getter_setter.php File:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        class Recipe {
        	private $title;
        	private $ingredients = array();
        	private $instructions = array();
        	private $yield;
        	private $tag = array();
        	private $source = "Alena Holligan";
        
        	private $measurements = array(
        		"tsp",
        		"tbsp",
        		"cup",
        		"oz",
        		"lb",
        		"fl oz",
        		"pint",
        		"quart",
        		"gallon"
        	);
        
        	public function setTitle($title) {
        		$this->title = ucwords($title);
        	}
        
        	public function getTitle() {
        		return $this->title;
        	}
        
        	public function addIngredient($item, $amount = null, $measure = null) {
        			if($amount != null && !is_float($amount) && !is_int($amount)) {
        				exit("The amount must be a float: " . gettype($amount) . " $amount given");
        			}
        			if ($measure != null && !in_array(strtolower($measure), $this -> measurements)) {
        				exit("Please enter a valid measurement: " . implode(", ", $this -> measurements));
        			}
        			$this -> ingredients[] = array(
        			"item" => ucwords($item),
        			"amount" => $amount,
        			"measure" => strtolower($measure)
        		);
        	}
        
        	public function getIngredients() {
        		return $this -> ingredients;
        	}
        
        	public function addInstruction($string) {
        		return $this -> instructions[] = $string;
        	}
        
        	public function getInstructions() {
        		return $this -> instructions;
        	}
        
        	public function addTag($tag) {
        		$this -> tags[] = strtolower($tag);
        	}
        
        	public function getTags() {
        		return $this -> tags;
        	}
        
        	public function setYield($yield) {
        		$this -> yield = $yield;
        	}
        
        	public function getYield() {
        		return $this -> yield;
        	}
        
        	public function setSource($source) {
        		$this -> source -> ucwords($source);
        	}
        
        	public function getSource() {
        		return $this -> source;
        	}
        
        	public function displayRecipe()
        		{
        			return $this->title . " by " . $this->source;
        		}
        	}
        
        
        ?&gt;
        </code>
    </pre>
    <p>Example of cookbook1.php File:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        include "adding_getter_setter.php";
        $recipe1 = new Recipe();
        $recipe1 -> setSource = "Grandma Holligan";
        $recipe1->setTitle ( "my first recipe" );
        $recipe1 -> addIngredient("egg", 1); 
        $recipe1 -> addIngredient("flour", 2, "cup"); 
            
            
        $recipe2 = new Recipe();
        $recipe2 -> setSource = "Betty Crocker";
        $recipe2->setTitle ( "my second recipe" ) ;
            
                    
        echo $recipe1->getTitle();
        foreach ($recipe1 -> getIngredients() as $ing) {
            echo "&lt;br&gt;";
            echo $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
        }
        
        $recipe1-&gt;addInstruction("This is my first instruction.");
        $recipe1 -> addInstruction("This is my second instruction.");
        
        echo "&lt;br&gt;";
        echo implode("&lt;br&gt;", $recipe1 -> getInstructions());
        
        $recipe1 -> addTag("Breakfast");
        $recipe1 -> addTag("Main Course");
        
        echo "&lt;br&gt;";
        echo implode(", ", $recipe1 -> getTags());
        
        $recipe1 -> setYield("G servings");
        echo "&lt;br&gt;";
        echo $recipe1 -> getYield();
        echo $recipe1 -> getSource();
        //    echo $recipe1->displayRecipe();
        //    echo "<br>";
        // echo $recipe2->displayRecipe();
        
        ?>
        </code>
    </pre>
    <p>
        <a href="directory/cookbook1.php" class="output" target="_blank">The result of above code:</a>
    </p>
    <hr>


    <h2>Static Methods</h2>
    <p>Recipe တွေကို display လုပ်ဖို့အတွက် နောက်ထပ် feature တစ်ခုကတော့ Method ပဲဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ method တစ်ခုကို ခေါ်ပြီး အဲ့ဒီ single method ကို recipe ကနေ information တွေအားလုံးကို pull လုပ်ပါမယ်။ ပြီးတော့ format တွေကို လွယ်လွယ်ကူကူဖတ်နိုင်ဖို့အတွက် ထုတ်ပေးပါလိမ့်မယ်။ displayRecipe ဆိုတဲ့ method တစ်ခုကို ကျွန်တော်တို့ class ထဲကိုထည့်လိုက်မယ်။ Single responsibility principle ဟာ software ကနေ provide လုပ်ထားတဲ့ functionality ရဲ့ single part ပေါ်မှာ responsibility ရှိသင့်တဲ့ class တိုင်းကို ဖော်ပြပေးပါတယ်။ ပြီးတော့ အဲ့ဒီ responsibility ဟာ class ကနေ entirely encapsulated or contained ဖြစ်သင့်ပါတယ်။ Class တစ်ခုမှာ change လုပ်ဖို့အတွက် reason တစ်ခုသာရှိပါတယ်။ မှတ်ထားရမှာကတော့ class တစ်ခုဟာ ကျွန်တော်တို့ code တွေကို organize လုပ်တဲ့ ၊ functionality ကို group လုပ်တဲ့ ၊ data ကို logical manner တစ်ခုအတွင်းထည့်ပေးတဲ့ နည်းလမ်းပဲဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ display or separate group ထဲကို data  rendering လုပ်တဲ့ ဘယ် methods မဆို ထည့်လို့ရပါတယ်။ Method တစ်ခုကို static အဖြစ် declaring လုပ်ခြင်းအားဖြင့် class အပြင်ကနေ class ရဲ့instance တစ်ခုပြုလုပ်စရာမလိုပဲ accessလုပ်နိုင်ပါတယ်။ Method တစ်ခုကို static အဖြစ် declare လုပ်ထားဖို့ static ဆိုတဲ့ keyword ကိုထည့်ပေးရပါမယ်။ Static method တစ်ခုကို အသုံးပြုဖို့class, Render , double colon နဲ့ method တွေကိုသတ်မှတ်ပေးရပါတယ်။ </p>
    <p>Example of static_methods.php</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        class Recipe {
        	private $title;
        	private $ingredients = array();
        	private $instructions = array();
        	private $yield;
        	private $tag = array();
        	private $source = "Alena Holligan";
        
        	private $measurements = array(
        		"tsp",
        		"tbsp",
        		"cup",
        		"oz",
        		"lb",
        		"fl oz",
        		"pint",
        		"quart",
        		"gallon"
        	);
        
        	public function setTitle($title) {
        		$this->title = ucwords($title);
        	}
        
        	public function getTitle() {
        		return $this->title;
        	}
        
        	public function addIngredient($item, $amount = null, $measure = null) {
        			if($amount != null && !is_float($amount) && !is_int($amount)) {
        				exit("The amount must be a float: " . gettype($amount) . " $amount given");
        			}
        			if ($measure != null && !in_array(strtolower($measure), $this -> measurements)) {
        				exit("Please enter a valid measurement: " . implode(", ", $this -> measurements));
        			}
        			$this -> ingredients[] = array(
        			"item" => ucwords($item),
        			"amount" => $amount,
        			"measure" => strtolower($measure)
        		);
        	}
        
        	public function getIngredients() {
        		return $this -> ingredients;
        	}
        
        	public function addInstruction($string) {
        		return $this -> instructions[] = $string;
        	}
        
        	public function getInstructions() {
        		return $this -> instructions;
        	}
        
        	public function addTag($tag) {
        		$this -> tags[] = strtolower($tag);
        	}
        
        	public function getTags() {
        		return $this -> tags;
        	}
        
        	public function setYield($yield) {
        		$this -> yield = $yield;
        	}
        
        	public function getYield() {
        		return $this -> yield;
        	}
        
        	public function setSource($source) {
        		$this -> source -> ucwords($source);
        	}
        
        	public function getSource() {
        		return $this -> source;
        	}
        
        	public function displayRecipe()
        		{
        			return $this->title . " by " . $this->source;
        		}
        	}
        
        
        ?&gt;
        </code>
    </pre>
    <p>Example of cookbook2.php</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        include "adding_methods.php";
        include "render.php";

        $recipe1 = new Recipe();
        $recipe1 -> setSource = "Grandma Holligan";
        $recipe1->setTitle ( "my first recipe" );
        $recipe1 -> addIngredient("egg", 1); 
        $recipe1 -> addIngredient("flour", 2, "cup"); 


        $recipe2 = new Recipe();
        $recipe2 -> setSource = "Betty Crocker";
        $recipe2->setTitle ( "my second recipe" ) ;



        $recipe1->addInstruction("This is my first instruction.");
        $recipe1 -> addInstruction("This is my second instruction.");


        $recipe1 -> addTag("Breakfast");
        $recipe1 -> addTag("Main Course");


        $recipe1 -> setYield("G servings");

        echo Render::displayRecipe($recipe1);
        //    echo $recipe1->displayRecipe();
        //    echo "<br>";
        // echo $recipe2->displayRecipe();

        ?&gt;
        </code>
    </pre>
    <p>Example of render.php</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php 

        class Render {
        	public static function displayRecipe($recipe) {
        		return $recipe -> getTitle() . " by " . $recipe -> getSource();
        	}
        }

        ?&gt;
        </code>
    </pre>
    <p>
        <a href="directory/cookbook2.php" class="output" target="_blank">The result of above code:</a>
    </p>
    <hr>


    <h2>Recipe Details</h2>
    <p>Example of recipe_details.php:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        Class Recipe {
            public $title;
            //public $ingredients = array();
            //public $instructions = array();
            //public $yield;
            //public $tag = array();
            public $source = "Alena Holligan";
            public function displayRecipe() {
                return $this -> title . " by " . $this -> source;
            }
        }

        $recipe1 = new Recipe();
        $recipe1 -> source = "Grandma Holligan";
        $recipe1 -> title = "My First Recipe";

        $recipe2 = new Recipe();
        $recipe2 -> source = "Betty Crocker";
        $recipe2 -> title = "My Second Recipe";

        echo $recipe1 -> displayRecipe();
        echo "&lt;br&gt;";
        echo $recipe2 -> displayRecipe();


        ?&gt;
        </code>
    </pre>
    <p>Example of cookbook3.php:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        include "recipe_details.php";
        include "render1.php";

        $recipe1 = new Recipe();
        $recipe1 -> setSource = "Grandma Holligan";
        $recipe1 -> setTitle("my first recipe");
        $recipe1 -> addIngredient("egg", 1);
        $recipe1 -> addIngredient("flour", 2, "cup");

        $recipe1 -> addInstruction("This is my first instruction.");
        $recipe1 -> addInstruction("This is my second instruction.");

        $recipe1 -> addTag("Breakfast");
        $recipe1 -> addTag("Main Course");

        $recipe1 -> setYield("G servings");

        echo Render::displayRecipe($recipe1);
        //echo $recipe1 -> displayRecipe();
        //echo "<br>";
        //echo $recipe2 -> displayRecipe();


        ?&gt;
        </code>
    </pre>
    <p>Example of render1.php:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        class Render {
            public static function displayRecipe($recipe) {
                $output = "";
        		$output .=  $recipe -> getTitle() . " by " . $recipe -> getSource();
        		$output .= "&lt;br&gt;";
        		$output .= implode(", ", $recipe -> getTags());
        		$output .= "&lt;br&gt;";
        		foreach($recipe -> getIngredients() as $ing) {
        			$output .= $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
        			$output .= "&lt;br&gt;"; 
        		}
        		$output .= "&lt;br&gt;";
        		$output .= implode("&lt;br&gt;", $recipe -> getInstructions());
        		$output .= "&lt;br&gt;";
        		$output .= $recipe -> getYield();
        		return $output;
            }
        }


        ?>
        </code>
    </pre>
    <p>
        <a href="directory/cookbook3.php" class="output" target="_blank">The result of above code:</a>
    </p>
    <hr>


    <h2>Separating Methods</h2>
    <p>ကျွန်တော်တို့ဟာ List ingredients အတွက် public static function တစ်ခု create လုပ်ပါမယ်။ ပြီးတော့ ingredients ရဲ့ associative array တစ်ခုထဲမှာ pass လုပ်ပါမယ်။ Class တစ်ခုဟာ ကျွန်တော်တို့ရဲ့ data ကို group လုပ်ဖို့နဲ့ functionတွေကို အတူတကွ စုစည်းပေးဖို့အတွက် နည်းလမ်းပဲဖြစ်ပါတယ်။ Object တစ်ခုကအဲ့ဒီ data ကို script တွေမှာသယ်သွားနိုင်ပါတယ်။ ကျွန်တော်တို့က information တွေကို store မလုပ်ပဲ class တစ်ခုကို group အဖြစ်သုံးနိုင်ပါတယ်။ အဲ့လိုသုံးချင်ရင်တော့ static method ကိုသုံးရပါမယ်။ static method တစ်ခုက data တွေကို accept လုပ်နိုင်တယ်။ Function တွေကိုလုပ်ဆောင်နိုင်ပါတယ်။ ပြီးတော့ result တွေကို return ပြန်ပေးပါတယ်။ method run ပြီးရင်တော့ store မလုပ်ပေးပါဘူး။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php 

		class Render
		
			public static function listIngredients($ingredients)
			{
				$output = "";
				foreach ($ingredients as $ing) {
					$output .= $ing["amount"] . " " . $ing["measure"] . " " .$ing["item"];
					$output .= "&lt;br&gt;";
				}
				return $output;
			}
			public static function displayRecipe($recipe)
			{
				$output = "";
				$output .= $recipe->getTitle() . " by " . $recipe->getSource();
				$output .= "&lt;br&gt;";
				$output .= implode(",", $recipe->getTags());
				$output .= "&lt;br&gt;";
				$output .= self::listIngredients($recipe->getIngredients());
				$output .= "&lt;br&gt;";
				$output .= implode("&lt;br&gt;", $recipe->getInstructions());
				$output .= "&lt;br&gt;";
				$output .= $recipe->getYield();
				return $output;
			}
        }


        ?&gt;   
        </code>
    </pre>
    <hr>


    <h2>Magic Methods</h2>
    <p>Non programmer အတွက်ဆိုရင် programming ဟာ magic ပဲဖြစ်ပါတယ်။ Magic ကို events တွေရဲ့ course တွေ influence လုပ်နိုင်တဲ့ power အဖြစ် mysterious forces တွေအသုံးပြုထားတယ်လို့ အဓိပါယ် သတ်မှတ်ပါတယ်။ Programming ဟာ magic ဖြစ်တာကြောင့် PHP မှာလည်း magic methods တွေရှိပါတယ်။ ကျွန်တော်တို့ဟာ magic methods တွေကို same way နဲ့သတ်မှတ်နိုင်သလို အခြား methods တွေကိုလည်း define လုပ်နိုင်ပါတယ်။ Magic methods တွေရဲ့ နောက်မှာရှိတဲ့ magic တွေကို တိုက်ရိုက်ခေါ်သုံးလို့မရပါဘူး။ Magic methods တွေဟာ program ထဲက events တွေကနေ ဖြစ်ပေါ်လာတာဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ magic methods တွေကိုရေးမယ်ဆိုရင် double underscore နဲ့ စပြီးရေးရပါတယ်။ အပေါ်က example ထဲမှာ ကျွန်တော်တို့ရဲ့ magic methods တွေကို ထပ်ထည့်မှာဖြစ်ပါတယ်။ </p>
    <p>Example of magic_methods.php File:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        class Recipe {
        	private $title;
        	private $ingredients = array();
        	private $instructions = array();
        	private $yield;
        	private $tag = array();
        	private $source = "Alena Holligan";
        
        	private $measurements = array(
        		"tsp",
        		"tbsp",
        		"cup",
        		"oz",
        		"lb",
        		"fl oz",
        		"pint",
        		"quart",
        		"gallon"
        	);
        
        	public function __construct($title = null) {
        		$this -> setTitle($title);
        	}
        
        	public function __toString() {
        		$this -> getTitle();
        	}
        
        	public function setTitle($title) {
        		if(empty($title)) {
        			$this -> title = null;
        		}else {
        			$this->title = ucwords($title);
        		}	
            
        	}
        
        	public function getTitle() {
        		return $this->title;
        	}
        
        	public function addIngredient($item, $amount = null, $measure = null) {
        			if($amount != null && !is_float($amount) && !is_int($amount)) {
        				exit("The amount must be a float: " . gettype($amount) . " $amount given");
        			}
        			if ($measure != null && !in_array(strtolower($measure), $this -> measurements)) {
        				exit("Please enter a valid measurement: " . implode(", ", $this -> measurements));
        			}
        			$this -> ingredients[] = array(
        			"item" => ucwords($item),
        			"amount" => $amount,
        			"measure" => strtolower($measure)
        		);
        	}
        
        	public function getIngredients() {
        		return $this -> ingredients;
        	}
        
        	public function addInstruction($string) {
        		return $this -> instructions[] = $string;
        	}
        
        	public function getInstructions() {
        		return $this -> instructions;
        	}
        
        	public function addTag($tag) {
        		$this -> tags[] = strtolower($tag);
        	}
        
        	public function getTags() {
        		return $this -> tags;
        	}
        
        	public function setYield($yield) {
        		$this -> yield = $yield;
        	}
        
        	public function getYield() {
        		return $this -> yield;
        	}
        
        	public function setSource($source) {
        		$this -> source -> ucwords($source);
        	}
        
        	public function getSource() {
        		return $this -> source;
        	}
        
        	public function displayRecipe()
        		{
        			return $this->title . " by " . $this->source;
        		}
        	}
        
        
        ?&gt;
        </code>
    </pre>
    <p>Example of cookbook4.php File:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        include "magic_methods.php";
        include "render2.php";

        $recipe1 = new Recipe("my first recipe");
        $recipe1 -> setSource = "Grandma Holligan";
        $recipe1 -> addIngredient("egg", 1); 
        $recipe1 -> addIngredient("flour", 2, "cup"); 


        $recipe2 = new Recipe("my second recipe");
        $recipe2 -> setSource = "Betty Crocker";



        $recipe1->addInstruction("This is my first instruction.");
        $recipe1 -> addInstruction("This is my second instruction.");


        $recipe1 -> addTag("Breakfast");
        $recipe1 -> addTag("Main Course");


        $recipe1 -> setYield("G servings");


        echo Render::displayRecipe($recipe1);
        //    echo $recipe1->displayRecipe();
        //    echo "<br>";
        // echo $recipe2->displayRecipe();

        ?&gt;
        </code>
    </pre>
    <p>Example of render2.php File:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php 

        class Render {
        	public static function displayRecipe($recipe) {
        		$output = "";
        		$output .=  $recipe -> getTitle() . " by " . $recipe -> getSource();
        		$output .= "&lt;br&gt;";
        		$output .= implode(", ", $recipe -> getTags());
        		$output .= "&lt;br&gt;";
        		foreach($recipe -> getIngredients() as $ing) {
        			$output .= $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
        			$output .= "&lt;br&gt;"; 
        		}
        		$output .= "&lt;br&gt;";
        		$output .= implode("&lt;br&gt;", $recipe -> getInstructions());
        		$output .= "&lt;br&gt;";
        		$output .= $recipe -> getYield();
        		return $output;
            
        	}
        }

        ?&gt;
        </code>
    </pre>
    <p>
        <a href="directory/cookbook4.php" class="output" target="_blank">The result of above code:</a>
    </p>
    <hr>


    <h2>Magic Constants</h2>
    <p>Magic methods ဟာ တကယ်ကို အသုံးဝင်ပြီးတော့ ၊ တကယ်လည်း powerful ဖြစ်ပါတယ်။ ဒါပေမယ့် PHP ဟာ magic constants ရဲ့ form ထဲမှာ ပိုပြီး magic ဖြစ်တာကို ပေးပါတယ်။ PHP ဟာ predefined constants တွေရဲ့ large number တစ်ခုကို ပိုပြီး magic ဖြစ်စေဖို့အတွက် provide လုပ်ပေးထားပါတယ်။ အဲ့ဒီ special constants တွေဟာ double underscore နဲ့စပြီး double underscore နဲ့ဆုံးပြီး case sensitive လည်းမဖြစ်ပါဘူး။ ကျွန်တော်တို့ဟာ constants တွေအားလုံးကို uppercase နဲ့ရေးသင့်ပါတယ်။ Magic constants တွေဟာ information အများကြီးကို provide လုပ်ပေးပါတယ်။ ဥပမာအနေနဲ့ အပေါ် example က toString method ကို ပြောင်းကြည့်ပါမယ်။ ပထမဆုံး သုံးမယ့် magic constant ကတော့ __CLASS__ ပဲဖြစ်ပါတယ်။ toString function ထဲမှာရေးတဲ့ __CLASS__ ကတော့ class name ကို သူကိုယ်တိုင်ပေးတာဖြစ်ပါတယ်။ __FILE__ ဆိုတာကတော့ file name နဲ့အတူတူ file ရဲ့ path လမ်းကြောင်းအပြည့်ကိုပေးပါတယ်။ အဲ့ဒီ __FILE__ ကို သူ့ရှေ့မှာ basename နဲ့တွဲရေးခြင်းဖြင့် file ရဲ့ path လမ်းကြောင်းကို ရနိုင်ပါတယ်။ __DIR__ ဆိုတဲ့ constant ကတော့ file path မပါပဲ file ရဲ့ full path ကို ဆွဲထုတ်ပေးပါတယ်။ __LINE__ ဆိုတာကတော့ file ထဲက current line number ကိုပြောတာပဲဖြစ်ပါတယ်။ __METHOD__ ကတော့ ကျွန်တော်တို့သုံးနေတဲ့ method ရဲ့ name ကိုပြောတာဖြစ်ပါတယ်။ Security အတွက်ဆိုရင်တော့ ကျွန်တော်တို့ရဲ့ production server မှာ full directory path ကို display မလုပ်သင့်ပါဘူး။ ဘာဖြစ်လို့လဲဆိုရင် ကျွန်တော်တို့ရဲ့ path တွေပေးလိုက်မယ်ဆိုရင် hacker တွေဆီကို information တွေပေးလိုက်သလို ဖြစ်သွားမှာမို့ပဲ ဖြစ်ပါတယ်။ </p>
    <p>Example of magic_constants.php File:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        class Recipe {
        	private $title;
        	private $ingredients = array();
        	private $instructions = array();
        	private $yield;
        	private $tag = array();
        	private $source = "Alena Holligan";
        
        	private $measurements = array(
        		"tsp",
        		"tbsp",
        		"cup",
        		"oz",
        		"lb",
        		"fl oz",
        		"pint",
        		"quart",
        		"gallon"
        	);
        
        	public function __construct($title = null) {
        		$this -> setTitle($title);
        	}
        
        	public function __toString() {
        		$output = "You are calling a ". __CLASS__ . " object with the title \"";
        		$output .= $this->getTitle() . "\"";
        		$output .= "&lt;br&gt;It is stroed in " . basename(__FILE__). "at" . __DIR__ . ".";
        		$output .= "&lt;br&gt;This display is from line " . __LINE__ . " in method " . __METHOD__  ;
        		$output .= "&lt;br&gt;The following methods are available for objects o this class: &lt;br&gt;";
        		$output .= implode("&lt;br&gt;", get_class_methods(__CLASS__)); 
                return $output;
        	}
        
        	public function setTitle($title) {
        		if(empty($title)) {
        			$this -> title = null;
        		}else {
        			$this->title = ucwords($title);
        		}	
            
        	}
        
        	public function getTitle() {
        		return $this->title;
        	}
        
        	public function addIngredient($item, $amount = null, $measure = null) {
        			if($amount != null && !is_float($amount) && !is_int($amount)) {
        				exit("The amount must be a float: " . gettype($amount) . " $amount given");
        			}
        			if ($measure != null && !in_array(strtolower($measure), $this -> measurements)) {
        				exit("Please enter a valid measurement: " . implode(", ", $this -> measurements));
        			}
        			$this -> ingredients[] = array(
        			"item" => ucwords($item),
        			"amount" => $amount,
        			"measure" => strtolower($measure)
        		);
        	}
        
        	public function getIngredients() {
        		return $this -> ingredients;
        	}
        
        	public function addInstruction($string) {
        		return $this -> instructions[] = $string;
        	}
        
        	public function getInstructions() {
        		return $this -> instructions;
        	}
        
        	public function addTag($tag) {
        		$this -> tags[] = strtolower($tag);
        	}
        
        	public function getTags() {
        		return $this -> tags;
        	}
        
        	public function setYield($yield) {
        		$this -> yield = $yield;
        	}
        
        	public function getYield() {
        		return $this -> yield;
        	}
        
        	public function setSource($source) {
        		$this -> source -> ucwords($source);
        	}
        
        	public function getSource() {
        		return $this -> source;
        	}
        
        	public function displayRecipe()
        		{
        			return $this->title . " by " . $this->source;
        		}
        	}
        
        
        ?>
        </code>
    </pre>
    <p>Example of cookbook5.php File:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        include "magic_constants.php";
        include "render3.php";

        $recipe1 = new Recipe("my first recipe");
        $recipe1 -> setSource = "Grandma Holligan";
        $recipe1 -> addIngredient("egg", 1); 
        $recipe1 -> addIngredient("flour", 2, "cup"); 


        $recipe2 = new Recipe("my second recipe");
        $recipe2 -> setSource = "Betty Crocker";



        $recipe1->addInstruction("This is my first instruction.");
        $recipe1 -> addInstruction("This is my second instruction.");


        $recipe1 -> addTag("Breakfast");
        $recipe1 -> addTag("Main Course");


        $recipe1 -> setYield("G servings");

        echo $recipe1;
        echo new Render();
        //echo Render::displayRecipe($recipe1);

        ?&gt;
        </code>
    </pre>
    <p>Example of render3.php File:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php 

        class Render {
            public function __toString() {
        		$output = "The following methods are available for " . __CLASS__ . " objects: &lt;br&gt;";
        		$output .= implode("&lt;br&gt;", get_class_methods(__CLASS__)); 
                return $output;
            }

        	public static function displayRecipe($recipe) {
        		$output = "";
        		$output .=  $recipe -> getTitle() . " by " . $recipe -> getSource();
        		$output .= "&lt;br&gt;";
        		$output .= implode(", ", $recipe -> getTags());
        		$output .= "&lt;br&gt;";
        		foreach($recipe -> getIngredients() as $ing) {
        			$output .= $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
        			$output .= "&lt;br&gt;"; 
        		}
        		$output .= "&lt;br&gt;";
        		$output .= implode("&lt;br&gt;", $recipe -> getInstructions());
        		$output .= "&lt;br&gt;";
        		$output .= $recipe -> getYield();
        		return $output;
            
        	}
        }

        ?&gt;
        </code>
    </pre>
    <p>
        <a href="directory/magic_constants.php" class="output" target="_blank">The result of above code:</a>
    </p>
    <hr>


    <h2>Building a Collection</h2>
    <p>Collection object တစ်ခုဟာ objects တွေရဲ့ group တစ်ခုကို hold လုပ်နိုင်ပြီး array ထဲမာ store လုပ်ထားလို့ရပါတယ်။ ပြီးတော့ collection object ဟာ objects တွေ store လုပ်ထားတဲ့အပေါ်မှာ actions တွေကိုလည်း လုပ်ဆောင်နိုင်ပါတယ်။ Data persistence frameworks အများစုမှာ collection object တွေရဲ့ own implementation တွေရှိပါတယ်။ ဥပမာအနေနဲ့ ကျွန်တော်တို့ s ထဲမှာ simple collection တစ်ခု တည်ဆောက်ကြည့်ပါမယ်။ ဒီလို တည်ဆောက်ဖို့ဆိုရင် ကျွန်တော်တို့ဟာ recipecollection.php file ကို အရင်တည်ဆောက်လိုက်ပါမယ်။ အဲ့ဒီ file ထဲမှာ RecipeCollection ဆိုတဲ့ new class တစ်ခုရေးလိုက်ပါမယ်။ သူ့ထဲမှာ tile တစ်ခုနဲ့ recipes တွေထည့်ဖို့ recipe array တစ်ခုတည်ဆောက်ပါမယ်။ ကျွန်တော်တို့ဟာ recipe class ကနေ getter နဲ့ setter တွေကို တိုက်ရိုက်သုံးနိုင်ပါတယ်။ </p>
    <p>Example of recipecollection.php File:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        class RecipeCollection {
            private $title;
            private $recipes = array();
        
            public function __construct($title = null) {
                $this -> setTitle($title);
            }
        
            public function setTitle($title) {
                if(empty($title)) {
                    $this -> title = null;
                }else {
                    $this->title = ucwords($title);
                }	
            
            }
        
            public function getTitle() {
                return $this->title;
            }
        
            public function addRecipe($recipe) {
                $this -> recipes[] = $recipe;
            }
        
            public function getRecipes() {
                return $this -> recipes;
            }
        }
        
        
        
        ?&gt;
        </code>
    </pre>
    <p>Example of cookbook.php File:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        include "magic_constants.php";
        include "render3.php";
        include "recipecollection.php";
        include "inc/recipes.php";


        $lemon_chicken = new Recipe("Italian Lemon Chicken");

        $lemon_chicken->addIngredient("Pasta", 1 ,"lb");
        $lemon_chicken->addIngredient("Chicken Breast", 2 ,"lb");
        $lemon_chicken->addIngredient("olive oli", 1 ,"lb");
        $lemon_chicken->addIngredient("garlic, chopped", 2 ,"tbsp");
        $lemon_chicken->addIngredient("lemon juice", 25 ,"cup");
        $lemon_chicken->addIngredient("sugar", 5 ,"tsp");
        $lemon_chicken->addIngredient("parsley", 2 ,"tsp");
        $lemon_chicken->addIngredient("oregano", 2 ,"tsp");
        $lemon_chicken->addIngredient("basil", 1 ,"tbsp");
        $lemon_chicken->addIngredient("parnesian cheese to taste");
        $lemon_chicken->addInstructions("Cook pasta according to package directions");
        $lemon_chicken->addInstructions("In a large skillet on medium high heat, asute garlic in olive oil for 3 minutes.Cut Chicken into bite sized pieces");
        $lemon_chicken->addInstructions("Add additional items to sauce pan and cover for 5 minutes or until chicken is almost completely white.");
        $lemon_chicken->addInstructions("Remove lid and cook until reduced to a thick sauce.");
        $lemon_chicken->addInstructions("Serve over pasta with parmesian cheese to taste.");
        $granola_muffins = new Recipe("Granola Muffins");
        $granola_muffins->addIngredient("egg" ,2);
        $granola_muffins->addIngredient("sugar" ,.25,"Cup");
        $granola_muffins->addIngredient("oli" ,5,"cup");
        $granola_muffins->addIngredient("nilk" ,1, "cup");
        $granola_muffins->addIngredient("vanilla" ,1, "tso");

        // echo Render::displayRecipe($granola_muffins);
        var_dump($lemon_chicken);


        ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Enhancing the Collection</h2>
    <p>ကျွန်တော်တို့ဟာ data တွေနဲ့ အတူတကွ grouping လုပ်ထားတဲ့ cookbook ရဲ့ functonality ကို control and keep လုပ်ချင်တာဖြစ်တဲ့အတွက် array တစ်ခုအစား collection object တစ်ခုကိုသုံးခဲ့ပါတယ်။ ပထမဆုံးအနေနဲ့ recipe titles တွေရဲ့ list တစ်ခုကို ရယူပါမယ်။ သူတို့မှာဆိုရင် grabbing the titles နဲ့ list ကို display ပြတဲ့ action အပိုင်းနှစ်ပိုင်းရှိပါတယ်။ သူတို့မှာ သီးခြား responsibilities တွေရှိကြပါတယ်။ နောက်ဆုံး stage မှာတော့ new render class တစ်ခုကို set up လုပ်ခဲ့ပါတယ်။ Render class ဟာ တစ်ခုခုကို ဘယ်လိုပြမလဲဆိုတာ control လုပ်ပေးပြီးတော့ ကျွန်တော်တို့ အသုံးပြုနေတဲ့ data တွေကို change လုပ်နိုင်ပါတယ်။ ဒီသင်ခန်းစာမှာဆိုရင် အကုန်လုံးကို console မှာပဲပြထားပေမယ့် ကျွန်တော်တို့ရဲ့ recipes တွေကို website or data feed တစ်ခုဆီကို render လုပ်နိုင်ပါတယ်။ အဲ့ဒီ data ကို ဘယ်နေရမှာ ဘယ်လိုပဲ render လုပ်လုပ် data ကတော့ same ဖြစ်နေမှာပါပဲ။ ဒီအတွက် method နှစ်ခုကို set up လုပ်ပါမယ်။ ပထမတစ်ခုကတော့ ကျွန်တော်တို့ collection class ထဲမှာ titles တွေကို grab လုပ်ဖို့နဲ့ နောက်တစ်ခုကတော့ render class ထဲမှာ list တစ်ခုနဲ့ titles တွေကို display လုပ်မှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ အရင်သင်ခန်းစာမှာ လေ့လာခဲ့သလိုပဲ array ထဲက values တွေကို sorting လုပ်ချင်ရင် asort ဆိုတဲ့ function ကိုအသုံးပြုရပါတယ်။ အောက်က example ကိုတစ်ချက်ကြည့်ရအောင်။ </p>
    <p>Example of recipecollection1.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            class RecipeCollection {
                private $title;
                private $recipes = array();
            
                public function __construct($title = null) {
                    $this -> setTitle($title);
                }
            
                public function setTitle($title) {
                    if(empty($title)) {
                        $this -> title = null;
                    }else {
                        $this->title = ucwords($title);
                    }	
                
                }
            
                public function getTitle() {
                    return $this->title;
                }
            
                public function addRecipe($recipe) {
                    $this -> recipes[] = $recipe;
                }
            
                public function getRecipes() {
                    return $this -> recipes;
                }
            
                public function getRecipeTitles() {
                    $titles = array();
                    foreach ($this -> recipes as $recipe) {
                        $titles[] = $recipe -> getTitle();
                    }
                    return $titles;
                }

                public function filterByTag($tag) {
                    $taggedRecipes = array();
                    foreach($this -> recipes as $recipe) {
                        if(in_array(strtolower($tag), $recipe -> getTags())) {
                            $taggedRecipes[] = $recipe;
                        }
                    }
                    return $taggedRecipes;
                }
            }


            ?&gt;
        </code>
    </pre>
    <p>Example of cookbook7.php File:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        include "magic_constants.php";
        include "render4.php";
        include "recipecollection1.php";
        include "inc/recipes.php";


        $lemon_chicken = new Recipe("Italian Lemon Chicken");

        $lemon_chicken->addIngredient("Pasta", 1 ,"lb");
        $lemon_chicken->addIngredient("Chicken Breast", 2 ,"lb");
        $lemon_chicken->addIngredient("olive oli", 1 ,"lb");
        $lemon_chicken->addIngredient("garlic, chopped", 2 ,"tbsp");
        $lemon_chicken->addIngredient("lemon juice", 25 ,"cup");
        $lemon_chicken->addIngredient("sugar", 5 ,"tsp");
        $lemon_chicken->addIngredient("parsley", 2 ,"tsp");
        $lemon_chicken->addIngredient("oregano", 2 ,"tsp");
        $lemon_chicken->addIngredient("basil", 1 ,"tbsp");
        $lemon_chicken->addIngredient("parnesian cheese to taste");
        $lemon_chicken->addInstructions("Cook pasta according to package directions");
        $lemon_chicken->addInstructions("In a large skillet on medium high heat, asute garlic in olive oil for 3 minutes.Cut Chicken into bite sized pieces");
        $lemon_chicken->addInstructions("Add additional items to sauce pan and cover for 5 minutes or until chicken is almost completely white.");
        $lemon_chicken->addInstructions("Remove lid and cook until reduced to a thick sauce.");
        $lemon_chicken->addInstructions("Serve over pasta with parmesian cheese to taste.");
        $granola_muffins = new Recipe("Granola Muffins");
        $granola_muffins->addIngredient("egg" ,2);
        $granola_muffins->addIngredient("sugar" ,.25,"Cup");
        $granola_muffins->addIngredient("oli" ,5,"cup");
        $granola_muffins->addIngredient("nilk" ,1, "cup");
        $granola_muffins->addIngredient("vanilla" ,1, "tso");

        $breakfast = new RecipeCollection("Favorite Breakfast");
        foreach($lemon_chicken -> filterByTag("breakfast") as $recipe) {
            $breakfast -> addRecipe($recipe);
        }

        // echo Render::displayRecipe($granola_muffins);
        echo Render::listRecipes($breakfast -> getRecipeTitles());
        //var_dump($lemon_chicken);


        ?&gt;
        </code>
    </pre>
    <p>Example of render4.php File:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php 

        class Render {
            public function __toString() {
        		$output = "The following methods are available for " . __CLASS__ . " objects: &lt;br&gt;";
        		$output .= implode("&lt;br&gt;", get_class_methods(__CLASS__)); 
                return $output;
            }
        
            public static function listRecipes($titles) {
                asort($titles);
                return implode("&lt;br&gt;", $titles);
            }

        	public static function displayRecipe($recipe) {
        		$output = "";
        		$output .=  $recipe -> getTitle() . " by " . $recipe -> getSource();
        		$output .= "&lt;br&gt;";
        		$output .= implode(", ", $recipe -> getTags());
        		$output .= "&lt;br&gt;";
        		foreach($recipe -> getIngredients() as $ing) {
        			$output .= $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
        			$output .= "&lt;br&gt;"; 
        		}
        		$output .= "&lt;br&gt;";
        		$output .= implode("&lt;br&gt;", $recipe -> getInstructions());
        		$output .= "&lt;br&gt;";
        		$output .= $recipe -> getYield();
        		return $output;
            
        	}
        }

        ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Shopping List Method</h2>
    <p>ဒီတစ်ခါမှာ နောက်ထပ် shopping list တစ်ခုထပ်ထည့်မှာဖြစ်ပါတယ်။ Function တွေကိုတော့ အောက်က example မှာလေ့လာနိုင်ပါတယ်။ </p>
    <p>Example of recipecollection.php File:</p>
    <pre>
        <code class="html hljs xml">
            public function getCombinedIngredients() {
                $ingredients = array();
                foreach($this -> recipes as $recipe) {
                    foreach($recipe -> getIngredients() as $ing) {
                        $item = $ing["item"];
                        if(strpos($item, ",")) {
                            $item = strstr($item, ",", true);
                        }
                        if(in_array($item."s", $ingredients)) {
                            $item .= "s";
                        } else if(in_array(substr($item, 0, -1), $ingredients)) {
                            $item = substr($item, 0, -1);
                        }
                        $ingredients[$item] = array(
                            $ing["amount"],
                            $ing["measure"]
                        );
                    }
                }
                return $ingredients;
            }
        </code>
    </pre>
    <p>Example of render.php File:</p>
    <pre>
        <code class="html hljs xml">
            public static function listShopping($ingredient_list) {
                ksort($ingredient_list);
                return implode(&lt;br&gt;, array_keys($ingredient_list));
            }

            echo "&lt;br&gt;&lt;br&gt;SHOPPING LIST&lt;br&gt;&lt;br&gt;";
            echo Render::listShopping($breakfast -> getCombinedIngredients());
        </code>
    </pre>
    <hr>


    <h2>Creating a Meal Plan</h2>
    <p>ကျွန်တော်တို့ဟာ အခုဆိုရင် cookbook object ထဲက recipes အားလုံးကို collection လုပ်ပြီးပါပြီ။ ပြီးတော့ အဲ့ဒီ recipes အားလုံးရဲ့ shopping list တစ်ခုကို grab လုပ်နိုင်ပါပြီ။ ဒါပေမယ့် recipes တွေကို တစ်ပတ်အတွင်း လုပ်ဖို့ရှိတယ်ဆိုပါစို့။ ဒါကြောင့် recipes အားလုံးအတွက် တစ်ကြိမ်တည်းနဲ့ shopping မသွားချင်ဘူး။ ဒါကြောင့်မို့ weekly meal plan တစ်ခုပြုလုပ်ရပါမယ်။ ကျွန်တော်တို့ဟာ second collection object တစ်ခုကို create လုပ်ဖို့ breakfast ဆိုတဲ့ tag ကိုအသုံးပြုခဲ့ပါတယ်။ ကျွန်တော်တို့ဟာ meal plan ထဲကနေ recipes တွေကို choose လုပ်ချင်တာဖြစ်တဲ့အတွက်ကြောင့် recipe တစ်ခုချင်းစီကို specify လုပ်ဖို့လိုပါတယ်။ Recipes တွေကို title ကိုအခြေခံပြီး select လုပ်နိုင်ပါတယ်။ သူ့ကို select လုပ်ဖို့အတွက် id တစ်ခု specify လုပ်လိုက်မယ်ဆိုရင် ပိုပြီး လွယ်ကူသွားမှာဖြစ်ပါတယ်။ Recipe list ရဲ့ display ကို change  လုပ်ချင်တာကြောင့် s ထဲကိုသွားပြီး render class ကို change လုပ်ရပါမယ်။ List recipe method ကတော့ recipe အတွက် key ကိုထုတ်ပေးတာဖြစ်ပါတယ်။ implode ကတော့ array တစ်ခုထဲကနေ value ကို pull လုပ်ပေးပါတယ်။ ဒါကြောင့် ကျွန်တော်တို့က array ကို loop ပတ်ပြီး key နဲ့ value ကို အသုံးပြုရမှာဖြစ်ပါတယ်။ asort ဆိုတဲ့ function ဟာ key association ကို maintain လုပ်ပေးပါတယ်။ အဲ့ဒီနောက် output ကို initialize လုပ်ဖို့လိုပါတယ်။ အောက်က example မှာဆက်ပြီး လေ့လာနိုင်ပါတယ်။ </p>
    <p>Example of render.php File:</p>
    <pre>
        <code class="html hljs xml">
            public static function listRecipes($titles) {
                asort($titles);
                $output = "";
                foreach($titles as $key => $table) {
                    if($output != "") {
                        $output .= "&lt;br&gt;";
                    }
                    $output .= "[key] $title";
                }
                return $output;
            }
        </code>
    </pre>
    <p>Example of cookbook.php File:</p>
    <pre>
        <code class="html hljs xml">
            echo Render::listRecipes($lemon_chicken -> getRecipes());

            //Pulling filterById method
            echo Render::displayRecipe($lemon_chicken -> filterById(2));
        </code>
    </pre>
    <p>Example of cookbook.php File:</p>
    <pre>
        <code class="html hljs xml">
            $week1 = new RecipeCollection("Meal Plan: Week 1");
		    $week1 -> addRecipe($lemon_chicken -> filterById(2));
		    $week1 -> addRecipe($lemon_chicken -> filterById(3));
		    $week1 -> addRecipe($lemon_chicken -> filterById(6));
		    $week1 -> addRecipe($lemon_chicken -> filterById(16));
		    echo Render::displayRecipe($lemon_chicken -> filterById(2));
		    // var_dump($lemon_chicken );
		    // echo Render::listRecipes($breakfast -> getRecipeTitles());
		    echo "\n\n SHOPPING LIST\n\n";
		    echo Render::listShopping($week1 -> getCombinedIngredients());
    
		    // echo Render::listRecipes($week1 -> getRecipeTitles());
        </code>
    </pre>
    <p>Example of recipecollection.php File:</p>
    <pre>
        <code class="html hljs xml">
            public function filterById($id) {
                return $this -> recipes[$id];
            }
        </code>
    </pre>



</body>

</html>