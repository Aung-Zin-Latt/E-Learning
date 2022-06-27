
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP Basics</title>
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
    <h2>Introduction to PHP</h2>
    <p>PHP ဟာ ဒီနေ့ခေတ်ရဲ့ Internet ပေါ်က အသုံးအများဆုံး technologies တွေထဲက တစ်ခုဖြစ်ပါတယ်။ WordPress Drupal, Wikipedia နဲ့ Facebook စတဲ့ projects တွေကို PHP နဲ့တည်ဆောက်ထားတယ်ဆိုတာ ကြားဖူးမှာပါ။ Web တွေရဲ့ 25% ကို PHP နဲ့ရေးထားတယ်ဆိုတာ ခန့်မှန်းလို့ရပါတယ်။
        PHP ကိုတော့ Rasmus Lerdorf က သူ့ရဲ့ personal webpage ကို maintenance လုပ်ဖို့အတွက် ကိုယ်ပိုင် project တစ်ခုအဖြစ် စတင်ရေးသားခဲ့တာဖြစ်ပါတယ်။ အစတုန်းကတော့ PHP ဟာ personal homepage tools တွေအတွက် အတိုကောက်တစ်ခုသာဖြစ်ပါတယ်။ အဲ့ဒီနောက် 1995 ခုနှစ်မှာ
        PHP tools တွေကို release လုပ်လိုက်ပြီး အခြား developers တွေကလည်း စတင်လေ့လာပြီးတော့ အသုံးပြုခဲ့ကြပါတယ်။ Programmer တွေနှစ်ယောက်ဖြစ်တဲ့ Andy Goodman နဲ့ Steve Zeroski တို့ဟာ PHP ကိုတစ်ကယ်ကိုနှစ်သက်သွားပါတယ်။ ဒါပေမယ့် သူတို့ပြုလုပ်နေတဲ့ e-commerce
        application ကို develop ဖြစ်ဖို့အတွက် လိုအပ်တဲ့ features တွေမရှိတာကို တွေ့ခဲ့ကြပါတယ်။ အဲ့ဒါနဲ့ပဲ သူတို့ဟာ Rasmus နဲ့ပေါင်းပြီးတော့ ဘယ်ခိုမှမှီခိုစရာမလိုတဲ့ programming language တစ်ခုကို စတင်ခဲ့ကြပါတယ်။ အဲ့ဒီ language တစ်ခုလုံးကိုတော့ ယနေ့ခေတ်မှာအသုံးပြုနေကြတဲ့
        hypertext preprocessor လို့ခေါ်တဲ့ PHP ပဲဖြစ်ပါတယ်။ Open source project တစ်ခုအဖြစ်နဲ့ PHP မှာ မူလ team developer ၁၀ယောက်ရှိပါတယ်။ သူမှာ bug တွေကို fixed လုပ်ဖို့နဲ့ improve ဖြစ်ဖို့အတွက် quality assurance နဲ့ documentation တွေကိုကူညီပေးတဲ့ အခြား
        contributors တွေရှိပါသေးတယ်။ PHP အပြင် ကျွန်တော်တို့ရဲ့ programs တွေထဲကို functionality တွေထည့်ဖို့အတွက်အသုံးပြုနိုင်တဲ့ frameworks တွေ၊ packages တွေအများကြီးရှိပါတယ်။ PHP ဟာ လူတော်တော်များများအသုံးပြုလာပြီး community ကိုဖြန့်ဝေမှုကြောင့် language
        ဟာဆက်လက်ပြီးတော့ တိုးတက်လာပါတယ်။ PHP ထွက်ပြီးတော့ နှစ်၂၀ကြာပြီး 2015မှာ PHP 7 ကိုထပ်ပြီး ထုတ်ခဲ့ပါတယ်။ အဲ့ဒီ PHP 7 ကိုအရင် version ထက် speed နှစ်ဆမြန်အောင်ပြင်ဆင်ထားပါတယ်။ PHP ရဲ့အတွင်းက driving force ဟာ ပြသနာတွေဖြေရှင်းဖို့နဲ့ things တွေကိုပြုလုပ်ဖို့အတွက်
        ပိုမိုလွယ်ကူစေပါတယ်။ Server အများစုက PHP ကို pre-installed အဖြစ်နဲ့လာတာဖြစ်တဲ့အတွက်ကြောင့် ရှုပ်ထွေးတဲ့ installation တွေမရှိပါဘူး။ ကျွန်တော်တို့ဟာ PHP code တွေကို ကျွန်တော်တို့ရဲ့ HTML ထဲမှာ code blocks တွေနဲ့ရေးပြီး result ကို Browser ပေါ်မှာချက်ချင်းကြည့်နိုင်ပါတယ်။
        ကျွန်တော်တို့ရဲ့ PHP code တွေကို အခြား languages တွေနဲ့ compile လုပ်နေစရာမလိုပါဘူး။ PHP ဟာ ရိုးရှင်းတဲ့ powerful websites တွေနဲ့ applications တွေကို တည်ဆောက်ဖို့အတွက် အကောင်းဆုံးရွေးချယ်မှုဖြစ်ပါတယ်။ PHP ဟာ Web server ပေါ်က code တွေကို process
        လုပ်ပေးနိုင်တဲ့ server side language တစ်ခုဖြစ်ပါတယ်။ တစ်ကယ်လို့ server က client တစ်ခုဆီကနေ request တစ်ခုလက်ခံလိုက်တယ်ဆိုရင် အဲ့ဒီ request ကို server ပေါ်မှာပဲ process လုပ်ပြီး သူ့ရဲ့ result ကို HTML response တစ်ခုနဲ့ client ဆီကို ပြန်ပို့ပေးတာဖြစ်ပါတယ်။
        တစ်နည်းပြောရရင် server က plain HTMLတစ်ခုကို client ဆီပြန်ပို့ပေးလိုက်တာဖြစ်ပါတယ်။ ကျွန်တော်တို့ create လိုက်တဲ့ webpage မှာ web browser က client ပါပဲ။ ဒါကြောင့် ကျွန်တော်တို့ PHP file ရဲ့ source code ကို web browser မှာကြည့်မယ်ဆိုရင် မြင်ရမှာမဟုတ်ဘဲ
        PHP program ကို server က process လုပ်ပြီးမှသာ သူ့ကို HTML နဲ့သာလျှင်မြင်ရမှာဖြစ်ပါတယ်။ ဒါတွေကတော့ PHP language ကြားမှာရှိတဲ့ ရိုးရှင်းတဲ့ statements တွေကနေ conditionals တွေအထိရဲ့ အခြေခံသဘောတရားတွေပဲဖြစ်ပါတယ်။ </p>
    <hr>

    <h2>PHP Comments</h2>
    <p>Code တွေကို ဘယ်လိုပဲရေးထားရေးထား သူတို့ကို ဖတ်ဖို့အတွက်ကတော့ challenge တစ်ခုဖြစ်နိုင်ပါတယ်။ ကျွန်တော်တို့ရဲ့ code တွေကို မှတ်စုအနေနဲ့ရေးထားဖို့အတွက် Comments တွေကိုအသုံးပြုပါတယ်။ Comments တွေကို server က ignore လုပ်ပေးပါတယ်။ ဒါပေမယ့် သူတို့ဟာ code
        တွေဘယ်လိုအလုပ်လုပ်တယ်၊ ကျွန်တော်တို့ program ကိုဘယ်လိုနည်းလမ်းနဲ့ရေးလိုက်တယ်သာမက document တွေဘာဖြစ်နေလဲဆိုတာကိုပါ ကျွန်တော်တို့ကို အလွယ်တကူသိစေပါတယ်။ PHPမှာ comments ရေးနည်းသုံးမျိုးရှိပါတယ်။ ဒါတွေကတော့ single line, multi-line နဲ့ Doc lock commentsတွေပဲဖြစ်တယ်။
        Sigle line comment ကို double slash ( // ) နဲ့ရေးနိုင်ပြီး သူ့ကို ကျွန်တော်တို့ PHP script ရဲ့ brief note အဖြစ်ရေးနိုင်ပါတယ်။ double slash နောက်က ရေးတာမှန်သမျှကိုတော့ srcipt က process လုပ်တဲ့အချိန်မှာ ignore လုပ်ပေးသွားမှာပါ။ နောက်တစ်ခုကတော့ forward
        slash + astrisk နဲ့ astrisk + forward slash ကြားမှာရေးရတဲ့ comment ဖြစ်ပါတယ်။ Eg. ( /* This is a PHP comment */ )။ နောက်ဆုံးတစ်ခုကတော့ DockBlocks ပဲဖြစ်ပါတယ်။ သူတို့ကိုတော့ programmer တွေဟာ file တစ်ခုလုံး (သို့) code section တစ်ခုရဲ့အကြောင်းကို
        ဖော်ပြချင်တဲ့အခါမှာ သုံးပါတယ်။ အဲ့ဒီ documentation ထဲမှာ summary, author, version နဲ့ license စတဲ့ descriptionတွေထည့်လို့ရပါတယ်။ DockBLock ဟာ multiline comment နဲ့ ရေးနည်း တူတူ ပဲ ဖြစ်ပါတယ်။ မတူတာ တစ်ခုကတော့ comment line တစ်ခု စီကို ရေးတဲ့အခါ
        space နောက်မှာ asterisk နောက်မှာ space နဲ့ စပီး ရေးရမှာ ဖြစ်ပါတယ်။ Eg. ( space + * + space )။
    </p>
    <p>Example of Single-line Comment:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php 
                //our first php script
                echo "Hello World!";
            ?&gt;
        </code>
    </pre>
    <p>Example of Multi-line Comment:</p>
    <pre>
        <code class="html hljs xml">
            &lt;php 
                /* 
                This is a multi-line comment 1
                This is a multi-line comment 2
                */
                echo "Hello World!";
            ?&gt;
        </code>
    </pre>
    <p>Example of DockBlock Comment:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
                /*
                 * Dockblock comment one 
                 * @author - Aung Zin Latt
                */
                echo "Hello World!";
            ?&gt;
        </code>
    </pre>
    <hr>

    <h2>PHP Variables</h2>
    <p>Code တွေရေးဖို့အတွက် အခြေခံအပိုင်းနှစ်ပိုင်းရှိပါတယ်။ အဲ့ဒါတွေကတော့ Data တွေကိုသိမ်းပေးတာနဲ့ ဆွဲထုတ်ပေးတာဖြစ်ပြီး အဲ့ဒီ data နဲ့ ဘယ်အချိန်မှာ ဘာလုပ်မလဲဆိုတာကိုပြောပြပေးတဲ့ logic ဖြစ်ပါတယ်။ Simple program တစ်ခုကိုတည်ဆောက်တဲ့အခါမှာ measurement ရဲ့ units
        တွေကို convertလုပ်ဖို့ ကျွန်တော်တို့က ဒီနည်းလမ်းနှစ်မျိုးလုံးကို သုံးမှာဖြစ်ပါတယ်။ Variables တွေဟာ program တစ်ခုမှာရှိတဲ့ information တွေကို storing လုပ်ဖို့နဲ့ track လိုက်ဖို့အတွက် အခြေခံအကျဆုံးနည်းလမ်းတစ်ခုဖြစ်ပါတယ်။ ဥပမာ computer game တစ်ခုက
        player တစ်ယောက်ရဲ့ score တွေကို သိမ်းထားပါမယ်။ Game ရဲ့အစမှာ score က zero ဖြစ်နေမယ်။ Player ကကောင်းကောင်းကစားမယ်ဆိုရင် score ကတက်လာမှာဖြစ်ပြီး အမှားတစ်ခုဖြစ်လိုက်တာနဲ့ score ကလျှော့သွားမှာဖြစ်ပါတယ်။ Player က သတ်မှတ်ထားတဲ့ score ကိုရောက်သွားမယ်ဆိုရင်တော့
        game က end သွားနိုင်ပါတယ်။ Score ဟာ variable တစ်ခုရဲ့ ဥပမာဖြစ်ပါတယ်။ သို့သော် score ရဲ့ value က 0 ကနေ 100 မှာဆုံးသွားမယ်ဆိုရင်တောင် အဲ့ဒီ player အတွက် score ကတော့တစ်ခုတည်းဖြစ်နေပါမယ်။ Variable တစ်ခုကို Box တစ်ခုအဖြစ်စဉ်းစားပီး အဲ့ဒီ box ထဲကို
        တစ်ခုခုထည့်ပြီး အဲ့box ထဲမှာဘာရှိလဲကြည့်နိုင်ပါတယ်။ Box ကို empty ဖြစ်အောင်လုပ်နိုင်ပြီး သူ့ထဲကို အခြားအသစ်တစ်ခုတောင် ထပ်ထည့်နိုင်ပါတယ်။ Changes ဖြစ်နေတဲ့ box ထဲက content တွေဟာ တူညီတဲ့ boxတစ်ခုအနေနဲ့ရှိနေမှာပါ။ Program တစ်ခုမှာ informationတွေကို
        သိမ်းထားဖို့အတွက် variables or boxes တွေအများကြီးလိုအပ်ပါတယ်။ ဒီ variable တွေအားလုံးကို ကျွန်တော်တို့ program ကသိဖို့အတွက် programထဲက ကျွန်တော်တို့ရဲ့ variable ကို သတ်မှတ်ပေးဖို့နည်းလမ်းတစ်ခုလိုပါတယ်။ Variable တစ်ခုချင်းစီမှာ သူ့ရဲ့ ကိုယ်ပိုင်
        nameတစ်ခုစီရှိကြပါတယ်။ PHP မှာရှိတဲ့ variable တွေကို dollar sign ( $ ) နဲ့စရေးပါတယ်။ သူ့နောက်မှာတော့ underscore ( _ ) or letter နဲ့ letter,number နဲ့ underscore (dog_9) အတွဲလိုက်တွေလိုက်ပါတယ်။ Variable တစ်ခုကိုတော့ number နဲ့စလို့မရပါဘူး။ Variable
        တစ်ခုတည်ဆောက်မယ်ဆိုရင် သူ့ကို empty value အနေနဲ့ထားခဲ့နိုင်ပါတယ်။ Eg. $score = 0; ။ အဲ့ဒီ single equal sign ဟာ သူရဲ့ညာဘက်ခြမ်းမှာရှိတဲ့ ဘာပဲဖြစ်ဖြစ် ဘယ်ဘက်ခြမ်းဆီကို ပို့ပေးပါတယ်။ ဥပမာမှာ 0 ဟာ ရှေ့က variable score ထဲကို assign လုပ်ပေးတာဖြစ်ပါတယ်။
        PHP မှာ boolean, integer, float နဲ့ string စတဲ့ based variable type တွေကို support ပေးပါတယ်။ Boolean ရဲ့ value ကတော့ true or false ပဲဖြစ်ပါတယ်။ ဒါတွေကို ကျွန်တော်တို့ရဲ့ program မှာ logic တွေထည့်တဲ့အခါအသုံးပြုပါတယ်။ Integer တွေဟာ 1 - 9 or -1 -
        9 စတဲ့ whole numberတွေဖြစ်ပါတယ်။ Float ကတော့ ဥပမာ item တစ်ခုရဲ့ price ကို သိမ်းပေးတဲ့ decimal place အတွက်သုံးတဲ့ numberတစ်ခုဖြစ်ပြီး string variable ကတော့ sentence or paragraph လိုမျိုး ဘယ် character number ကိုမဆို combine လုပ်ထားတဲ့ variable
        ဖြစ်ပါတယ်။ PHP ဟာနောက်သင်ခန်းစာတွေမှာပြောပြပေးသွားမယ့် array နဲ့ object ဆိုတဲ့ compound variable types နှစ်ခုကိုလည်း support ပေးနိုင်ပါတယ်။ အဲ့ဒီ variable types တွေဟာ values အမျိုးမျိုးကို variable တစ်ခုတည်းနဲ့ collect လုပ်နိုင်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            table video 2 1
        </code>
    </pre>
    <hr>

    <h2>Integer Variables</h2>
    <p>အခု variable ရဲ့ ပထမဆုံးအမျိုးအစားတစ်ခုဖြစ်တဲ့ integer ကိုလေ့လာသွားမှာဖြစ်ပါတယ်။ Integer တွေဟာ 1 to 9 or -1 to -9 လိုမျိုး whole number တွေဖြစ်ပါတယ်။ အဲ့ထဲကဘယ်ဂဏန်းကိုမဆို integer လို့သတ်မှတ်တယ်။ ဘာလို့လဲဆိုတော့ သူတို့ဟာ decimals or float values တွေမဟုတ်လို့ပါ။
        numbers.php ဆိုတဲ့ file တစ်ခုတည်ဆောက်ကြရအောင်။ သိထားရမယ့်တစ်ခုကတော့ PHP ကိုစရေးမယ်ဆိုရင် opening & closing php tags နဲ့စရေးရမှာဖြစ်ပါတယ်။ Eg. ( &lt;?php ?&gt; )။ သူထဲမှာတော့ num_one ဆိုတဲ့ variable တစ်ခုပေးပြီး သူ့နောက်မှာ variable ထဲကို storingလုပ်ဖို့
        equal sign နဲ့ value တစ်ခု 1 ဆိုပြီးထည့်မယ်။ ပီးရင် semicolon နဲ့ပိတ်လိုက်ပါမယ်။ ကျွန်တော်တို့အနေနဲ့ 1 ဆိုတာကို quote ထည့်လိုက်မယ်ဆိုရင်တော့ PHPက သူ့ကိုstring လို့ပဲမြင်ပါမယ်။ ပီးရင်တော့ num_two ဆိုတယ့် variable ထဲကို 2 ထည့်ပီး num_three ဆိုတယ့်
        variable ထဲကို 3 ထည့်လိုက်ပါမယ်။ အဲ့ဒီ variable တွေကို display လုပ်ချင်တယ်ဆိုရင်တော့ echo ဆိုတဲ့ command နဲ့ထုတ်ရပါတယ်။ ဒါကိုတော့ " echo $num_one; " ဆိုပြီးထုတ်ပီး ကျွန်တော်တို့ရဲ့ console မှာ numbers.php လို့ရိုက်လိုက်ရင် သူ့ရဲ့ value 1 ပေါ်လာမှာဖြစ်ပါတယ်။
        Variable ဆိုတာ value တစ်ခုအတွက် placeholder တစ်ခုသာလျှင်ဖြစ်ပါတယ်။ တခြားနည်းတွေဖြစ်တဲ့ "echo 1" or "echo "1" " ဆိုပြီးထုတ်နိုင်ပါတယ်။ ဒါဆို ကျွန်တော်တို့ဟာ ဘယ်ဟာက string လဲ၊ ဘယ်ဟာက integer လဲဆိုတာ ဘယ်လိုသိနိုင်လဲ?။ PHP မှာ variable တစ်ခုရဲ့ details
        ကိုကြည့်တာကဲ့သို့သော tasks အမျိုးမျိုးကို perform လုပ်ပြီးသုံးနိုင်တဲ့ functionsတွေပါဝင်ပါတယ်။ Function ဆိုတာ function တစ်ခု (သို့) task တစ်ခုကိုဆောင်ရွက်ပေးတဲ့ code ရဲ့ group တစ်ခုဖြစ်ပါတယ်။ ပထမဆုံးကျွန်တော်တို့အသုံးပြုမယ့် function တစ်ခုကတော့
        var_dump လို့ခေါ်တဲ့ functionတစ်ခုဖြစ်ပြီး အဲ့ဒီ function ဟာ data ကို parentheses ထဲမှာ accept လုပ်ပီး data အကြောင်း အသေးစိတ်ပါဝင်တယ့် အစု တစ်ခု ဖြစ်ပါတယ်။ var_dump ကို သုံးမယ်ဆိုရင် data သို့ variable ကို parentheses ထဲမှာ ထည့် ရမှာ ဖြစ်ပါတယ်။
        တခါတလေ math calculation တွေ လုပ်တယ့်အခါ variable ထဲမှာ သိမ်းထားတယ့် information အမျိုးအစားဟာ အရေးကြီးပါတယ်။ ဒါကြောင့် var_dump ဟာ variable ထဲမှာ integer ပါတာလား string ပါတာလား ဆိုတာကို အဖြေထုတ်ပေးနိုင်ပါတယ်။ variable တွေနဲ့ သုံးနိုင်တယ့် အခြား
        function တွေ ရှိပါတယ်။ plus operator (+) ကို သုံးပီး number နှစ်ကို ပေါင်းနိုင်ပါတယ်။ minus operator (-) ကို သုံးပီး number နှစ်ခုကို နူတ်နိုင်ပါတယ်။ number အားလုံးကတော့ integer မဖြစ်နိုင်ပါဘူး။ တခါတလေ dollar amount, အခြား decimal number ကို ပြဖို့floating
        point value ကို လိုအပ်လာနိုင်ပါတယ်။ သူ့ကိုတော့ သုံးမယ်ဆိုရင်တော့ float ဆိုတဲ့ variable type ကိုသုံးနိုင်ပါတယ်။ </p>
    <p>Example of echo function:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            $num_one = 1;
            $num_two = 2;
            $num_three = 3;

            echo num_one;
            echo 1;
            echo "1";

        ?&gt;
        </code>
    </pre>
    <p>The result of above code:</p>
    <p>111</p>
    <p>Example of var_dump function:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php 

            $num_one = 1;
            $num_two = 2;
            $num_three = 3;

            var_dump ( $num_one );
            var_dump ( 1 );
            var_dump ( "1" );
            var_dump ( $num_one + $num_two - $num_three );
        ?&gt;
        </code>
    </pre>
    <p>The result of above code:</p>
    <p><strong>int(1)<br>int(1)<br>string(1) "1"<br>int(0)</strong></p>
    <hr>

    <h2>Float Variables</h2>
    <p>Number အားလုံးဟာ integer တွေလို မရိုးရှင်းပါဘူး။ ကျွန်တော်တို့ဟာ တစ်ခါတစ်ရံမှာ cost တန်ဖိုး $1.99 ၊ 2.5 miles လိုမျိုး fractional values တွေကို သိမ်းဖို့လိုအပ်ပါလိမ့်မယ်။အဲ့ဒီ value တွေကိုတော့ floats လို့ခေါ်ပါတယ်။ Floating point integers, numbers
        or doubles စတဲ့ name တွေအားလုံးဟာ တူညီကြပါတယ်။ Decimal number တွေအတွက် PHP variable float ကိုသုံးပါတယ်။ ဥပမာအနေနဲ့ ကျွန်တော်တို့ PHP file ထဲမှာ $distance_home ကို 1.2 ထည်းပြီး၊ $distance_work ထဲကို 2.5 ဆိုတဲ့ float value တွေထည့်ပါမယ်။ သူတို့နှစ်ခုကို
        var_dump သုံးပြီး parenthesis ထဲမှာ + operator နဲ့ထုတ်ကြည့်တဲ့အခါမှာ floating point number နဲ့ return ပြန်ပေးတာကိုတွေ့ရမှာပါ။ အခုကျွန်တော်တို့ floating number မဟုတ်တဲ့ whole number ကိုပေါင်းထည့်မယ်ဆိုရင်လည်း floating point number ကိုပဲ return
        ပြန်ပေးရုံသာမက ကိန်းပြည့် number ( 0.3 ) ပေါင်းထည့်မယ်ဆိုရင်တောင် float ပဲ return ပြန်ပေးမှာဖြစ်ပါတယ်။ ဥပမာ var_dump( $num_one + $num_two - $num_three + 0.3 ။ ကျွန်တော်တို့က floating point value ကိုသုံးရင် float ကိုပဲ return ပြန်မှာပါ။ ကျွန်တော်တို့အနေနဲ့
        variable တစ်ခုကို integer or float ပေးတာနဲ့ပတ်သတ်ပြီး စိုးရိမ်စရာလိုပါဘူး။ ဘာလို့လဲဆိုတော့ PHP က သူတို့ difference ကို handle လုပ်သွားမှာဖြစ်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php 

            $num_one = 1;
            $num_two = 2;
            $num_three = 3;

            /*
            var_dump ( $num_one );
            var_dump ( 1 );
            var_dump ( "1" );
            var_dump ( $num_one + $num_two - $num_three ); */ 
            
            $distance_home = 1.2;
            $distance_work = 2.5;

            var_dump ( $distance_home + $distance_work );
            var_dump ( $distance_home + $distance_work + $num_three );
            var_dump ( $distance_home + $distance_work + $num_three + .3 );
        ?&gt;
        </code>
    </pre>
    <p>The result of above code:</p>
    <p><strong>float(3.7)<br>float(6.7)<br>float(4)</strong></p>
    <hr>

    <h2>Arithmetic Operators</h2>
    <p>Operator ဆိုတာ တစ်ခု (သို့) တစ်ခုထက်ပိုတဲ့ values တွေကိုသယ်ပေးတဲ့အရာပဲဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ value တစ်ခုကို equal (=) တစ်ခုနဲ့ assign လုပ်ရင် အဲ့ဒီ equal (=)ဟာ  assignment operator ပဲဖြစ်ပါတယ်။ plus (+) symbol ကိုသုံးပြီး numbers တွေ add မယ်ဆိုရင်တော့
         arithmetic operator ကိုသုံးခြင်းဖြစ်ပါတယ်။ ထို့အတူ munus (-) ကလည်း arithmetic operator ပဲဖြစ်ပါတယ်။ အဲ့ဒီ operator နှစ်ခုအပြင် နောက်ထပ် operator တွေလည်းရှိပါသေးတယ်။ အဲ့ဒါကတော့ astrisk (*) ကိုသုံးပြီး number နှစ်ခုကို မြှောက်ပေးတဲ့ multiplication operator
          ပဲဖြစ်ပါတယ်။ နောက်တစ်ခုကတော့ forward slash နဲ့  number နှစ်ခုကိုစားပေးနဲ့ division operator ဖြစ်ပါတယ်။ နောက်ထပ်ပြောချင်တဲ့ operators တွေကတော့ incrementing နဲ့ decrementing operators တွေပဲဖြစ်ပါတယ်။ သူတို့ကို loop တစ်ခုအတွင်းမှာသုံးပါတယ်။ ဥပမာ ကျွန်တော်တို့
           variable a ထဲကို 5 ထည့်လိုက်မယ်။ အဲ့ variable ကို 1 ပေါင်းချင်တယ်ဆိုရင် var_dump( $a + 1 ) ဆိုပြီးရေးပေးရပါမယ်။ ဒါကို PHP မှာ incrementing operator လို့ခေါ်ပါတယ်။ PHP variable ရဲ့နောက်မှာ (++) ကိုသုံးခြင်းဟာ +1 ပေါင်းတာနဲ့အတူတူပါပဲ။ သူ့ရဲ့ ဆန့်ကျင်ဘက် operator 
           ကတော့ decrementing operator ဖြစ်ပြီး PHP variable ရဲ့နောက်မှာ (--) ကိုသုံးတာဖြစ်ပါတယ်။ အဲ့ဒီ operatorsတွေကို ကျွန်တော်တို့ variable ရဲ့နောက်မှာဖြစ်ဖြစ် ရှေ့မှာဖြစ်ဖြစ် ထားနိုင်ပါတယ်။ နောက်ဆုံး result ကတော့ အတူတူဆိုပေမယ့် ကွဲပြားတာကတော့ ကျွန်တော်တို့ variable ကို var_dump 
           ထဲမှာ var_dump( --$a ) or ( ++$a )ဆိုရင်တော့ ကျွန်တော်တို့ value ကို အရင်ထုတ်မပေးပဲ 1 ပေါင်း or နှုတ်ပြီးမှသာ ထုတ်ပေးတာဖြစ်ပါတယ်။ Arithmetic operators တွေနဲ့ assignment ကို combine လုပ်ပေးနိုင်တဲ့ combined operators တွေအများကြီးရှိပါတယ်။ ဥပမာ ကျွန်တော်တို့ရဲ့ variable a
            ကို 5 ထပ်တိုးချင်တယ်ဆိုပါစို့။ ဒါဆိုရင်တော့ $a = $a + 5; ဆိုပြီးရေးလို့ရပါတယ်။ ကျွန်တော်တို့အနေနဲ့ ဒီ operators တွေကို shorter version နဲ့ရေးမယ်ဆိုရင်တော့ $a += 5; လို့ရေးရမှာဖြစ်ပါတယ်။ အဲ့ဒီ combined operators တွေဟာ သူတို့ရဲ့ ဘယ် operators တွေမှာမဆို အလုပ်လုပ်နိုင်ပါတယ်။</p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            $a = 5;
            $b = 10;

            var_dump ($a + $b);
            var_dump ($a - $b);
            var_dump ($a * $b);
            var_dump ($a / $b);

            $a = $a + 1;
            var_dump ($a);
            $a++;
            var_dump ($a);
            $a--;
            var_dump ($a);
            var_dump ($a--);
            var_dump ($a);
            var_dump (--$a);
            var_dump ($a);
            $a = $a + 5;
            var_dump ($a);
            $a += 5;
            var_dump ($a);
        ?&gt;
        </code>
    </pre>
    <p>The result of above code:</p>
    <p><strong>int(15) int(-5) int(50) float(0.5) int(6) int(7) int(6) int(6) int(5) int(4) int(4) int(9) int(14)</strong></p>
    <hr>

    <h2>Creating a Unit Conversation Tool</h2>
    <p>အခုသင်ခန်းစာမှာ pounds ကနေ kilograms၊ miles ကနေ kilometers တွေပြောင်းပြီး  simple unit converter တစ်ခုတည်ဆောက်ဖို့အတွက် variables တွေနဲ့ operators တွေကို လေ့လာသွားမှာဖြစ်ပါတယ်။ Code တွေရေးတဲ့အခါမှာ အခြေခံကျတဲ့ အပိုင်းနှစ်ပိုင်းရှိပါတယ်။ Data တွေ သိမ်းတာ ထုတ်တာနဲ့  ဘယ်အချိန်မှာ အဲ့ဒီ data တွေဘာလုပ်ရမလဲဆိုတဲ့ logic ကိုသိထားဖို့လိုပါတယ်။ ဒါကြောင့် ပထမဆုံး ကျွန်တော်တို့အနေနဲ့ pieces of data နှစ်ခုကို store လုပ်ဖု့ိလိုပါလိမ့်မယ်။ အဲ့ဒါကတော့ conversion အတွက် Floating point value နဲ့ ကျွန်တော်တို့ပြောင်းချင်တဲ့ number ပဲဖြစ်ပါတယ်။ ထို့နောက်ကျွန်တော်တို့ဟာ အဲ့ဒီ data ကို ဆွဲထုတ်ပြီး calculation အတွက်ပြုလုပ်မှာဖြစ်ပြီး နောက်ဆုံးမှာ result ကို display လုပ်ပေးမှာဖြစ်ပါတယ်။  နောက် section မှာတော့ variables တွေအတွက် အမျိုးမျိုးသော data types တွေကို conditional operators တွေနဲ့  condition logic တွေသုံးပြီး daily exercise program တစ်ခုကို explore လုပ်သွားမှာဖြစ်ပါတယ်။</p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            
            // number in pounds we want to convert to kilograms
            $pounds = 140;
            // floating point value for the pound to kilogram conversion
            $lb_to_kg = 0.4535;
            // use the variables above to calculate pounds multiplied by the kilogram conversion
            $kilograms = $pounds * $lb_to_kg;
            // display the pounds to kilograms

            echo "Weight: ";
            echo $pounds;
            echo " lb = ";
            echo $kilograms;
            echo " kg";
            echo "<br>";


            // number in miles we want to convert to kilometers
            $miles = 2.5;
            // floating point value for the mile to kilometer conversion
            $mile_to_km = 1.60934;
            // use the variables above to calculate mile multiplied by the kilometer conversion
            $kilometers = $miles * $mile_to_km;
            // display the miles to kilometers

            echo "Distance: ";
            echo $miles;
            echo " miles = ";
            echo $kilograms;
            echo " km";
            
        ?&gt;
        </code>
    </pre>
    <p>The result of above code:</p>
    <p><strong>
        Weight: 140 lb = 63.49 kg <br>
        Distance: 2.5 miles = 63.49 km
        </strong>
    </p>
    <hr>

    <h2>String</h2>
    <p>ပြီးခဲ့တဲ့ သင်ခန်းစာမှာ progamming ရဲ့အရေးပါတဲ့အပိုင်းတွေဖြစ်တဲ့ data တွေကို သိမ်းတာထုတ်တာနဲ့ အဲ့ဒီ data တွေဘယ်အချိန်မှာ ဘာလုပ်ရမလဲဆိုတာလေ့လာခဲ့ပါတယ်။ ကျွန်တော်တို့ဟာ unit convertor တစ်ခုတည်ဆောက်ဖို့ arithmetic နဲ့ assignment operators တွေတစ်လျှောက်မှာရှိတဲ့ integer နဲ့ float variable တွေနဲ့လည်းမိတ်ဆက်ခဲ့ပါတယ်။ ဒီတစ်ခါမှာတော့ကျွန်တော်တို့ဟာ daily exercise program တစ်ခုတည်ဆောက်ဖို့ data type တွေနဲ့ logic တွေအကြောင်းကိုလေ့လာသွားမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ exercise တစ်ခုချင်းစီကို string variable တစ်ခုထဲမှာ သိမ်းသွားပါမယ်။ ပြီးတော့ ဘယ် exercise ကို display လုပ်ရမလဲဆိုတဲ့ conditions တွေနဲ့အသုံးပြုပြီး control လုပ်သွားမှာဖြစ်ပါတယ်။ String ဆိုတာ ကျွန်တော်တို့ရေးလိုက်တဲ့ characters အစဉ်လိုက်တွေကို quotations ( "characters" ) ထဲမှာထည့်ပြီးရေးရတာဖြစ်ပါတယ်။ ကျွန်တော်တို့အနေနဲ့ string တစ်ခု create လုပ်မယ်ဆိုရင် single (' ') or double quotes (" ") တစ်ခုခုကိုသုံးနိုင်တယ်ဆိုပေမယ့် သူတို့နှစ်ခုရဲ့ အလုပ်လုပ်ပုံကတော့ မတူပါဘူး။ Single quote ထဲမှာရေးထားတဲ့ string ဟာ သူ့ထဲက character တစ်ခုချင်စီကို တိတိကျကျ store လုပ်ပါတယ်။ Double quote ထဲမှာရေးထားတဲ့ string ကတော့ သူ့ထဲမှာ variables တွေထားဖို့ခွင့်ပြုပေးပါတယ်။ PHP ဟာ variable ရဲ့ value ကိုပေါင်းထည့်ပေးနိုင်ပြီး (သို့) string ထဲမှာရှိတဲ့ variable ကို expand လုပ်နိုင်ပါတယ်။ အခု string variables တွေကို သိမ်းတဲ့ ထုတ်တဲ့ဥပမာတစ်ခုပြုလုပ်ကြည့်ရအောင်။ ကျွန်တော်တို့ရဲ့ string variable တစ်ခုဖြစ်တဲ့ string_one ထဲကို single quote နဲ့ 'Hello World' လို့ထည့်လိုက်မယ်။ အစောကပြောခဲ့သလိုပဲ single နဲ့ double quotes တွေရဲ့ ခြားနားချက်ကတော့ variable name ကို expand လုပ်နိုင်တာနဲ့ မလုပ်နိုင်တာပဲဖြစ်ပါတယ်။ $tring_one ရဲ့အပေါ်မှာ ($name = 'Alena')  လို့ထည့်ပါမယ်။ အခုက Hello World ရဲ့နေရာမှာတော့ Hello $name ဆိုပြီးရေးမယ်။ ပီးရင် string_one ကို echo နဲ့ထုတ်ကြည့်တဲ့အခါ stringထဲကအတိုင်း Hello $name ပဲပေါ်မှာဖြစ်ပါတယ်။ ဘာကြောင့်လဲဆိုရင်တော့ variable တွေကို single quotes နဲ့ expand မလုပ်နိုင်လို့ဖြစ်ပါတယ်။ Double quotes ထည့်မယ်ဆိုရင်တော့ Hello Alena လို့ပေါ်မှာပါ။ Double quotes ကိုအသုံးပြုခြင်းဖြင်း PHP interpreter မှာ variable name အစား variable value ကို expand လုပ်ပေးလိုက်တာဖြစ်ပါတယ်။ ကျွန်တော်တို့အနေနဲ့ string ထဲမှာရှိတဲ့ variable ရဲ့ value ကိုလိုချင်ရင်တော့ double quote ကိုသုံးရမှာဖြစ်ပါတယ်။ PHP က character တွေကို ဖော်ပြပေးနိုင်တဲ့ နည်းလမ်းတွေအမျိုးမျိုးရှိပါသေးတယ်။ နောက်သင်ခန်းစာမှာ escape sequences တွေဘယ်လိုသုံးပြီး explore လုပ်လဲဆိုတာ လေ့လာသွားပါမယ်။     </p>
    <p>Single quote can't expand variable:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            $name = 'Alena';
            $string_one = 'Hello $name !';

            echo $string_one;

        ?&gt; 
        </code>
    </pre>
    <p>The result of above code:</p>
    <p><strong>Hello $name!</strong></p>
    <p>Double can expand variable:</p>
    <pre>
        <code class="hmtl hljs xml">
            &lt;?php

            $name = 'Alena';
            $string_one = "Hello $name !";

            echo $string_one;

        ?&gt;
        </code>
    </pre>
    <p>The result of above code:</p>
    <p><strong>Hello Alena!</strong></p>
    <hr>

    <h2>Escape Sequences</h2>
    <p>String တစ်ခုတည်းမှာ  PHP က variables တွေကိုဘယ်လိုဖော်ပြလဲဆိုတာ လေ့လာခဲ့ပြီးပါပြီ။ ကျွန်တော်တို့ဟာ double quotes ကိုသုံးမယ်ဆိုရင် သူ့ကိုပေးလိုက်တဲ့ variable name အစား အဲ့ variable name ရဲ့ value ကိုပဲ display လုပ်ပေးတာဖြစ်ပါတယ်။ အခု ကျွန်တော်တို့ string ထဲကို dollar sign ($) ထည့်ရင်ဘာဖြစ်မလဲဆိုတာကြည့်ပါမယ်။ ကျွန်တော်တို့ရဲ့ string မှာ quotes တွေဘယ်လို add ရမလဲဆိုရင်တော့ escape sequence တစ်ခုနဲ့ ထည့်ရမှာဖြစ်ပါတယ်။ ဘာလို့လဲဆိုရင်တော့ PHP က string ကိုဖော်ပြပေးမယ့် နည်းလမ်းကို back slash (\) နဲ့ break လုပ်ပေးလိုက်လို့ပဲဖြစ်ပါတယ်။ Escape character (\) ကို သူ့နောက်မှာရှိတဲ့ character ကိုအထူးပြုချင်တဲ့အခါသုံးပါတယ်။ Escape sequence နှစ်မျိုးရှိပါတယ်။ Backslash နောက်က alphanumeric character လိုက်မယ်ဆိုရင် အဲ့ဒီ (\) ရော၊ သူ့နောက်က character ရောဟာ meaning တစ်ခုကိုပေးပါတယ်။ ဥပမာ (\n) က new line ကိုဖြစ်စေပြီး (\t) ကတော် tab တစ်ခါခုန်စေပါတယ်။ နောက်တစ်ခုက (\) နောက်က special character လိုက်တယ်ဆိုရင် (\) နောက်ကအဲ့ဒီ character ဟာ သူရှိတဲ့အတိုင်း parse လုပ်ပေးမှာဖြစ်ပါတယ်။ ဒါဟာ $ (သို့) quote ကိုပြချင်တဲ့အခါသုံးတဲ့နည်းဖြစ်ပါတယ်။ Escape sequence ကို ပုံမှန်အားဖြင့် double quote နဲ့ ရေးချင်တဲ့ string တွေအတွက်ပဲအသုံးများပါတယ်။ Single quote string ကတော့ character တစ်ခုချင်းစီကို သီးသန့် interpret လုပ်ပေးတာဖြစ်ပါတယ်။ Escape sequence ကိုသုံးသင့်တဲ့နေရာတစ်ခုကတော့ single quote string ထဲမှာ  single quote ထပ်ထည့်ချင်တဲ့အခါဖြစ်ပါတယ်။ Eg.( Apstrophe's) ။ String တစ်ခုကို create လုပ်ဖို့ အခြား escape sequence အများကြီးရှိပါသေးတယ်။</p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        $name = 'Alena';
        $string_one = "Hello \$name!";
                
        echo $string_one;
        echo "<br>";
                
        $string_two = 'Learning to display "Hello $name!" to the screen.';
        echo $string_two;
        echo "<br>";
                
        $string_three = "Learning to display \"Hello $name!\" to the screen.";
        echo $string_three;
        echo "<br>";
                
                
        ?&gt;
        </code>
    </pre>
    <p>The result of above code:</p>
    <p><strong>Hello $name!<br>Learning to display "Hello $name!" to the screen.<br>Learning to display "Hello Alena!" to the screen.</strong></p>
    <hr>
    

    <h2>Combining Strings</h2>
    <p>String တစ်ခုထဲမှာ data တွေကိုပေါင်းထည့်တာကို concatenaton လိုခေါ်ပါတယ်။ String variable ကနေ အခြား string value နဲ့ concatenation လုပ်တာကို အရင်သင်ခန်းစာမှာလုပ်ခဲ့ပြီးပါပြီ။ Double quote ကိုအသုံးပြုပြီးတော့ ပထမ variable ကနေ ဒုတိယ variable ကို assign လုပ်တဲ့ string ကိုပေါင်းရေးချင်တာဖြစ်ပါတယ်။ PHP ဟာ concatenation လုပ်ဖို့အတွက် string operator နှစ်ခုရှိပါတယ်။ အဲ့ဒါကတော့ dot (.) နဲ့ dot equal (.=) ဖြစ်ပါတယ်။ ပထမ operator တစ်ခုကတော့ dot or period ဖြစ်ပြီး သူဟာ ကျွန်တော်တို့ concat လုပ်ချင်တဲ့ string တွေအများကြီးကို statement တစ်ကြောင်းတည်းဖြစ်အောင်ပြုလုပ်ပေးပါတယ်။ Single variable ကို string ထဲမှာထည့်ချင်တယ်ဆိုရင် အဲ့ဒီ variable ကို double qoutes ထဲမှာထည့်လိုက်လို့ရပါတယ်။ Single line ကို concatenate လုပ်ချင်တယ်ဆိုရင်တော့ string တစ်ခုချင်းစီကြားမှာ dot(.) သုံးပြီး၊ multiple line တွေကို concatenate လုပ်ချင်တယ်ဆိုရင် dot equal ကိုသုံးသင့်ပါတယ်။    </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            
            $name = 'Alena';
            $string_one = "Learning to display \"Hello $name\" to the screen. \n";
            $string_two = 'Learning to display "Hello '. $name .'!" to the screen.' . "\n";

            //Combining dot equal(.=) operator
            $string_one = 'Learning to display';
            $string_one .= '"Hello ';
            $string_one .= $name;
            $string_one .= '! " to the screen.';
            $string_one .= "\n";
            $string_one = $string_one . "\n";
            echo $string_one;
            echo "<br>";
            $string_one = 'I am '.$string_one . "\n";
            echo $string_one;
        ?&gt;
        </code>
    </pre>
    <p>The result of above code:</p>
    <p><strong>Learning to display "Hello Alena!" to the screen.<br>I am Learning to display "Hello Alena!" to the  screen.</strong></p>
    <hr>

    <h2>Booleans</h2>
    <p>နောက်ထပ် scalar type တစ်ခုကတော့ Booleans ပဲဖြစ်ပါတယ်။ သူဟာ variable ရဲ့ အရှင်းဆုံးပုံစံဖြစ်ပါတယ်။ ဘာကြောင့်လဲဆိုရင် boolean ရဲ့ values တွေဖြစ်တဲ့ true နဲ့ false နှစ်ခုတည်းက တစ်ခုကိုပဲလက်ခံပေးလို့ပါ။ အခု variable တစ်ခုကို boolean variable တစ်ခုအဖြစ် သတ်မှတ်ပါမယ်။ variable တစ်ခုဖြစ်တဲ့ $isReady ကို trueပေးလိုက်မယ်။ PHP ဟာ boolean value ကိုလက်ခံပေးတဲ့အခါ case sensitive မဖြစ်ပါဘူး။ သူတို့ကို uppercase ဆိုရင်လည်း အကုန် uppercase နဲ့ရေးပြီး lowercase ဆိုရင်လည်း အကုန် lowercase နဲ့ရေးရပါမယ်ဆိုတဲ့ conflicting standards တွေရှိပါတယ်။ ကျွန်တော်တို့ဟာ PHP Framework Interop Group or PHP-FIG နဲ့ PHP standards recommendation ကိုသုံးပါတယ်။ PHP-FIG ဟာ PHP projects တွေရဲ့ group တစ်ခုဖြစ်ပြီး သူ့ရဲ့ goal ကတော့ PHP programmer တွေအတူတကွ အလုပ်လုပ်နိုင်ဖို့အတွက် ပိုမိုလွယ်ကူတဲ့ နည်းကိုပေးထားပါတယ်။ PSR 2 coding guide ကတော့ boolean value တွေဖြစ်တဲ့ true နဲ့ false ကို lowercase နဲ့ရေးရမယ်လို့ဖော်ပြထားပါတယ်။ PHP ဟာ statements တွေကို အထက်ကနေအောက်အတိုင်း step by step  နဲ့ process လုပ်ပေးပါတယ်။ Booleans တွေကို statement လို့ခေါ်တဲ့ program conditions တွေကိုသုံးပြီး testing လုပ်ခြင်းဖြင့် program ရဲ့ flow ကို control လုပ်နိုင်ပါတယ်။ ဥပမာ user တစ်ယောက်က login in ဝင်ပြီး သူ့ရဲ့ account details တွေပြမယ်ဆိုရင် ကျွန်တော်တို့အနေနဲ့ boolean value ဖြစ်တဲ့ true or false keyword ကိုသုံးပေးရပါတယ်။ ဒါ့အပြင် boolean values တွေကို values တွေ comparison လုပ်ဖို့အတွက် modify လုပ်လို့လည်းရပါတယ်။   </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            &lt;php

            $isReady = true;
            var_dump($isReady);

            $isReady = false;
            var_dump($isReady);
        ?&gt;
        </code>
    </pre>
    <p>The result of above code:</p>
    <p><strong>bool(true) bool(false)</strong></p>
    <hr>

    <h2>Comparing Values</h2>
    <p>Operator ဆိုတာ တစ်ခု (သို့) တစ်ခုထက်ပိုတဲ့ values အချို့ကိုယူပြီး နောက် value တစ်ခုကို ထုတ်ပေးတာဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ မတူညီတဲ့ operator တော်တော်များများကို ပြထားပါတယ်။ Assignment operator ဆိုတာ variable တစ်ခုထဲကို value တစ်ခုထည့်တဲ့အခါ equal (=) sign နဲ့သုံးတာပါ။ Arithmetic operators တွေကတော့ ကျွန်တော်တို့ကို add (+), subtract (-), multiply (*) နဲ့ divide (/) လုပ်ဖို့ခွင့်ပြုပေးပါတယ်။ ပြီးတော့ concatenation operators တွေကတော့ string အသစ်တစ်ခုတည်ဆောက်တဲ့အခါမှာ string များစွာကို combine လုပ်ဖို့အတွက်သုံးပါတယ်။ နောက်တစ်ခုကတော့ ကျွန်တော်တို့ရဲ့ equality တွေစစ်ဖို့ comparison operator ကိုသုံးမှာဖြစ်ပါတယ်။ Comparison operator တွေဟာ values တွေကို compare လုပ်ပြီး result ကိုထုတ်ပေးတာဖြစ်ပါတယ်။ ဒီသင်ခန်းစာအတွက်တော့ equal နဲ့ identical comparisons တွေကိုလေ့လာမှာဖြစ်ပါတယ်။ Equal ဟာ value ကိုပဲစစ်ပေးနိုင်ပြီး identical ကတော့ value နဲ့ type နှစ်လုံးကို စစ်ပေးပါတယ်။ ကျွန်တော်တို့ဟာ PHP မှာ integers, floats, string နဲ့ booleans ဆိုတဲ့ variable types အမျိုးမျိုးကို လေ့လာခဲ့ပြီးပါပြီ။ PHP ကို weakly or loosely language လို့လည်းခေါ်ပါတယ်။ ဘာကိုဆိုလိုသလဲဆိုရင် အများအားဖြင့် ကျွန်တော်တို့သုံးမယ့် variable type ကို သတ်မှတ်စရာမလိုလို့ဖြစ်တယ်။ PHP ဟာ variable ထဲက value ကိုကြည့်ပြီးတော့ ဘာ type လဲဆိုတာ အလိုလို assign လုပ်သွားမှာဖြစ်ပါတယ်။ ဒါကို PHP ဟာ  သူတို့ကိုအသုံးပြုတဲ့ အချိန်မှာ type ကိုဆုံးဖြတ်မှာရမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ plus ကိုသုံးပြီး variable နှစ်ခုကိုပေါင်းတဲ့အချိန်မှာ PHP ဟာ အဲ့ဒီ value နှစ်ခုကိုပေါင်းပြီး number အဖြစ်ထုတ်ပေးရမယ်လို့ယူဆလိုက်တာပါ။ Variable ရဲ့ type ကိုဆုံးဖြတ်ပေးခြင်းဟာ web form ကနေ user data ကဲ့သို့သော control ရဲ့နောက်ကွယ်က sources တွေဆီက data တွေကို လက်ခံတဲ့အခါမှာ အကူအညီဖြစ်စေပါတယ်။ Online form တစ်ခုကနေ submitted လုပ်လိုက်တဲ့ value တွေဟာ string အဖြစ် collect လုပ်သွားပေမယ့် type juggling ကြောင့် သူတို့ကို calculation မှာသုံးနိုင်ပါတယ်။ Variable နှစ်ခုကို compare လုပ်ချင်တယ်ဆိုရင် double equal (==) ကိုသုံးနိုင်ပါတယ်။ Variable ရဲ့ type ရော value ရောတူလားဆိုတာ compare လုပ်ချင်ရင်တော့ triple equal (===) ကိုသုံးရပါမယ်။ အခု operator တွေကို  string variable တွေကို compare လုပ်ဖို့အတွက်လည်း သုံးနိုင်ပါတယ်။</p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            $name = 'Alena';
            $a = 10;
            $b = '10';

            $string_one = 'Learning to display "Hello '. $name .'!" to the screen.' . "\n";
            <!-- echo $string_one; -->

            var_dump ( $a == $b );
            var_dump ( $a === $b );
            var_dump ( $string_one == 'Learning to display "Hello Alena!" to the screen.');

        ?&gt;
        </code>
    </pre>
    <p>The result of above code:</p>
    <p><strong>bool(true) bool(false) bool(false)<strong></p>
    <hr>

    <h2>Adding Logic to our Programs</h2>
    <p>ဘယ် programming language တစ်ခုမဆို သူ့ရဲ့ power ကတော့ data ကိုတွက်ချက်ပေးနိုင်စွမ်းနဲ့ အဲ့ဒီ data ကိုအခြေခံပြီးတော့ အလုပ်လုပ်ပေးနိုင်ခြင်းဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ conditional statements တွေကိုသုံးပြီး data တွေကို တွက်ချက်မယ်၊ ပြီးရင် အလုပ်လုပ်ပေးမှာဖြစ်ပါတယ်။ အခြေကအကျဆုံး statement ကတော့ if statement ပဲဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ if statement ရဲ့ concept ကို တစ်ချိန်လုံးအသုံးပြုနေရတာဖြစ်ပါတယ်။ ဥပမာ ကျွန်တော်က 6 နာရီ alarm ပေးထားရင် 6 နာရီမှာမြည်ပါမယ်။ ဗိုက်ဆာရင်စားမယ်။ ပင်ပန်းရင် အနားယူမယ်။ မှောင်နေရင် မီးဖွင့်မယ်ဆိုတာတွေအားလုံးဟာ programming နဲ့တူတူပါပဲ။ တစ်ခုခုက မှန်ရင် action အချို့ကိုလုပ်မယ်၊ မမှန်ရင်တော့ အဲ့ဒီ action ကို skip လုပ်ပါမယ်။ if ရဲ့နောက်က condition တွေဟာ parenthesis ထဲမှာ အလုပ်လုပ်ပါတယ်။ သူ့ရဲ့ statement ကို semicolon (;) နဲ့ပိတ်မယ့်အစား curly  braces ကိုသုံးပြီးတော့ curly braces ထဲမှာ ကျွန်တော်တို့ လုပ်ချင်တဲ့ action ကိုရေးရတာဖြစ်ပါတယ်။ အောက်မှာပေးထားတဲ့ example မှာဆိုရင် if condition ထဲက $string_one ဟာ == ရဲ့ညာဘက်က string နဲ့တူနေရင် condition ကမှန်တဲ့အတွက် curly braces ထဲက statement ကိုအလုပ်လုပ်ပေးမှာဖြစ်ပါတယ်။ string က မတူဘူးဆိုရင်တော့ condition ဟာ false ဖြစ်သွားပြီး curly braces ထဲက echo statement ကိုအလုပ်လုပ်ပေးမှာမဟုတ်ပါဘူး။ အဲ့လို့ false ဖြစ်နေနဲ့အချိန်မှာ အခြား action ကိုလုပ်ဖို့အတွက် else statement ကိုထည့်ပေးရပါတယ်။ တစ်ကယ်လို့ condition ဟာ true ဖြစ်ရင် ပထမ action ကို အလုပ်လုပ်ပေးမှာဖြစ်ပြီး၊ condition က false ဖြစ်နေရင်တော့ ပထမ action ကို skip လုပ်သွားပြီး else ထဲက action ကိုအလုပ်လုပ်မှာဖြစ်ပါတယ်။ second condition အတွက် if နဲ့ else ကို ပေါင်းရေးနိုင်ပါတယ်။ တစ်ကယ်လို့ ပထမ condition က false ဖြစ်နေရင် else if ထဲက condition ကိုစစ်တာဖြစ်ပါတယ်။ Else if condition ဟာ true ဖြစ်နေရင် သူ့ထဲက action ကိုအလုပ်လုပ်ပေးမှာဖြစ်ပြီး else if condition က false ဖြစ်နေရင်တော့ နောက်ဆုံးမှာရှိတဲ့ esle statement ကိုလုပ်မှာဖြစ်ပါတယ်။</p>
    <p>Example of if condition is true:</p>
    <pre>
        <code class="html hljs xml">
            &lt;php

            $string_one = 'Hello World';

            if ($string_one == "Hello World") {
                echo "String are match!";
            }

        ?&gt;
        </code>
    </pre>
    <p>The result of above code:</p>
    <p><strong>String are match!</strong></p>
    
    <p>Example of if condition is false:</p>
    <pre>
    <code class="html hljs xml">
            &lt;php

            $string_one = '';

            if ($string_one == "Hello World") {
                echo "String are match!";
            }
            else {
                echo "String are not match!";
            }
            
        ?&gt;
        </code>
    </pre>
    <p>The result of above code:</p>
    <p><strong>String are not match!</strong></p>

    <p>Example of if condition is flase and elseif condition is true:</p>
    <pre>
        <code class="html hljs xml">
            &lt:php

            $string_one = "";

            if ($string_one == "Hello World") {
                echo "String are match!";
            } elseif( $string_one == "" ) {
                echo "String is empty!";
            } else {
                echo "String are not match!";
            }

        ?&gt;
        </code>
    </pre>
    <p>The result of above code:</p>
    <p><strong>String is empty!</strong></p>

    <p>Example of if condition and elseif conditions are false:</p>
    <pre>
        <code class="html hljs xml">
            &lt;php

            $string_one = "World";

            if ($string_one == "Hello World") {
                echo "String are match!";
            } elseif ($string_one == "") {
                echo "String is empty!";
            } else {
                echo "String are not match!";
            }

        ?&gt;
        </code>
    </pre>
    <p>The result of above code:</p>
    <p><strong>String are not match!</strong></p>
    <hr>

    <h2>Creating Daily Exercise Program</h2>
    <p>ကျွန်တော်တို့ daily exercise program တစ်ခုတည်ဆောက်ပါမယ်။ ကျွန်တော်တို့ အရင်ကလုပ်ခဲ့တဲ့ unit converter တုန်းကလို ကျွန်တော်တို့လိုအပ်တဲ့ step တွေကို comment မှာချရေးလိုက်ပါမယ်။ ပထမ comment ကတော့ exercise တစ်ခုချင်းစီကို store လုပ်ဖို့အတွက် string variable တစ်ခုလိုအပ်ပါလိမ့်မယ်။ နောက်တစ်ခုကတော့ တစ်ပတ်အတွင်း day တွေပါဝင်တဲ့ variable ကို create လုပ်မှာဖြစ်ပါတယ်။ နောက်တစ်ခုကတော့ day of week ကို test လုပ်ဖို့အတွက် if statement ကိုအသုံးပြုမှာဖြစ်ပါတယ်။ နောက်ဆုံးမှာတော့ ကျွန်တော်တို့ဟာ သက်ဆိုင်တဲ့ exercise string ကို display လုပ်ပေးမှာဖြစ်ပါတယ်။ ပထမ အနေနဲ့လုပ်ရမှာကတော့ exercise တစ်ခုချင်းစီကို string တစ်ခုအဖြစ်ကြေငြာပြီး store လုပ်ထားမယ်။  ဒုတိယတစ်ခုကိုတော့ PHP မှာရှိတဲ့ date('N') ဆိုတဲ့ function ကိုသုံးပြီး variable တစ်ခု create ရပါမယ်။ date ('N') ဆိုတဲ့ function ဟာ အခု date ကိုဖော်ပြပေးတာဖြစ်ပါတယ်။ သူ့ထဲက N ဆိုတာကတော့ numeric value ကိုပြောချင်တာပါ။ ပြီးရင်တော့ ကျွန်တော်တို့ တစ်ပတ်မှာရှိတဲ့ day တွေကို if statement သုံးပြီး စစ်မှာဖြစ်ပါတယ်။ ပြီးရင်တော့ if statement ကနေ condition မှန်တဲ့ day တစ်ခုရဲ့ exercise ကို display ပြပေးမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ condition တစ်ခုပြီး နောက်တစ်ခု ထပ်စစ်ဖို့အတွက် PHP ကို force လုပ်နိုင်တဲ့ elseif statement ကိုသုံးပါမယ်။</p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            &lt;php

            //store each exercise in a string variable
            $exercise1 = 'Display "Hello World!"';
            $exercise2 = 'Convert pounds to Kilograms';
            $exercise3 = 'Convert Kilograms to pounds';
            $exercise4 = 'Convert Miles to Kilometers';
            $exercise5 = 'Convert Kilometers to Miles';
            $exercise6 = 'Month long string of the day';
            $exercise7 = 'String of the day with levels';

            //creating a variable containing the day of the week
            $day = date('N');
            //var_dump($day);

            //use if statement to test the day of the week
            if($day == 1) {
                echo $exercise1;
            }

            elseif($day == 2) {
                echo $exercise2;
            }

            elseif($day == 3) {
                echo $exercise3;
            }

            elseif($day == 4) {
                echo $exercise4;
            }

            elseif($day == 5) {
                echo $exercise5;
            }

            elseif($day == 6) {
                echo $exercise6;
            }

            elseif($day == 7) {
                echo $exercise7;
            }

            //display the corresponding exercise
        ?&gt;
        </code>
    </pre>
    <p>The result of above code:</p>
    <p><strong>Display "Hello World!"</strong></p>
    <hr>

    <h2>PHP on the Web</h2>
    <p> အခုကျွန်တော်တို့ရဲ့ course ဟာ PHP ကိုသုံးထားတယ်ဆိုပေမယ့် PHP ဟာ Webpages တွေကို တည်ဆောက်ဖို့အတွက် လွယ်ကူစေဖို့ ဖန်တီးထားတာဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ ဒီသင်ခန်းစာမှာ HTML နဲ့ CSS တွေထည့်မှာဖြစ်တဲ့အတွက် HTML နဲ့ CSS တွေရဲ့ အလုပ်လုပ်ပုံကိုတော့ သေချာနားလည်ထားဖို့လိုပါတယ်။ ကျွန်တော်တို့ရဲ့ project folder ထဲမှာ အရင်ဆုံး HTML နဲ့ CSS files တွေတည်ဆောက်မယ်။ အဲ့ဒါတွေနဲ့ webpage တစ်ခုကို create လုပ်မှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ရဲ့ HTML file ထဲက ကြိုက်တဲ့နေရာမှာ PHP code တွေထည့်လို့ရပေမယ့် ထည့်တဲ့အခါတိုင်း php အဖွင့်အပိတ်ကြားမှာရေးဖို့တော့ လိုပါတယ်။ ပြီးတော့ file extension ကလည်း ကျွန်တော်တို့ PHP file ကို save ခဲ့တဲ့ .php နဲ့ဖြစ်ရပါမယ်။ .php extension နဲ့မဟုတ်ရင်တော့ သူဟာ plain HTML တစ်ခုသာဖြစ်ပါတယ်။ PHP file မှာ PHP code block ရဲ့ အပြင်ဘက်က HTMLတွေပါနိုင်ပါတယ်။ ပြီးတော့ အဲ့ဒီ HTML ဟာ ပုံမှန် HTML file နဲ့တူတူလိုပဲ process လုပ်ပေးပါတယ်။ PHP ဟာ code blocks အတွင်းက code ကိုပဲ execute လုပ်ပေးတာဖြစ်ပါတယ်။ ဒါဟာ HTML ထဲမှာ PHP code ထည့်ရေးတဲ့ အခြေခံဖြစ်ပါတယ်။ နောက်ပိုင်းမှာ PHP ဟာ busywork တွေနဲ့ maintainances တွေကိုလျှော့ချပြီး ကျွန်တော်တို့ရဲ့ webpage ကို ပိုပြီးတော့ faster ဖြစ်အောင် ပြုလုပ်သွားမှာဖြစ်ပါတယ်။</p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            &lt;!DOCTYPE html&gt;
            &lt;html lang="en"&gt;
            &lt;head&gt;
                &lt;meta charset="UTF-8"&gt;
                &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
                &lt;title&gt;PHP on the Web&lt;/title&gt;
            &lt;/head&gt;
            &lt;body&gt;
                &lt;h1&gt; &lt;?php echo "Aung Zin Latt"?&gt; &lt;/h1&gt;
            &lt;/body&gt;
            &lt;/html&gt;
        </code>
    </pre>
    <p>The result of above code:</p>
    <p><h1>Aung Zin Latt</h1></p>
    <hr>

    <h2>DRY Principle</h2>
    <p>အခုကျွန်တော်တို့ဟာ webpage တစ်ခုပေါ်မှာ PHP file ဘယ်လို process လုပ်လဲဆိုတာ သိပါပြီ။ Variables တွေဟာ data တွေကို store လုပ်ဖို့နည်းလမ်းတစ်ခုဖြစ်တယ်ဆိုတာ မှတ်ထားရပါမယ်။ Variable တစ်ခုအတွင်းမှာ data ကို store လုပ်ရတဲ့အကြောင်းကတော့ အဲ့ဒီ store လုပ်လိုက်တဲ့ data ကို ကျွန်တော်တို့ရဲ့ code ထဲမှာ ပြန်သုံးဖို့ဖြစ်ပါတယ်။ သူဟာ data ကို နေရာတစ်ခုတည်းမှာပြောင်းလိုက်တာနဲ့ အဲ့ဒီ data ကိုယူသုံးထားတဲ့ every line of code ရဲ့ နေရာတိုင်းမှာ လိုက်ပြီးတော့ ပြောင်းလဲသွားမှာဖြစ်ပါတယ်။ ဒါဟာ programming မှာရှိတဲ့ variable ရဲ့ tenets or key concepts ပဲဖြစ်ပါတယ်။ အဲ့ဒါကိုဘာလို့ခေါ်လဲဆိုရင်တော့ DRY principle လို့ခေါ်ပါတယ်။ DRY ရဲ့ အရှည်ကောက်ကတော့ don't repeat yourself ပဲဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ code တွေကို ရေးချင်တယ်၊ ဥပမာ တူညီတဲ့ string တွေကို ထပ်ခါထပ်ခါရေးချင်တယ်ဆိုရင်တော့ DRY programming techniques ကိုသုံးခြင်းဖြင့် ကျွန်တော်တို့ရဲ့ programming ဟာ improve ဖြစ်လာမှာဖြစ်ပါတယ်။ DRY principle ရဲ့ အသုံးပြုပုံကို အောက်မှာ Example နဲ့ပြထားပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            $name = 'Aung Zin Latt';

        ?&gt;
        &lt;!DOCTYPE html&gt;
        &lt;html lang="en"&gt;
        &lt;head&gt;
            &lt;meta charset="UTF-8"&gt;
            &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
            &lt;title&gt;DRY principle&lt;/title&gt;
        &lt;/head&gt;
        &lt;body&gt;
            &lt;h1&gt;&lt;?php echo $name; ?&gt;&lt;/h1&gt;
            &lt;h3&gt;I am &lt;?php echo $name; ?&gt;&lt;/h3&gt;
            &lt;p&gt;My name is &lt;?php echo $name; ?&gt;.&lt;/p&gt;
        &lt;/body&gt;
        &lt;/html&gt;    
        </code>
    </pre>
    <p>
        <a href="dry_principle.php" target="_blank" class="output">The result of above code:</a> 
    </p>
    <hr>

    <h2>PHP Do the Work</h2>
    <p>ကျွန်တော်တို့ဟာ variables တွေကို PHP နဲ့သုံးပြီး updates တွေကို မြန်ဆန်စေဖို့ ပြုလုပ်ခဲ့ပြီးပါပြီ။ ကျွန်တော်တို့ရဲ့ PHP မှာ complex ဖြစ်တဲ့ programming tesks တွေကို handle လုပ်ဖို့အတွက်သုံးနိုင်တဲ့ built in functions တွေ များစွာပါဝင်ပါတယ်။ ကျွန်တော်တို့ရဲ့ date တွေကို automatically ပြောင်းချင်တယ်ဆိုရင်တော့ PHP ရဲ့ built in function ဖြစ်တဲ့ date( ) function ကိုသုံးရမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ four digits ဖြစ်တဲ့ year ကိုလိုချင်တဲ့အတွက် date ( ) function ထဲမှာ Y ဆိုတာထည့်ပါမယ်။ Eg. (date ('Y') ) ။ ကျွန်တော်တို့ရဲ့ webpage တွေမှာ များသောအားဖြင့် date တွေပါရင် current year ကိုပဲသူ့အလိုလို ပြောင်းစေချင်တာပါ။ ဒါကြောင့် date ( ) function ကိုသုံးရခြင်းဖြစ်ပါတယ်။ ကျွန်တော်တို့ရဲ့ date() function မှာဆိုရင် second optional parameter ကိုလည်း pass လုပ်နိုင်ပါတယ်။ Default အနေနဲ့ သူဟာ current timestamp ကိုသုံးပါတယ်။ ဒါပေ့မယ် timestamp ကိုလည်း ကျွန်တော်တို့အသုံးပြုချင်တဲ့ date or time အမျိုးမျိုးတဲ့သုံးလို့ရပါသေးတယ်။ Timestamp ကို create လုပ်ဖို့ PHP နဲ့သုံးလို့ရတဲ့ နည်းလမ်းတွေအများကြီးရှိပါတယ်။ နောက်ဆုံး modified လုပ်ထားတဲ့ date ကိုလိုချင်ရင် <a href="https://www.php.net/manual/en/function.getlastmod.php" target="_blank">  getlastmod </a> ဆိုတဲ့ function ကိုအသုံးပြုနိုင်ပါတယ်။ getlastmod ဟာ ကျွန်တော်တို့ current page ရဲ့ နောက်ဆုံး modified လုပ်ထားတဲ့ date ကိုယူပေးပါတယ်။ Perl Programming Language ရဲ့ author ဖြစ်တဲ့ Larry Wall ရဲ့အဆိုအရ ပျင်းရိခြင်းဟာ programmer တွေရဲ့ သူတော်ကောင်းတရား ဖြစ်ပါတယ်။ ဘာလို့လဲဆိုရင်တော့ ပျင်းရိခြင်းဟာ အခြားသူတွေအတွက် အသုံးဝင်နိုင်တဲ့ labor saving programs ကိုဖြစ်စေပါတယ်။ ဒါကြောင့် သင်ရေးတဲ့ program ကို complain နည်းစေဖို့အတွက် သင့်ရဲ့ code ကို သေချာရေးထားဖို့လိုပါတယ်။</p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            &lt;p&gt; &lt;?php echo date('Y'); ?&gt; &lt;/p&gt;
            &lt;p&gt; &lt;?php echo "Last Modified:" . date("F d Y H:i:s.", getlastmod()); ?&gt; &lt;/p&gt;
        </code>
    </pre>
    <p>The result of above code:</p>
    <p>2020 <br> Last Modified: March 17 2020 05:44:01.</p>
    <hr>

    <h2>Combining Multiple Files with includes</h2>
    <p>ကျွန်တော်တို့အနေနဲ့ programming ရဲ့ variable, operators တွေနဲ့ conditionals တွေကိုလေ့လာခဲ့ပြီးဖြစ်ပါတယ်။ PHP ဟာ ကျွန်တော်တို့ webpage မှာ ဘယ်လိုအလုပ်လုပ်လဲဆိုတာပါ သိခဲ့ပြီးပါပြီ။ ကျွန်တော်တို့ဟာ complex applications တွေရေးမယ်ဆိုရင် code တွေအများကြီးနဲ့ ရေးရမှာဖြစ်ပါတယ်။ ဒါကြောင့်မို့ code တွေကို multiple files အဖြစ်ခွဲရေးလိုက်ချင်းဟာ code section တစ်ခုချင်းစီကို အလွယ်တကူ ရှာရလွယ်မယ်၊ ဖတ်ရလွယ်မယ်၊ အလုပ်လုပ်ရတာလည်း လွယ်ကူမှာဖြစ်ပါတယ်။ CSS ကို link ချိတ်သလိုပဲ  inline style နဲ့မရေးဘဲ CSS file တစ်ခုဆောက်ပြီး သူ့ကို ခေါ်သုံးတာနဲ့တူတူပါပဲ။ PHP ဟာလည်း အခြား file တွေကို include လုပ်ခွင့်ပေးထားပြီး ကျွန်တော်တို့ page ရဲ့ အစိတ်အပိုင်းတစ်ခုအနေနဲ့ အလုပ်လုပ်ပေးပါတယ်။ ဒါပေမယ့် file တွေကတော့ separate ဖြစ်နေပါလိမ့်မယ်။ ကျွန်တော်တို့ code ထဲမှာ PHP scripts တွေမထည့်ခင် file ရဲ့ structure ကိုရှင်းထားဖို့လိုပါတယ်။ ကျွန်တော်တို့ file ရဲ့ main directory မှာ ကျွန်တော်တို့ တစ်ကယ်ပြမယ့် site ရဲ့ file တစ်ခုပဲထားပေးရပါမယ်။ အခြား CSS နဲ့ IMG တွေအတွက်ကိုတော့ folder တစ်ခုနဲ့ သပ်သပ် ထားပါမယ်။ ပြီးရင် ကျွန်တော်တို့အနေနဲ့ external php file တစ်ခုကို inc ဆိုတဲ့ folder ထဲမှာ တည်ဆောက်လိုက်မယ်။ ပြီးရင် အဲ့ဒီ PHP file ကို include ဆိုတဲ့ keyword နဲ့ပြန်ခေါ်မှာဖြစ်ပါတယ်။ include ရဲ့ နောက်မှာတော့ PHP file name လိုက်ပြီး သူ့ကို quote ထဲမှာ ထည့်ရေးပေးရပါမယ်။ နောက်ဆုံးမှာတော့ semicolon နဲ့ ဆုံးပေးရပါတယ်။</p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            &lt;!DOCTYPE html&gt;
            &lt;html lang="en"&gt;
            &lt;head&gt;
                &lt;meta charset="UTF-8"&gt;
                &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
                &lt;title&gt;Combining Files with includes&lt;/title&gt;
            &lt;/head&gt;
            &lt;body&gt;
                &lt;h2&gt;Unit Converter&lt;/h2&gt;
                &lt;?php include 'inc/unit_convert.php' ?&gt;
                &lt;hr&gt;
                &lt;h2&gt;Daily Exercise Program&lt;/h2&gt;
                &lt;?php include 'inc/daily_ex.php' ?&gt;
            &lt;/body&gt;
            &lt;/html&gt;
        </code>
    </pre>
    <p>
        <a href="inc/exercise.php" target="_blank" class="output">The result of above code:</a>
    </p>
    <hr>

    <h2>Practice if/else in PHP</h2>
    <p>Practice လုပ်ခြင်းဟာ proficient developer တစ်ယောက်ဖြစ်လာဖို့အတွက်ဆိုရင် မရှိမဖြစ်ကို အရေးပါတဲ့အရာဖြစ်ပါတယ်။ Practice ကို ကောင်းကောင်းလုပ်ခြင်းအားဖြင့် ကျွန်တော်တို့ နေ့စဉ်ကြုံတွေ့ရမယ့် challenges တွေကို လွယ်ကူလျင်မြန်စွာ ကျော်ဖြတ်နိုင်မှာ ဖြစ်ပါတယ်။ ကျွန်တော်တို့ အခု PHP နဲ့ practice လုပ်မှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ရဲ့ index.php file ထဲမှာ initial variables အချို့ကို ကြေငြာထားပါမယ်။ Challenge ကို complete ဖြစ်ဖို့အတွက် step 6 ခုရှိပြီး သူတို့ကို comment နဲ့ရေးပြထားပါတယ်။ အဲ့ဒီ comment တွေကိုဖတ်ပြီး ကျွန်တော်တို့ဟာ practice လုပ်မှာဖြစ်ပါတယ်။ ပထမဆုံး step ကတော့ myLines လို့ခေါ်တဲ့ variable တစ်ခုကြေငြာပြီး သူ့ထဲကို 4000000 ဆိုတဲ့ integer value ထည့်ပါမယ်။ ဒုတိယ step ကတော့ ကျွန်တော်တို့ပေးလိုက်တဲ့ myLines ဆိုတဲ့ variable ဟာ $osx နဲ့ညီလားဆိုတာကို if statement နဲ့စစ်ပြီး ညီတယ်ဆိုရင် echo နဲ့ string ကိုထုတ်ပေးမှာဖြစ်ပါတယ်။ Step 3 ကလည်း myLines ဟာ $android ထက်ကြီးလားဆိုတာ if statement နဲ့စစ်မယ် ကြီးတယ်ဆိုရင် string value ကိုထုတ်ပေးမယ်။ Step 4 က myLines ဟာ $apollo11 ထက်ကြီးလားဆိုတာ else if statement နဲ့စစ်မယ် ၊ မှန်နေရင် string ကို display လုပ်ပေးပါမယ်။ အဆင့် 5 ကတော့ string ကို display လုပ်ဖို့ နောက်ဆုံး else statement ကိုထည့်ပါမယ်။ နောက်ဆုံး step 6 ကတော့ myLines variable ရဲ့ value လို့ မျိုးစုံပြောင်းထည့်ပြီးတော့ ကျွန်တော်တို့ဟာ possibilities ရောက်သည်အထိ test လုပ်ကြည့်ပါမယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            &lt;php

            $apolloll = 145000;
            $android = 12000000;
            $osx = 86000000;

            //Step 1: Create a variable named 'myLines' and set it's value equal to the integer 4000000
            $myLines = 4000000;

            //Step 2: Use an if statement to check whether 'myLines' is greater than #osx, and if so, display the string "You have written more code than is included in MacOS 10.4."
            if($myLines > $osx) {
                echo "You have written more code than is included in MacOS 10.4";
            }

            //Step 3: Add an else if statement to check whether 'myLines' is greater than $android, and if so, display the string "You have written more code than it takes to run an Android phone."
            elseif ($myLines > $android) {
                echo "You have written more code than it takes to run an Android phone.";
            }

            //Step 4: Add another elseif statement to check whether 'myLines' is greater than $apolloll, and if so, display the string "You have written more code than if took to launch Apollo 11"
            elseif ($myLines > $apolloll) {
                echo "You have written more code than it took to launch Apollo 11.";
            }

            //Step 5: Add an else statement to display the string "Keep writting code to accomplish something great!."
            else {
                echo "Keep writting to accomplish something great!.";
            }

            //Step 6: Test your code by changing the value of 'myLines' until you have reached all possibilities. (examples: -14552880, 45000000,1449100800)

        ?&gt;    
        </code>
    </pre>
    <p>
        <a href="inc/if_else.php" target="_blank" class="output">The result of above code:</a>
    </p>
    <hr>

    <h2>Handling Exception</h2>
    <p>Exception တွေဟာ errors တွေကို handle လုပ်ဖို့အတွက်သုံးတဲ့ object oriented approach ပဲဖြစ်ပါတယ်။ Exception ဆိုတာ ကျွန်တော်တို့ တစ်ခုခုမှာသွားတဲ့အခါ event ထဲက ကျွန်တော်တော် application က throw လုပ်လိုက်တဲ့ object တစ်ခုဖြစ်ပါတယ်။ သူဟာ ကျွန်တော်တို့ program ရဲ့ flow ကို ဖေါ်ပြပေးနိုင်ပါတယ်။ ပြီးတော့ application ကနေ exit လုပ်လိုက်တာ (သို့) ကျွန်တော်တို့ application မှာရှိတဲ့ errors တွေကို ဘယ်လို handle လုပ်ရမလဲဆိုတာ customize လုပ်ပေးပါတယ်။ Exception တစ်ခုက throw ဖြစ်နေတဲ့အခါ exception ကို caught or handle မလုပ်မချင်း process လုပ်နေတာကို ရပါနားထားမှာဖြစ်ပါတယ်။ တစ်ကယ်လို့ exception ကို handle မလုပ်ရင်တော့ application က အလုပ်မလုပ်ပေးတော့ပဲ ရပ်နေမှာဖြစ်ပါတယ်။ အဲ့ဒီ handle မလုပ်ရသေးတဲ့ exception ဟာ fatal error ရဲ့ behavior ပဲဖြစ်ပါတယ်။ Exception ဘာလို့လုပ်ပေးရလဲဆိုရင် သူတို့ကို catch လုပ်နိုင်တဲ့အတွက် အသုံးဝင်လို့ဖြစ်ပါတယ်။ Catching exceptions ဟာ ကျွန်တော်တို့ application ကိုဆက်လက် အလုပ်လုပ်စေပြီး error မရှိအောင် recover လုပ်ပေးထားပါတယ်။ ကျွန်တော်တို့ဟာ လက်ခံရရှိတဲ့ ဘယ် exception မဆိုရဲ့ type ကိုအခြေခံပြီး ဘာတွေဖြစ်နေလဲဆိုတာကို customize လုပ်နိုင်ပါတယ်။ Production တွေမှာဆိုရင် exceptions တွေကို handle မလုပ်တာဟာ page ရဲ့ loading ကို ရပ်စေတယ် (သို့မဟုတ်) အားလုံးကို loading မလုပ်ပေးတော့တာမျိုးတွေ ဖြစ်တတ်ပါတယ်။ ဒါပေမယ့် catch လုပ်ထားတဲ့ exception ကတော့ ကျွန်တော်တို့ရဲ့ exception တစ်ခုချင်းစီမှာ ဘာဖြစ်နေလဲဆိုတာကို ဆုံးဖြတ်ပေးနိုင်ပါတယ်။ ကျွန်တော်တို့ရဲ့ application ကိုသုံးနေတဲ့ user မှာ page error တက်နေတယ်ဆိုရင် ကျွန်တော်တို့က redirect လုပ်ပေးမယ်၊ issue ကို log လုပ်ပေးနိုင်သလို ၊ အခြားပုံစံတွေနဲ့လည်း error ကို handle လုပ်နိုင်ပါတယ်။ အခု PHP data object နဲ့ database exceptions တွေကို catch လုပ်ဖို့အတွက်သုံးတဲ့ syntax ကိုလေ့လာကြည့်ရအောင်။ ပထမဆုံး ကျွန်တော်တို့မှာ try ဆိုတဲ့ keyword ရှိမယ်။ ပြီးရင် curly braces ထဲမှာ ကျွန်တော်တို့ try or execute လုပ်ချင်တဲ့ code ရှိမယ်။ အခုကျွန်တော်တို့ case မှာ sqlite database တစ်ခုကို connect လုပ်ထားပါတယ်လို့ ဥပမာထည့်ထားပါတယ်။ တစ်ကယ်လို့ connection လုပ်တဲ့အခါ sqlit ကို spelling မှားတာလိုမျိုး error တစ်ခု ဖြစ်လာပြီဆိုရင် ကျွန်တော်တို့ PDO class ဟာ နောက် block မှာကျွန်တော်တို့ catch လုပ်ထားတဲ့ exception တစ်ခုကို throw လုပ်မှာဖြစ်ပါတယ်။ catch ဆိုတဲ့ keyword နောက်မှာ ကျွန်တော်တို့ဟာ parenthesis နဲ့ PHP ကို ဘာကို catch လုပ်မှာပါလို့ ပြောမယ့် (Exception $e) ဆိုတာကို ထည့်ပေးရမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ Exception ရဲ့နောက်မှာတော့ variable အသစ်တစ်ခု $e လို့ assign လုပ်လိုက်ပြီး အဲ့ဒီ var $e နဲ့ exception methods တွေကို အသုံးပြုနိုင်မှာဖြစ်ပါတယ်။ အောက်က example မှာတော့ method သုံးခုနဲ့ သုံးပြထားပါတယ်။ getMessage( ) ကတော့ could not find driver လို့ return ပြန်ပေးမှာဖြစ်တယ်။ getFile( ) က file ရဲ့ path လမ်းကြောင်း အပြည့်အစုံကို return ပြန်ပေးမှာဖြစ်ပြီး getLine( ) ဆိုတဲ့ method ကတော့ exception error ဖြစ်နေတဲ့ line number ကိုဖေါ်ပြပေးမှာဖြစ်ပါတယ်။ Exception class အတွက် နောက်ထပ်သုံးလို့ရတဲ့ methods တွေရှိပါသေးတယ်။ ဒါတွေကို နောက်သင်ခန်းစာတွေမှာပြောပြသွားမှာဖြစ်ပြီး အခု Exception ကိုသုံးဖို့ သင့်လျော်တဲ့ အချက် ၄ ချက်ရှိပါတယ်။ ပထမတစ်ခုက exceptions တွေဟာ object oriented programming (OOP) ရဲ့ အစိတ်အပိုင်းပဲဖြစ်ပါတယ်။ Exception ကိုယ်တိုင်က object ဖြစ်နေတာကြောင့် object oriented approach ကို programming လုပ်ဖို့အတွက် အကောင်းဆုံးဖြစ်အောင် designed ပြုလုပ်ထားပါတယ်။ PHP ဟာ procedural code တွေနဲ့ အလုပ်လုပ်တဲ့အခါ error တွေကို handle လုပ်ဖို့အတွက် options တွေကို ပြုလုပ်လိုက်ပါတယ်။ ကျွန်တော်ကတော့ objects တွေနဲ့ဆိုရင် Exception ကိုသုံးပြီး ၊ procedural code တွေနဲ့ဆိုရင် errors ကိုပဲသုံးဖို့ အကြံပေးချင်ပါတယ်။ ဒုတိယတစ်ခုကတော့ Exceptions တွေဟာ exceptional ဖြစ်တယ်ဆိုတာပါပဲ။ ကျွန်တော်တို့အနေနဲ့ normal program flow ကို manage လုပ်ဖို့ exception ကိုမသုံးပါဘူး။ Try catch block ဟာ သူမပါပဲနဲ့ ကျွန်တော်တို့ application က ဆက်လက်ပြီး function ကျနေမှာဖြစ်တဲ့အတွက် သူဟာ if else statement နဲ့မတူပါဘူး။ တတိယတစ်ခုကတော့ Exceptions တွေကို handling လုပ်တယ်လို့ခေါ်ပါတယ်။ try catch block ကိုထည့်ပေးခြင်းဟာ exceptions တွေကို handle လုပ်မယ်လို့ပြောတာပါပဲ။ တစ်ကယ်လို့ solution ကို handle လုပ်ပြီး exception ကို ပြန်ပြီး throw လုပ်နေမယ်ဆိုရင်တောင် သူတို့ကို resolved လုပ်ပေးမယ်လို့ဆိုလိုတာပါ။ နောက်ဆုံးမှာတော့ Exceptions တွေဟာ silenced ဖြစ်နေတယ်လို့ မဆိုလိုပါဘူး။ ကျွန်တော်တို့အနေနဲ့ catch block ကို  empty ထားလိုက်မယ်ဆိုရင် သူဟာ exception ကို silence ဖြစ်တယ်လို့ ပြောလို့ရပါတယ်။ သူဟာ application ကိုရပါစေမှာမဟုတ်သလို catch block ထဲမှာလည်း error handling ရှိမှာမဟုတ်ပါဘူး။ Empty ဖြစ်နေတဲ့အတွက် Exception ဟာလည်း ပျောက်သွားသလိုဖြစ်သွားမှာပါ။ PHP ဟာ exceptions တွေ throws ဖြစ်တာကြောင့် try catch နဲ့ exception တွေကို catch မလုပ်ဘူးဆိုရင် problem တွေရှိလာနိုင်ပါတယ်။ Exceptions တွေကို handle လုပ်ခြင်းဟာ သူတို့ကို silence လုပ်ထားတာနဲ့မတူပါဘူး။ ကျွန်တော်တို့ရေးတဲ့ file က does not exist ဖြစ်နေမယ်ဆိုရင် Exception တစ်ခုကို throw လုပ်မယ်။ ပြီးတော့ does not exist ဖြစ်နေတဲ့ file ကို catch block မှာ create မယ်ဆိုရင် ကျွန်တော်တို့ဟာ exception ကို handle လုပ်လိုက်ပြီဖြစ်တဲ့အတွက် code တွေဟာလည်း ဆက်လက်ပြီး process လုပ်သွားမှာဖြစ်ပါတယ်။ Exceptions တွေဆိုတာ reason တစ်ခုကို user သိအောင် throw လုပ်ပေးတာဖြစ်ပြီး သူတို့ကို catch လုပ်မယ် ၊ handle လုပ်ပါမယ်။ သူတို့ကို ignore or silence မလုပ်သင့်ပါဘူး။  </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            /*
             * Basic Exception
             * Unable to connect: could not find driver in File: .../connection.php on line x
             */
            try {
               $db = new PDO("sqllite:".__DIR__."/database.db");
            } catch (Exception $e) {
               echo "Unable to connect: " . $e->getMessage()
                   . " in File: " . $e->getFile()
                   . " on line " . $e->getLine();
            }

            /*
             * Silencing Exceptions. NOT good practice
             */
            try {
                // do something that raises an exception
            }
            catch (Exception $e) {}


            //For Example with code

            &lt;?php
                error_reporting(1);
                //ini_set('display_errors', 'Off');

                class myData
                {
                    function getData()
                    {
                        if (!$file = fopen("data.txt", "r")) {
                            throw new Exception('Unable to access file');
                        }
                    }
                }

                $data = new myData();

                try {
                    $data->getData();
                } catch (Exception $e) {
                    echo $e->getMessage();
                }

                echo "End of File";
        </code>
    </pre>
    <hr>


    <h2>Sample Example of Exception</h2>
    <p>ကျွန်တော်တို့ဟာ PHP ကသူကိုယ်တိုင် throw လုပ်တဲ့ exceptions တွေကို ဘယ်လို catch လုပ်ရမလဲဆိုတာ example မှာ လေ့လာခဲ့ပြီးဖြစ်ပါတယ်။ ကျွန်တော်တို့ရဲ့ application မှာ သူ့ရဲ့ exception ကို ကိုယ်တိုင် throw လုပ်ဖို့ လေ့လာသွားမှာဖြစ်ပါတယ်။ သိထားရမှာကတော့ ကျွန်တော်တို့ application ဟာ normal flow မှာဆိုရင် မသုံးသင့်ဘူးဆိုပေမယ့် exception တွေဖြစ်လာရင်တော့ သုံးသင့်ပါတယ်။ အခုကျွန်တော်တို့ own exception တစ်ခုနဲ့ပြုလုပ်ကြည့်ရအောင်။ အမှန်တစ်ကယ် မရှိတဲ့ file ကို reading လုပ်ကြည့်မယ်။ ပထမဆုံး data.php ဆိုတဲ့ new file တစ်ခုတည်ဆောက်မယ်။ PHP tag ဖွင့်ပြီးတော့ သူ့ထဲမှာ echo နဲ့ "End of the File" လို့ထုတ်လိုက်ပါမယ်။ အခု file ကို read လုပ်ဖို့အတွက် $file = fopen("data.txt", "r"); လို့ရေးလိုက်ပါမယ်။ ပြီးရင် browser ကို run ကြည့်လိုက်တဲ့အခါမှာ No such file or directory ဆိုတဲ့စာသားနဲ့ warning တစ်ခုကို ရလာမှာဖြစ်ပါတယ်။ ဘာကြောင့်လဲဆိုရင် ဒါဟာ ရိုးရိုး warning တစ်ခုသာဖြစ်ပြီး ၊ fatal error မဟုတ်တဲ့အတွက်ကြောင့် script ဟာဆက်လက်ပြီး process လုပ်သွားပြီးတော့ "End of the File" ဆိုတဲ့စာသားကို ထုတ်ပေးမှာဖြစ်ပါတယ်။ Production server တစ်ခုပေါ်မှာတော့ ကျွန်တော်တို့ဟာ errors တွေအားလုံးကို ပြချင်မှာမဟုတ်ပါဘူး။ ဒါကြောင့် errors တွေ display လုပ်နေတာကို ရပ်အောင်လုပ်ပါမယ်။ ini_set ဟာ errors တွေ display လုပ်တာကို off ပေးတာပါ။ Browser ကိုပြန်ပြီး refresh လုပ်တဲ့အချိန်မှာ အစောကဖြစ်နေတဲ့ errors တွေ display မလုပ်တော့ဘဲ End of the File ကိုပဲ display လုပ်ပေးပါတယ်။ သူဟာ properly run နေတာဖြစ်တဲ့အတွက် ဘာဖြစ်သွားတယ်ဆိုတာကို အမှန်တကယ်မသိနိုင်ပါဘူး။ Exceptions တွေဟာ issues တွေကို catch လုပ်ဖို့နဲ့ ဘာတွေဖြစ်နေလဲဆိုတာကို control လုပ်ဖို့ ကျွန်တော်တို့ကို ခွင့်ပြုပေးထားပါတယ်။ ကျွန်တော်တို့ read လုပ်ချင်တဲ့ file ကို read လုပ်လို့မရဘူးဆိုရင် လို့ if statement နဲ့ရေးပြီး သူ့ထဲမှာ new exception တစ်ခုနဲ့ throw လုပ်ပါမယ်။ class object အသစ်တစ်ခုနဲ့ စသလိုပဲ ကျွန်တော်တို့ဟာ new Exception('Unable to access file"); လို့ရေးလိုက်ပါမယ်။ object variable တစ်ခုကို assign လုပ်မယ့်အစား သူ့နေရာမှာ throw ဆိုတဲ့ keyword ကိုသုံးပါမယ်။ Eg. throw new Exception("Unable to access file"); ။ ပြီးရင်  browser ကိုပြန် run တဲ့အခါ PHP က script ရဲ့ flow ကိုရပ်ပစ်လိုက်ပြီး ပမထဆုံး matching ဖြစ်တဲ့ catch block ကိုရှာမှာဖြစ်ပါတယ်။ PHP က throw လုပ်လိုက်တဲ့ exceptions တွေလိုပဲ exception ကို caught မလုပ်ဘူးဆိုရင် PHP fatal error က uncut exception message တစ်ခုနဲ့ issue တစ်ခုကို return ပြန်ပေးပါလိမ့်မယ်။ ကျွန်တော်တို့ဟာ display error ကို turn off လုပ်ထားတာကြောင့် error ကိုမြင်ရမှာ မဟုတ်ပါဘူး။ ဒါပေမယ့် error page (သို့) blank screen တစ်ခုတော့ ရပါလိမ့်မယ်။ ဘာလို့လဲဆိုရင်တော့ ကျွန်တော်တို့ script ဟာ processing ကိုရပ်လိုက်ပြီး "End of the File" ဆိုတဲ့ message မရနိုင်လို့ပဲဖြစ်ပါတယ်။ Fatal errors တွေကို display လုပ်ချင်ရင်တော့ error_reporting(1) လို့ထည့်ပေးရပါမယ်။ ဒါဆိုရင်တော့ browser က Uncaught Exception ဆိုတဲ့ fatal error ကို display လုပ်ပေးမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ errors တွေကို throw လုပ်ချင်ရင် သူတို့ကို catch လည်းလုပ်ဖို့လိုအပ်ပါတယ်။ ဒီလိုလုပ်ဖို့ဆိုရင်တော့ အစောက if condition ကို ခြုံပြီးတော့ try catch block ကိုရေးရမှာဖြစ်ပါတယ်။ နောက်ဆုံးက catch ထဲမှာတော့ Exception တစ်ခုကြေငြာပြီး $e ဆိုတာနဲ့ assign လုပ်ပါမယ်။ ထို့နောက် catch block ထဲမှာ exception handling ကိုလုပ်လို့ရနိုင်ပါပြီ။ ပြီးရင် browser ကို run လိုက်တဲ့အခါ catch ထဲက echo နဲ့ ထုတ်ထားတဲ့ error ကို ဖော်ပြပေးပြီး script ကိုလည်း ဆက်လက်ပြီး process လုပ်စေမှာပါ။ ဒါဟာ အလုပ်လုပ်ပေမယ့် ကျွန်တော်တို့သုံးချင်တဲ့ exception မဟုတ်ပါဘူး။ ကျွန်တော်တို့ဟာ object oriented code နဲ့ exceptions တွေကို သုံးချင်တာပါ။ class တစ်ခုတည်ဆောက်ပြီးတော့ getData() ဆိုတဲ့ function ထဲမှာ file ကို read လုပ်မှာဖြစ်ပါတယ်။ ပြီးရင်တော့ try catch block ထဲမှာ getData ကိုရဖို့အတွက် getData method ကိုခေါ်သုံးမှာဖြစ်ပါတယ်။ Browser ကို refresh လုပ်လိုက်တဲ့အချိန်မှာတော့ အစောကလုပ်ခဲ့သလိုမျိုး Unable to access file End of the File ဆိုပြီး echo နဲ့ထုတ်ထားတဲ့ message ကိုပေါ်ပေးမှာဖြစ်ပါတယ်။ ဒါဟာ ကျွန်တော်တို့ရဲ့ Exception ကို class တစ်ခုနဲ့ ဘယ်လို handle လုပ်မလဲဆိုတဲ့ object တစ်ခုနဲ့ ပြုလုပ်သွားတာဖြစ်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        error_reporting(1);
        //ini_set('display_errors', 'off');
                    
        class myData {
            function getData() {
                if(!$file = fopen("data.txt", "r")) {
                    throw new Exception('Unable to access file');
                }
            }
        }
        
        $data = new myData();
        
        try {
            $data->getData();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
        echo "End of the File";
        
        ?&gt;
        </code>
    </pre>
    <p>
        <a href="inc/sample_exception.php" class="output">The result of above code:</a>
    </p>
    <hr>


    <h2>Set Error Handling Function</h2>
    <p>အစောကဖော်ပြခဲ့သလိုပဲ object ကိုယ်တိုင်က exception တစ်ခုဖြစ်နေတာကြောင့် သူ့ကို object oriented programming အတွက် အကောင်းဆုံးအလုပ်လုပ်ပေးနိုင်တဲ့ design နဲ့ ပြုလုပ်ထားပါတယ်။ PHP ဟာ procedural code နဲ့အလုပ်လုပ်တဲ့အချိန်မှာ error handling အတွက် options အမျိုးမျိုးကို မိတ်ဆက်ခဲ့ပါတယ်။ ကျွန်တော်တို့ objects တွေနဲ့ အလုပ်လုပ်တဲ့အခါမှာ procedural code နဲ့ exceptions တွေအတွက် errors တွေပဲ အများဆုံးသုံးပါတယ်။ PHP ဟာ situations တွေအများစုမှာ exception ကိုမပေးဘဲ default အနေနဲ့ error တစ်ခုကိုပဲပေးတဲ့ exceptioned light language တစ်ခုဖြစ်ပါတယ်။ PHP 7 မှာဆိုရင် exception handling လုပ်တဲ့နည်းလမ်းတွေ ထပ်တိုးလာတာကြောင့် PHP နဲ့ PHP 7 ကို version ပြောင်းပြီးလေ့လာတဲ့အခါမှာ သေချာအာရုံစိုက်ထားသင့်ပါတယ်။ PHP 5 နဲ့ PHP 7 ဟာ errors တွေကို exceptions တွေအဖြစ်နဲ့ ပြောင်းပေးတဲ့ နည်းလမ်းကိုပေးနိုင်ပါတယ်။ ကျွန်တော်တို့အနေနဲ့ exceptions တွေကိုသုံးပြီးတော့ object oriented application တစ်ခုနဲ့ရေးမယ်ဆိုရင် ကျွန်တော်တို့ဟာ errors တွေကို exceptions တွေအဖြစ်ပြောင်းပြီးတော့ တူညီတဲ့နည်းလမ်းနဲ့ exceptions တွေကို handle လုပ်နိုင်ပါတယ်။ ဥပမာအဖြစ် new file တစ်ခုကို exceptions.php လို့တည်ဆောက်လိုက်မယ်။ သူ့ထဲမှာ php tag နဲ့ echo "End of the File"; လို့ထုတ်လိုက်မယ်။ ပြီးရင် strops(); ဆိုပြီး string passing မလုပ်တဲ့ function တစ်ခုထည့်ပါမယ်။ Browser မှာ run ကြည့်လိုက်တဲ့အခါမှာတော့ warning error တစ်ခုကိုတွေရမှာဖြစ်ပြီး exception ကိုတော့ မတွေ့ရပါဘူး။ ကျွန်တော်တို့ဟာ PHP ရဲ့ built in function ဖြစ်တဲ့ set_error_handler function ကို Handling errors တွေအတွက် ကိုယ်ပိုင် function ကို define လုပ်ဖို့အသုံးပြုပါမယ်။ သူ့နောက်က parenthesis ထဲမှာ ကျွန်တော်တို့ pass လုပ်ချင်တဲ့ function name ဖြစ်တဲ့ exception_error_handler  ကိုသုံးပါတယ်။ အဲ့ဒီ function ကို အပေါ်မှာတည်ဆောက်ပြီးတော့ set_error_handler ဟာ parameters တွေအဖြစ် five error details ကို pass လုပ်ပေးပါလိမ့်မယ်။ အဲ့ဒီ ငါးခုထဲက နှစ်ခုဟာ required ဖြစ်ပြီး ကျန်တဲ့သုံးခုကတော့ optional ပဲဖြစ်ပါတယ်။ ပထမဆုံး parameter က error level raised ဖြစ်တာကို သတ်မှတ်ပေးတဲ့ integer တစ်ခုပဲဖြစ်တယ်။ သူ့ကို $security လို့ပေးလိုက်မယ်။ ဒုတိယ parameter ကတော့ error message ပါတဲ့ string တစ်ခုဖြစ်ပြီး သူ့ကိုလည်း $message လို့ပေးလိုက်မယ်။ တတိယ parameter က optional ဖြစ်ပြီး error raised လုပ်လိုက်တဲ့ထဲက file name ပါတဲ့ string တစ်ခုဖြစ်ပါတယ်။ သူ့ကို $file လို့ပေးလိုက်ပါမယ်။ Fourth parameter ကလည်း optional ဖြစ်ပြီး error raised လုပ်လိုက်တဲ့ line number ပါတဲ့ integer တစ်ခုဖြစ်ပါတယ်။ သူ့ကို $line လို့နာမည်ပေးလိုက်မယ်။ နောက်ဆုံးဖြစ်တဲ့ ငါးခုမြောက် parameter ကတော့ optional လည်းဖြစ်တယ် ၊ error ကို trigger လုပ်တဲ့ထဲက scope ထဲမှာရှိတဲ့ variable တွေပါတဲ့ array တစ်ခုလည်းဖြစ်ပြီး သူ့ကို တစ်ချို့ situations တွေမှာလောက်ပဲသုံးတဲ့အတွက် ချန်ခဲ့လိုက်ပြီး မရေးနေတော့ပါဘူး။ အခု နောက်ထပ်လုပ်ရမှာကတော့ exception_error_handler ဆိုတဲ့ function ထဲမှာ new exception တစ်ခု throw လုပ်ရမှာဖြစ်ပါတယ်။ သူ့ရဲ့ parenthesis ထဲမှာတော့ ပထမဆုံး parameter က ကျွန်တော်တို့ရဲ့ own error code ကိုထည့်မှာဖြစ်ပြီး နောက်မှာတော့ 0 ရယ် ၊ $security ရယ် ၊ $file ရယ်နဲ့ $line ကိုထည့်ပေးရပါမယ်။ ပြီးရင် browser ကို refresh လုပ်လိုက်တဲ့အခါ ကျွန်တော်တို့ဟာ uncut error exception ကိုမြင်တွေ့ရမှာဖြစ်ပြီး ကျွန်တော်တို့ application ဟာ throws exception ရော ၊ errors တွေရောပါဖြစ်နေပါတယ်။ ဒါပေမယ့် ဒါတွေကို catch လုပ်ဖို့ လိုပါသေးတယ်။ အခု try catch block ကိုသုံးပြီး error display ဖြစ်နေတာကို turn off လုပ်ပါမယ်။ ကျွန်တော်တို့ရေးခဲ့တဲ့ function ရဲ့ အပေါ်မှာ ini_set('display_error', 'off'); လို့ရေးပြီး အောက်ဆုံးက strops() မှာ try catch ကိုရေးရမှာဖြစ်ပါတယ်။ ဒါဆိုရင်တော့ ကျွန်တော်တို့ exception ကို properly catch လုပ်ထားတာကို မြင်ရမှာဖြစ်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        ini_set("display_errors","Off");
        function exception_error_handler($severity, $message, $file, $line){
        throw new ErrorException($message, 0, $severity, $file, $line);
        }

        set_error_handler("exception_error_handler");

        try {
            strpos();
        } catch(Exception $e) {
            echo "ERROR! " .$e->getMessage();
        }

        echo "End Of File";
      
        ?&gt;
        </code>
    </pre>
    <p>
        <a href="inc/exceptions.php" class="html hljs xml">The result of above code:</a>
    </p>
    <hr>
    <p>Exceptions တွေကို ဒီတိုင်းထားခဲ့တာထက် သူတို့ကို တတ်နိုင်သလောက် catch & handle လုပ်တာက အကောင်းဆုံးဖြစ်ပါတယ်။ PHP ဟာ အဲ့ဒီ exceptions တွေကို handle လုပ်ဖို့အတွက် default exception handler တစ်ခုနဲ့ set လုပ်လို့ရပါတယ်။ Exception တစ်ခုဖြစ်အောင်လို့ အောက်ဆုံးမှာ echo နဲ့ 10/0 လို့ထည့်လိုက်မယ်။ ဒီလိုလုပ်လိုက်ရင် အပေါ်မှာပြထားတဲ့ End of the File ဆိုတဲ့ error မတက်ပါဘဲ 10/0 ရဲ့ exception error ပဲတက်မှာဖြစ်တယ်။ ဘာလို့လဲဆိုရင် အခုရေးလိုက်တဲ့ exception အသစ်ဟာ caught မလုပ်ထားတဲ့အတွက် script ရဲ့ execution ကလည်း အဲ့ဒီမှာပဲ stop ဖြစ်သွားပါမယ်။ Defualt exception handler ဟာ error handler တစ်ခုထည့်လိုက်တာနဲ့တူပါတယ်။ Eg.( set_exception_handler("exception_handler"); ) ။ set_exception_handler ထဲမှာ ကျွန်တော်တို့ အသုံးပြုချင်တဲ့ function ကို pass လုပ်ပေးရမှာဖြစ်ပါတယ်။ အဲ့ဒီ exception_handler ဆိုတဲ့ function ဟာ exception ကို throw လုပ်မယ့် parameter တစ်ခုတည်းကိုပဲ accept လုပ်ပေးတာဖြစ်ပါတယ်။ အခြားဘယ် caught exception နဲ့မဆို ကျွန်တော်တို့ကြိုက်သလို exception တွေကို handle လုပ်လို့ရပါတယ်။</p>
    <p>Example of exception_handler function:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        ini_set("display_errors","Off");
        function exception_error_handler($severity, $message, $file, $line){
        throw new ErrorException($message, 0, $severity, $file, $line);
        }

        set_error_handler("exception_error_handler");

        function exception_handler($e) {
            echo "Uncaught exception: " .$e->getMessage();
        }
        set_exception_handler("exception_handler");

        try {
            strpos();
        } catch(Exception $e) {
            echo "ERROR! " .$e->getMessage();
        }

        echo 10/0;

        echo "End Of File";

        ?&gt;
        </code>
    </pre>
    <p>
        <a href="inc/exception_handler.php" class="output">The result of above code:</a>
    </p>
    <hr>



    <h2>Basic Error Handling with PHP</h2>
    <p> Software မှာ အခြေခံဖြစ်တဲ့ error နှစ်မျိုးရှိပါတယ်။ ပထမကတော့ system error ဖြစ်ပြီး system error ဟာ ကျွန်တော်တို့ရဲ့ code ထဲမှာ logic errors ဖြစ်နေခြင်းဖြစ်ပါတယ်။ နောက်တစ်ခုကတော့ အပြင်ကဖြစ်နေတဲ့ external errors တွေဖြစ်ပါတယ်။ ဒီ errors တွေကတော့ ကျွန်တော်တို့ code ရဲ့ အပြင်ဘက်မှာ အပြန်အလှန် related ဖြစ်နေတဲ့ errors တွေပဲဖြစ်ပါတယ်။ ဘယ်လိုအရာတွေလည်းဆိုရင်တော့ file (သို့) database ကိုဖွင့်မရခြင်း ၊  network connection ကျသွားခြင်း ၊ အချို့သော PHP module ကို load မလုပ်နိုင်ခြင်းနဲ့ အခြားသောအကြောင်းအရာတွေကြောင့်ပဲဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ ဒီလို errors တွေနဲ့ ရှောင်လွှဲလို့မရဘူးဆိုပေမယ့် အကျိုးသက်ရောက်မှုကိုတော့ လျော့နည်းအောင်လုပ်လို့ရပါတယ်။ External errors တွေရှောင်ရှားဖို့အတွက် ကျွန်တော်တို့ code ကို ပိုပြီးပြင်ဆင်နိုင်လေလေ ကျွန်တော်တို့ program မှာ errors တွေနည်းလေလေဖြစ်ပါတယ်။ ဒီသင်ခန်းစာမှာတော့ errors တွေကို handling လုပ်တဲ့ နည်းလမ်းနဲ့ code ထဲမှာ errors တွေဘယ်လိုရှာရမလဲဆိုတာကို ပြောပြပေးသွားမှာပါ။ HTML ဟာ အလွန်ကို forgive ဖြစ်တဲ့အတွက် browser က webpage ကို render အကောာင်းဆုံးလုပ်နိုင်ဖို့ mistakes တွေကို ignore လုပ်ပေးပါတယ်။ PHP ကတော့ အဲ့လိုမဟုတ်ဘဲ stricter ဖြစ်ပြီး forgive လုပ်ပေးတာနည်းပါတယ်။ ဘယ် syntax errors တွေမဆိုဟာ page မှန်မှန်ကန်ကန် loading လုပ်မပေးနိုင်ပါဘူး။ Page ရဲ့ အချို့အစိတ်အပိုင်းပဲ load လုပ်နိုင်မယ် ၊ white screen နဲ့ မြင်ရမယ် ၊ ဒါမှမဟုတ်ရင်တော့ browser က error page ကိုပြပေးပါမယ်။ ဒီ errors တွေနဲ့ပတ်သတ်ပြီးတော့ သူတို့ကို handle လုပ်နိုင်တဲ့ step အချို့ရှိပါတယ်။ Logging လုပ်ခြင်းဟာ errors တွေကို log file ကနေ reviewed လုပ်ခြင်းနဲ့  stored လုပ်ခြင်းကို ခွင့်ပြုပေးပါတယ်။ ဒါတွေကို reports or alerts တွေနဲ့ပြခြင်းဖြင့် ဒီ errors တွေဘယ်ကဖြစ်နေလဲဆိုတာ ကျွန်တော်တို့ကို နားလည်စေပါတယ်။ Errors တွေကို display လုပ်ခြင်းဟာ developer or user တွေကို error ပြပေးလိုက်တာဖြစ်တဲ့အတွက် သူတို့ကို အလွယ်တကူနားလည်စေပါတယ်။ Issue တစ်ခုကို ignore လုပ်တာဟာ သူ့ကို handle မလုပ်ဘဲနေသလိုဖြစ်တဲ့အတွက် ignoring error လုပ်ခြင်းဟာ အလွန် dangerous ဖြစ်ပြီးတော့ နောက်ပိုင်းမှာ သူတို့ကို fix လုပ်ဖို့ ခက်ခဲလာပါလိမ့်မယ်။ ဒါကြောင့် error တွေကို အမြဲတမ်း တတ်နိုင်သလောက် handle လုပ်ရပါမယ်။  </p>
    <hr>


    <h2>Display Error and Error Type</h2>
    <p>Professional တွေတောင် code တွေရေးတဲ့အခါ mistypes (သို့) အချို့အရာတွေ မေ့ကျန်ခဲ့တာတို့ဖြစ်တတတ်ပါတယ်။ ဒါတွေကို ကျွန်တော်တို့ ဘယ်လိုရှာပြီး ဘယ်လို fix လုပ်ရမလဲ။ PHP မှာဆိုရင်တော့ အခြေခံအားဖြင့် error types (သို့) level errors သုံးမျိုးရှိပါတယ်။ ပထမကတော့ Notice ဖြစ်ပြီး Notices တွေဟာ script ရဲ့ executions တွေကို မရပ်ပေးပါဘူး။ Notice ရဲ့ example ကတော့ undefined ဖြစ်နေတဲ့ variable တစ်ခုကို access လုပ်တဲ့အချိန် (Notice: Undefined variable: VARIABLE_NAME in PATH_TO_FILE ) ဆိုတဲ့ error ကို browser ကပြပေးတာဖြစ်ပါတယ်။ Variable ကို access မလုပ်ခင် define လုပ်တာဟာ မလိုအပ်ဘူးဆိုပေမယ့် ဒါဟာ good practice ပဲဖြစ်တာကြောင့် လုပ်ပေးသင့်ပါတယ်။ နောက်တစ်ခုကတော့ warning ဖြစ်ပါတယ်။ Warnings တွေဟာ တစ်ခုခုမှားနေပါတယ်ဆိုတာကို PHP က ပြောပေးတာဖြစ်ပါတယ်။ Warning ဖြစ်တဲ့နေရာကို fix မလုပ်ရင် နောင်ပိုင်းမှာ error ဖြစ်သွားနိုင်ပါတယ်။ Warning တွေဟာ script ရဲ့ execution ကို မရပါဘူး။ ဥပမာ missing ဖြစ်နေတဲ့ file တစ်ခုကိုထည့်ထားတယ်ဆိုရင် ( Warning: include(PATH_TO_FILE): failed to open stream: No such file or directory ) လို့ပြပေးမှာဖြစ်ပါတယ်။ နောက်ဆုံးတစ်ခုကတော့ PHP ကပြောတဲ့ ကျွန်တော်တို့ တစ်ခုခုမှားရေးတာတို့၊ ရေးလိုက်တဲ့ script ကို process လုပ်မပေးနိုင်တဲ့အခါမှာဖြစ်တဲ့ fatal error ပဲဖြစ်ပါတယ်။ Fatal errors တွေဟာ PHP ကနားမလည်တဲ့ logical error (သို့) syntax တွေတွေ့တဲ့အခါမှာ ဖြစ်တတ်ပါတယ်။ ဥပမာ dividing by zero ဟာ မရှိတဲ့ function တစ်ခုကို access လုပ်တဲ့အခါ (သို့) memory ရဲ့ space က မလောက်တော့တဲ့အခါမှာ fatal errors တွေဖြစ်ပါတယ်။ အပေါ်က Notice နဲ့ Warning နဲ့မတူတာက fatal errors တွေဟာ script ရဲ့ execution ကိုရပ်ပစ်လိုက်ပါတယ်။ PHP 7 မှာဆိုရင် fatal errors တွေနဲ့ပတ်သတ်ပြီး တိတိကျကျ ဖော်ပြပေးထားပါတယ်။ ကျွန်တော်တို့ code ထဲမှာ တစ်ခုခုမှားတဲ့အခါ blank white page ကိုပြခြင်းထက် PHP error တစ်ခုအနေနဲ့ပြခြင်းက ပိုမိုကောင်းမွန်ပါတယ်။ Errors တွေကို display လုပ်ဖို့ server ကိုခိုင်းတဲ့နည်းလမ်း သုံးမျိုးရှိပါတယ်။ ပထမတစ်ခုက php.ini file ၊ ဒုတိယ တစ်ခုက web server ပေါ်က .htaccess file နဲ့ နောက်တစ်ခုကတော့ own PHP code ပဲဖြစ်ပါတယ်။ Production server မှာတော့ ဒီ PHP system errors တွေမပြဖို့ အလွန်အရေးကြီးပါတယ်။ ကျွန်တော်တို့ရဲ့ error messages တွေကို site vistors တွေဆီပြခြင်းဟာ site setup နဲ့ပတ်သတ်တဲ့ important information တွေကို ထုတ်ပြလိုက်သလိုဖြစ်ပြီး ကျွန်တော်တို့ site ကို hackers တွေက cross-site scripting attack လုပ်တာကို ကူညီပေးသလိုဖြစ်စေမှာပါ။ ဒါဟာ ကြီးမားတဲ့ security risk ကိုဖြစ်စေနိုင်ပါတယ်။ </p>
    <hr>


    <h2>php.ini File to Catch Error</h2>
    <p>ကျွန်တော်တို့ siteကို user တွေဆီ launch မလုပ်ခင် site ကို test လုပ်ဖို့ development server တစ်ခုရှိတယ်ဆိုရင် PHP errors အားလုံးကို ပြဖို့အတွက် အဲ့ဒီ development server ကို configure လုပ်သင့်ပါတယ်။ သို့သော်လည်း world အတွက် live ဖြစ်တဲ့ production server မှာတော့ screen မှာ PHP system errors တွေကို လုံး၀ display မလုပ်သင့်တော့ပါဘူး။ ကျွန်တော်တို့ site's visitors တွေရဲ့ problem ကို inform လုပ်ဖို့ ပိုsecure ဖြစ်ပြီး ၊ helpful ဖြစ်တဲ့ နောက်ထပ်နည်းလမ်းတွေရှိပါသေးတယ်။ ဥပမာ error ကို catch or exception လုပ်ပြီးတော့ user ဆီကို message တစ်ခုပြပေးတာတို့ပဲဖြစ်ပါတယ်။ Errors တွေကို display လုပ်ဖို့ development server ကို set up လုပ်ခြင်းဖြင့် သူတို့အပေါ်မှာ အလုပ်လုပ်ပေးမယ့် ကျွန်တော်တို့ projects အားလုံးအတွက် consistent setup တစ်ခုပြုလုပ်ရမှာဖြစ်ပါတယ်။ ဒါကိုပြုလုပ်ဖို့အတွက် ပထမဆုံး php.ini file ဟာ ဘယ်နားမှာရှိလဲဆိုတာ သိဖို့လိုအပ်ပါတယ်။ ဒီ file ဟာ standard location တွေရှိတယ်ဆိုပေမယ့် ရှာလို့လွယ်ကူစေမယ့် နည်းလမ်းရှိပါတယ်။ PHP info function ဟာ ကျွန်တော်တို့ လက်ရှိ run နေတဲ့ project အတွက် PHP environment ရဲ့ details ကိုရပါလိမ့်မယ်။ ကျွန်တော်တို့အနေနဲ့ phpinfo( ) function ရဲ့ call ကို PHP file ရဲ့ ကြိုက်တဲ့နေရာမှာထားလို့ရပါတယ်။ ဒါဆိုရင်တော့ phpinfo file တစ်ခုရလာမှာဖြစ်ပြီး သူ့ကို serach မှာ php.ini လို့ရိုက်ရှာလိုက်ရင် သူ့ရဲ့ path လမ်းကြောင်းကို တွေ့ရမှာဖြစ်ပါတယ်။</p>
    <pre>
        <code class="html hljs xml">
            &lt;php

            phpinfo();

            ?&gt;
        </code>
    </pre>
    <hr>


    <h2>htaccess File to Catch Error</h2>
    <p>htaccess file ဟာ directory level တစ်ခုမှာ ကျွန်တော်တို့ server ရဲ့ configuration ကိုပြောင်းလဲဖို့အတွက် ခွင့်ပြုပေးပါတယ်။ ဒါဟာ php.ini file ကို access လုပ်လို့မရတဲ့အခါ shared server တစ်ခုမှာ အကောင်းဆုံးရွေးချယ်မှုဖြစ်ပါတယ်။ htaccess file ဟာ php.ini file (သို့) အခြား  configuration files တွေပေါ်ကို overwrite လုပ်သွားပါလိမ့်မယ်။ ကျွန်တော်တို့ဟာ htaccess file ကို errors level တွေကို display လုပ်ဖို့အတွက် turn on , turn off နဲ့ change လုပ်နိုင်ပါတယ်။ ကျွန်တော်တို့မှတ်ထားရမှာကတော့ .htaccess files တွေဟာ hidden files တွေဖြစ်ပြီးတော့ ၊ တစ်ခါတစ်ရံမှာ သူ့ကိုအသုံးပြုမယ်ဆိုရင် သတိထားရပါမယ်။ တစ်ကယ်လို့ ဒီ method ကိုသုံးမယ်ဆိုရင်တော့ .htaccess file ဟာ redirection လိုအရာမျိုးတွေမှာ မကြာခန သုံးတယ်ဆိုတာ သတိထားသင့်ပါတယ်။ သူဟာ ကျွန်တော်တို့ application မှာရှိတဲ့ ကျန်နေတဲ့ files တွေနဲ့ အသုံးပြုထားတဲ့ another file တစ်ခုလည်းဖြစ်ပါတယ်။ ဒီလို concerns တွေကြောင့် ကျွန်တော်တို့ version control system ကို ဒီ file ကိုထည့်သုံးတဲ့အခါ သတိပြုသင့်ပါတယ်။ .htaccess file မှာ line အားလုံးကို pound sign (#) နဲ့စထားတာဖြစ်ပါတယ်။ ဒါတွေဟာ PHP code တွေမဟုတ်ပါဘူး။ htaccess file ဟာ ကျွန်တော်တို့ရဲ့ Apache web server အတွက် configuration file တစ်ခုသာဖြစ်ပါတယ်။ ပထမ line ကတော့ Apache web server ကို startup errors တွေ display လုပ်မယ်လို့ပြောလိုက်တာပါ။ ဒုတိယ line က အခြား errors အားလုံးကို display လုပ်မယ်လို့ server ကိုပြောလိုက်ဖြစ်ပါတယ်။ တတိယ line ကတော့ PHP errors အားလုံးရဲ့ report တွေကို သတ်မှတ်ပေးခြင်းဖြစ်ပါတယ်။ Fourth line ဟာဆိုရင် HTML markup ရဲ့ errors တွေကို ဖတ်ဖို့လွယ်ကူစေဖို့အတွက် turn on လုပ်လိုက်တာပါ။ ကျွန်တော်တို့အနေနဲ့ server ကို access မလုပ်ရဘူးဆိုရင် ဒါဟာ best option ပဲဖြစ်ပါတယ်။ သတိထားရမှာ တစ်ခုကတော့ ကျွန်တော်တို့ development setting ကို production server ပေါ်ကိုမတင်မိဖို့ပါပဲ။ ဒါဟာ အပေါ်သင်ခန်းစာမှာ ပြောပြခဲ့တဲ့ own PHP code ကို ဖြစ်စေပါတယ်။</p>
    <p>Example of .htaccess File:</p>
    <pre>
        <code class="html hljs xml">
            #PHP error handling for development servers

            #display startup error
            php_flag display_startup_error On

            #display all other errors
            php_flag display_errors On

            #specify recording of all php errors
            php_value error_reporting -1

            #html markup of errors, make them easier to read
            php_flag html_error On
        </code>
    </pre>
    <hr>


    <h2>Own PHP File to Catch Error</h2>
    <p>အမှန်တစ်ကယ် PHP file တစ်ခုအတွင်းမှာရှိတဲ့ errors တွေကို turn on လုပ်ခြင်းဟာ အထူးသဖြင့် ကျွန်တော်တို့ server ဆီကို access မလုပ်နိုင်တဲ့အခါ (သို့) page တစ်ခုပေါ်က error တစ်ခုကို track လိုက်တဲ့အခါမှာ အကူညီဖြစ်စေပါတယ်။ သူဟာ php.ini file ထဲမှာရှိတဲ့ setting ကိုလည်း override လုပ်နိုင်ပါသေးတယ်။ ကျွန်တော်တို့အနေနဲ့ error level တွေကို display လုပ်ဖို့အတွက် turn on, turn off နဲ့ change စတာတွေကို အသုံးပြုနိုင်ပါတယ်။ Own PHP file နဲ့သုံးတဲ့အခါ problem ကတော့ parse errors တွေဟာ ကျွန်တော်တို့ရဲ့ code တွေအားလုံး process လုပ်နေခြင်းကနေ PHP ကို ရပ်ပစ်လိုက်တာဖြစ်ပါတယ်။ ဆိုလိုတာကတော့ PHP ဟာ အဲ့ဒီ setting တွေကို ဘယ်တော့မှ မြင်ရတော့မှာ မဟုတ်ပါဘူး။ ကျွန်တော်တို့ display လုပ်ချင်တဲ့ errors တွေကို server ကိုပြောဖို့အတွက်ဆိုရင် php tag အဖွင့်ရဲ့အောက် အပေါ်ဆုံးမှာ line နှစ်ကြောင်းထည့်ပေးရပါမယ်။ ပထမတစ်ခုကတော့ error reporting ဖြစ်ပြီး ဒါဟာ error reporting အားလုံးကို set လုပ်လိုက်တာဖြစ်ပါတယ်။ နောက်တစ်ခုကတော့ ini_set ဖြစ်ပြီး သူ့မှာ display_errors ကို 1 ပေးလိုက်တာဟာ true လို့ယူဆပြီး display_errors ကို on လုပ်တာဖြစ်ပါတယ်။ နောက်တစ်ခုအနေနဲ့ html_errors တွေအတွက် ini_set တစ်ခု ထပ်ထည့်ထားပါသေးတယ်။ ကျွန်တော်တို့အနေနဲ့ particular line တစ်ခုအတွက် errors တွေကို ဖယ်ရှားချင်တယ်ဆိုရင်တော့ @ ဆိုတဲ့ symbol ကိုအသုံးပြုနိုင်ပါတယ်။ ဒါဟာ short time အတွက် warning တစ်ခုကို hide လုပ်ချင်တဲ့အခါမှာ (သို့) warning မပါဘဲ things တွေကို allow လုပ်ချင်တဲ့အခါမှာ တစ်ကယ်ကို သုံးဝင်နိုင်ပါတယ်။</p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            &lt;php 

            //Report simple running error
            error_reporting(E_ALL);

            //Make sure they're on screen
            ini_set('display_errors', 1);

            //HTML formatted errors 
            ini_set("html_errors", 1);

            $error_levels = array("E_ALL", "E_NOTICE", "E_ERROR", "E_STRICT", "E_DEPRECATED", "E_PARSE");

            foreach($error_levels as $error) {
                echo $error . "&lt;br /&gt;";
            }

            ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Error Handling</h2>
    <p>အခုကျွန်တော်တို့ error showing ကိုလေ့လာပြီးတဲ့နောက်မှာ အဲ့ဒီ errors တွေကို addressing လုပ်ဖို့အဆင်သင့်ဖြစ်နေပါပြီ။ Language အများစုဟာ code ထဲမှာ problem တစ်ခုခုရှိတိုင်း exception တစ်ခုကို throw လုပ်ပါတယ်။ ဒီ language တွေကို ကျွန်တော်တို့အနေနဲ့ exception heavy လို့ခေါ်ပါတယ်။ PHP ဟာ exception light language တစ်ခုဖြစ်ပါတယ်။ Case အတော်များများမှာ PHP ဟာ errors တွေပဲ output ထုတ်ပေးပါတယ်။ Errors တွေဟာ screen or local disk ၊ ဒါမှမဟုတ် နှစ်ခုစလုံးမှာ output ပြနိုင်ပါတယ်။ PHP ဟာ errors တွေကို report လုပ်လို့ရသလို ignore လည်းလုပ်လို့ရတာကို ကျွန်တော်တို့ ရွေးချယ်နိုင်ပါတယ်။ ပုံမှန်အဖြစ်အများဆုံး errors တွေကတော့ E_NOTICE, E_WARNING နဲ့ E_ERROR တို့ပဲဖြစ်ပါတယ်။ notice (သို့) warning တစ်ခု throw လုပ်ပြီးတဲ့နောက်မှာ PHP ဟာ script ကို ဆက်လက်ပြီး execute လုပ်သွားပါလိမ့်မယ်။ အခြားတစ်ဖက်မှာ E_ERROR or fatal errors တွေကတော့ script ကို unrecoverable way နဲ့ ရပ်ပစ်လိုက်ပါတယ်။ သူဟာ အလုပ်လုပ်နေရာကနေ လုံးဝမရပါတဲ့ notices or warning တွေကို ignore လုပ်ဖို့ တိုက်တွန်းလိုက်ပါတယ်။ ဒါပေမယ့် အဲ့ဒီအရာတွေကို အစတည်းက catching နဲ့ fixing လုပ်မယ်ဆိုရင် ဒါဟာ best practice ပဲဖြစ်ပါတယ်။ Developer အချို့ဟာ error levels တွေကို ini_set("html_errors", 1); လို့သတ်မှတ်ကြပါတယ်။ တစ်ခုမှတ်ထားရမှာကတော့ production server မှာ end-user တွေကို screen ပေါ်မှာ PHP ရဲ့ system errors တွေကို လုံးဝမဖော်ပြသင့်ပါဘူး။ ကျွန်တော်တို့ရဲ့ site visitors တွေဆီကို error messages တွေ display လုပ်ခြင်းဟာ important information တွေကို site ရဲ့ setup တွေနဲ့ပတ်သတ်ပြီး ပြောပြလိုက်သလိုဖြစ်ပြီးတော့ ကြီးမားတဲ့ security risk ကိုဖြစ်စေမှာပါ။ ဒါကြောင့် Production မှာဆိုရင် display errors တွေကို turn off လုပ်ထားရပါမယ်။ </p>
    <hr>


    <h2>Logging</h2>
    <p>Development လုပ်နေစဉ်အတွင်းမှာ screen ကို errors တွေ display လုပ်ခြင်းဟာ first step ပဲဖြစ်ပါတယ်။ Developer တွေဟာ Possible error တွေနဲ့တော့ အမြဲတမ်း run မနေပါဘူး။ ကျွန်တော်တို့ production တွေမှာ error ဘာလို့တက်လဲဆိုရင်တော့ logging တွေဝင်လာလို့ပဲဖြစ်ပါတယ်။ အခြား error settings တွေလိုပဲ logging ကို php.ini file ထဲမှာ ထားနိုင်ပါတယ်။ သို့သော်လည်း အဲ့ဒီ setting တွေကို htaccess file (or) specific PHP file နဲ့ ပြောင်းလဲနိုင်ပါတယ်။ Logging errors တွေအတွက် PHP file ထဲမှာ configuration option ကိုထည့်ချင်တယ်ဆိုရင်တော့ ini_set function ကိုအသုံးပြုပါတယ်။ log file name ကိုကျွန်တော်တို့ ကြိုက်သလိုပေးလို့ရပါတယ်။ ဒါပေမယ့် ဒါဟာ ideal solution တော့မဟုတ်ပါဘူး။ ဘာလို့လဲဆိုရင်တော့ တစ်ကယ်လို့ script က parse errors ရှိနေပြီး အားလုံးကို မ run ပေးနိုင်တဲ့အခါ ဘယ် errors တွေကိုမှာ log လုပ်နိုင်မှာမဟုတ်လို့ပါပဲ။ htaccess file ကတော့ php.ini file လိုမဟုတ်ဘဲ script မှာ parse errors ရှိနေတယ်ဆိုရင်တောင် errors တွေကို log လုပ်နိုင်ပါတယ်။ </p>
    <p>Example of logging.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            //Make sure we are logging errors
            ini_set("log_errors", 1);

            //Tell php where to log the errors
            ini_set("error_log", "php-error.txt");

            $error_levels = array("E_ALL", "E_NOTICE", "E_WARNING", "E_ERROR", "E_STRICT", "E_DEPRECATED", "E_PARSE");

            foreach($error_levels as $error) {
                echo $error . "&lt;br /&gt;";
            }

            ?&gt;
        </code>
    </pre>
    <p>Example of php-error.txt File:</p>
    <pre>
        <code class="html hljs xml">
            [21-Mar-2019 23:02:22 UTC] PHP Notice: Undefined variable: errors in /home/logging.php line 9
                [21-Mar-2019 23:02:22 UTC] PHP Warning: Undefined variable: errors in /home/logging.php line 10
        </code>
    </pre>
    <p>Example of .htaccess File:</p>
    <pre>
        <code class="html hljs xml">
                    #PHP error handling for development servers

            #display startup errors 
            php_flag display_startup_errors On

            #display all other errors
            php_flag display_errors On

            #specify recording of all php errors
            php_value error_reporting -1

            #html markup of errors, make them easier to read
            php_flag html_error On

            #log errors
            php_value log_errors 1

            #log file for errors
            php_value error_log php-error.txt
        </code>
    </pre>
    <hr>


    <h2>Array Introduction</h2>
    <p>အခုသင်ခန်းစာမှာတော့ ကျွန်တော်တို့ဟာ  code နည်းနည်းနဲ့ ပိုပြီး powerful & intelligent programs တွေဖြစ်အောင် conditionals, loops နဲ့ compound variable arrays စတဲ့အရာတွေကို လေ့လာသွားမှာဖြစ်ပါတယ်။ အခုကျွန်တော်တို့ conditional operator နဲ့ logic operator ကို စတင်ပြီးလေ့လာသွားမှာဖြစ်ပြီး conditional statements တွေကိုဖော်ပြဖို့အတွက် အသုံးပြုနိုင်တဲ့ options အမျိုးမျိုးကိုလည်း explore လုပ်သွားမှာဖြစ်ပါတယ်။ နောက်တစ်ခုကတော့ arrays တွေရဲ့ compound variable type ကို လေ့လာသွားပါမယ်။ Value တစ်ခုထက်ပိုပြီး ပါဝင်နိုင်တဲ့အတွက်ကြောင်း သူ့ကို compound variable type လို့ခေါ်ခြင်းဖြစ်ပါတယ်။ ဒါဟာ ကျွန်တော်တို့ကို ပိုပြီးရှုပ်ထွေးတဲ့ complex data တွေဖြစ်တဲ့ lists တွေနဲ့ dictionaries တွေကို store လုပ်ဖို့အတွက် အထောက်အကူပေးနိုင်ပြီး အဲ့ဒီ data တွေကို interesting ways တွေနဲ့  manipulate လုပ်ပေးပါတယ်။ နောက်ဆုံးမှာတော့ ကျွန်တော်တို့ဟာ PHP ထဲက code ရဲ့ flow ကို manage လုပ်နိုင်ဖို့အတွက် အမျိုးမျိုးသော Loops တွေကို လေ့လာသွားမှာဖြစ်ပါတယ်။ Loops တွေဟာ code တွေကို repeating လုပ်တဲ့နည်းလမ်းဖြစ်ပြီးတော့ repetitive tasks တွေအတွက် တစ်ကယ်ကို handy ဖြစ်ပါတယ်။ Loops တွေကို array တစ်ခု cycle လုပ်ဖို့အတွက် မကြာခနသုံးပြီး ၊ array တစ်ခုအတွင်းမှာရှိတဲ့ element တစ်ခုချင်းစီရဲ့ action တစ်ခုကို perform လုပ်သွားတာဖြစ်ပါတယ်။ </p>
    <hr>


    <h2>Comparison Operators</h2>
    <p>Operator တစ်ခုဟာ တစ်ခု (သို့) တစ်ခုထက်ပိုတဲ့ values တွေကို ယူတာဖြစ်ပြီး အခြား value တစ်ခုကို ထုတ်ပေးတာဖြစ်ပါတယ်။ အရင်ကလေ့လာခဲ့တဲ့ operators တွေဖြစ်တဲ့ assignment operator ဟာ variable တစ်ခုထဲကို value တစ်ခုထည့်တဲ့အခါ equal sign (=) ကိုသုံးရပါတယ်။ Arithmetic operators တွေကတော့ numbers တွေကို add, subtract, divide နဲ့ multiply လုပ်ဖို့အတွက်သုံးပါတယ်။ ထို့နောက် concatenation operators ကတော့ string တွေကို အတူတကွ combine လုပ်ပြီးတော့ string အသစ်တစ်ခု create လုပ်ချင်တဲ့အခါသုံးခဲ့ပါတယ်။ အခုစပြီးလေ့လာမှာကတော့ equal နဲ့ identical values တွေအတွက် comparison operators အသုံးပြုခြင်းပဲဖြစ်ပါတယ်။ Comparison operators တွေဟာ values တွေကို compare လုပ်ပေးပြီး result အနေနဲ့ true or false ကို return ပြန်ပေးတာဖြစ်ပါတယ်။ ကျွန်တော်တို့ရဲ့ conditions တွေအတွက်ဆိုရင်တော့ == , greater than(>), less than(<), greater than equal(>=) နဲ့ less than equal(<=)  ဆိုတဲ့ operators တွေကို အသုံးပြကြပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        $score = 60;

        if($score >= 60) {
            echo "You completed the level!";
        }
        elseif ($score <= 60) {
            echo "You should practice some more before!";
        }
        else {
            echo "Please try again!";
        }

        ?&gt;
        </code>
    </pre>
    <p>
        <a href="inc/comparison_operators.php" class="output">The result of above code:</a>
    </p>
    <hr>


    <h2>Negation Operators</h2>
    <p>Code ရေးတဲ့အခါမှာ ရှိသင့်တဲ့ goals တွေထဲက တစ်ခုကတော့ ကျွန်တော်တို့ code ဟာ ဘာကိုအလုပ်လုပ်မလဲဆိုတာကို ရှင်းရှင်းလင်းလင်းဖြစ်အောင် define လုပ်ဖို့လိုပါတယ်။ ကျွန်တော်တို့ဟာ nonequality ကို စစ်ဖို့အတွက် negation operators တွေကိုသုံးပါတယ်။ nonequality ကို check လုပ်ဖို့ နည်းလမ်းအမျိုးမျိုးရှိပါတယ်။ Negation operator ဟာ code ကိုရှင်းလင်းစွာရေးနိုင်တဲ့အတွက် ဖတ်ရတာလည်းပိုပြီး လွယ်ကူပါတယ်။ Negation operator ရဲ့ရေးနည်းကတော့ greater than(>) နဲ့ less than ကိုပေါင်းရေးရတာပဲဖြစ်ပါတယ်။ ဥပမာအရဆိုရင် $a ဟာ $b နဲ့မညီရင်ဆိုတာကို negation operator နဲ့စစ်ထားခြင်းဖြစ်ပါတယ်။ Eg.(if ($a <> $b) { } ) ။ ကံကောင်းစွာပဲ PHP ဟာ exclamation point, negation operator ကို provide လုပ်ပေးပါတယ်။ is not equal ကိုစစ်မယ်ဆိုရင် (!=) ဆိုပြီးရေးလို့ရပါတယ်။ သတိထားရမှာက exclamation point နောက်မှာ single equal သုံးတာဟာ variable ရဲ့ value ကိုပဲ compare လုပ်ပေးပြီးတော့ သူ့ရဲ့ variable type ကို compare လုပ်မပေးပါဘူး။ Variable type ရောပါစစ်ချင်တယ်ဆိုရင်တော့ exclamation point(!) ရဲ့နောက်မှာ double equal (==) နဲ့ရေးပေးရမှာဖြစ်ပါတယ်။ Conditional statements တွေဟာ ပေးထားတဲ့ data values ကို true (သို့) false အဖြစ် evaluate လုပ်ပေးပါတယ်။ Programming languages အများစုမှာ integer value ဖြစ်တဲ့ 0 ကို false အဖြစ်ယူတာဖြစ်ပါတယ်။ ကျွန်တော်တို့ requirements တွေအတွက် လိုအပ်တဲ့ operators တွေကို ရွေးချယ်ပြီးသုံးနိုင်ပါတယ်။ တစ်ကယ်လို့ ကျွန်တော်တို့ဟာ user တစ်ယောက်က loggin မလုပ်ရသေးဘူးဆိုတာ check လုပ်ချင်တယ်ဆိုရင် negation operator ကိုသုံးနိုင်ပါတယ်။ ကျွန်တော်တို့ဟာ $score တစ်ခုကို 60 နဲ့ပြီး သူ့ထက်ကြီးတာကို စစ်ချင်တယ်ဆိုရင်တော့ greater than or equal (>=) ဆိုတဲ့ operator ကိုသုံးနိုင်ပြီး ၊ တစ်ကယ်လို့ variable ရဲ့ value ရော ၊ type ရောကို စစ်ချင်တယ်ဆိုရင်တော့ triple equal (===) ဆိုတဲ့ operator ကို အသုံးပြုပြီး compare လုပ်နိုင်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        $a = 5;
        $b = '10';

        if($a <> $b) {
            echo "The values are not equal!";
            echo "<br>";
        }

        if($a != $b) {
            echo "The values are not equal!";
            echo "<br>";
        }

        if($a !== $b) {
            echo "The values are not equal!";
        }


        ?&gt;
        </code>
    </pre>
    <p>
        <a href="inc/negation_operator1.php" class="output">The result of above code:</a>
    </p>

    <pre>
        <code class="html hljs xml">
        &lt;?php 

        $a = 0;
        $b = 10;

        if($a) {
            echo 'false';
            echo "&lt;br&gt;";
        }

        if($a == false) {
            echo 'false';
            echo "&lt;br&gt;";
        }

        if($a != true) {
            echo 'false';
        }


        ?&gt;
        </code>
    </pre>
    <p>
        <a href="inc/negation_operator2.php" class="output">The result of above code:</a>
    </p>
    <hr>


    <h2>Nested Conditional Statements</h2>
    <p>တစ်ခါတစ်ရံမှာ ကျွန်တော်တို့ဟာ တစ်ခုထက်ပိုတဲ့ expression တွေကို ထုတ်ချင်တဲ့အခါ conditional တစ်ခုလိုအပ်ပါတယ်။ ဥပမာပြောရရင် ကျွန်တော်တို့ဟာ 10 through 1000 လိုမျိုး range of numbers တွေ match လုပ်ချင်တာမျိုးပေါ့။ ဒါဆိုရင်တော့ test နှစ်ခုနဲ့လုပ်ပေးရပါမယ်။ number က 10 ထက်ကြီးပြီး ငယ်သလားစစ်မယ် (>=) ၊ ပြီးရင် number က 1000 အောက်ငယ်ပြီးတော့ ညီလားစစ်ရပါမယ် (<=)။ ဒါကိုပြုလုပ်ဖို့ နည်းလမ်းကတော့ nesting two conditional statements နဲ့ပဲဖြစ်ပါတယ်။ Nested condition ဆိုတာကို နားလည်အောင်ပြောရမယ်ဆိုရင် if condition တစ်ခုအတွင်းမှာ နောက်ထပ် if condition တစ်ခု ထပ်စစ်လိုက်တာဖြစ်ပါတယ်။ ဒါကို ကျွန်တော်တို့ဘယ်လိုလုပ်ရမလဲဆိုတာ အောက်က example မှာလေ့လာပါမယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            &lt;php

            $num = 1;

            if($num >= 10) {
                if($num <= 1000) {
                    echo "Your number is within the range!";
                } else {
                    echo "Your number is greater than 1000, outside of the range!";
                }
            } else {
                echo "Your number is less than 10, outside of the range!";
            }

            ?&gt;
        </code>
    </pre>
    <p>
        <a href="inc/nested_condition.php" class="output">The result of above code:</a>
    </p>
    <hr>


    <h2>Logical Operators</h2>
    <p>ကျွန်တော်တို့ဟာ တစ်ခုထက်ပိုတဲ့ condition တွေကို compare လုပ်ဖို့အတွက် conditional statements တွေကို nested loop အတွင်းမှာထည့်ရေးခဲ့ပြီးပါပြီ။ Multiple equations တွေကို တစ်ကြိမ်တည်းနဲ့ check လုပ်ချင်တယ်ဆိုရင်တော့ ကျွန်တော်တို့ဟာ Logical operators တွေကိုသုံးပြီးတော့ conditional statements တွေကို combine လုပ်လို့ရပါတယ်။ Logical operators တွေဟာ sentence တစ်ခုအတွင်းမှာ phrases တွေကို combine လုပ်တဲ့နည်းလမ်းလို conditional statements တွေကို combine လုပ်ဖို့ ခွင့်ပြုပေးပါတယ်။ အရင်သင်ခန်းစာက nested if statement ကို combine လုပ်ဖို့ logical operators တွေကို အသုံးပြုကြည့်ရအောင်။ ကျွန်တော်တို့ logical operator နှစ်ခုဖြစ်တဲ့ AND (&&) နဲ့ OR (||) အကြောင်းကို ပြောပြသွားမယ်။ condition နှစ်ခုကိုပေါင်းချင်တယ်ဆိုရင်တော့ double ampersand ကိုအသုံးပြုရတာဖြစ်ပြီး သူဟာ သူ့ရဲ့ condition နှစ်ခုလုံး true ဖြစ်မှသာ condition က true ဖြစ်ပါတယ်။ OR operator or double pipes (||) ကတော့ အဲ့လိုမဟုတ်ပါဘူး။ သူ့ရဲ့ condition နှစ်ခုထဲက တစ်ခု true ဖြစ်တာနဲ့ အဲ့ဒီ condition က true ဖြစ်တယ်လို့ယူဆပါတယ်။ condition နှစ်ခုလုံး false ဖြစ်နေမှသာ condition က false ဖြစ်သွားမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ double ampersand နဲ့ double quotes တွေအစား AND နဲ့ OR ဆိုတဲ့ keywords တွေကိုလည်းသုံးနိုင်ပါတယ်။ ဒါပေမယ့် double ampersand နဲ့ double pipes တွေဟာ highest precedence ဖြစ်တဲ့အတွက်ကြောင့် သူတို့ကိုပဲ အသုံးများကြပါတယ်။ </p>
    <p>Example of AND(&&) Operator:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        $num = 10;

        if($num >= 10 && $num <= 1000) {
            echo "Your number is within the range!";
        }
        else {
            echo "Your number is NOT with the range!";
        }


        ?&gt;
        </code>
    </pre>
    <p>
        <a href="inc/and_operator.php" class="output">The result of above code:</a>
    </p>
    <p>Example of OR(||) Operator:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        $num = 10;

        if($num >= 10 || is_string($num)) {
            echo "10 or String";
        }
        else {
            echo "NOT 10 or String";
        }


        ?&gt;
        </code>
    </pre>
    <p>
        <a href="inc/or_operator.php" class="html hljs xml">The result of above code:</a>
    </p>
    <hr>


    <h2>Switch Statements</h2>
    <p>PHP ဟာ switch statement လို့ခေါ်တဲ့ control structure တစ်ခုကို provide လုပ်ပေးပါတယ်။ Switch statements တွေဟာ same expression ကိုသုံးတဲ့ if statement စုထားတဲ့ series နဲ့တူပါတယ်။ တူတဲ့ variable ကို compare လုပ်ချင်ရင် (သို့) မျိုးမျိုးသော values တွေနဲ့ expression အမျိုးမျိုးသော code တွေရဲ့ value ဟာ အတူတူပါပဲ။ ကျွန်တော်တို့ switch condition ကိုစရေးမယ်ဆိုရင်တော့ switch ဆိုတဲ့ keyword နောက်မှာ parenthesis () နဲ့လိုက်ပြီးတော့ရေးရပါတယ်။ Parenthesis အတွင်းမှာတော့ ကျွန်တော်တို့လိုချင်တဲ့ values တွေ ၊ expression တွေထည့်ရေးပေးရပါမယ်။ ဥပမာအနေနဲ့ switch ရဲ့ parenthesis ထဲမှာ switch (date('l')) {  } ဆိုတာကိုရေးလိုက်ပါမယ်။ ထို့နောက် curly braces {} ထဲမှာတော့ case statements တွေထည့်ပေးရမှာဖြစ်ပါတယ်။ ဒါကိုသုံးဖို့ ကျွန်တော်တို့ဟာ case ဆိုတဲ့ keyword ကိုသုံးရပြီး သူ့နောက်မှာတော့ ကျွန်တော်တို့ compare လုပ်ချင်တဲ့ value (Eg. Monday) လိုက်ပါတယ်။ ထို့နောက်ကျွန်တော်တို့ လုပ်ဆောင်ချင်တဲ့ action ကိုထည့်ရေးရပါတယ်။ နောက်ဆုံးရေးရမှာကတော့ break; ဆိုတဲ့ keyword ကိုရေးပေးရမှာဖြစ်ပါတယ်။ အဲ့ဒီ break ဟာ ကျွန်တော်တို့ စစ်လိုက်လို့ switch statement တစ်ခုတွေ့ပြီးတဲ့အခါ evaluate လုပ်ဖို့အဆုံးသတ်လိုက်ပြီး၊ တစ်နည်းပြောရရင် break ဖြစ်သွားတယ်လို့ပြောချင်တာပါ။ အခြား case တွေတစ်ခုမှ မမှန်ရင် ကျန်တဲ့ဟာ အလုပ်လုပ်ပေးဖို့ default ကိုသုံးနိုင်ပါတယ်။ default နောက်က colon (:) ရေးပြီး သူ့နောက်မှာ action ကိုထည့်ပေးရမှာဖြစ်ပါတယ်။ default ဆိုတာကတော့ case ထဲက condition တွေမမှန်တဲ့အခါ အဲ့ဒီ statement တစ်ခုလုံးဟာ default ရဲ့ action ကိုလုပ်ဆောင်သွားတာဖြစ်ပါတယ်။ Break ကိုမတွေ့မချင်း case ထဲကအရာတေကို process လုပ်နေမှာပါ။ Switch statements တွေဟာ တူညီတဲ့ variable (သို့) values အမျိုးမျိုးနဲ့  expression တွေကို compare လုပ်ချင်တဲ့အခါနဲ့ အဲ့ဒီ value ကိုမူတည်ပြီး အမျိုးမျိုးသော code ရဲ့ pieces တွေကို execute လုပ်ချင်တဲ့အခါမျိုးမှာ ကောင်းမွန်တဲ့ great tool ဖြစ်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            &lt;php

            $date = date("l");

            switch ($date) {
                case 'Monday':
                    echo "Watch on Monday";
                    break;

                case 'Tuesday':
                    echo "Code on Tuesday";
                    break;

                case 'Wednesday':
                    echo "Project on Wednesday";
                    break;

                case 'Thursday':
                    echo "Car on Thursday";
                    break;

                case 'Friday':
                    echo "Clean on Friday";
                    break;

                case 'Saturday':
                    echo "Bake on Saturday";
                    break;

                case 'Sunday':
                    echo "Rest on Sunday";
                    break;

                default:
                    eccho "I don't know what day it is";
                    break;
            }

            ?&gt;
        </code>
    </pre>
    <p>
        <a href="inc/switch_statement.php" class="output">The result of above code:</a>
    </p>
    <p>ကျွန်တော်တို့ဟာ descriptive conditionalsတွေ create လုပ်ဖို့လိုအပ်ပြီး  အမျိုးမျိုးသော operators တွေဖြစ်တဲ့ comparison operators, negation operators တွေနဲ့ logical operators တွေကို လေ့လာခဲ့ပြီးပါပြီ။ ကျွန်တော်တို့ဟာ အဲ့ဒီ conditionals နဲ့ if statements တွေကို nested & combine လုပ်ပြီး create လုပ်ခဲ့ပါတယ်။ ပြီးတော့ single expression ကနေ multiple values တွေကို compare လုပ်ဖို့ switch statement ကိုသုံးပါတယ်။ အခုကျွန်တော်တို့ဟာ student တစ်ယောက်ရဲ့ grade level နဲ့ final grade average ကိုအခြေခံပြီးတော့ school's out ဆိုတဲ့ program တစ်ခုကို create ကြည့်ရအောင်။ </p>
    <pre>
        <code class="html hljs xml">
        &lt;?php
        
        $firstName = 'Aung Zin';
        $lastName = 'Latt';
        $currentGrade = 9;
        $finalAverage = .88;
        $messageBody ='';
                
        if(!$firstName || !$lastName) {
        	echo 'Please enter a student name';
        } elseif ($currentGrade < 9 || $currentGrade > 12) {
        	echo 'This is only for high school students. Please enter a grade between 9 and 12'; 
        } else {
        	if($finalAverage < .70) {
        		echo 'We look forward to seeing you at summer school,being july 1st';
        	} else {
        		switch ($currentGrade) {
        			case 9:
        				$messageBody = 'Conguratulations on completing your fresher year in High School';
        				break;
        			case 10:
        				$messageBody = 'Conguratulations on completing your sophonore year in High School';
        				break;
        			case 11:
        				$messageBody = 'Conguratulations on completing your junior year in High School';
        				break;
        			case 12:
        				$messageBody = 'Conguratulations ! You have graduated High School';
        				break;
        			default :
        				$messageBody = 'Error: Grade Level is not 9-12!';
        				break;
        		}
        	}
        	echo "Dear $firstName $lastName\n";
        	echo "&lt;br&gt;";
        	echo $messageBody;
        }
        
        ?&gt;
        </code>
    </pre>
    <p>
        <a href="inc/student_out.php" target="_blank" class="output">The result of above code:</a>
    </p>
    <hr>


    <h2>Index Array</h2>
    <p>Array ဆိုတာ compound variable တစ်ခုပဲဖြစ်ပါတယ်။ ဆိုလိုတာကတော့ သူ့ထဲမှာ value တွေတစ်ခုထက်မကပိုပါနေတာဖြစ်တယ်။ Array တစ်ခုဆိုတာ items တွေရဲ့ list တစ်ခုလည်းဖြစ်နိုင်ပါတယ်။ ဥပမာ shopping items အားလုံးဟာ List တစ်ခုတည်းမှာရှိသလို သူကလည်း variable ပါပဲ။ ဒါပေမယ့် အဲ့ဒီ variable ဟာ multiple values တွေကို hold လုပ်နိုင်ပါတယ်။ Arrays တွေဟာ information တွေကို store လုပ်ဖို့ flexible အဖြစ်ဆုံးနဲ့ အသုံးအဝင်ဆုံး နည်းလမ်းတွေဖြစ်ပါတယ်။ ပြီးတော့ PHP ဟာလည်း arrays တွေကို create လုပ်ပြီးသုံးဖို့အတွက် နည်းလမ်းတွေကို provide လုပ်ပေးထားပါတယ်။ Associated arrays တွေနဲ့ multi-dimensional arrays လို့ခေါ်တဲ့ nested arrays တွေကိုလည်း provide လုပ်ပေးပါတယ်။ အခုကတော့ simple list of values တွေနဲ့ array basic ကိုစမယ်။ Array ရဲ့ တည်ဆောက်ပုံကတော့ array ဆိုတဲ့ keyword ကိုရေးပြီး သူ့နောက်က parenthesis ထဲမှာ list of values တွေကို comma ခံပြီးရေးရတာဖြစ်ပါတယ်။ equal greater than (=>) ဆိုတဲ့ sequence ဟာ double arrow ကို ကိုယ်စားပြုပါတယ်။ အဲ့ဒီ double arrow ဟာ key နဲ့ key ရဲ့ value ကို ကိုယ်စားပြုပါတယ်။ Array element တိုင်းမှာ key တစ်ခုအမြဲတမ်းလိုအပ်ပါတယ်။ PHP ဟာ largest integer key ကို increment လုပ်ခြင်းဖြင့် numerical key ကို အလိုအလျောက် assign လုပ်ပေးပါတယ်။ default အားဖြင့်တော့ arrays တွေဟာ index zero ကစပါတယ်။ ဆိုလိုတာက ပထဆုံး value ဟာ 0 index ကိုယူပြီး သူ့နောက်က values တွေကိုတော့ 1, 2 ဆိုပြီးတိုးသွားတာဖြစ်ပါတယ်။ Value ဟာ string type ဖြစ်ပြီး အဲ့ဒီ သူပါတဲ့ string ဟာ conditionals တွေပဲဖြစ်ပါတယ်။ Array ကို echo နဲ့ထုတ်ကြည့်မယ်ဆိုရင် array to string conversion error ကိုတွေ့ရမှာဖြစ်ပါတယ်။ ဘာလို့လဲဆိုရင်တော့ array ဟာ complex data တွေကိုသိမ်းပြီး PHP ဟာအဲ့ဒီ data တွေကို ဘယ်လို format နဲ့ထုတ်ပေးရမလဲဆိုတာ မသိလို့ပဲဖြစ်ပါတယ်။ ဒါကြောင့်မို့ သူတို့ကို ဘယ်လို format နဲ့လိုချင်တယ်ဆိုတာကို ပြောပြပေးရမှာဖြစ်ပါတယ်။ PHP ဟာ array elements တွေကို single string နဲ့ join လုပ်နိုင်တဲ့ implode ဆိုတဲ့ function ကို ပေးပါတယ်။ ထို့နောက်ကျွန်တော်တို့ဟာ new string ထဲက items တွေကို ကျွန်တော်တို့ choose လုပ်လိုက်တဲ့ အခြား string ကိုသုံးပြီး separate လုပ်နိုင်ပါတယ်။ အဲ့ဒီ separator string ဟာ ကျွန်တော်တို့လိုချင်လို ရနိုင်ပြီးတော့ multiple HTML tags တွေတောင် ရနိုင်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            &lt;php

            $learn = array('Conditionals', 'Arrays', 'Loops');
            //var_dump($learn);
            //echo $learn[1];
            //echo $learn;
            echo implode('&lt;br&gt;', $learn);

            ?&gt;
        </code>
    </pre>
    <p>
        <a href="inc/index_array.php" class="output">The result of above code:</a>
    </p>
    <hr>


    <h2>Adding Array Elements</h2>
    <p>အခု ကျွန်တော်တို့ရဲ့ first array ကိုတည်ဆောက်ပြီးတဲ့နောက်မှာ အဲ့ဒီ array ကနေ elements တွေကို add, remove နဲ့ edit တွေကို ပြုလုပ်မှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ PHP ရဲ့ built in function ကိုသုံးမှာဖြစ်တဲ့အတွက် အဲ့ဒီ functions တွေကို manually အရ pull up လုပ်ရတာ အထောက်အကူပြုမှာဖြစ်ပါတယ်။ ပထမဆုံးလုပ်ရမှာကတော့ ကျွန်တော်တို့ရဲ့ new values တွေကို array ထဲကို ဘယ်လိုထည့်ရမလဲဆိုတာပါ။ PHP က elements တွေကို array ထဲထည့်တဲ့ နည်းလမ်းသုံးမျိုးကို လေ့လာသွားပါမယ်။ သူတို့ထဲက နှစ်ခုကတော့  array ရဲ့ နောက်ဆုံးမှာ elements တွေကိုထည့်ပြီး ၊ ကျန်တဲ့တစ်ခုကတော့ array ရဲ့ရှေ့ဆုံးမှာထည့်တာဖြစ်ပါတယ်။ Array ထဲကို elements တွေထည့်ဖို့ အလွယ်ကူဆုံးနည်းလမ်းကတော့ $learn ဆိုတဲ့နောက်မှာ equal sign နဲ့ရေးပြီး သူ့နောက်မှာ new values ကို ရေးရမှာဖြစ်ပါတယ်။ Eg. $learn = 'Build something awesome'; ။ Square bracket ဟာ အပေါ်ကတည်ဆောက်ထားတဲ့ array ထဲကို နောက်ထပ် value ထပ်ထည့်ပါမယ်လို့ PHP ကို ပြောလိုက်တာပါ။ Value ကို square bracket မသုံးပဲထည့်လိုက်ရင်တော့ အပေါ်က array က values တွေပေါ်ကို override လုပ်သွားမှာဖြစ်ပါတယ်။ အခြားနည်းလမ်းတစ်ခုကတော့ PHP built in function ကိုသုံးပြီး elements တွေထည့်တာပါ။ PHP array function တွေအများကြီးကိုလေ့လာလို့ရပါတယ်။ အဲ့ဒီထဲက ပြောမယ့်တစ်ခုကတော့ array_push ဖြစ်ပြီး  သူဟာ elements တွေအများကြီးကို တစ်ကြိမ်တည်းနဲ့ထည့်နိုင်ပါတယ်။ သူ့ရဲ့ရေးနည်းကတော့ ပထမတည်ဆောက်ခဲ့တဲ့ array name ကိုရေးပြီး သူ့နောက်မှာ ထပ်ထည့်ချင်တဲ့ elements တွေကို comma ခံပြီးရေးလိုက်ရုံပါပဲ။ ဒါကတော့ elements တွေကို မူလရှိတဲ့ array ရဲ့ နောက်ဆုံး index ကနေထည့်သွားမှာဖြစ်ပြီး ၊ ရှေ့ဆုံးက ထည့်လို့ရတဲ့ နည်းကိုပြောသွားပါမယ်။ ဒါကတော့ array_unshift ဖြစ်ပြီး သူဟာ ထပ်ထည့်မယ့် elements တွေကို array ရဲ့ အစဆုံးမှာထည့်သွားမှာဖြစ်ပါတယ်။ array_push နဲ့ array_unshift ရဲ့ အခြား difference ကတော့ အဲ့ဒီ functions တွေဟာ array key index ကိုဘယ်လို affect ဖြစ်လဲဆိုတာပါ။  array_push ဟာ index number ကို order နဲ့ထည့်ပေးတာဖြစ်တဲ့အတွက် ကျွန်တော်တို့ array key မှာ 1,3, 5 ရှိမယ်ဆိုရင် သူ့ထဲကိုထပ်ထည့်လိုက်တဲ့အခါ နောက်ဆုံးတစ်ခုကို တိုးပြီးတော့ 1, 3, 5, 6 ဆိုပြီးထည့်သွားမှာဖြစ်ပါတယ်။ array_unshift ကတော့ index ကို update လုပ်မှာဖြစ်ပြီး ရှေ့ဆုံးကထည့်တဲ့ elementကို index 0 ယူပြီး အရင်ရှိတဲ့ array index တွေကို ထပ်ထည့်တဲ့ elements တွေနောက်ကနေ index ပြောင်းလိုက်ပြီး 0, 1, 2, 3, 4 ဆိုပြီး update လုပ်သွားမှာဖြစ်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php
        
        $learn = array('Conditionals', 'Arrays', 'Loops');
        $learn[] = 'Build Something Awesome';
        array_push($learn, 'Functions', 'Forms', 'Objects');
        var_dump($learn);
        echo "&lt;br&gt;";
        array_unshift($learn, 'HTML', 'CSS');
        var_dump($learn);
            
            
        ?&gt;
        </code>
    </pre>
    <p>
        <a href="inc/add_array.php" calss="output">The result of above code:</a>
    </p>
    <hr>


    <h2>Removing Array Elements</h2>
    <p>ဒီသင်ခန်းစာမှာ array တစ်ခုကနေ elements တွေကို remove လုပ်ဖို့ PHP က provide လုပ်ထားတဲ့ နည်းလမ်းသုံးမျိုးကို လေ့လာသွားမှာဖြစ်ပါတယ်။ ပထမတစ်ခုကတော့ array_sunshift ရဲ့ ဆန့်ကျင်ဘက်ဖြစ်တဲ့ array_shift ပဲဖြစ်ပါတယ်။ array_shift ဟာ array ထဲက ပထမဆုံး elements ကို remove လုပ်ပေးတာဖြစ်ပါတယ်။ array_shift ဟာ first element ကို remove လုပ်မယ့် array ဖြစ်တဲ့ parameter တစ်ခုကိုပဲယူတာဖြစ်ပါတယ်။ Array အကုန်လုံးကို ဖျက်ချင်တယ်ဆိုရင်တော့ array_shift ရဲ့နောက်က parenthesis လုပ်ပြီးတော့ သူ့ထဲမှာ array name ထည့်ပေးရမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ array ရဲ့ နောက်ဆုံးက elements တွေကို remove လုပ်ချင်တယ်ဆိုရင်တော့ array_pop ကိုသုံးရမှာဖြစ်ပါတယ်။ array_pop ဟာ element ကို remove မလုပ်ခင် return ကိုအရင်ပြန်ပေးတာဖြစ်ပါတယ်။ နောက်ဆုံးတစ်ခုကတော့ ကျွန်တော်တို့ array ထဲက ကြိုက်တဲ့ specific element ကို remove လုပ်ချင်တယ်ဆိုရင် key ကိုသိရင်ရပါပြီ။ ဒါကတော့ unset ပဲဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ ဒုတိယ နဲ့ တတိယ element ကိုဖျက်ချင်တယ်ဆိုရင် Eg. unset($learn[1], $learn[2]); လို့ရေးပေးရပါတယ်။ unset ဟာ multiple parameters တွေကို လက်ခံပေးနိုင်တာကြောင့် array ထဲက elements တွေကို တစ်ခုမက တစ်ကြိမ်တည်းနဲ့ ဖျက်နိုင်ပါတယ်။ Array keys တွေကို re-indexing လုပ်ဖို့ဆိုရင်တော့ array_values function ကိုသုံးပေးရမှာဖြစ်ပါတယ်။ array_values ဟာ array ထဲမှာရှိတဲ့ values တွေထဲက array အသစ်ကို create လုပ်လိုက်တာပဲဖြစ်ပါတယ်။ ပြောချင်တာကတော့ array keys တွေကို refresh လုပ်လိုက်ပြီး number တွေအစဉ်လိုက်ပြန်လုပ်လိုက်တာပါ။ unset ဟာ ကြိုက်တဲ့ variable နဲ့သုံးလို့ရပြီး array element နဲ့တော့မရပါဘူး။ ကျွန်တော်တို့ဟာ array တစ်ခုလုံးကို unset ကိုသုံးပြီး destroy လုပ်နိုင်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        $learn = array('Conditionals', 'Array', 'Loops');
        $learn[] = 'Build Something Awesome';
        array_push($learn, 'Functions', 'Forms', 'Objects');
        array_unshift($learn, 'HTML', 'CSS');

        echo "You removed ".array_shift($learn);
        echo "&lt;br&gt;";
        echo "You removed ".array_pop($learn);
        echo "&lt;br&gt;";

        unset($learn[1], $learn[2]);
        var_dump($learn);
        echo "&lt;br&gt;";

        $learn = array_values($learn);
        var_dump($learn);

        ?&gt;
    </code>
    </pre>
    <p>
        <a href="inc/remove_array.php" class="output">The result of above code:</a>
    </p>
    <hr>


    <h2>Editing Array</h2>
    <p>တစ်ခါတစ်ရံမှာ ကျွန်တော်တို့ တည်ဆောက်လိုက်တဲ့ array မှာ mis-spelling ဖြစ်တာပဲဖြစ်ဖြစ် ၊ word ကိုပြောင်းလဲချင်တာပဲဖြစ်ဖြစ် လိုအပ်လာတဲ့အချိန်မှာ ကျွန်တော်တို့ array ကို edit element လုပ်ဖို့လိုလာပါလိမ့်မယ်။ Array တစ်ခုဆိုတာ variable ရဲ့ type တစ်ခုဖြစ်ပြီး အခြား variable တွေကိုပြုလုပ်သလိုမျိုး update or edit လုပ်နိုင်ပါတယ်။ သူ့ရဲ့ individual element တစ်ခုစီဟာ variable ဖြစ်တာကြောင့် အဲ့ဒီ individual elements တွေကို update or edit လုပ်နိုင်ပါတယ်။ Array ထဲမှာရှိ အချို့ element တွေကို update လုပ်ချင်တယ်ဆိုရင်တော့ အဲ့ဒီ element ရဲ့ key ကို သတ်မှတ်ပေးဖို့လိုပါတယ်။ ဥပမာ ကျွန်တော်တို့ array ထဲက ပထမဆုံး element ကို update လုပ်ချင်တယ်ဆိုရင်တော့ $learn[0] = 'Email'; ဆိုပြီးရေးပေးရပါမယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        $learn = array('Conditionals', 'Array', 'Loops');
        $learn[] = 'Build Something Awesome';
        array_push($learn, 'Functions', 'Forms', 'Objects');	//Adding elements in Last
        array_unshift($learn, 'HTML', 'CSS'); //Adding elements in First 

        echo "You removed ".array_shift($learn); //Removing first array element
        echo "&lt;br&gt;";
        echo "You removed ".array_pop($learn);  //Removing Last array element
        echo "&lt;br&gt;";

        unset($learn[1], $learn[2]);	//Removing Customize array element
        var_dump($learn);
        echo "&lt;br&gt;";

        $learn = array_values($learn);
        var_dump($learn);				// Refreshing array

        $learn[0] = 'CSS-3';
        var_dump($learn);       //Editing Array

        ?&gt;
    </code>
    </pre>
    <p>
        <a href="inc/edit_array.php" class="output">The result of above code:</a>
    </p>
    <hr>


    <h2>Associative Arrays</h2>
    <p>ကျွန်တော်တို့ create လုပ်ထားတဲ့ arrays တွေဟာ numerically indexed တွေဖြစ်ပါတယ်။ တခြားနည်းနဲ့ပြောရရင် ပထမဆုံး element ဟာ position 0 မှာရှိပြီး ၊ ဒုတိယ element ဟာ position မှာရှိတယ်လို့ ဆိုလိုချင်တာပါ။ PHP ဟာ ကျွန်တော်တို့ အသုံးပြုဖို့အတွက် numeric key ကို အလိုအလျောက် assign လုပ်ပေးပါတယ်။ ဒါပေမယ့် ကျွန်တော်တို့ဟာ array element တစ်ခုကို ကိုယ်ပိုင် key နဲ့ assign လုပ်နိုင်ပြီး ၊ သူတို့ကို numbers တွေမထားဘဲနဲ့လည်း ရေးနိုင်ပါတယ်။ Key တစ်ခုကို name တစ်ခုပေးမယ်ဆိုရင် ဖတ်ရတာ ပိုပြီးလွယ်ကူပါတယ်။ ဥပမာ ကျွန်တော်တို့ဟာ favorite ice cream flavors ကို array တစ်ခုနဲ့တည်ဆောက်မယ်ဆိုရင် သူတို့ရဲ့ name ကို key အဖြစ်သတ်မှတ်တာက ဖတ်ရတာပိုလွယ်ကူပါတယ်။ Alina က black cherry ကြိုက်တယ် ၊ Dave က cookies ကိုကြိုက်တယ် စသဖြင့်ပေါ့။ ဒါကို associative array လို့ခေါ်ပါတယ်။ ဘာလို့လဲဆိုရင်တော့ ကျွန်တော်တို့ရဲ့ specific key ဟာ specific value နဲ့ associated ဖြစ်နေလို့ပါပဲ။  Associated array ရဲ့ ရေးနည်းကတော့ double arrow ကိုသုံးရမှာဖြစ်ပြီး သူတို့ တစ်ခုချင်းစီကိုတော့ comma (,) နဲ့ ခြားပြီးရေးနိုင်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code>
        &lt;?php

        $iceCream = array(
            'Alena' => 'Black Cherry',
            'Treasure' => 'Chocolate', 
            'Dave' => 'Cookies and Cream', 
            'Rialla' => 'Strawberry'
        );

        var_dump($iceCream);

        //echo $iceCream['Alena'];


        ?&gt;
        </code>
    </pre>
    <p>
        <a href="inc/associated_arrays.php" class="output">The result of above code:</a>
    </p>
    <hr>


    <h2>Mixing Data Types in Arrays</h2>
    <p>Arrays တွေဟာ collection of data တွေကို store လုပ်ဖို့ တကယ်ကို powerful ဖြစ်တဲ့နည်းလမ်းဖြစ်ပါတယ်။ Variables တွေထဲမှာ store လုပ်ရမယ့် information တွေကို group တစ်ခုအနေနဲ့ထားဖို့ဆိုရင် ကျွန်တော်တို့ဟာ arrays တွေကိုသုံးနိုင်ပါတယ်။ ကျွန်တော်တို့ဟာ integers, floats, strings နဲ့ booleans တွေကို array ထဲမှာ store လုပ်နိုင်ပါတယ်။ ကျွန်တော်တို့ဟာ array ထဲကို နောက်ထပ် arrays တွေတောင်မှ ထပ်ထည့်နိုင်ပါတယ်။ ဒီသင်ခန်းစာမှာတော့ PHP arrays တွေရဲ့ inner ပိုင်းမှာ အလုပ်လုပ်ပုံတွေကို လေ့လာသွားမှာဖြစ်ပါတယ်။ ပထမဆုံးပြောချင်တာကတော့ array keys တွေဟာ case-sensitive ဖြစ်တယ်ဆိုတာပါ။ တစ်ကယ်လို့ first key ဖြစ်တဲ့ Alena ကို lower case နဲ့ရေးမယ်ဆိုရင် error တက်မှာဖြစ်တယ်။ ဘာလို့လဲဆိုရင် lower case တွေနဲ့ချည်းရေးထားတဲ့ alena ဟာ array ထဲမှာ မရှိလို့ပဲဖြစ်ပါတယ်။ Keys တွေဟာ unique ဖြစ်ပြီးတော့ သူတို့ဟာ overwrite လုပ်နိုင်တယ်။ ဥပမာ ကျွန်တော်တို့ Dave ဆိုတဲ့ key ရဲ့ value ကို Cookie Dough လို့ထည့်လိုက်ရင် အဲ့ဒီ array element ကို ထပ်ထည့်မသွားဘဲ ရှိခဲ့တဲ့နေရာမှာ overwrite လုပ်သွားမှာဖြစ်ပါတယ်။ နောက်တစ်ခုကတော့ keys တွေဟာ string (သို့) integer တစ်ခုဖြစ်နိုင်ပါတယ်။ Numbers တွေသာလျှင်ပါတဲ့ string ဟာလည်း integer တစ်ခုအဖြစ် convert လုပ်နိုင်ပါတယ်။ decimals တွေပါတဲ့ numbers တွေဖြစ်တဲ့ float values တွေကိုလည်း truncate လုပ်ပြီးတော့ integer ပြောင်းနိုင်ပါတယ်။ ပြီးတော့ boolean values တွေကိုတော့ one အတွက် true နဲ့ zero အတွက် false ကို cast လုပ်မှာဖြစ်ပါတယ်။ နောက်ဆုံးတစ်ခုကတော့ array key အတွက် integer နဲ့ string ကို mix လုပ်နိုင်ပါတယ်။ Array values တွေဟာ အခြား variable တွေကို အတိအကျ store လုပ်သလိုမျိုး floats နဲ့  booleans စတဲ့ ဘယ် variable type မဆို hold လုပ်နိုင်ပါတယ်။ Array keys တွေလိုပဲ value တစ်ခုစီမှာ သီးခြား variable type တစ်ခုရှိပါတယ်။ Keys တွေနဲ့ မတူတာကတော့ array values တွေဟာ အခြား arrays တွေရှိနေနိုင်ပါတယ်။ ဒါကို multidimensional array လို့ခေါ်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            $iceCream = array(
                'Alena' => 'Black Cherry', 
                'Treasure' => 'Chocolate',
                'Dave McFarland' => 'Cookie and Cream',
                'Rialla' => 'Strawbery'
            );
            echo $iceCream['Alena'];
            echo "&lt;br&gt;";

            $iceCream['Dave Thamous'] = 'Cookie and Cream';
            $iceCream[] = 'Vanilla';
            $iceCream['Andrew'] = true;

            var_dump($iceCream);
            echo "&lt;br&gt;";

            $key = array(
            	1 => 'a',
            	'1' => 'b',
            	1.5 => 'c',
            	true => 'd'
            );

            var_dump(($key));


            ?&gt;
        </code>
    </pre>
    <p>
        <a href="inc/mixing_datatype.php" class="output">The result of above code:</a>
    </p>
    <hr>


    <h2>Multi-dimensional Arrays</h2>
    <p>ကျွန်တော်တို့ဟာ arrays တွေကို group information အနေနဲ့ ဘယ်လိုသုံးရမလဲဆိုတာရယ် ၊ variable တစ်ခုအတွင်းမှာ multiple information တွေကို ဘယ်လို store လုပ်ရမလဲဆိုတာ လေ့လာခဲ့ပြီးပါပြီ။ Multi-dimensional arrays တွေဟာ ကျွန်တော်တို့ list ထဲက item တစ်ခုချင်စီအတွက် nested ဖြစ်နေတဲ့ array of information တစ်ခုကို create လုပ်ဖို့ ခွင့်ပြုပေးပါတယ်။ Multi-dimensional arrays တွေဘယ်လို create လုပ်ရမလဲဆိုတာပြောပါမယ်။ ကျွန်တော်တို့ရဲ့ PHP5 နဲ့ PHP4 တွေမှာ array တည်ဆောက်တဲ့အခါ array ဆိုတဲ့ keyword နောက်က parenthesis အစား "array" ရော parenthesis ရောဖြုတ်ပြီး square brackets ကိုအသုံးပြုတဲ့ short way syntax ရှိပါတယ်။ Multi-dimensional arrays တွေဟာ သူတို့ကိုလှမ်းပြီးဆွဲထုတ်ဖို့အတွက် complicated concept ရှိနိုင်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        $list[] = [
            'title' => 'Laundry',
            'priority' => 2,
            'due' => '',
            'complete' => true,
        ];

        $list[] = [
            'title' => 'Clean out refrigerator',
            'priority' => 3,
            'due' => '07/30/2016',
            'complete' => false, 
        ];

        //$list = array($task1, $task2);
        var_dump($list);
        //echo $list[1]['due'];


        ?&gt;
        </code>
    </pre>
    <p>
        <a href="inc/multi_dimensional.php" class="output">The result of above code:</a>
    </p>
    <hr>


    <h2>Sorting Arrays</h2>
    <p>Arrays တွေကပေးတဲ့ extra tools တွေထဲက တစ်ခုကတော့ sort လုပ်နိုင်တဲ့ ability ပဲဖြစ်ပါတယ်။ Sorting ဟာ ကြီးမားတဲ့ data တွေရဲ့ amounts ကို organize လုပ်နိုင်ပါတယ်။ ကျွန်တော်တို့ဟာ data ရဲ့ အသုံးဝင်မှုကို increase ဖြစ်ဖို့ array ရဲ့ key or value ကိုသုံးပြီး sort လုပ်နိုင်ပါတယ်။ Array ကို sort လုပ်နိုင်တဲ့နည်းလမ်းတွေကို <a href="" target="_blank">PHP Array</a> ဆိုတဲ့ link ကိုဝင်ပြီးလေ့လာနိုင်ပါတယ်။ ပထမဆုံး function ကတော့ asort() ပဲဖြစ်ပါတယ်။ သူဟာ array ကို sort လုပ်တာလို့ဆိုလိုက်ပြီး သူ့မှာ sort လုပ်ချင်တဲ့ array function ကို pass လုပ်လိုက်တာဖြစ်ပါတယ်။ asort() function ဟာ key ကိုပြောင်းလဲမသွားဘဲ value ကိုပဲ sort လုပ်ပေးတာဖြစ်ပါတယ်။ တစ်ကယ်လို့ ကျွန်တော်တို့က array key ကိုပါ re-index လုပ်ချင်တယ်ဆိုရင်တော့ sort() ဆိုတဲ့ function ကိုအသုံးပြုရမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ရဲ့ array values တွေကို reverse order အနေနဲ့ sort လုပ်ချင်ရင်တော့ rsort() function ကိုအသုံးပြုနိုင်ပါတယ်။ ဒီ sort functions တွေဟာလုံးဟာ elements တွေရဲ့ value ကိုမူတည်ပြီး sort လုပ်ပေးတာဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ shuffle() function ကိုသုံးပြီးတော့ elements တွေကို randomly sort လုပ်နိုင်ပါတယ်။ Sorting values တွေအပြင် ကျွန်တော်တို့ဟာ array keys တွေနဲ့လည်း sort လုပ်နိုင်ပြီး ဒါဟာ associative arrays တွေနဲ့ဆိုရင် ပိုသင့်တော်ပါတယ်။ ကျွန်တော်တို့ဟာ key ကို sort လုပ်ဖို့အတွက် krsort() နဲ့ ksort() ဆိုတဲ့ function တွေကိုသုံးနိုင်ပါတယ်။ ကျွန်တော်တို့မှတ်ထားရမှာတစ်ခုကတော့ ksort() function ဟာ numeric နဲ့ string keys တွေရောနေရင် အလုပ်မလုပ်ပါဘူး။ ksort() function ဟာ array key ကို alphabetically အရ sort လုပ်ပေးတာဖြစ်ပါတယ်။ သတိထားရမှာက capital letters တွေကို lowercase letters တွေရဲ့ ရှေ့မှာ အရင် sort လုပ်ပေးတယ်ဆိုတာပါ။ krsort() function ကတော့ ကျွန်တော်တို့ရဲ့ array key ကို reverse order နဲ့ စီပေးတာဖြစ်ပါတယ်။ Associated keys ကို value နဲ့လည်း sort လုပ်နိုင်ပါတယ်။ သူတို့ကို အများဆုံးသုံးတဲ့ function ကတော့ asort() နဲ့ arsort() တွေပဲဖြစ်ပါတယ်။ Sort ကိုအသုံးပြုခြင်းဟာ ကျွန်တော်တို့ရဲ့ original key value pair ကို remove လုပ်ခြင်းဖြင့် ကျွန်တော်တို့ရဲ့ associative array ကို re-index လုပ်ပေးပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        $learn = array('Conditional', 'Arrays', 'Loops');
        $learn[] = 'Building Something Awesome';
        array_push($learn, 'Functions', 'Forms', 'Objects');
        array_unshift($learn, 'HTML', 'CSS');

        asort($learn);      /* Sort according values */
        sort($learn);       /* Re-index array key */

        //echo "You removed ".array_shift($learn);
        //echo "You removed ".array_pop($learn);

        rsort($learn);      /* reverse sort */

        // echo "You removed ".array_shift($learn);
        //echo "You removed ".array_pop($learn);

        var_dump($learn);
        echo "&lt;br&gt;";

        shuffle($learn);
        echo "Random result = ".$learn[0];


        ?&gt;
        </code>
    </pre>
    <p>
        <a href="inc/sorting_arrays.php" class="output">The result of above code:</a>
    </p>
    <p>Example of Associative Array Sort:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        $iceCream = array(
            'Aung Zin Latt' => 'Black Cherry',
            'Treasure' => 'Chocolate',
            'Dave McFarland' => 'Cookie and Cream',
            'Rialla' => 'Strawberry'
        );
        $iceCream['Dave Thamous'] = 'Cookie and Cream';
        $iceCream['Andrew'] = true;
        
        ksort($iceCream);       /* Sort array key */
        krsort($iceCream);      /* Sort array key with reverse order */
        asort($iceCream);       /* Sort by array value */
        
        var_dump($iceCream);
        
        
        ?&gt;
        </code>
    </pre>
    <p>
        <a href="inc/associative_arrays_sort.php" class="output">The result of above code:</a>
    </p>
    <hr>


    <h2>PHP Loops</h2>
    <p>Programming မှာ Loops ဆိုတာ certain condition ကိုတွေ့သည့်တိုင်အောင် (သို့မဟုတ်) action တစ်ခုကို အချိန်တစ်ခုအထိ repeat လုပ်ပြီး စစ်ပေးတဲ့နည်းလမ်းဖြစ်ပါတယ်။ ဥပမာ ကျွန်တော်တို့ webpage ပေါ်မှာ same random numbers 10ခုကို display လုပ်ချင်တယ်ဆိုပါစို့။ ဒါဆိုရင် ကျွန်တော်တို့က random number ကို generate လုပ်တဲ့ code တစ်ခုရေးပြီး သူ့ကို page မှာဖော်ပြမယ်။ ပြီးတော့ ဒုတိအကြိမ် ၊ တတိယအကြိမ်ကနေ ဆယ်ကြိမ်အထိရေးရပါမယ်။ ဒါတွေတစ်ခုချင်းရေးနေရမယ်ဆိုရင် ပိုပြီးအလုပ်များပါတယ်။ ကျွန်တော်တို့ဟာ random numbers 100, 1000 လိုမျိုးအရမ်းများတာတွေကို ထုတ်ဖို့ဆိုရင် loops တွေနဲ့ထုတ်တာဟာ ပိုမိုမြန်ဆန်လွယ်ကူပါတယ်။ ဒါကြောင့် PHP ဟာ loops တွေကို create လုပ်ဖို့အတွက် အမျိုးမျိုးသော several ways တွေကို provide လုပ်ထားပါတယ်။ အခုကျွန်တော်တို့အနေနဲ့ while loop ကနေစပြီးလေ့လာသွားပါမယ်။ သူဟာ conditional statement လိုပဲ particular condition က true ဖြစ်နေရင် code block ကို runသွားမှာဖြစ်ပါတယ်။ ပြောချင်တာက if condition မှာဆိုရင် if ထဲမှာရှိတဲ့ condition က မှန်နေရင် သူ့ထဲက code ကို run ပေးမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ အခုပြောမယ့် while loop ကလည်း သူနဲ့အတော်တူပါတယ်။ သူ့မှာ "while" ဆိုတဲ့ keyword ရှိပြီး သူ့နောက်က parenthesis တစ်စုံလိုက်မယ် ၊ အဲ့ဒီ parenthesis ထဲမှာ condition တည်ရှိပါတယ်။ ဒါပေမယ့် condition က true ဖြစ်နေချိန်မှာ block ထဲက code ကို တစ်ကြိမ်ပဲ run မယ့်အစား while ဆိုတဲ့ condition က true ဖြစ်နေသရွေ့ ထပ်ခါထပ်ခါ run ပေးပါတယ်။ အခု နောက်ဆုံး 100 နှစ်ကို loop ကိုသုံးပြီး page မှာပေါ်အောင် အောက်ကဥပမာနဲ့တကွ ပြထားပါတယ်။ </p>
    <p>Example of While Loop:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        $currentYear = date('Y');
        $year = $currentYear - 100;

        while(++$year <= $currentYear) {
        	echo $year;
            echo "&lt;br&gt;";
            //++$year;
        }


        ?&gt;
        </code>
    </pre>
    <p>
        <a href="inc/while_loop.php" class="output">The result of above code:</a>
    </p>
    <p> While loop ကိုသုံးဖို့ နောက်ထပ်နည်းလမ်းတစ်ခုကတော့ do while loop ပဲဖြစ်ပါတယ်။ Do while loop ဟာ condition တစ်ခုကို check မလုပ်ခင် ကျွန်တော်တို့အရင် run ချင်တဲ့ block code ကိုရေးရတာဖြစ်ပါတယ်။ ဒီလိုရေးဖို့ဆိုရင်တော့ do ဆိုတဲ့ key word ကိုရေးပြီး curly braces ထဲမှာ ကျွန်တော်တို့ထုတ်ချင်တဲ့ statement တစ်ခုကို echo နဲ့ထုတ်လိုက်မယ်။ do loop ရဲ့အပိတ်နောက်မှာတော့ while ဆိုတဲ့ key word နဲ့ parenthesis တစ်စုံရေးရမှာဖြစ်ပြီး နောက်ဆုံးမှာ semi-colon နဲ့ပိတ်ပေးရပါမယ်။ Parenthesis ထဲမှာတော့ စစ်ချင်တဲ့ condition ကိုရေးရမှာဖြစ်ပါတယ်။ ပြီးရင် browser ကို run လိုက်တဲ့အခါ do ထဲမှာရှိတဲ့ statement ကိုအရင် ထုတ်ပေးပြီးမှ while condition ကိုစစ်တာဖြစ်ပါတယ်။ </p>
    <p>Example of Do While Loop:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        $currentYear = date('Y');
        $year = $currentYear - 100;


        do {
        	echo $year;
        	echo "&lt;br&gt;";
        } while (++$year <= $currentYear);


        ?&gt;
        </code>
    </pre>
    <p>
        <a href="inc/do_while_loop.php" class="output">The result of above code:</a>
    </p>
    <hr>


    <h2>While Listing Array Values</h2>
    <p>Arrays တွေဟာ collection of items တွေဖြစ်ပါတယ်။ ဆိုလိုတာကတော့ တစ်ခါတစ်ရံ array ထဲမှာရှိတဲ့ item တစ်ခုချင်းစီနဲ့တူတဲ့အရာတွေကို လုပ်ချင်လို့ပဲဖြစ်ပါတယ်။ Loops တွေဟာ ဒါတွေလုပ်ဖို့အတွက်ပဲဖြစ်ပါတယ်။  ကျွန်တော်တို့ဟာ array တစ်ခုလုံးကို loop လုပ်နိုင်သလို array ရဲ့ အစိတ်အပိုင်းတစ်ခုနဲ့ item တစ်ခုချင်းစီရဲ့ ဘယ် number of actions မဆိုဆောင်ရွက်ပေးနိုင်ပါတယ်။ ကျွန်တော်တို့ရဲ့ each, list function တွေကို <a href="" target="_blank">PHP each function </a> မှာလေ့လာနိုင်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        $learn = array('Conditionals', 'Arrays', 'Loops');
        $learn[] = 'Building Something Awesome';
        array_push($learn, 'Functions', 'Forms', 'Objects');
        array_unshift($learn, 'HTML', 'CSS');
        asort($learn);      /* Sort according to values */
            
        $count = 0;
        while ((list($key, $val) = each($learn)) && $count++ <2 ) {
            echo "$key => $val";
            echo "&lt;br&gt;";
        }
        
        
        ?&gt;
        </code>
    </pre>
    <p>
        <a href="inc/while_listing_array.php" class="output">The result of above code:</a>
    </p>
    <hr>


    <h2>Pingpong Game</h2>
    <p>ကျွန်တော်တို့ Ping pong game တစ်ခုကို while loops သုံးပြီးရေးကြည့်ရအောင်။ ကျွန်တော်တို့မှာ player နှစ်ယောက်ရှိမယ်ဆိုပါစို့။ သူတို့နှစ်ယောက်ရဲ့ initial score ကလည်း 0 ကစပါမယ်။ ကျွန်တော်တို့ဟာ game တစ်ခုချင်းစီက rounds ဘယ်လောက်ရှိလဲဆိုတာ track လုပ်ပါမယ်။ Round တစ်ခုချင်းစီမှာ player တစ်ယောက်ရဲ့ scores တွေကို randomly အရ တိုးပေးလိုပါမယ်။ တစ်ယောက်က scores တွေလျော့မယ်ဆိုရင် လျော့တဲ့ scores ကို နောက်တစ်ယောက်ကို ပေါင်းထည့်ပေးရပါမယ်။ ကျွန်တော်တို့ဟာ absolute value ကို determine လုပ်ဖို့ abs ဆိုတဲ့ function တစ်ခုကိုသုံးပါမယ်။ abs() ဆိုတဲ့ function ကတော့ negative values တွေမပါဘဲ number သာယူချင်တဲ့အခါသုံးပါတယ်။ PHP မှာ random integer တွေကိုထုတ်ပေးဖို့အတွက် RAND() ဆိုတဲ့ function တစ်ခုရှိပါတယ်။ ကျွန်တော်တို့ဟာ random integer အတွက် minimum နဲ့ maximum တွေသတ်မှတ်ပေးလို့ရပါတယ်။ ကျွန်တော်တို့ရဲ့example ထဲမှာတော့ minimum ကို 0 ပေးပြီး ၊ maximum ကို 1 ပေးထားပါတယ်။ False ဆိုရင် 0 ကိုထုတ်ပေးမှာဖြစ်ပြီး true ဆိုရင် 1 ကိုထုတ်ပေးမှာဖြစ်ပါတယ်။ တစ်ကယ်လို့ ကျွန်တော်တို့ expression က true ဖြစ်ပြီး 1 ကို return ပြန်မယ်ဆိုရင် အဲ့ဒီ 1 ကို player1 ထဲကိုထည့်လိုက်ပြီး ၊ 0 ဆိုရင် player2 ထဲကို 1 ထည့်လိုက်မှာဖြစ်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        $player1 = 0;
        $player2 = 5;
        $round = 0;

        //var_dump(abs($player1 - $player2));
        //var_dump($player2 - $player1);

        while(abs($player1 - $player2) < 2 || ($player1 < 11 && $player2 <)) {
            $round++;
            echo "&lt;h2&gt;Round $round&lt;/h2&gt;\n";

            if(rand(0, 1)) {
                $player1++;
            } else {
                $player2++;
            }
        
            echo "Player1 = $player1 &lt;br&gt;\n";
            echo "Player2 = $player2 &lt;br&gt;\n";
        }

        echo "&lt;h1&gt;";
        if($player1 > $player2) {
            echo "Player1 ";
        } else {
            echo "Player2 ";
        }
        echo "is the winner after $round rounds! &lt;/h1&gt;\n";


        ?&gt;
        </code>
    </pre>
    <p>
        <a href="inc/pingpong.php" class="output">The result of above code:</a>
    </p>
    <hr>


    <h2>For Loops</h2>
    <p>နောက်တစ်ခုလေ့လာမှာကတော့ For Loop ပဲဖြစ်ပါတယ်။ For loops တွေဟာ PHP မှာ complex အဖြစ်ဆုံး loops တွေဖြစ်ပါတယ်။ ဘာလို့လဲဆိုရင်တော့ expression တစ်ခုအစား သုံးခုလောက်သုံးလို့ဖြစ်ပါတယ်။ Eg. ( for (expr1, expr2, expr3) { } ) ။ ပထမဆုံး expression ကတော့ တစ်ကြိမ်ပဲ execute လုပ်ပါတယ်။ Iteration တစ်ခုချင်းစီရဲ့ အစမှာ expression two ကို evaluate လုပ်ပါတယ်။ Expression two ကတော့ conditional အပိုင်းဖြစ်ပြီး loop ကို continue ဖြစ်ဖို့အတွက် true ဖြစ်အောင် တွက်ထုတ်ပေးတာဖြစ်ပါတယ်။ ပြောချင်တာက true ဖြစ်နေသရွေ့ loop ကိုဆက်လုပ်နေမှာဖြစ်ပြီး false ဖြစ်တာနဲ့ အလုပ်ဆက်ပြီးမလုပ်တော့ပါဘူး။ Iteration ရဲ့အဆုံးမှာတော့ expression three ကို execute လုပ်ပေးမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ရဲ့ for loop ကို index array နဲ့လည်း အသုံးပြုနိုင်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        for($year = date('Y') -99; $year <= date('Y'); $year++) {
            echo $year ."&lt;br&gt;";
        }


        ?&gt;
        </code>
    </pre>
    <p>
        <a href="inc/for_loop.php" class="output">The result of above code:</a>
    </p>
    <p>For Loop using with indexed array:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        $learn = array('Conditionals', 'Arrays', 'Loops');
        $learn[] = 'Building Some Awesome';
            
        array_push($learn, 'Functions', 'Forms', 'Objects');
        array_unshift($learn, 'HTML', 'CSS');
        asort($learn);
        sort($learn);
            
        for($i=0; $i < count($learn); $i++) {
            echo $learn[$i]. "&lt;br&gt;";
        }
        
        
        ?&gt;
        </code>
    </pre>
    <p>
        <a href="inc/for_loop_with_index.php">The result of above code:</a>
    </p>
    <hr>


    <h2>Foreach Loops</h2>
    <p>အခုကတော့ Foreach loop အကြောင်းကို လေ့လာသွားမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ foreach loops တွေကို array ရဲ့ ဘယ် type မဆို အသုံးပြုနိုင်ပြီးတော့ ကျွန်တော်တို့ array မှာလည်း ဘယ် key value မဆိုရှိနိုင်ပါတယ်။ ကျွန်တော်တို့ဟာ key value (သို့) item value ကိုရွေးချယ်ပြီးတော့ grab လုပ်နိုင်ပါတယ်။ Foreach loop ဟာ function တစ်ခုချင်းစီနဲ့ while statement တွေကို combine လုပ်ထားတာပဲဖြစ်ပါတယ်။ include ဆိုတဲ့ keyword ကတော့ ကျွန်တော်တို့ code တွေကို အခြားနေရာမှာ pasted လုပ်ချင်တဲ့အခါသုံးတာဖြစ်ပါတယ်။ include ကိုသုံးခြင်းအားဖြင့် ဖတ်ရတာပိုမိုလွယ်ကူပြီးတော့ things တွေကိုလည်း organize လုပ်နိုင်ပါတယ်။ foreach loop ကိုရေးမယ်ဆိုရင်တော့ foreach ဆိုတဲ့ keyword ကိုသုံးပြီး သူ့နောက်မှာ parenthesis တစ်စုံလိုက်ပါတယ်။ ထို့နောက် curly braces ရေးရပါတယ်။ ကျွန်တော်တို့ရဲ့ parenthesis ထဲမှာတော့ ဘယ် array ကိုသုံးချင်ပါတယ်ဆိုတာကို ပြောလိုက်မှာဖြစ်ပါတယ်။ သူ့နောက်မှာတော့ as ဆိုတဲ့ keyword ရေးပါမယ်။ as ရဲ့နောက်မှာတော့ array တစ်ခုချင်းစီရဲ့ value ကိုထည့်ဖို့ variable အသစ်တစ်ခုရေးရပါတယ်။ ဥပမာ ကျွန်တော်တို့က list ဆိုတဲ့  array ထဲက item တစ်ခုချင်းစီကိုထုတ်ချင်တယ်ဆိုရင် $list as $item ဆိုပြီး ထုတ်ရမှာဖြစ်ပါတယ်။ ဆိုလိုတာကတော့ ကျွန်တော်တို့ array ထဲမှာရှိတဲ့အရာတွေကို item တစ်ခုအဖြစ်ထုတ်ပြမယ်လို့ပြောလိုက်တာပါ။ ပြီးရင် သူ့မှာ key value အစုံကိုလည်း ထုတ်လို့ရပါတယ်။ ကျွန်တော်တို့ရဲ့ example မှာ sample code နဲ့တကွပြထားပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        $list[] = [
            'title' => 'Ko Ko',
            'priority' => 1,
            'due' => '07/11/2016',
            'complete' => 1,
        ];

        $list[] = [
            'title' => 'Dishes',
            'priority' => 4,
            'due' => '07/11/2016',
            'complete' => 0,
        ]
        
        $list[] = [
            'title' => 'Dust',
            'priority' => 6,
            'due' => '07/11/2016',
            'complete' => 0,
        ]
        
        foreach($list as $key => $item) {
            echo $key . ' = ' . $item['title'] . "&lt;br>";
        }

        echo "&lt;table&gt;";
        echo "&lt;tr&gt;";
        echo "&lt;th&gt;Title&lt;/th&gt;";
        echo "&lt;th&gt;Priority&lt;/th&gt;";
        echo "&lt;th&gt;Due Date&lt;/th&gt;";
        echo "&lt;th&gt;Complete&lt;/th&gt;";
        echo "&lt;/tr&gt;";

        foreach($list as $item) {
            echo "&lt;tr&gt;";
            echo "&lt;td&gt;" . $item['title'] . "&lt;/td&gt;";
            echo "&lt;td&gt;" . $item['priority'] . "&lt;/td&gt;";
            echo "&lt;td&gt;" . $item['due'] . "&lt;/td&gt;&lt;br&gt;";
            echo "&lt;td&gt;";
            if($item['complete']) {
                echo "Yes";
            }else {
                echo "No";
            }
            echo "&lt;/td&gt;";
            echo "&lt;/tr&gt;";
        }
        echo "&lt;/table&gt;";


        ?>
        </code>
    </pre>
    <p>
        <a href="inc/foreach_loop.php" class="output" target="_blank">The result of above code:</a>
    </p>
    <hr>


    <h2>Filter Arrays</h2>
    <p>ကျွန်တော်တို့ ဒီတစ်ခါမှာတော့ array ထဲမှာရှိတဲ့ items တွေကို filter လုပ်ပြီးထုတ်ပြပါမယ်။ အရင်ဆုံးကျွန်တော်တို့ဟာ complete ကို Yes or No နဲ့စစ်ပြီးတော့ array ထဲမှာရှိတဲ့ data တွေကို filter လုပ်မှာဖြစ်ပါတယ်။ ပြီးတော့ filter လုပ်လို့ရတဲ့ item တွေကို filter ဆိုတဲ့ array အသစ်တစ်ခုထဲမှာထည့်လိုက်ပါမယ်။ </p>
    <pre>
        <code class="html hljs xml">
            foreach($list as $key => $item) {
                if($status === 'all' || $item['complete'] === $status) {
                    $filter[] = $key;
                }
            }
        </code>
    </pre>
    <p>ဒါဟာ ကျွန်တော်တို့ filter ဆိုတဲ့ array အသစ်ထဲမှာ list array တွေရဲ့ key တွေကို index array အဖြစ်သိမ်းထားလိုက်တာပါ။ ကျွန်တော်တို့သိထားရမှာက ကျွန်တော်တို့သိမ်းလိုက်တဲ့ဟာက list array ရဲ့ index ပဲဖြစ်ပါတယ်။ value ကိုသိမ်းတာမဟုတ်ပါဘူး။ ပြီးတော့ အဲ့ဒီ list array ဟာလည်း multi-dimensional array ပဲဖြစ်ပါတယ်။ ဒါကြောင့် ကျွန်တော်တို့ဟာ list array ထဲက data ကိုထုတ်တာမှန်ပေမယ့် အမှန်တစ်ကယ် loop ပတ်ပြီဆိုရင် filter array ကိုပဲ loop ပတ်ပြီးတော့ ထုတ်ပေးတာဖြစ်ပါတယ်။ နောက်ထပ်ကျွန်တော်တို့သိထားရမှာက ဘယ် string မဆို boolean value true ကိုပဲ return ပြန်ပါတယ်၊ empty string ဆိုရင်လဲ boolean value true ကိုပဲ return ပြန်ပေးမှာဖြစ်ပါတယ်။ </p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        $filter = array();
        $status = 'all';  

        $list[] = [
            'title' => 'Laundry',
            'priority' => 1,
            'due' => '07/11/2016',
            'complete' => true,
        ];

        $list[] = [
            'title' => 'Dishes',
            'priority' => 1,
            'due' => '07/11/2016',
            'complete' => false,
        ];

        $list[] = [
            'title' => 'Dust',
            'priority' => 1,
            'due' => '07/11/2016',
            'complete' => true,
        ];

        foreach($list as key => $item) {
            if($status === 'all' || $item['complete'] === $status) {
                $filter[] = $key;
            }
            //var_dump($item['complete']);
        }
        //var_dump($status, boolval('all'), $status === 'all');
        //var_dump($filter);

        echo "&lt;table border='1'&gt;";
        echo "&lt;tr&gt;";
        echo "&lt;th&gt;Title&lt;/th&gt;";
        echo "&lt;th&gt;Priority&lt;/th&gt;";
        echo "&lt;th&gt;Complete&lt;/th&gt;";
        echo "&lt;/tr&gt;";

        foreach($filter as $id) {
            echo "&lt;tr&gt;";
            echo "&lt;td&gt;" . $list[$id]['title'] . "&lt;/td&gt;";
            echo "&lt;td&gt;" . $list[$id]['priority'] . "&lt;/td&gt;";
            echo "&lt;td&gt;";
            if($list[$id]['complete']) {
                echo "Yes";
            }else {
                echo "No";
            }
            echo "&lt;/td&gt;";
            echo "&lt;/tr&gt;";
        }
        echo "&lt;/table&gt;";


        ?>
        </code>
    </pre>
    <p>
        <a href="inc/foreach_filter.php" target="_blank" class="output">The result of above code:</a>
    </p>
    <hr>


    <h2>Introduction to Functions</h2>
    <p>အခု ကျွန်တော်တို့အနေနဲ့ PHP function တွေအကြောင်းကို လေ့လာသွားပါမယ်။ PHP function တွေကို နေရာတိုင်းမှာသုံးနေတာဖြစ်တဲ့အတွက် PHP function တစ်ခုကိုထည့်ခြင်းဟာ ကျွန်တော်တို့ code ရဲ့ statements တွေကို organize လုပ်ဖို့နဲ့ group လုပ်ဖို့အတွက်ပဲဖြစ်ပါတယ်။ အဲ့ဒီ organize or group လုပ်ထားတဲ့ code တွေဟာ ထပ်ခါထပ်ခါ အလုပ်လုပ်နေရပါတယ်။ Functions တွေဟာ arguments နဲ့ know values တွေဖြစ်တဲ့ databases, external APIs, date and time ကဲသို့သော input တွေပေါ်မှာ supplied လုပ်ထားတဲ့အပေါ်အခြေခံပြီးတော့ value တွေကို return ပြန်ပေးပါတယ်။ ကျွန်တော်တို့ဟာ PHP function တစ်ခုကိုရေးမယ်ဆိုရင် function ဆိုတဲ့ keyword ကိုအသုံးပြုရပါတယ်။ Function လို့ရေးလိုက်ခြင်းဟာ PHP interpreter က ဒါဟာ function တစ်ခုပါဆိုတာကို တန်းသိနိုင်ပါတယ်။ သူ့ရဲ့နောက်မှာတော့ function ရဲ့ name ကိုသတ်မှတ်ပေးရပါတယ်။ function name ရဲ့နောက်မှာတော့ parenthesis() တစ်စုံနဲ့ သူ့နောက်မှာ curly braces { } လိုက်ပြီး သူ့ထဲမှာတော့ ကျွန်တော်တို့ ထပ်ခါထပ်ခါလုပ်ချင်တဲ့ code တွေကို ထည့်ရေးပေးရမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ရဲ့ function ကိုကြေငြာပြီးပြီဆိုရင် သူ့ကိုပြန်ခေါ်ဖို့လိုပါတယ်။ ဥပမာ hello() ဆိုတဲ့ function တစ်ခုနဲ့ကျွန်တော်တို့က သူ့ထဲမှာ echo "Hello World"; ဆိုပြီးထုတ်ချင်တယ်ဆိုရင်တော့ သူ့ကို hello(); ဆိုတဲ့ function ကို အောက်မှာပြန်ခေါ်ပေးမှသာလျှင် Hello World ထွက်လာမှာဖြစ်ပါတယ်။ Function ကို call ခေါ်ချင်တယ်ဆိုရင်တော့ function name ဖြစ်တဲ့ hello ရဲ့နောက်မှာ set of parenthesis တစ်ခုလိုက်ပြီး သူ့နောက်မှာ semi-comma နဲ့အဆုံးသတ်ပေးရပါမယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        //Define a function named "hello"
        function hello() {
            echo 'Hello World';
        }

        hello();        //Calling a function


        ?&gt;
        </code>
    </pre>
    <p>
        <a href="inc/function_intro.php" class="output" target="_blank">The result of above code:</a>
    </p>
    <p>နောက်တစ်ခုကတော့ function မှာအရေးကြီးတဲ့ အပိုင်းဖြစ်တဲ့ function scope အကြောင်းကိုပြောမှာဖြစ်ပါတယ်။ ဥပမာ ကျွန်တော်တို့မှာ hello ဆိုတဲ့ function နဲ့ isPerson ဆိုရင် function နှစ်ခုရှိပြီး အဲ့ဒီ function နှစ်ခုတည်းမှာ name ဆိုတဲ့ variable အတူတူပါနေတယ်ဆိုရင်တောင် သူတို့နှစ်ခုက မတူပါဘူး။ ဘာလို့လဲဆိုရင်တော့ သူတို့ကို သုံးထားတဲ့ function scope ချင်းမတူလို့ပဲဖြစ်ပါတယ်။ Function scope ချင်းမတူတဲ့အတွက်ကြောင့် သူ့ထဲမှာအလုပ်လုပ်တဲ့အရာတွေတူတယ်ဆိုရင်တောင် တစ်ခုနဲ့တစ်ခုတော့ သက်ဆိုင်မှာမဟုတ်ပါဘူး။ နောက်တစ်ခုကတော့ PHP variable ပါ။ ကျွန်တော်တို့ function scopeရဲ့ အပြင်ဘက်မှာရှိတဲ့ variable ကိုခေါ်သုံးလို့ရပါတယ်။ PHP variable မှာ  local variable နဲ့ global ဆိုပြီး နှစ်မျိုးရှိပါတယ်။ ကျွန်တော်တို့ function scope ရဲ့ အပြင်ဘက်မှာရှိတဲ့ variable ကိုခေါ်သုံးချင်တယ်ဆိုရင်တော့ global variable အနေနဲ့ခေါ်သုံးလို့ရပါတယ်။ သူ့ကိုခေါ်သုံးမယ်ဆိုရင်တော့ function ထဲမှာ global ဆိုတဲ့ key ကိုအသုံးပြုပြီးတော့ ခေါ်သုံးနိုင်ပါတယ်။ ဒါဆိုရင်တော့ ကြိုက်တဲ့ variable ကို global အနေနဲ့ ဘယ် function ကမဆို လှမ်းခေါ်သုံးလို့ရပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        function hello() {
            echo 'Hello, World!';
        }

        $current_user = 'Mike';

        function is_Mike() {
            global $current_user;
            if ($current_user == 'Mike') {
                echo "It is Mike!";
            } else {
                echo "Nope, It is not Mike!";
            }
        }


        ?&gt;
        </code>
    </pre>
    <p>
        <a href="inc/function_scope.php" class="output" target="_blank">The result of above code:</a>
    </p>
    <hr>


    <h2>PHP Function Arguments</h2>
    <p>ကျွန်တော်တို့ အခုလေ့လာမှာကတော့ PHP ရဲ့ function arguments တွေအကြောင်းပဲဖြစ်ပါတယ်။ Information တွေကို argument list ကို through လုပ်ပြီးတော့ functions တွေကို pass လုပ်ပေးပါတယ်။ Argument list ကတော့ expression တွေကို comma ခြားပြီးတော့ left ကနေ right ကို evaluate လုပ်ပေးပါတယ်။ ကျွန်တော်တို့ function ရဲ့ parenthesis ထဲမှာ argument ကိုထည့်ပေးခြင်းအားဖြင့် ကျွန်တော်တို့ရဲ့ function ထဲကို arguments တွေ pass လုပ်ပေးပါလိမ့်မယ်။ Arguments တွေကို pass လုပ်ဖို့အတွက် နည်းလမ်းနှစ်ခုရှိပါတယ်။ ပထမတစ်ခုကတော့ PHP ထဲမှာ default ပါလာတဲ့ passing by value ဖြစ်ပြီး ဒီ case မှာဆိုရင် ကျွန်တော်တို့ argument value ဟာ function scope ရဲ့အပြင်ဘက်မှာဆိုရင် effect မဖြစ်ပါဘူး။ တစ်နည်းပြောရရင် function call ခေါ်တဲ့အချိန်မှာ parameter ရဲ့ value ကို တစ်ခါတည်း argument အနေနဲ့ထည့်ပေးတာဖြစ်ပါတယ်။ Passing by value နဲ့ဆိုရင် parameter တစ်ခုအတွက် value တစ်ခုကိုပဲ ပို့လို့ရပါတယ်။ ဒါပေမယ့် parameter တစ်ခုအတွက် value အများကြီးကို ပို့ချင်တယ်ဆိုရင်တော့ ဒုတိယနည်းလမ်းဖြစ်တဲ့ passing by reference ကို အသုံးပြုရမှာဖြစ်ပါတယ်။ Passing by reference ဆိုတာ ကျွန်တော်တို့ရဲ့ argument ကို array တစ်ခုအနေနဲ့ pass လုပ်ပေးတာကို ဆိုလိုပါတယ်။ အောက်မှာ example နဲ့တကွ ပြထားပါတယ်။ </p>
    <p>Example of Passing by Value:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        function hello($name) {
            echo "&lt;h2&gt;Hello $name&lt;/h2&gt;";
        }
        hello('Ladies and Gentlemen!');


        ?&gt;
        </code>
    </pre>
    <p>
        <a href="" class="output" target="_blank">The result of above code:</a>
    </p>
    <p>Example of Passing by Reference:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        $names = array (
        	'Kwee Zin', 
        	'Aung Zin Latt',
        	'Mg Aung Aung',
        	'Daw Pyone'
        );

        function hello($arr) {
            foreach($arr as $key => $name) {
                echo "Hello, $name, How's it going!";
                echo "&lt;br&gt;";
            }
        }

        hello($names);

        ?&gt;
        </code>
    </pre>
    <p>
        <a href="" class="output" target="_blank">The result of above code:</a>
    </p>
    <hr>


    <h2>PHP Function Default Arguments</h2>
    <p>ကျွန်တော်တို့ရဲ့ အရင်သင်ခန်းစာမှာ function arguments ကိုလေ့လာခဲ့ပြီးနောက် နောက်ထပ်အရေးပါတဲ့ component တစ်ခုကတော့ default arguments ပဲဖြစ်ပါတယ်။ တစ်ခါတစ်ရံမှာ argument တစ်ခုကို pass မလုပ်ခဲ့ဘူးဆိုပါဆို။ ဒါပေမယ့် ကျွန်တော်တို့ရဲ့ starting value ကို function ထဲကို pass လုပ်ချင်တယ်ဆိုရင် default argument ကို အသုံးပြုရပါတယ်။ Default argument ဆိုတာကတော့ ကျွန်တော်တို့ရဲ့ function ထဲက parameter ထဲမှာ value တစ်ခါတည်း သတ်မှတ်ခဲ့တာဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ function call ခေါ်တဲ့အချိန်မှာ arguments တွေထည့်မပေးလိုက်ဘူးဆိုရင် အဲ့ဒီ function က default argument အနေနဲ့ အလုပ်လုပ်သွားမှာဖြစ်ပြီး arguments တွေထည့်ပေးလိုက်မယ်ဆိုရင် function က အဲ့ဒီ arguments တွေကို အလုပ်လုပ်သွားမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ရဲ့ argument ကို null ထည့်ပေးလိုက်မယ်ဆိုရင်တော့ အဲ့ဒီ argument နေရာမှာ အလွတ်ဖြစ်နေပြီးတော့ ဘာ output မှာထုတ်ပေးမှာ မဟုတ်ပါဘူး။ နောက်တစ်ခုသိရမှာက ကျွန်တော်တို့ function ထဲမှာ arguments တွေတစ်ခုထက် ပိုပြီးရှိနိုင်ပါတယ်။ ဥပမာ ကျွန်တော်တို့ function ထဲမှာ argument နှစ်ခုရှိတယ်ဆိုရင် default ကို နောက်ဆုံးမှာရေးပေးရပါမယ်။ ဒီလိုမရေးရင်တော့ error တက်မှာဖြစ်ပါတယ်။ ဒါကြောင့် arguments တွေဘယ်လောက်ထည့်ထည့် သူတို့ကို ကျွန်တော်တို့သတ်မှတ်ထားတဲ့ ရိုးရိုး arguments တွေရဲ့နောက်မှာပဲ ထည့်ရပါမယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php
 
        function get_info($name, $title = Null) {
            if($title) {
                echo "$name has arrived, they are with us as a $title.";
            } else {
                echo "$name has arrived, welcome!";
            }

        }

        get_info("Mike", 'frog');

        ?&gt;
        </code>
    </pre>
    <p>
        <a href="inc/default_arguments.php" class="output" target="_blank">The result of above code:</a>
    </p>
    <hr>


    <h2>Returning Values</h2>
    <p>ကျွန်တော်တို့ရဲ့ cases အတော်များများမှာ function ထဲက value ကို return ပြန်ပေးဖို့လိုပါတယ်။ ဒီလိုလုပ်ဖို့ဆိုရင် ကျွန်တော်တို့ဟာ value ကို return ပြန်ပေးဖို့လိုလာပါလိမ့်မယ်။ ဒီနည်းလမ်းနဲ့ပဲ ကျွန်တော်တို့ဟာ function call တစ်ခုကနေ data ကို ဘယ် variable type ထဲကိုမဆို store လုပ်နိုင်မှာဖြစ်ပါတယ်။ ဒါတွေကတော့ arrays, integers, booleans အစရှိသဖြင့်ပဲဖြစ်ပါတယ်။ Return statement တစ်ခုဟာ function ရဲ့ execution ကို ချက်ချင်းအဆုံးသတ်ပေးနိုင်ပါတယ်။ ဒီနည်းလမ်းနဲ့ function ကို ဘယ်ကခေါ်ပြီး pass လုပ်သလဲဆိုတာ control လုပ်နိုင်မှာဖြစ်ပါတယ်။ returning statement ဟာ function ထဲက အမျိုးမျိုးသော location မှာ return ပြန်ဖို့ ခွင့်ပြုပေးပါတယ်။ Function တစ်ခုဟာ multiple values တွေကို return မပြန်နိုင်ပေမယ့် single data type ထဲမှာရှိတဲ့ multiple values တွေပါတဲ့ array တစ်ခုကိုတော့ return ပြန်နိုင်ပါတယ်။ return statement  ကပြန်လာတဲ့ value ကို variable တစ်ခုနဲ့ ဖမ်းထားသင့်ပါတယ်။ ဒါမှသာ value ကို output ထုတ်ကြည့်တဲ့အခါ အဆင်ပြေမှာဖြစ်ပါတယ်။ ဥပမာ ကျွန်တော်တို့ return statement မှာ array တစ်ခုကို return ပြန်ထားတဲ့အခါမျိုးမှာ သူ့ကို loop ပတ်ပြီး output ထုတ်မယ့်အစား variable တစ်ခုပေးပြီး output ထုတ်တာဟာ ပိုလွယ်ကူလို့ပါပဲ။ print_r ဆိုတာကတော့ ကျွန်တော်တို့မှာ array တစ်ခုရှိတယ်ဆိုရင် အဲ့ဒီ array ရဲ့ key နဲ့ value ကို echo ထုတ်ပြတာပဲဖြစ်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        // function add_up($a, $b) {
        // 	return $a + $b;
        // }
        
        // $value = add_up(2, 4);
        
        // echo $value;
        
        function add_up($a, $b) {
        	$arr = array (
        		$a,
        		$b,
        		$a + $b
        	);
        	return $arr;
        }

        $value = add_up(2, 4);

        //print_r($value);
        echo $value[2];

        ?&gt;
        </code>
    </pre>
    <p>      
        <a href="inc/returning_values.php" class="output" target="_blank">The result of above code:</a>
    </p>
    <hr>


    <h2>PHP Variable Functions</h2>
    <p>PHP variable function ဆိုတာ ကျွန်တော်တို့ရဲ့ variable ရဲ့ value ကို တူညီတဲ့ function name အဖြစ်အသုံးပြုခြင်းပဲဖြစ်ပါတယ်။ Variable function အဖြစ် အသုံးပြုမယ်ဆိုရင်တော့ variable name ရဲ့နောက်မှာ set of  parenthesis လိုပါတယ်။ အဲ့ဒီလိုထည့်ပေးလိုက်တဲ့အခါမှာ PHP က variable name နဲ့တူတဲ့ function name ကိုလိုက်ရှာပြီးတော့ အဲ့ဒီ function ကို execute လုပ်ဖို့အတွက် attempt လုပ်ပေးပါတယ်။ ဒါကို ကျွန်တော်တို့ရဲ့ code ထဲမှာ callback အနေနဲ့ အသုံးပြုပါတယ်။ ဒါဟာ ကျွန်တော်တို့ကို အခြား function တစ်ခုကနေ အမျိုးမျိုးသော function တွေကိုခေါ်ဖို့အတွက် ခွင့်ပြုပေးတယ် (သို့မဟုတ်) action တစ်ခုကို အခြေခံပြီး main function ရဲ့ result ကိုထုတ်ဖို့ ခွင့်ပြုပေးပါတယ်။ ဥပမာ ကျွန်တော်တို့မှာ hello ဆိုတဲ့ function တစ်ခုရှိပြီး သူ့ကို variable function အဖြစ်သတ်မှတ်မယ်ဆိုရင် အရင်ဆုံး variable တစ်ခုသတ်မှတ်ပြီး variable ရဲ့ value ကို ရှိပြီးသား function ဖြစ်တဲ့ hello ဆိုတဲ့ function name ကို variable value အဖြစ် သတ်မှတ်ပေးရပါမယ်။ function name ကို variable value အဖြစ်သတ်မှတ်ပြီး variable ထဲကို assign လုပ်လိုက်သလိုပါပဲ။ အဲ့ဒီ function ထဲကကောင်ကို output ထုတ်ချင်တယ်ဆိုရင်တော့ variable name ရဲ့နောက်မှာ set of parenthesis () လိုက်ပြီး ထုတ်ပေးရမှာဖြစ်ပါတယ်။ ဒါကို အောက်က example မှာကြည့်နိုင်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        function answer() {
        	return 42;
        }

        function add_up($a, $b) {
        	return $a + $b;
        }

        $func = 'add_up';

        $num = $func(10, 25);

        echo $num;

        ?&gt;
        </code>
    </pre>
    <p>
        <a href="inc/variable_function.php" class="output" target="_blank">The result of above code:</a>
    </p>
    <hr>


    <h2>Closures or Anonymous Functions</h2>
    <p>နောက်တစ်ခုကတော့ ကျွန်တော်တို့ အမြဲတမ်းသုံးစရာ မလိုပေမယ့် သိထားဖို့တစ်ကယ်ကိုလိုအပ်တဲ့ closures တွေပဲဖြစ်ပါတယ်။ Closures တွေဟာ nameless function တွေဖြစ်တဲ့ anonymous function တွေပဲဖြစ်ပါတယ်။ သူတို့တွေဟာ function scope အပြင်ဘက်မှာရှိတဲ့ accessing variables တွေရဲ့ capable ပဲဖြစ်ပါတယ်။ Anonymous function ကိုသတ်မှတ်မယ်ဆိုရင်တော့ အရင်ဆုံး variable တစ်ခုရေးပြီး သူ့နောက်မှာ equal နဲ့ function ဆိုပြီး parenthesis နဲ့ရေးပြီး keyword ရဲ့နောက်မှာ ဘာ function name မှာမထည့်ပဲ ရေးပေးရပါမယ်။ သူ့ရဲ့နောက်မှာ function scope လိုက်ပြီးတော့ semi-colon နဲ့အဆုံးသတ်ပေးရပါမယ်။ ဒါကြောင့် အောက်မှာပြထားတဲ့ example အတိုင်း function ထဲမှာအလုပ်လုပ်တဲ့အရာမှန်သမျှကို $greet ဆိုတဲ့ variable ထဲမှာ assign လုပ်သွားမှာဖြစ်ပါတယ်။ အဲ့ဒီ anonymous function ကို call ခေါ်မယ်ဆိုရင်တော့ assign လုပ်ထားတဲ့ variable ရဲ့နောက်မှာ parenthesis ထည့်ပြီး ခေါ်ရမှာဖြစ်ပါတယ်။ ပီးတော့ကျွန်တော်တို့ function ထဲမှာ arguments မထည့်ပဲ၊ global variable မသုံးပဲနဲ့ function scope ရဲ့အပြင်မှာရှိတဲ့ variable ကို function ထဲမှာခေါ်သုံးချင်တယ်ဆိုရင်တော့ ကျွန်တော်တို့ use ဆိုတဲ့ keyword ကိုသုံးသင့်ပါတယ်။ use ဆိုတဲ့ keyword သုံးမယ်ဆိုရင်တော့ ကျွန်တော်တို့ function ရဲ့ set of parentheses ရဲ့နောက်မှာ use ဆိုတဲ့ keyword ကိုရေးရပါတယ် use ရဲ့နောက်မှာ set of parentheses လိုက်ပါတယ်၊ အဲ့ဒီက set of parentheses ထဲမှာမှ ကျွန်တော်တို့ အသုံးပြုချင်တဲ့ variable name ကိုသတ်မှတ်ပေးရပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php 
        $name = 'Mike';

        $greet = function() use($name){
            echo "Hello,$name!";
        };

        $greet();

        ?&gt;
        </code>
    </pre>
    <p>
        <a href="inc/closures.php" class="output" target="_blank">The result of above code:</a>
    </p>
    <hr>


    <h2>PHP Built Ins and Documentation</h2>
    <p>ကျွန်တော်တို့ PHP မှာဆိုရင် built in functions တွေအများကြီးရှိပါတယ်။ သူတို့ကို လေ့လာမယ်ဆိုရင်တော့ <a href="https://www.php.net/manual/en/functions.internal.php">PHP.net</a> ရဲ့ documentation မှာ PHP built functions တွေကို လေ့လာနိုင်ပါတယ်။ အဲ့ဒီမှာ function name တွေ၊ built in functions တွေအများကြီးရှိပါတယ်။ </p>
    <hr>


    <h2>PHP String Functions</h2>
    <p>Stringတွေကတော့PHPမှာmajor data typeတစ်ခုဖြစ်ပီးတခါတလေတော့search, parse နဲ့ testလုပ်ဖို့လိုလာပါတယ်။အသုံးအများဆုံးကတော့ php built in string function တွေပဲဖြစ်ပါတယ်။ String lengthတွေကိုစစ်ချင်ရင် strlen ကိုသုံးပေးရမှာဖြစ်ပါတယ်။ နောက်တစ်ခုကတော့ sub-string နဲ့ string positionဖြစ်ပါတယ်။ substring ရေးပုံကတော့ substr() ဆိုပီးရေးရတာဖြစ်ပါတယ်။ parentheses ထဲမှာပဲကျွန်တော်တို့ဖြတ်ချင်တဲ့ string ကို အစနဲ့အဆုံးသတ်မှတ်ပေးရပါတယ်။ ပထမက string ကိုရေးရပီးတော့ ဒုတိယကကျွန်တော်တို့စပီးဖြတ်မဲ့နေရာဖြစ်တယ်။ တတိယကောင်ကတော့ဆုံးမှတ်ဖြစ်ပါတယ်။ strpos ကတော့ string တွေရဲ့ position ကိုရှာပေးတာဖြစ်ပါတယ်။ string တွေရဲ့ position ကတော့ zero ကနေစတာပါoneကနေစတာမဟုတ်ပါဘူး။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        $phrase = "We only hit what we aim for";

        $len = strlen($phrase);
        //echo $len;

        //substr function

        //echo substr($phrase, 0, 7);

        //strpos function and combing two string function

        $start = strpos($phrase, 'hit');
        echo substr($phrase, $start);

        //var_dump(strpos($phrase, 'bob')); 	  //return bool(false)


        ?&gt;
        </code>
    </pre>
    <p>
        <a href="inc/string_functions.php" class="output" target="_blank">The result of above code:</a>
    </p>
    <hr>


    <h2>PHP Array Functions</h2>
    <p>Arrays တွေဟာ ကျွန်တော်တို့ရဲ့ အမျိုးမျိုးသော data type တွေကို store လုပ်ဖို့နဲ့ organize လုပ်ဖို့ခွင့်ပြုပေးတဲ့ super-flexible data type တစ်ခုပဲဖြစ်ပါတယ်။ အဲ့ဒီ flexibility နဲ့ပဲ array data တွေကို work and manage လုပ်ဖို့ နည်းလမ်းတွေလိုအပ်ပါတယ်။ ကျွန်တော်တို့ရဲ့ array keys functions တွေကို <a href="https://www.php.net/manual/en/function.array-keys.php">php.net</a> ရဲ့ documentation မှာလေ့လာနိုင်ပါတယ်။ array_keys ဟာ array တစ်ခုထဲမှာရှိတဲ့ keys တွေအားလုံး (သို့) keys တွေရဲ့ subsets တစ်ခုကို return ပြန်ပေးပါတယ်။ နောက်တစ်ခုကတော့ array_walk ဆိုတဲ့ function ပဲဖြစ်ပါတယ်။ array_walk ဟာ user တစ်ယောက်က supplied လုပ်ထားတဲ့ function ကို array တစ်ခုရဲ့ member တိုင်းကို apply လုပ်ပေးတာဖြစ်ပါတယ်။ array_keys မှာ parameter နှစ်ရှိပြီး ပထမတစ်ခုက array name ၊ ဒုတိယတစ်ခုက callback ပဲဖြစ်ပါတယ်။ callback မှာလည်း parameter နှစ်ခုရှိပြီး ပထမတစ်ခုက array parameter ရဲ့ value နဲ့ ဒုတိယတစ်ခုက key/index ပဲဖြစ်ပါတယ်။ အောက်မှာ example နဲ့တကွ ပြထားပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        $names = array(
        	'Mike' => 'Frog',
        	'Chris' => 'Teacher',
        	'Hampton' => 'Tutor'
        );
        
        // foreach (array_keys($names) as $name) {
        // 	echo "Hello, $name &lt;br&gt;";
        // }
        
        function print_info($value, $key) {
        	echo "$key is a $value. &lt;br&gt;";
        }
        
        array_walk($names, 'print_info');
        
        
        ?&gt;
        </code>
    </pre>
    <p>
        <a href="inc/array_functions.php" class="output" target="_blank">The result of above code:</a>
    </p>




</body>

</html>