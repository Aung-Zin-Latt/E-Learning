<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Standard and Best Practices</title>
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
    
    <h2>Getting Started</h2>
    <p>ယနေ့ခေတ်မှာ PHP ဟာ high quality တွေအများကြီးနဲ့ resources တွေပါဝင်ပြီးတော့ အဲ့ဒီ code တွေကို ပိုမိုကောင်းမွန်လာအောင် သူ့မှာပါတဲ့ resources တွေကို လေ့လာသွားမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ရဲ့ internet ပေါ်မှာ various bodies တွေ create လုပ်ထားတဲ့ standards အချို့ရှိပါတယ်။ အဲ့ဒါတွေကတော့ HTTP spec ပေါ်မှာ အလုပ်လုပ်တဲ့ IETF နဲ့ HTML အတွက် responsible ဖြစ်တဲ့ W3C တို့ဖြစ်ပါတယ်။ PHP ကို programmer အများစုက web အပိုင်းမှာအသုံးပြုဖို့ စိတ်ဝင်စားကြပါတယ်။ Best practices တွေလုပ်ခြင်းနဲ့ developer အချင်းချင်း အကြံဉာဏ်ပေးခြင်းဟာ common problems တွေဖြစ်တဲ့ interacting with data stroes, cashing, security, designing how you write your code တွေနဲ့ avoid ဖြစ်စေဖို့ ကူညီပေးပါတယ်။ Beginners အများတော်တော်များများကတော့ code တွေအများကြီးကို messy, insecure နဲ့ တစ်ခါတစ်ရံမှာ လိုအပ်တာထက် code ကိုပိုပြီးရေးလိုက်တာမျိုး ပြုလုပ်တတ်ကြပါတယ်။ ဒီနေ့ခေတ်မှာတော့ PHP ဟာ ကောင်းမွန်တဲ့ quality ရှိတဲ့ code တွေနဲ့အတူ environment တစ်ခုအနေနဲ့ ရှိနေပါပြီ။ နောက်ထပ် popular resource တစ်ခုကတော့ PHP The Right Way ဖြစ်ပြီး သူဟာ extensions, packages နဲ့ အခြား things တွေကို achieve လုပ်ဖို့သုံးနိုင်တဲ့ up-to-date information တွေအတွက် living document တစ်ခုအဖြစ် လုပ်ဆောင်ပေးပါတယ်။ ဒီသင်ခန်းစာမှာတော့ ကျွန်တော်တို့က code တွေကို နည်းလမ်းမှန်မှန်ကန်ကန်နဲ့ ကောင်းမွန်အောင် ဘယ်လိုရေးမလဲဆိုတာကို လေ့လာသွားမှာဖြစ်ပါတယ်။ </p>
    <hr>


    <h2>Databases and International Concerns</h2>
    <p>ကျွန်တော်တို့က aggregation တစ်ခုကို PHP နဲ့ 99% အချိန်ပေးပြီး တည်ဆောက်တဲ့အခါမှာ ကျွန်တော်တို့အနေနဲ့ some sort of data store နဲ့ interacting လုပ်ရပါလိမ့်မယ်။ ဒါကြောင့်မို့ ကျွန်တော်တို့ SQL database တစ်ခုကို အသုံးပြုရမှာဖြစ်ပါတယ်။ SQL ရဲ့အရှည်ကောက်ကတော့ Structured Query Language ပဲဖြစ်ပါတယ်။ SQL databases တွေဟာ users တွေ၊ blog posts တွေ၊ payment information တွေသာမက ကျွန်တော်တို့ လိုအပ်တဲ့အချိန်မှာ data ကို fetch လုပ်ဖို့အတွက် interface တစ်ခုကို provide လုပ်ပေးတဲ့ website တွေကို save လုပ်ဖို့အတွက် ခွင့်ပြုပေးပါတယ်။ PHP မှာ database နဲ့ အလုပ်လုပ်ပေးနိုင်ဖို့အတွက် MySQL, PostgreSQL နဲ့ SQLite တွေကဲ့သို့သော options တွေအများကြီးရှိပါတယ်။ MySQL ကတော့ PHP community မှာ တစ်ကယ်ကို popular ဖြစ်တဲ့တစ်ခုဖြစ်ပါတယ်။ ဒါပေမယ့်သူ့ကိုသုံးမယ်ဆိုရင်တော့ သတိထားဖို့လိုပါတယ်။ ဘာလို့လဲဆိုရင် သူ့မှာ PHP နဲ့ MySQL databases ကို connect လုပ်ပြီး အသုံးပြုလို့ရနိုင်တဲ့ extensions သုံးခုရှိပါတယ်။ သူတို့ကတော့ MySQL, MySQLI နဲ့ PDO တို့ပဲဖြစ်ပါတယ်။ MySQL extension ကတော့ လက်ရှိမှာ ကန့်သတ်ထားပြီးတော့ နောက် PHP ရဲ့ version တွေမှာလည်း remove လုပ်ပါလိမ့်မယ်။ MySQLI နဲ့ PDO ကတော့ safe options တွေပဲဖြစ်ပါတယ်။ တစ်ကယ်လို့ ကျွန်တော်တို့က MySQL ကိုမသုံးဘဲ အခြား PGSQL or SQLite လိုမျိုး popular system တစ်ခုနဲ့သွားဖို့ ဆုံးဖြတ်ထားရင် သူ့မှာလည်း PGSQL, SQLite နဲ့ PDO ဆိုပြီးတော့ extensions သုံးမျိုးရှိပါတယ်။ တစ်ကယ်လို့ဘာသုံးရမှန်းမသိဘူးဖြစ်နေရင်တော့ PDO သုံးတာကောင်းပါတယ်။ PDO ကတော့ ကျွန်တော်တို့ကို PHP API နဲ့ database ကို interact လုပ်ဖို့ support ပေးပါတယ်။ ဒါကတော့ ကျွန်တော်တို့ကို MySQL, Postgres နဲ့ SQLite စတဲ့ database တွေနဲ့ interact လုပ်ဖို့ခွင့်ပြုပါတယ်။ </p>
    <hr>


    <h2>Working with DateTime</h2>
    <p>PHP မှာ DateTime လို့ခေါ်တဲ့ code class တစ်ခုရှိပါတယ်။ သူဟာ ကျွန်တော်တို့ကို reading, writing, comparing dates နဲ့ date time ရဲ့ rated calculations တွေပြုလုပ်တဲ့နေရာမှာ ကူညီပေးပါတယ်။ DateTime class အပြင် PHP မှာ အခြားသော date & time rated functions တွေအများကြီးရှိတယ်ဆိုပေမယ့် DateTime class ဟာ ကောင်းမွန်တဲ့ object-oriented interface တစ်ခုကို provide လုပ်ပေးပါတယ်။ ဒီလိုလုပ်ဖို့အတွက် index.php ထဲကိုသွားပြီး ကျွန်တော်တို့က new DateTime object တစ်ခုကို create လုပ်ပြီး သူ့ကို $date ဆိုတဲ့ variable ထဲကို store လုပ်လိုက်ပါမယ်။ ကျွန်တော်တို့ ဒီ case မှာ constructor class ထဲကို string တစ်ခု passing လုပ်ခြင်းဖြင့် object တစ်ခုကို create လုပ်မှာဖြစ်ပါတယ်။ အဲ့ဒီ string ထဲမှာ bunch of defferent formats တွေထဲက တစ်ခုဖြစ်တဲ့ date တစ်ခုပါဝင်ပါမယ်။ အောက်မှာတော့ p tag တစ်ခုနဲ့ output date ကို ထုတ်မှာဖြစ်ပါတယ်။ Date ရဲ့ output format ကိုတော့ M/D/Y ဆိုပြီး ထုတ်ပေးထားမှာဖြစ်ပါတယ်။ ဘာကိုဆိုလိုတာလည်းဆိုရင် အရင် month လာပြီးမှ day နဲ့ year ကိုထုတ်မယ်လို့ပြောတာပါ။ Browser မှာကြည့်လိုက်မယ်ဆိုရင်တော့ ကျွန်တော်တို့မျှော်လင့်ထားသလို date တစ်ခုဖော်ပြပေးမှာဖြစ်ပါတယ်။ အဲ့ဒီမှာအားသာချက်က ကျွန်တော်တို့အနေနဲ့ input date string ကို change လုပ်နိုင်ပြီး same output format လည်းရှိနေပါတယ်။ Input format တွေထဲက အသုံးများတဲ့ format တစ်ခုကတော့ SQL date string ပဲဖြစ်ပါတယ်။ ကျွန်တော်တို့က string offsets ကိုသုံးပြီး date time objects တွေကို initialize လုပ်သွားမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ string တစ်ခုစဖို့အတွက် constructor ကို plus or minus နဲ့ change လုပ်နိုင်ပါတယ်။ ပြီးတော့ number of units တွေဖြစ်တဲ့ second, hours, days, weeks, months နဲ့ years တွေ add လုပ်နိုင်ပါတယ်။ အပေါ်မှာဖော်ပြခဲ့သလိုပဲ DateTime constructor ကို passed လုပ်ပေးတဲ့ string argument ဟာ အမျိုးမျိုးသော input formats တွေထဲက dates တွေကို accept လုပ်ပေးနိုင်ပါတယ်။ DateTime formats တွေကို ထပ်ပြီးလေ့လာချင်တယ်ဆိုရင်တော့ PHP manual ထဲက <a href="http://php.net/manual/en/datetime.formats.date.php" target="_blank">Date Formats</a> မှာလေ့လာနိုင်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php 

        // $date = new DateTime('tomorrow');  /* +2 weeks */

        $raw = '28. 09. 1998';
        $date = DateTime::createFromFormat('d. m. Y', $raw);

         ?&gt;
        &lt;p&gt;The output date is: &lt;?php echo $date->format('m/d/y'); ?&gt;&lt;/p&gt;
        </code>
    </pre>
    <p>
        <a href="directory/date.php" class="output" target="_blank">The result of above code:</a>
    </p>
    <p>အခုကျွန်တော်တို့က DateTime object တစ်ခုကို ဘယ်လိုပြုလုပ်ပြီး သူတို့နဲ့ ဘယ်လိုအရာတေလုပ်မလဲဆိုတာ သိဖို့လိုအပ်ပါတယ်။ ကျွန်တော်တို့အရင်ဆုံးပြုလုပ်ဖို့ကတော့ dates တွေကို compare လုပ်ဖို့ပါပဲ။ Date comparisons တွေဟာ PHP မှာတစ်ကယ်ကို လွယ်ကူပါတယ်။ အရင်တုန်းက date time တွေကို number of seconds တွေနဲ့ compare လုပ်ခဲ့ရပေမယ့် အခုဆိုရင် DateTime objects တွေနဲ့ တိုက်ရိုက် compare လုပ်နိုင်ပါပြီ။ ကျွန်တော်တို့ ပထမဆုံး date time objects နှစ်ခုကို create လုပ်ပြီး အောက်မှာ if statement နဲ့ အဲ့ဒီ object နှစ်ခု ဘယ်ဟာက ငယ်လဲဆိုတာစစ်ပါမယ်။ August 1,1972 နဲ့ August 13,1970 နဲ့comparison လုပ်တဲ့အခါ 1970 ကပိုပြီးတော့ကြီးတာကို တွေ့ရမှာဖြစ်ပါတယ်။ နောက်ထပ် date တွေရဲ့ interval ကိုတွက်ဖို့အောက်မှာ object တစ်ခုကို create လုပ်ထားပါတယ်။ ပြီးတော့ diff variable ထဲကို store လုပ်ပါတယ်။ ဒီ object ကတော့ date time interval ရဲ့instance တစ်ခုဖြစ်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php 

        $dvone = new DateTime('August 1, 1972');
        $spike = new DateTime('August 13, 1970');

        //Who is older?

        if ($dvone < $spike) {
        	echo '&lt;p&gt;D-Von is older than Spike&lt;/p&gt;';
        } else {
        	echo '&lt;p&gt;Spike is older than D-Von&lt;/p&gt;';
        }

        //Age Difference

        $diff = $dvone->diff($spike);

        echo $diff->format("&lt;p&gt;There is %y years, and %m months and %d days between Spike and D-Von&lt;/p&gt;");
         ?&gt;

        </code>
    </pre>
    <p>
        <a href="directory/compare_date.php" class="output" target="_blank">The result of above code:</a>
    </p>
    <hr>


    <h2>Understanding Time Zone</h2>
    <p>ကျွန်တော်တို့ရဲ့ world မှာ မတူညီတဲ့ time zones တွေအများကြီးရှိပါတယ်။ ပြီးတော့ time zones များစုဟာလည်း ကျွန်တော်တို့မျှော်လင့်ထားသလို logical ဖြစ်မနေပါဘူး။ Country တိုင်းမှာ မတူညီတဲ့ time zone တစ်ခုရှိပြီးတော့ အဲ့ဒီ time zone ကို user ရှိတဲ့ country ရဲ့ time zone ဖြစ်အောင် right time ပြပေးဖို့လိုအပ်ပါတယ်။ ကျွန်တော်တို့မှာ tricky caveats အချို့ရှိပါတယ်။ Time zones အားလုံးတိုင်း one hour + or - UTC ဆိုပြီး တိတိကျကျမရှိပါဘူး။ ဒါကြောင့် + or - integer ကို storing လုပ်ခြင်းက အလုပ်လုပ်မပေးနိုင်ပါဘူး။ ဒါကို developers အများစုကတော့ သူတို့ရဲ့ database ထဲက UTC ထဲမှာ dates တွေကို sotre လုပ်ပါတယ်။ ဝင်လာတဲ့ ဘယ် date မဆို UTC အဖြစ်ပြောင်းပေးပြီး UTC နဲ့ပဲ display လုပ်ပေးပါတယ်။ Times နဲ့ offsets တွေကို calculate လိုက်ဖို့ဆိုရင် developers တွေဟာ +1 or _4 ကို offset တစ်ခုအဖြစ် store လုပ်ပြီး အဲ့ဒီ store လုပ်ထားတဲ့ offset ကို integer တစ်ခုအဖြစ် သူတို့ရဲ့ database ထဲကို ထည့်လိုက်တာဖြစ်ပါတယ်။ ဘာကိုဆိုလိုသလဲဆိုရင် country တစ်ခုရဲ့ offset က -4.30 hrs ဖြစ်မယ်ဆိုရင် numeric representation က -4.5 ဖြစ်ပါတယ်။ အဲ့ဒါဟာ decimal တစ်ခုဖြစ်ပြီး ကျွန်တော်တို့က decimal numbers တွေကို integer field တစ်ခုအတွင်းမှာထည့်မယ်ဆိုရင် MySQL က truncated လုပ်ပေးပြီးတော့ value 4 ကိုပဲ save လုပ်သွားပါလိမ့်။ PHP မှာ dates & times တွေနဲ့ အလုပ်လုပ်ဖို့နည်းလမ်းကတော့ offect မဟုတ်ဘဲ database ထဲက actual time zone ကို store လုပ်ဖို့ပဲဖြစ်ပါတယ်။ PHP ဟာ internationally အရ recognize လုပ်ထားတဲ့ time zones တွေဖြစ်တဲ့ IANA ကို အသုံးပြုပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php 

        // $publishDate = $_POST['publish_date'];
        $publishDate = '2014-08-24 09:14:00';

        $localDateTime = new DateTime($publishDate, new DateTimeZone('America/New_York'));

        $utcDateTime = clone $localDateTime;

        $utcDateTime->setTimeZone(new  DateTimeZone('UTC'));

         ?&gt;

         &lt;p&gt;The UTC date/time is: &lt;?= $utcDateTime->format("Y-m-d H:i:s") ?&gt;&lt;/p&gt;
         &lt;p&gt;The New York date/time is: &lt;?= $localDateTime->format("Y-m-d H:i:s") ?&gt;&lt;/p&gt;
        </code>
    </pre>
    <p>
        <a href="directory/time_zone.php" class="output" target="_blank">The result of above code:</a>
    </p>
    <hr>


    <h2>Understanding UTF-8</h2>
    <p></p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php 

        //phpinfo();
        //exit;

        mb_internal_encoding('UTF-8');
        mb_http_output('UTF-8');

        $string = 'Rychla haneda liska zakopl pres plot.';

        header('Content-Type: text/html; charset=utf-8');

         ?&gt;
        &lt;!DOCTYPE html&gt;
        &lt;html&gt;
        &lt;head&gt;
        	&lt;title&gt;UTF-8 Test&lt;/title&gt;
        &lt;/head&gt;
        &lt;body&gt;
        	&lt;p&gt;Upper: &lt;?= mb_strtoupper($string) ?&gt;&lt;/p&gt;
        	&lt;p&gt;Count: &lt;?= mb_strlen($string) ?&gt;&lt;/p&gt;
        &lt;/body&gt;
        &lt;/html&gt;
        </code>
    </pre>
    <p>
        <a href="directory/utf-8.php" class="output" target="_blank">The result of above code:</a>
    </p>
    <hr>


    <h2>Distributing and Loading Code</h2>
    <p>ဒီသင်ခန်းစာမှာ ကျွန်တော်တို့က multiple developers တွေကြားမှာ code တွေကို sharing လုပ်ပေးနိုင်တဲ့ concept ကိုလေ့လာသွားမှာ ဖြစ်ပါတယ်။ အဲ့ဒီ concept တွေကတော့ auto loading, name spaces နဲ့ file structures တွေပဲဖြစ်ပါတယ်။ အဲ့ဒီနောက် dependency management ကို handle လုပ်ပေးတဲ့ Composer လိုမျိုး tools တွေရှိပါသေးတယ်။ အခြား developers တွေဆီက code တွေကိုမူတည်ပြီး အဲ့ဒီ dependencies တွေကို handle လုပ်ဖို့ နည်းလမ်းလိုအပ်ပါတယ်။ အဲ့ဒါက things တွေကို copy လုပ်တာနဲ့ zip files တွေကို download လုပ်တာထက်ပိုပြီးတော့ robust ဖြစ်ပါတယ်။ ကျွန်တော်တို့အနေနဲ့ common ဖြစ်တဲ့တစ်ခုခုကိုလုပ်နေတယ်၊ ဒါပေမယ့် popular API တစ်ခုနဲ့ interact လုပ်နေတာ ၊ oAuth နဲ့ integrate လုပ်နေတာ (သို့) image manipulation ကိုပြုလုပ်ပြီး existing package တစ်ခုသုံးခြင်းရဲ့ benifit တစ်ခုရတာလိုမျိုး complex တော့ ဖြစ်နေပါလိမ့်မယ်။ Composer နဲ့ packages တွေရှိတာကျေးဇူးတင်ရမှာပါ။ PHP မှာလည်း high quality ဖြစ်တဲ့ packages တွေရှိပါတယ်။ သူတို့ထဲက majority ဖြစ်တဲ့ကောင်ဟာ သူတို့ကို လွယ်လွယ်ကူကူ interact လုပ်ဖို့အတွက် name spaces နဲ့ auto loading တွေကိုသုံးပါတယ်။ အခု third party developers တွေဆီကနေ code တွေကို install လုပ်ဖို့ Composer တွေကို ဘယ်လိုသုံးမလဲဆိုတာကို ဆက်ပြီး လေ့လာသွားပါမယ်။ </p>
    <hr>


    <h2>Namespaces</h2>
    <p>Namespaces တွေဟာ programming languages အများစုမှာ ကောင်းမွန်တဲ့ common idea တစ်ခုဖြစ်ပြီး PHP မှာဆိုရင်လည်း version 5.3 လောက်တည်းက ရှိခဲ့တာဖြစ်ပါတယ်။ အချို့ developers တွေကတော့ အဲ့ဒီ namespaces တွေဟာ အသစ်ဖြစ်နေသေးတယ်လို့ ခံစားမိနေတုန်းပါပဲ။ ဒါဆို သူတို့ဘယ်လို့အလုပ်လုပ်လဲ ကြည့်ရအောင်။ Namespaces တွေကို အသုံးပြုတဲ့ basic idea ကတော့ name အတူတူဖြစ်နေတဲ့ two defference classes တွေဖြစ်တဲ့ functions or constants တွေဟာ conflicts တွေမဖြစ်ဖို့ပါပဲ။ ဥပမာပြောရရင် client လို့ခေါ်တဲ့ class နှစ်ခုကို define လုပ်မယ်ဆိုရင် ဒုတိယ define လုပ်တဲ့ class name client ဟာ fatal error တစ်ခုဖြစ်သွားမှာပါ။ အဲ့ဒီ class ကို redefine လုပ်လို့မရဘူးဆိုတာကို complain လုပ်ပေးမှာဖြစ်ပါတယ်။ အဲ့ဒီလိုမဟုတ်ဘဲ အဲ့ဒီဒုတိယ class ကို namespace တစ်ခုထဲထည့်မယ်ဆိုရင် သူတို့နှစ်ခုလုံးကို သီးခြားစီ refer လုပ်နိုင်ပါတယ်။ </p>
    <p>Example of index.php File:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php 

        //Dont worry about this bit
        ini_set('display_errors', 1);

        include 'HTTP/Client.php';
        include 'Twitter/Client.php';

        var_dump(new HTTP\Client);
        var_dump(new Twitter\Client);

         ?&gt;
        </code>
    </pre>
    <p>Example of HTTP/Client.php File:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php 

        namespace HTTP;
        /**
          *HTTP Client
          **/
        class Client {
        
        }

         ?&gt;
        </code>
    </pre>
    <p>Example of Twitter/Client.php File:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php 

        namespace Twitter;
        /**
          *Twitter Client
          **/
        class Client {
        
        }

         ?&gt;
        </code>
    </pre>
    <p>
        <a href="directory/namespace.php" class="output" target="_blank">The result of above code:</a>
    </p>
    <hr>


    <h2>Autoloading</h2>
    <p>Autoloading ဟာဆိုရင် object-oriented code မှာရှိတဲ့ တစ်ကယ်ကိုအသုံးဝင်တဲ့ features တွေထဲက တစ်ခုဖြစ်ပါတယ်။ ကျွန်တော်တို့ ပြုလုပ်ဖို့လိုအပ်တာကတော့ autoloader တစ်ခု register လုပ်ဖို့ပါပဲ။ ပြီးတော့ အဲ့ဒီ autoloader နဲ့ file ကို same rules တွေမှာ အသုံးပြုမှာဖြစ်ပါတယ်။ Autoloading ဟာ အရေးကြီးပါတယ်။ ဘာလို့လဲဆိုရင် ကျွန်တော်တို့ application ကကြီးလာတာနဲ့အမျှ login တွေကလည်း တဖြည်းဖြည်းများလာလို့ပဲဖြစ်ပါတယ်။ ကျွန်တော်တို့ develop လုပ်ခဲ့သလိုပဲ HTTP နဲ့ Twitter တွေသာရှိသော်လည်း အခြား sorts တွေမှာလည်း ပါဝင်ပါတယ်။ သူတို့တစ်ခုချင်းစီကို manully အရ including လုပ်ဖို့ဆိုရင် အခြား developers တွေကို ကျွန်တော်တို့ autoloader က allow လုပ်ပေးဖို့လိုပါတယ်။ ဒီနေ့ခေတ်မှာတော့ PSL 4 လို့ခေါ်တဲ့ PSL standard နှစ်ခုရှိပါတယ်။ အဲ့ဒီ standard နှစ်ခုကိုတော့ PHP Framework Interoperability Group က ရေးသားခဲ့တာဖြစ်ပါတယ်။ </p>
    <p>Example of namespace.php File:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php 

        //Dont worry about this bit
        ini_set('display_errors', 1);

        include 'bootstrap.php';
        var_dump(new HTTP\Client);
        var_dump(new Twitter\Client);

         ?&gt;          
        </code>
    </pre>
    <p>Example of bootstrap.php File:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php 

        spl_autoload_register(function ($class) {
        	$classPath = str_replace('\\', '/', $class);
        	include __DIR__.'/Include/'. $classPath. '.php';
        });

        ?&gt;
        </code>
    </pre>
    <p>
        <a href="directory/namespace.php" class="output" target="_blank">The result of above code:</a>
    </p>
    <hr>


    <h2>Composer</h2>
    <p>Composer ဟာ Bundler for Ruby or NPM for Node.js လိုမျိုး powerful dependency manager တစ်ခုဖြစ်ပါတယ်။ အဲ့ဒီ developers တွေကို help လုပ်ပေးတဲ့ systems တွေအားလုံးဟာ သူတို့ built လုပ်ခဲ့တဲ့ code တွေကို share လုပ်ပေးပြီး အဲ့ဒီ share လုပ်ထားတဲ့ code တွေကို implement လုပ်ပေးပါတယ်။ Composer တွေကလည်း သူတို့နဲ့ နည်းအတူတူပဲ အလုပ်လုပ်ပေးပါတယ်။ ကျွန်တော်တို့အနေနဲ့ install လုပ်ချင်တဲ့ code ရဲ့ exact versions တွေကို သတ်မှာပေးနိုင်ပါတယ်။ ဒါဟာ ကျွန်တော်တို့ မတော်တဆ ကျွန်တော်တို့ application ကို break ဖြစ်သွားနိုင်တဲ့ major updates တွေရှိရင် ကူညီပေးနိုင်ပါတယ်။ ဒါပေမယ့် Composer update ကို run တဲ့အချိန်မှာ bug fixes နဲ့ patch improvements တွေကို ရနေဦးမှာဖြစ်ပါတယ်။ Composerကို <a href="' target="_blank">gercomposer.org</a> ကနေ install လုပ်နိုင်ပါတယ်။ </p>
    <hr>


    <h2>Creating Distributable OOP Packages</h2>
    <p>Component တစ်ခုကို တစ်ခါတစ်ရံ package တစ်ခုလို့လည်းခေါ်ပါတယ်။ သူဟာ browser မှာ run မပေးပါဘူး။ ဒါပေမယ့် သူ့ကို အခြား component (သို့) application တစ်ခုနဲ့ အသုံးပြုနိုင်ပါတယ်။ ကျွန်တော်တို့က simple structure တစ်ခုနဲ့ basic component တစ်ခုကို ပြုလုပ်ပါမယ်။ Example.php ဆိုတဲ့ file ထဲမှာ namespace တစ်ခု create လုပ်ပြီး၊ အောက်မှာ Example ဆိုတဲ့ class တစ်ခုတည်ဆောက်ပါမယ်။ အခုလိုအသုံးပြုလိုက်တဲ့ repetition ဟာ တစ်ကယ်ကို အသုံးများပါတယ်။ Packages အများကြီးမှာ သူနဲ့ interact လုပ်ဖို့ main class တစ်ခုရှိပါမယ်။ ပြီးတော့ သူက component ကိုယ်တိုင်နဲ့လည်း same name ဖြစ်နိုင်ပါတယ်။ အောက်က example ထဲက line 7 မှာတော့ getSomething() လို့ခေါ်တဲ့ method တစ်ခုကို define လုပ်ထားပါတယ်။ ပြီးရင် ကျွန်တော်တို့က static string တစ်ခုကို return ပြန်ပေးထားပါတယ်။ ကျွန်တော်တို့က ပထမဆုံး phpunit တစ်ခု dev dependency တစ်ခုအဖြစ် install လုပ်လိုက်ပါမယ်။ ပြီးရင် အပေါ်သင်ခန်းစာမှာ install လုပ်ခဲ့တဲ့ composer ထဲမှာ phpunit လုပ်ဖို့အတွက် command တစ်ခုရေးရမှာဖြစ်ပါတယ်။ အဲ့ဒါကတော့ composer require phpunit/phpunit --dev ပဲဖြစ်ပါတယ်။ အခုဆိုရင် အရင်က install လုပ်ထားတဲ့ composer packages တွေရောရှိနေပါပြီ။ တစ်ကယ်လို့ ကျွန်တော်တို့က အဲ့ဒီ code တွေကို releasing လုပ်မယ်ဆိုရင် နောက်ထပ် things အနည်းငယ် လိုအပ်ပါသေးတယ်။ နောက်သင်ခန်းစာမှာ ဆက်ကြည့်ရအောင်။ </p>
    <hr>


    <h2>PSR-1</h2>
    <p>ကျွန်တော်တို့က various different design patterns တွေကိုသုံးပြီးတော့ ကျွန်တော်တို့ code တွေရဲ့ sources အားလုံးကို create လုပ်ခဲ့ပါတယ်။ Class တစ်ခုကို loading လုပ်တာက multiple loading လုပ်တာနဲ့တူတူပါပဲ။ ကျွန်တော်တို့ရဲ့ code ကို structure လုပ်ဖို့အတွက် autoloader တစ်ခုနဲ့ namespaces တွေသုံးထားတာရှိပါတယ်။ PSR-1 ဟာ implement လုပ်ဖို့အတွက် list of good ideas တစ်ခုကို provide လုပ်ပေးတဲ့ standard recommendation တစ်ခုဖြစ်ပါတယ်။ တစ်ကယ်လို့ သူ့တို့ထဲက အနည်းငယ်လောက်ပဲ implement လုပ်မယ်ဆိုရင်တော့ PSR-1 နဲ့ technically အရ လိုက်လျောညီထွေဖြစ်မှာ မဟုတ်ပါဘူး။ PSR-1 မှာလည်း rules တွေရှိပါတယ်။ PHP code ဟာ long tags (သို့) short echo tags တစ်ခုခုကို အသုံးပြုရပါမယ်။ သူဟာ အခြား tag variations တွေကို မသုံးပါဘူး။ Historically အရ ကျွန်တော်တို့အနေနဲ့ PHP မှာ few different tags တွေကို အသုံးပြုနိုင်ပါတယ်။ အဲ့ဒါတွေကတော့ long tags, short tags, short echo tags နဲ့ asp star tags တွေပဲဖြစ်ကြပါတယ်။ PSR-1 ကတော့ ကျွန်တော်တို့ကို long tags နဲ့ short echo tags တွေကိုပဲ အသုံးပြုဖို့ suggest လုပ်ထားပါတယ်။ ကျွန်တော်တို့ အစောပိုင်းသင်ခန်းစာမှာ UTF-8 ထဲက character encoding ကို discuss လုပ်ခဲ့ပါတယ်။ ပြီးတော့ PHP က UTF-8 ထဲမှာရေးတဲ့ own files တွေရှိသင့်ပါတယ်။ ဒါက unicode character တွေကို actual PHP code မှာအသုံးပြုဖို့ ခွင့်ပြုပေးပါတယ်။ ပြီးတော့ output နဲ့ပတ်သတ်ပြီးတော့လည်း စိုးရိမ်နေစရာမလိုပါဘူး။ PHP storm နဲ့ sublime တွေလိုမျိုး editors အများစုဟာ default setting တွေပဲ အသုံးပြုတယ်ဆိုပေမယ့် ကျွန်တော်တို့ရဲ့ settings or preferences တွေကို checking လုပ်ရင် ခက်ခဲစေပါတယ်။ <a href="https://www.php-fig.org/psr/psr-1/">psr-1</a> မှာ ကျွန်တော်တို့က psr-1ရဲ့slide effect ကိုလေ့လာနိုင်ပါတယ်။ PSR-1ရဲ့အခြား rule ကတော့ namespaces နဲ့ classes ဖြစ်ပါတယ်။ နောက်ကနေ PSR-0 OR PSR-4 ကိုလိုက်ပေးရမှာဖြစ်ပါတယ်။ သူတို့နှစ်ခုလုံးကတော့ auto-reading standard ဖြစ်တယ်။ ပြီးတော့တူတဲ့အရာတွေကိုအလုပ်လုပ်ပေးပါတယ်။ ကျွန်တော်တို့မှာ namespace တွေ classes တွေနဲ့method တွေများလာရင် PSR-1 ကအလုပ်လုပ်ပေးတယ်။ namespace နဲ့ classes တွေက studly caps ကိုအသုံးပြုပေးဖို့လိုပါတယ်။ အဲ့ဒါကတော့ capital letter ကို new word တစ်ခုစီအတွက်အသုံးပြုတယ်လို့ပြောတာပါ။ အကုန်လုံးကို lowercase letter တစ်ခုဖြစ်အောင်လုပ်ဆောင်ပေးတာဖြစ်ပါတယ်။ Method တွေကတော့ camel case ကိုအသုံးပြုဖို့လိုပါတယ်။ အဲ့ဒါကတော့ study caps လိုလုပ်ဆောင်တာဖြစ်တယ်။ ဒါပေမယ့် first character ကတော့ lowercase ပဲဖြစ်သင့်ပါတယ်။ </p>
    <hr>


    <h2>PSR-2</h2>
    <p>PSR-2 ကို ကျယ်ကျယ်ပြန့်ပြန့် အသုံးပြုနေကြပြီ ဖြစ်ပါတယ်။ ဒါပေမယ့် developer တချို့က အခြားအရာတွေကို သုံးရတာပိုပီးတော့ ပျော်နေကြပါတယ်။ PSR2 ကတော့ style guide တစ်ခုဖြစ်ပြီးတော့ developer တစ်ယောက်ခြင်းစီက သူတို့ရဲ့ own unique preference တစ်ခုစီရှိကြပါတယ်။ PSR-2 မှာလည်း rules တွေရှိပါတယ်။ Code တွေက PSR-1 အတိုင်းအလုပ်လုပ်ပါတယ်။ PSR-2 ဖြစ်ဖို့ကျွန်တော်တို့က PSR-1 ရဲ့rules တွေလည်းရှိရမှာဖြစ်ပါတယ်။ PSR-2 ကတော့ ဒီ rules တွေကို top လက်မှာ add လိုက်တာဖြစ်ပါတယ်။ Code တွေက indenting not tabs တွေအတွက် space လေးခုကို အသုံးပြုပါတယ်။ ကျွန်တော်တို့က line length ပေါ်မှာ hard limit တစ်ခုမရှိရပါဘူး။ Soft limit ကတော့ 120 characterဖြစ်ပီးတော့ lineက 80 character or lessပဲဖြစ်သင့်ပါတယ်။ name-space declaration ပြီးတဲ့နောက်မှာ blank တစ်ခုရှိရပါမယ်။ Use declaration ပြီးတဲ့နောက်မှာ blank line တစ်ခုရှိရပါမယ်။ Visibility ကိုတော့ properties နဲ့ method တွေအကုန်လုံးမှာ declaredလုပ်ရပါမယ်။ Abstract နဲ့ final ကိုတော့ visibility မတိုင်ခင်မှာ declared လုပ်ရမှာဖြစ်ပါတယ်။ ပြီးတော့ static ကတော့ visibility ပြီးတဲ့နောက်မှာ declared လုပ်ရပါမယ်။ ကျွန်တော်တို့က abstract or final class တစ်ခုကို create လုပ်တဲ့အခါ အဲ့ဒါက public ဖြစ်ပါတယ်။ Word abtract or final ကတော့ public မတိုင်ခင်ဖြစ်သင့်ပါတယ်။ Static class တွေကို အသုံးပြုမယ်ဆိုရင် ပြီးတော့ method က public ဖြစ်မယ်ဆိုရင် ကျွန်တော်တို့က static မရေးခင် public ကိုရေးရမှာဖြစ်ပါတယ်။ Control structure keyword တွေကတော့ space ပြီးတဲ့နောက်မှာပဲဖြစ်ရပါမယ်။ ပြီးတော့ method နဲ့function call ကတော့အဲ့လိုမဖြစ်ရပါဘူး။ Control structure keywordတွေကတော့ if,else,switch,do,while နဲ့ for each လိုပဲအလုပ်လုပ်ပါတယ်။ ကျွန်တော်တို့က ဒီword တွေပြီးရင် space တစ်ခုလိုပါတယ်။ ပြီးတော့ bracket မဖွင့်ခင် space လိုပါတယ်။ Opening braces က control structure အတွက်တူညီတဲ့ line တွေမှာပဲဖြစ်ရပါမယ်။ Closing braces ကတော့ body ပြီးတဲ့နောက်မှာ နောက်တစ်line ကို သွားရမှာဖြစ်ပါတယ်။ ဒါကတော့ if, foreach, whileနဲ့တူပါတယ်။ သူတို့က curly bracket တွေရှိဖို့လိုပါတယ်။ Control structure အတွက် opening parentheses ကတော့ ပြီးတဲ့နောက်မှာ spaceရှိဖို့မလိုပါဘူး။ Closing parentheses ကတော့ parentheses မတိုင်ခင် spaceရှိဖို့မလိုပါဘူး။ အဲ့လိုတွေလုပ်ဖို့ ကျွန်တော်တို့က PHP_CodeSniffer ကို install လုပ်နိုင်ပါတယ်။ ဒါကတော့ ကျွန်တော်တို့ code တွေကို standard ဖြစ်အောင်ကူညီပေးသွားမှာဖြစ်ပါတယ်။ Install လုပ်ဖို့ composer require squizlabs/php_codesniffer --dev လို့terminal ကနေ run ပေးရမှာဖြစ်ပါတယ်။ vendor/bin/phpcs php-stand --standard=PSR2 ဆိုပီးတော့ ကျွန်တော်တို့ရဲ့ file မှာ ဘာတွေ error ရှိသလဲဆိုတာကို check လုပ်လို့ရပါတယ်။ PHP-stand ဆိုတာကတော့ ကျွန်တော်တို့ check လုပ်ချင်တဲ့ folder name ဖြစ်ပါတယ်။ အဲ့ဒီ folder ထဲက file တွေအကုန်လုံးကို check လုပ်ပေးသွားမှာဖြစ်ပါတယ်။ </p>
    <hr>


    <h2>Composer Metadata</h2>
    <p>ကျွန်တော်တို့ရဲ့ component ကို release မလုပ်ခင် composer file ထဲမှာ extra metadata အချို့ကို define လုပ်ဖို့လိုပါတယ်။ အဲ့ဒါပြီးတာနဲ့ composer အတွက် default repository ရှိတဲ့ package ကို submit လုပ်ပေးမယ့် code base တစ်ခုရှိနေမှာဖြစ်ပါတယ်။ ဒါဟာ ကျွန်တော်တို့ package ကို entire PHP community မှာ available ဖြစ်မှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ရဲ့ package.json ထဲမှာ dependency နှစ်ခုရှိတာကို တွေ့ရမှာပါ။ ဒါကိုကျွန်တော်တို့က သူ့ထဲမှာ name တစ်ခုနဲ့ description တစ်ခုထပ်ထည့်မှာဖြစ်ပါတယ်။ For example: "name" : "treehouse/example", "description" : "This is an example package",။ ပြီးတော့ optional တစ်ခုဖြစ်တဲ့ keyword ကိုလည်း array တစ်ခုနဲ့ထည့်ပေးလိုက်ပါမယ်။ Array ကိုတော့ json array နဲ့ထည့်ပေးရမှာဖြစ်ပါတယ်။ နောက်ပြီးတော့ license တစ်ခုထပ်ထည့်ပါမယ်။ License တွေမှာလည်း MIT, BSTE နဲ့ GPL လိုမျိုး various options တွေရှိပါတယ်။ နောက်ထပ်ပြုလုပ်ရမှာကတော့ Author တစ်ခုပြုလုပ်ရမှာဖြစ်ပြီး သူ့ကိုလည်း array တစ်ခုနဲ့ တည်ဆောက်ပါမယ်။ နောက်ဆုံးမှာတော့ require section တစ်ခု add လုပ်ပါမယ်။ အဲ့ဒါက package ကို run လုပ်ဖို့အတွက် ကျွန်တော်တို့ရဲ့ dependency list တစ်ခုကို place လုပ်မယ့်နေရာပဲ ဖြစ်ပါတယ်။ ကျွန်တော်တို့ develop လုပ်နေစဉ် dev dependencies တွေလို အသုံးမလိုပေမယ့်လည်း အမှန်တကယ်ဆိုရင် run ဖို့လိုအပ်ပါတယ်။ ဒါကြောင့် ကျွန်တော်တို့က အခြား package name တစ်ခုကို ထည့်ပေးရပါမယ်။ အဲ့ဒါကတော့ "require" : { "php" : ">=5.4" } ပဲဖြစ်ပါတယ်။ ပြီးရင်တော့ composer.json ကို ကျွန်တော်တို့ရဲ့ terminal ကနေ validate လုပ်မှာဖြစ်ပါတယ်။ Validate လုပ်မယ့် command ကတော့ composer validate ပဲဖြစ်ပါတယ်။ ဒါဆိုရင်တော့ ကျွန်တော်တို့မှာ handful standards တွေကို အသုံးပြုထားတဲ့ autoloaded namespace နဲ့ package တစ်ခုရလာမှာဖြစ်ပါတယ်။ အဲ့ဒါကို general PHP object-oriented knowledge နဲ့ combine လုပ်ပြီး amazing code ကို ပြုလုပ်နိုင်ပြီး community ကို distribute လုပ်နိုင်မှာဖြစ်ပါတယ်။ ကျန်နေတဲ့ အပိုင်းတစ်ခုကတော့ semantic version ကို စသုံးဖို့ပဲဖြစ်ပါတယ်။ ဒါဟာ ကျွန်တော်တို့ကို few development builds တစ်ခု release လုပ်ဖို့ ကူညီပေးပါလိမ့်မယ်။ </p>
    <p>For Example:</p>
    <a href="#">
    <img src="../images/package.jpg" alt="Checking Composer Validate Screenshot">
    </a>
    <hr>


    <h2>Semantic Versioning</h2>
    <p>Composer ဟာ semantic versioning လို့ခေါ်တဲ့ version numbering အတွက် established standard တစ်ခုကို enforce လုပ်ပါတယ်။ သူ့ကို SemVer လို့လည်း ခေါ်ကြပါသေးတယ်။ SemVer ဟာ version number ရဲ့ structure ကို enforce လုပ်ပေးပြီးတော့ အဲ့ဒီ numbers တွေကို increment လုပ်တဲ့အခါမှာ ပြောင်းလဲသွားတဲ့ level ကို allow လုပ်ပေးပါတယ်။ Version numbers တွေမှာ အပိုင်းသုံးပိုင်း ရှိသင့်ပါတယ်။ ပထမတစ်ခုက major number ၊ အလယ်တစ်ခုက minor နဲ့ နောက်ဆုံးတစ်ခုက patch တို့ပဲဖြစ်ပါတယ်။ Major ကတော့ incompatible changes တွေကို backwards (နောက်ပြန်သွားစေ) အောင် ပြုလုပ်တာပဲ ဖြစ်ပါတယ်။ အဲ့ဒီ major number တွေကို breaking changes တွေလို့လည်း ခေါ်ပါတယ်။ ဘာလို့လဲဆိုရင်  သူတို့ဟာ PHP API ကို rely လုပ်ပြီးရေးနေတဲ့ developers တွေအတွက် things တွေကို break လုပ်မှာဖြစ်လို့ပဲ ဖြစ်ပါတယ်။ Breaking change တစ်ခုဆိုတာ renaming a class, class တစ်ခုကို namespace အမျိုးမျိုးဖြစ်အောင် move လုပ်ခြင်း ၊ renaming a method (သို့) argument တစ်ခုအတွက် type pins တွေကို changing လုပ်ခြင်းတောင် ဖြစ်နိုင်ပါတယ်။ Minor ကလည်း compatible changes တွေကို backwards ဖြစ်အောင် လုပ်ပေးပါတယ်။ သူဟာ new classes, methods တွေ add လုပ်တာတို့ ၊ new arguments တွေကို method အဖြစ်ပြောင်းတာတို့နဲ့ API ကို break မလုပ်နိုင်တဲ့အရာတွေ ဖြစ်နိုင်ပါတယ်။ Patch ကတော့ bug fixes, filling in security holes နဲ့ တစ်ခုခုက breaks out ဖြစ်ခဲ့ရင် performance ကို တိုးမြှင့်ပေးဖို့အတွက်ပဲ ဖြစ်ပါတယ်။ Patch ကို new functionality တွေ add လုပ်ဖို့တော့ မသုံးသင့်ပါဘူး။ ကျွန်တော်တို့အနေနဲ့ ပထမဆုံး release လုပ်မယ်ဆိုရင် version 1.0 ကို release လုပ်မယ်လို့ ဆုံးဖြတ်မိမှာပါ။ ဒါဟာ bad idea တစ်ခုဖြစ်ပြီး ကျွန်တော်တို့ package က အသစ်ဖြစ်မယ်ဆိုရင်ပေါ့။ Developers အများစုကတော့ သူတို့ရဲ့ initial version ကို 0.1.0 ကိုပဲ စပြီး release လုပ်ပါတယ်။ 0 ဆိုတာ package က initial development အနေနဲ့ပဲရှိဦးမယ်လို့ ဆိုလိုပါတယ်။ ပြီးတော့ အဲ့ဒါဟာ API က 100% stable မဖြစ်ဘူးလို့ ဆိုနိုင်ပါတယ်။ သူဟာ patch release တစ်ခုထဲမှာ breaking change တစ်ခုမှ အပါဝင်ပေမယ့် new minor version ကို release လုပ်လိုက်တဲ့အချိန်မှာ break ဖြစ်သွားနိုင်ပါတယ်။ တစ်ကယ်လို့ developer တစ်ယောက်က zero နဲ့စတဲ့ component တစ်ခုပေါ်မှာ rely ဖြစ်နေမယ်ဆိုရင် သူတို့အနေနဲ့ middle number ရဲ့ changes တွေကို super careful လုပ်ဖို့လိုပါလိမ့်မယ်။ ဥပမာ version 0.1.0 ကနေ 0.2.0 ပြောင်းလိုက်မယ်ဆိုရင် logic errors (သို့) fatal errors တောင် ဖြစ်နိုင်ပါတယ်။ SemVer မှာ နားလည်ရခက်တဲ့ rules တွေအများကြီးရှိပေမယ့်လည်း အဲ့ဒီ same rules တွေနဲ့ expectations တွေကို programming language မှာ subscribe လုပ်ဖို့ developers တွေအတွက် တစ်ကယ်ကို အထောက်အကူဖြစ်စေပါတယ်။ PHP developers တွေအတွက်ဆိုရင် တိကျတဲ့ expectations တွေနဲ့ အခြား dependencies တွေကို install လုပ်ဖို့ composer ကိုအသုံးပြုနိင်ပါတယ်။ </p>
    <hr>


    <h2>Error Handling</h2>
    <p>Languages အများအပြားမှာ ဘယ်လို sort of problem တစ်ခုရှိနေနေ exception တစ်ခုကို throw လုပ်ပေးပါတယ်။ PHP ကတော့ exception-light language တစ်ခုဖြစ်ပြီး သူဟာ cases အများစုကို arrow တစ်ခုနဲ့ output ထုတ်ပြပေးမှာဖြစ်ပါတယ်။ Arrows တွေက screen, local disk or both ဆီကို output ထုတ်ပေးနိုင်ပါတယ်။ PHP ဟာ ဘယ် arrow ကို ignore လုပ်ပြီး ဘယ် arrow ကို report လုပ်ရမလဲဆိုတာကို choose လုပ်ပေးနိုင်ပါတယ်။ ကျွန်တော်တို့ run တဲ့အခါ အဖြစ်အများဆုံး errors တွေကတော့ E_ERROR, E_NOTICE နဲ့ E_WARNING တို့ပဲဖြစ်ပါတယ်။ E_ERROR or E_CORE_ERROR ကဲ့သို့သော serverities အချို့ဟာ unrecoverable way တစ်ခုနဲ့ program ကို halt (ရပ်) သွားစေပါတယ်။ ကျွန်တော်တို့ index.php file ထဲမှာရှိတဲ့ error reporting function ကတော့ ဘယ် serverity (သို့) ဘယ် errors တွေကို report လုပ်ရမလဲဆိုတာကို control လုပ်ပေးတာဖြစ်ပါတယ်။ ပြီးတော့ အဲ့ဒီ code ဟာ E_ERROR, E_WARNING နဲ့ E_PATHS တွေကိုသာ report လုပ်မယ်ဆိုတာကို တိတိကျကျ request လုပ်ပေးပါတယ်။ Error တစ်ခုကို report လုပ်တယ်ဆိုတာ သူက log files တွေထဲကိုသွားပြီး errors option ကို display လုပ်တဲ့အပေါ်မူတည်ပြီး screen ပေါ်မှာ display လုပ်ပေးပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php 

        // Report simple running errors
        error_reporting(E_ALL);

        // Make sure they're on screen
        ini_set('display_errors', 1);

        // Do some errors

        // Notice
        $nope = 0;
        var_dump(5 + $nope);

        // Warning
        $wrestler = new stdClass;
        $wrestler->name = 'Aung Zin Latt';

        // Strict
        class Foo
        {
        	public static function bar() {}
        
        	public static function nope() {}
        }
        Foo::bar();

        // Error

        Foo::nope();

        echo "We'll never get here.";

        </code>
    </pre>
    <p>
        <a href="directory/error_handling.php" class="output" target="_blank">The result of above code:</a>
    </p>
    <hr>


    <h2>Exceptions and Converting Errors to Exceptions</h2>
    <p>PHP ဟာ errors တွေကို exceptions တွေအဖြစ် convert လုပ်ပေးပါတယ်။ အဲ့ဒီမှာ အားသာချက်က တစ်ခါတစ်ရံမှာ error တစ်ခုက unavoidable ဖြစ်လို့ပါပဲ။ ဥပမာ ကျွန်တော်တို့အနေနဲ့ read လုပ်လို့မရတဲ့ file တစ်ခုကို read လုပ်မယ်ဆိုရင် သူ့မှာ error တစ်ခု throw လုပ်နိုင်ပါတယ်။ တစ်ကယ်လို့ အဲ့ဒီ file က ကျွန်တော်တို့ read မလုပ်ခင် exist (ရှိ) နေမယ်ဆိုရင် ကျွန်တော်တို့အနေနဲ့ error နဲ့ကင်းနိုင်ပါတယ်။ ဒါပေမယ့် file exist ဖြစ်တယ်ဆိုတာ checking လုပ်ခြင်းနဲ့ အမှန်တကယ် file ကို read လုပ်ခြင်းရဲ့ကြားက milliseconds တွေထဲမှာ သူဟာ deleted ဖြစ်နေနိုင်ပါတယ်။ ဒါကို race condition လို့ခေါ်ပါတယ်။ တစ်ကယ်လို့ ကျွန်တော်တို့က တစ်ခုခုကို try လုပ်တဲ့အခါ သူက wrong ဖြစ်နေရင် recover လုပ်ပေးရပါတယ်။ Converting errors to exceptions ကလည်း အဲ့ဒီလိုပဲပြုလုပ်ပေးပါတယ်။ ကျွန်တော်တို့က errors တွေကနေ exceptions တွေအဖြစ်ပြောင်းဖို့အတွက် PHP မှာ set_error_handler ဆိုတဲ့ function တစ်ခုရှိပါတယ်။ သူက anonymous function တစ်ခုကို callback တစ်ခုအဖြစ် accept လုပ်ပေးပါတယ်။ ကျွန်တော်တတို့ရဲ့ set_error_handler function ထဲမှာ anonymous function တစ်ခုရှိပြီး အဲ့ဒီ function ထဲမှာ argument လေးခုကို လက်ခံပေးပါတယ်။ ပထမတစ်ခုက error ကို thrown လုပ်မယ့် error အရေအတွက်တစ်ခုဖြစ်တဲ့ $errno ဖြစ်ပါတယ်။ ပြီးတော့ $errstr ဆိုပြီး ဒီ error က ဘာ error ဖြစ်ပါတယ်ဆိုတာကို explain လုပ်ပေးတဲ့ human readable message တစ်ခုပါမှာဖြစ်ပါတယ်။ တတိယ argument ကတော့ $errfile ဖြစ်ပြီး နောက်ဆုံး argument ကတော့ $errline ပဲဖြစ်ပါတယ်။ အဲ့ဒီ arguments တွေအားလုံးဟာ throw new error exception ကို through လုပ်ပြီး pass လုပ်ပေးပါတယ်။ အဲ့ဒီ error exception ကတော့ core PHP exception type တစ်ခုဖြစ်ပြီး သူ့ကို ဒီလို behavior မျိုးတွေအတွက် designed လုပ်ထားခြင်းဖြစ်ပါတယ်။ ဒါကြောင့် exceptions တွေဟာ development ထဲမှာရှိတဲ့ tricky stuff တွေကို catch လုပ်ပေးဖို့ကူညီပေးရုံသာမက အချို့ errors တွေဖြစ်တဲ့ PHP ဟာ stop processing လုပ်မှာထက် သူတို့ကို trucking လိုက်တာမျိုးတွေကိုပါ လုပ်ဆောင်ပေးပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
        &lt;?php

        // Send errors to output
        ini_set('display_errors', 1);

        set_error_handler(function ($errno, $errstr, $errfile, $errline) {
        	throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
        });

        try{
        
        	// Read a file
        	$handle = fopen('nope.txt', 'r');
        
        } catch (ErrorException $e){
        	echo "&lt;p&gt;Can't find the file!&lt;/p&gt;";
        }
        echo "&lt;p&gt;Do something else.&lt;/p&gt;";
        </code>
    </pre>
    <p>
        <a href="directory/exception.php" class="output" target="_blank">The result of above code:</a>
    </p>
    <hr>


    <h2>Logging with PSR-3</h2>
    <p>Production မှာကျွန်တော်တို့က အဲ့ဒီ errors (သို့) exceptions တွေကို user တွေဆီမြင်ရတာမျိုး မလိုချင်ပါဘူး။ ဒါပေမယ့် ကျွန်တော်တို့က အဲ့ဒီ errors တွေနဲ့ other information တွေကို အခြားဘယ်နေရကိုမှ report မလုပ်ချင်ပါဘူး။ အဲ့ဒီနေရာမှာ ကျွန်တော်တို့လိုအပ်တာက logging ပဲဖြစ်ပါတယ်။ Logging ရဲ့ idea ကတော့ errors တွေများသောအားဖြင့် ဘယ်လိုအလုပ်လုပ်လဲဆိုတာနဲ့ တူပါတယ်။ General logging systems အများစုမှာ debug, info, notice, warning, error နဲ့ emergency ကဲ့သို့သော common efforts တွေရှိပါတယ်။ PSR-3 ကို basic logging interactions တွေအတွက် interfaces တွေကို standardize လုပ်ဖို့အတွက် developed လုပ်ထားခြင်းဖြစ်ပါတယ်။ သူကိုယ်တိုင်အရဆိုရင် PSR-3 ဟာ rules နဲ့ interfaces တွေရဲ့ set တစ်ခုပဲဖြစ်ပါတယ်။ ဒါကြောင့် ကျွန်တော်တို့အနေနဲ့  PSR-3 ကို implement လုပ်တဲ့ actual logging system တစ်ခုကို သုံးဖို့လိုအပ်ပါတယ်။ အဲ့ဒါအတွက် great logging system တစ်ခုကတော့ Monolog ပဲဖြစ်ပါတယ်။ ဒါကြောင့် ပထမဆုံး Monolog Fire composer ကို composer require monolog/monolog ဆိုတဲ့ command နဲ့ install လုပ်ရပါမယ်။ ပြီးရင် ကျွန်တော်တို့ရဲ့ index.php file ထဲမှာ monolog ကိုသုံးပြီး ရေးပြသွားမှာဖြစ်ပါတယ်။ ပထမဆုံး php file ထဲမှာ ကျွန်တော်တို့ရဲ့ monolog code ကို load ဖြစ်စေဖို့ကူညီပေးတဲ့ composer auto-loader တစ်ခုကို include လုပ်ထားပါမယ်။ သူ့အောက်မှာတော့ use statement နဲ့ monolog logger ကို reference လုပ်ထားပါတယ်။ အဲ့ဒါက logger ကို global space မှာရနိုင်အောင် ပြုလုပ်ပေးပါတယ်။ Monolog ကတော့ term handler ကိုအသုံးပြုပါတယ်။ Class တစ်ခုက logs တွေကို various locations တွေမှာ ဘယ်လိုပို့ရမလဲဆိုတာ decide လုပ်ပေးမှာဖြစ်ပါတယ်။ Things တွေကို lots of different places တွေဆီ sending လုပ်ဖို့အတွက် lot of different handlers တွေရှိပါတယ်။ အဲ့ဒါတွေကတော့ outputting to different log files, sys log, the browser console, emails, or Logly or New Relic ကဲ့သို့သော hosted logging providers တွေတောင် ဖြစ်ကြပါတယ်။ အခု ကျွန်တော်တို့က classes အမျိုးမျိုးကို available ဖြစ်အောင် ကျွန်တော်တို့ရဲ့ logger class ကို instantiate လုပ်နိုင်ပါတယ်။ ကျွန်တော်တို့က string တစ်ခုကို constructor ဆီသို့ first argument တစ်ခုအဖြစ် pass လုပ်ပြီး အဲ့ဒါဟာ ကျွန်တော်တို့ logger ရဲ့ name ပဲဖြစ်ပါတယ်။ Logger instance က log variable ထဲကို store လုပ်လိုက်ပါမယ်။ ဒါကြောင့် နောက်ထပ် ထပ်လုပ်လို့ရပါသေးတယ်။ Login လုပ်ပီးရင် ကျွန်တော်တို့က handlers တွေကိုset up လုပ်ပါမယ်။ ဒါကြောင့် ကျွန်တော်တို့က pushHandler method ကိုအသုံးပြုပါမယ်။ Various different handlers ရဲ့ instances ထဲကိုaddဖို့ဖြစ်ပါတယ်။ Log variable ထဲက log တွေကို debug method နဲ့သုံးမယ်။ debug method ကိုPSR-3 က providedလုပ်ထားပါတယ်။ ဒါကြောင့် ကျွန်တော်တို့က debug, error နဲ့ warning တို့ကိုအသုံးပြုနိုင်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
        &LT;?php

        include "./vendor/autoload.php";

        use Monolog\Logger;
        use Monolog\Handler\BrowserConsoleHandler;

        // create a log channel
        $log = new Logger('my_app');

        $log->pushHandler(new BrowserConsoleHandler(Logger::CRITICAL)); // ERROR, WARNING

        foreach (range(1, 10) as $foo) {
            $log->debug('Something is happening.', ['foo' => $foo]) ;
        }

        $log->warning('Maybe bad.');

        $log->error('Bad.');

        $log->critical('Super Bad.');

        echo "Check the logs to see whats happening in here...";
        </code>
    </pre>
    <p>For Example:</p>
    <img src="../images/logging.jpg" alt="Logging Error Image">

</body>
</html>