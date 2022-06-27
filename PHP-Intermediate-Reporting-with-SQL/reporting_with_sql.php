<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporting with SQL</title>
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
    

    <h2>Overview</h2>
    <p>SQL databases တွေဟာ data တွေရဲ့ massive amounts တွေကို store လုပ်နိုင်ပါတယ်။ ကျွန်တော်တို့လိုချင်တဲ့ information တွေကို ရယူနိုင်ပြီးတော့ အဲ့ဒီရယူလိုက်တဲ့ information တွေကို လူတွေ readable ဖြစ်နိုင်အောင် digestible way နဲ့ပြပေးခြင်းဟာ database တစ်ခုကနေ information တွေလိုအပ်တဲ့သူတွေအတွက် တစ်ကယ်ကိုလိုအပ်တဲ့ skill တစ်ခုဖြစ်ပါတယ်။ Database တစ်ခုထဲက data ကို retrieve လုပ်ဖို့ နည်းလမ်းအချို့ကိုစဉ်းစားကြည့်ရအောင်။ Online store မှာရှိတဲ့ products တွေကို by name နဲ့ alphabetically အရ ဖော်ပြချင်တယ်ဆိုပါစို့။ ဒါဆိုရင် ကျွန်တော်တို့က databases တွေထဲကနေ information တွေကို specific order တစ်ခုအတွင်းမှာ retrieve လုပ်ရမယ်။ ဒါမှမဟုတ်ရင် ကျွန်တော်တို့က products အားလုံးကို by price နဲ့ ဖော်ပြချင်တယ်ဆိုရင်လည်း ကျွန်တော်တို့အနေနဲ့ data ကို specific order အတွင်းမှာ request လုပ်ရပါမယ်။ တစ်ကယ်လို့ site တစ်ခုကို run မယ်ဆိုရင် ကျွန်တော်တို့မှာ tens of years မှာရှိတဲ့ thousands of new stories တွေရှိနိုင်ပါတယ်။ ဒါပေမယ့် ကျွန်တော်တို့ရဲ့ site visitor က အဲ့ဒီ stories အားလုံးကို မလိုချင်ဘူးဆိုရင် ကျွန်တော်တို့က database ဆီကနေ latest articles ကိုပဲ request လုပ်ရပါမယ်။ ကျွန်တော်တို့လိုချင်တဲ့ data ကို limit လုပ်ထားခြင်းဟာ တစ်ကယ်ကို helpful ဖြစ်ပါတယ်။ အထူးသဖြင့် ကျွန်တော်တို့ database က data တွေအများကြီးကို hold လုပ်ထားရတဲ့အချိန်မျိုးမှာပေါ့။ Data တွေဟာ inconsistent (မဆီလျော်) တာမျိုးဖြစ်နိုင်ပါတယ်။ အထူးသဖြင့် end users တွေပါလာတဲ့အချိန်မှာ strings of text တွေကို manipulate လုပ်နေရပြီး consistent ဖြစ်အောင်လုပ်တာဟာ တစ်ကယ်ကို super important ပဲဖြစ်ပါတယ်။ ကျွန်တော်တို့က emails တွေကို lowercase နဲ့ယူပြီး last names တွေကို uppercase နဲ့ယူတာမျိုးပေါ့။ ကျွန်တော်တို့အနေနဲ့ product တစ်ခုရဲ့ ratings တွေကို maximum or minimum review အနေနဲ့တောင် ထုတ်ကြည့်နိုင်ပါတယ်။ အဲ့ဒီလို data တွေကို grouping လုပ်ခြင်းကို Aggregation လို့ခေါ်ပါတယ်။ ထို့နောက် dates တွေအတွက် reporting လုပ်ရတဲ့ tools တွေရှိပါတယ်။ SQL code ဟာ creating dates တွေနဲ့ searching by dates တွေအတွက် tools တွေ provide လုပ်ပေးထားပါတယ်။ ဒါဟာ နောင်တစ်ချိန် ranges of dates တွေနဲ့ရှာကြည့်ချင်တဲ့အခါ အသုံးဝင်လာမှာဖြစ်ပါတယ်။ ဒါတွေအားလုံးကို လေ့လာပြီးပြီဆိုရင်တော့ ကျွန်တော်တို့အနေနဲ့ reports တွေနဲ့ suitable ဖြစ်မယ့် (သို့) dynamic website နဲ့ကိုက်ညီမယ့် database results တွေကိုပါ generate လုပ်နိုင်မှာဖြစ်ပါတယ်။ </p>
    <div class="img-size">
        <img src="images/handling.png" alt="Handling Data Image">
    </div>
    <hr>


    <h2>Retrieving Results in a Particular Order</h2>
    <p>ပထမဆုံး ordering results ကိုအရင်သွားပါမယ်။ Specific order တစ်ခုအတွင်းက data ကို retrieve လုပ်ရုံပါပဲ။ အဲ့ဒီအတွက် example အချို့ရှိပါတယ်။ ဘာကြောင့် specific order အတွင်းက data ကို retrieve လုပ်ရသလဲဆိုရင် ကျွန်တော်တို့အနေနဲ့ phone book တစ်ခုမှာ last name နဲ့ first name ကို alphabetically အရ sort လုပ်ချင်တာမျိုးတွေ ရှိလာနိုင်ပါတယ်။ ကျွန်တော်တို့ website မှာ year တစ်ခုချင်းအလိုက် movies တွေကို sort လုပ်ရတာမျိုး ရှိနိုင်ပါတယ်။ အချို့ users တွေက classics or ဒီနှစ်မှာထွက်တဲ့ movies တွေကိုပဲ ကြည့်ချင်တာမျိုးပေါ့။ ကျွန်တော်တို့လိုအပ်သလို Product တွေရဲ့ prices တွေကို lowest to highest or highest to lowest ဆိုပြီး ကြိုက်သလို order လုပ်နိုင်ပါတယ်။ SQL နဲ့ပဲ ကျွန်တော်တို့ရဲ့ data ကို text, numeric နဲ့ date types တွေပေါ်မှာ order လုပ်နိုင်ပါတယ်။ ဒါပေမယ့် ကျွန်တော်တို့ results တွေကို order မလုပ်ခင် အချို့သော results တွေကို retrieve လုပ်ဖို့လိုပါတယ်။ ဘယ် SQL query နဲ့မဆို SELECT statement နဲ့ start လုပ်ဖို့လိုပါတယ်။ Particular column တစ်ခုနဲ့ order လုပ်ဖို့အတွက်ဆိုရင် ပထမဆုံး ORDER ဆိုတဲ့ keyword လိုအပ်ပြီးတော့ သူ့နောက်မှာ BY ဆိုတဲ့ keyword နဲ့ column name လိုက်ပေးရမှာဖြစ်ပါတယ်။ သူဟာ column တစ်ခုထဲမှာရှိတဲ့ values တွေကို ascending order အနေနဲ့ စီသွားမှာဖြစ်ပါတယ်။ Numbers တွေအတွက် lowest ကနေ highest ၊ text strings တွေအတွက် alphabetically အရ A to Z နဲ့ dates တွေအတွက် earliest ကနေ most recent အထိ အသီးသီး order လုပ်ပေးသွားမှာဖြစ်ပါတယ်။ အဲ့ဒီလို ascending or descending အရ order လုပ်ဖို့အတွက် ORDER BY &lt;column&gt; ရဲ့နောက်က ASC or DESC  ဆိုတဲ့ keyword ထည့်ပေးရပါမယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            How to Write? => SELECT &lt;columns&gt; FROM &lt;table&gt; ORDER BY
                                                                  &lt;column&gt; [ASC|DESC],
                                                                  &lt;column 2&gt; [ASC|DESC],
                                                                  &lt;column ...&gt; [ASC|DESC];
            SELECT * FROM products ORDER BY stock_count;
            SELECT * FROM products ORDER BY stock_count ASC;
            SELECT * FROM products ORDER BY stock_count DESC;
            SELECT * FROM products ORDER BY PRICE ASC, stock_count DESC;                                        
        </code>
    </pre>
    <div class="img-size">
        <img src="images/rpsql1.png" alt="Retrieving Results in Particular Order Image">
    </div>
    <hr>


    <h2>Limiting the Number of Results</h2>
    <p>Databases တွေဟာ data များပြားလှတဲ့ data တွေကို store လုပ်နိုင်ပါတယ်။ ပြီးတော့ အဲ့ဒီ data တွေက အရမ်းများလွန်းတာကြောင့် ကျွန်တော်တို့က results အကုန်လုံးကို ထုတ်မကြည့်ချင်တာမျိုးတွေ ရှိပါတယ်။ Data တွေအားလုံးကို ယူမယ်ဆိုရင်တော့ users တွေအတွက် performance ကို slow ဖြစ်စေမှာဖြစ်ပါတယ်။ ဥပမာ e-commerce site တစ်ခုမှာ email, television, banner ads, Google ads နဲ့ အခြားသော marketing channels တို့ကိုသုံးပြီး အမျိုးမျိုးသော marketing campaigns 9 ကို launched လုပ်မယ်ဆိုပါစို့။ Marketing team ကလည်း ဝင်ငွေအကောင်းဆုံး campaigns သုံးခုကိုပဲ လိုချင်တယ်ဆိုရင် ကျွန်တော်တို့ website က information အားလုံးကို track လုပ်ပြီးတော့ database တစ်ခုအတွင်းမှာ store လုပ်သွားမှာ ဖြစ်ပါတယ်။ ကျွန်တော်တို့က results တွေကို sales အရေအတွက်ရ order လုပ်ချင်တယ် ၊ ဒါပေမယ့် အဲ့ဒါကိုမှ ကျွန်တော်တို့က largest ကနေ smallest အရ descending စီချင်တယ်ဆိုရင် လိုချင်တဲ့ row သုံးခုတင်မကဘဲ row အကုန်လုံးကိုထုတ်ပေးမှာပါ။ အဲ့ဒီအတွက် ကံကောင်းစွာပဲ SQL ဟာ results တွေရဲ့ amount ကို limit လုပ်နိုင်တဲ့ နည်းတစ်ခုကို provide လုပ်ပေးပါတယ်။ Handful ဖြစ်တဲ့ total results တွေကိုပဲ retrieve လုပ်ဖို့ဆိုရင် LIMIT ဆိုတဲ့ keyword နဲ့ သူ့နောက်မှာ ကျွန်တော်တို့ ဆွဲထုတ်ချင်တဲ့ row အရေအတွက်ကို ထည့်ပေးရမှာဖြစ်ပါတယ်။ ဒါဆိုရင်တော့ ကျွန်တော်တို့လိုချင်တဲ့ အရောင်းရဆုံး campaigns သုံးခုကို ရလာမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့အနေနဲ့ ကြိုက်တဲ့ query ကိုသုံးပြီး စရေးနိုင်ပြီး LIMIT ဆိုတဲ့ keyword ရယ် ၊ သူ့နောက်က number of rows နဲ့ အဆုံးသတ်ပေးရမှာ ဖြစ်ပါတယ်။ သူ့ကို conditions မပါတဲ့ query ၊ conditions ပါတဲ့ query နဲ့ ORDER BY ဆိုတဲ့ keyword တွေနဲ့ ကြိုက်သလို ရေးနိုင်ပါတယ်။ LIMIT ဟာ SQL databases အားလုံးမှာတော့ available မဖြစ်နိုင်ပါဘူး။ အခြား databases တွေဟာ အမျိုးမျိုးသော keyword နဲ့ syntax တွေကို အသုံးပြုနိုင်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            How to Write? => SELECT * FROM &lt;table&gt; LIMIT &lt;# of rows&gt;;
                             SELECT * FROM &lt;table&gt; WHERE &lt;condition&gt; LIMIT &lt;# of rows&gt;;
                             SELECT * FROM &lt;table&gt; ORDER BY &lt;column&gt; ASC, DESC LIMIT &lt;# of rows&gt;;

            SELECT * FROM campaigns LIMIT 3;
            SELECT * FROM campaigns WHERE id <= 5 LIMIT 2;
            SELECT * FROM campaigns ORDER BY sales DESC LIMIT 4;
        </code>
    </pre>
    <div class="img-size">
        <img src="images/rpsql2.png" alt="SQL Screenshot Image">
    </div>
    <hr>


    <h2>Paging through Results</h2>
    <p>Results တွေရဲ့ top set ကို limit လုပ်တာတော့ အဆင်ပြေသွားပါပြီ။ ဒါပေမယ့် ကျွန်တော်တို့က multi-page report တစ်ခုကို generate လုပ်ချင်တဲ့အခါ ဘယ်လိုလုပ်ရမလဲ။ ကျွန်တော်တို့ blog တစ်ခုကို run နေတယ်ဆိုပါစို့။ ပြီးတော့ ကျွန်တော်တို့က single page တစ်ခုထဲမှာပဲ 10 posts ကို archive တစ်ခု through လုပ်ပြီး ဖော်ပြချင်တယ်ဆိုရင် (သို့) e-commerce site တစ်ခုမှာ ကျွန်တော်တို့က batches 50 ကို orders တွေနဲ့ ပြချင်တယ်ဆိုရင် ကျွန်တော်တို့အနေနဲ့  OFFSET ဆိုတဲ့ keyword ကို အသုံးပြုရမှာဖြစ်ပါတယ်။ OFFSET ရဲ့နောက်မှာတော့ ကျွန်တော်တို့ OFFSET လုပ်ချင်တဲ့ number အရေအတွက်ကို ရေးပေးရမှာ ဖြစ်ပါတယ်။ မြင်အောင်ပြောရရင် database ထဲမှာ row အရေအတွက် 100 ရှိတဲ့အထဲက 50 လောက်ကို ပိုင်းပြီး ဆွဲထုတ်ချင်တဲ့အခါမျိုးမှာ OFFSET ကိုသုံးတာဖြစ်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            How to Write? => SELECT * FROM &lt;table&gt; LIMIT &lt;# of rows&gt; OFFSET &lt;skipped rows&gt;;
                             SELECT * FROM &lt;table&gt; LIMIT &lt;skipped rows&gt;, &lt;# of rows&gt;;  //Shorthand Format

            SELECT * FROM campaigns LIMIT 5, OFFSET 5;
            SELECT * FROM campaigns LIMIT 4, 5; 
        </code>
    </pre>
    <div class="img-size">
        <img src="images/rpsql3.png" alt="SQL Screenshot Image">
    </div>
    <hr>


    <h2>Functions</h2>
    <p>ဒီသင်ခန်းစာမှာတော့ ကျွန်တော်တို့က functions တွေအကြောင်းကို ပြောပြပေးသွားမှာဖြစ်ပါတယ်။ Functions တွေဟာ အခြား normal keywords တွေနဲ့ မတူပါဘူး။ ဘာဖြစ်လို့လဲဆိုရင် သူတို့ဟာ query တစ်ခုရဲ့ results တွေကို နည်းအမျိုးမျိုးနဲ့ manipulate လုပ်နိုင်လို့ပဲ ဖြစ်ပါတယ်။ Functions ကို မလေ့လာခင်မှာ ကျွန်တော်တို့အနေနဲ့ သိပြီးသားဖြစ်တဲ့ syntax definition အချို့ကို လေ့လာရပါမယ်။ Keyword တစ်ခုဆိုတာ database ထဲမှာရှိတဲ့ data တွေကို issue လုပ်ဖို့အတွက်သုံးတဲ့ command တစ်ခုပဲ ဖြစ်ပါတယ်။ Results ထဲမှာရှိတဲ့ data တွေဟာ alter မဖြစ်နိုင်ပါဘူး။ Generally အရ သူတို့ကို capital letters တွေနဲ့ပဲ မြင်တွေ့ရမှာဖြစ်ပါတယ်။ ပြီးရင်တော့ ကျွန်တော်တို့မှာ operators တွေရှိပါတယ်။ သူတို့ကိုတော့ comparisons တွေအတွက် simple actions တွေလုပ်ဆောင်ဖို့အတွက် အသုံးပြုပါတယ်။ သူတို့ကို ရိုးရှင်းတဲ့ manipulation tasks တွေအတွက်လည်း အသုံးပြုနိင်ပါတယ်။ ပြီးတဲ့နောက်မှာတော့ functions တွေပဲဖြစ်ပါတယ်။ သူတို့ဟာ keywords တွေလိုပဲ names တွေရှိပြီးတော့ databases တွေကို တစ်ခုခုပြုလုပ်ဖို့ ညွှန်ကြားလိုက်ခြင်းဖြစ်ပါတယ်။ SELECT keyword ကတော့ databases တွေထဲမှာရှိတဲ့ data တွေရဲ့ results ကို database ထဲမှာရှိတဲ့ format အတိုင်းထုတ်ပေးပြီး ၊ functions တွေကတော့ databases တွေထဲက results ကို transform လုပ်ပေးပါတယ်။ Functions တွေကို string ကို all uppercase (သို့) numbers အားလုံးရဲ့ sum ကို particular column တစ်ခုနဲ့ထားတာလိုမျိုး ပိုပြီးတော့ complex ဖြစ်တဲ့ operations တွေမှာ အသုံးများပါတယ်။ Table ထဲမှာရှိတဲ့ data ကပြောင်းလဲမသွားဘဲ presentation သာလျှင် ပြောင်းသွားတာဖြစ်ပါတယ်။ အခု functions တွေဘယ်လိုရေးရလဲ ကြည့်ရအောင်။ ပထမဆုံး function name မှာဆိုရင် generally အရ uppercase ဖြစ်ရမယ်။ သူ့နောက်က parenthesis ထဲမှာတော့ ကျွန်တော်တို့ transform လုပ်ချင်တဲ့ value (သို့) column (သို့) transform data ပဲဖြစ်ပါတယ်။ ဥပမာအနေနဲ့ ကျွန်တော်တို့ table ထဲက name ဖြစ်တဲ့ Andrew Chalkley ကို all uppercase ပြောင်းချင်တယ်ဆိုရင် UPPER ဆိုတဲ့ keyword ကိုထည့်ပေးရမှာ ဖြစ်ပါတယ်။ Functions တွေဟာ complex operator တွေကို အသုံးပြုပါတယ်။ ကျွန်တော်တို့ အသုံးပြုနေတဲ့ functions တွေနဲ့ operators အများစုဟာ universal တွေပဲဖြစ်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            How to Write? => SELECT UPPER(&lt;value or column&gt; or &lt;transformed data&gt;) FROM &lt;table&gt;

            SELECT UPPER(name) FROM campaigns;
        </code>
    </pre>
    <div class="img-size">
        <img src="images/rpsql4.png" alt="SQL Screenshot Image">
    </div>
    <hr>


    <h2>Adding Text Columns Together</h2>
    <p>ကျွန်တော်တို့ဟာ database schema ထဲမှာရှိတဲ့ column definitions တွေကို ကန့်သတ်ထားခြင်း မရှိပါဘူး။ ပြီးခဲ့တဲ့ သင်ခန်းစာမှာတုန်းက ကျွန်တော်တို့ရဲ့ column names တွေကို လူတွေဖတ်ရပိုနားလည်ဖို့ AS ဆိုတဲ့ keyword ကိုအသုံးပြုခဲ့ပါတယ်။ ဒါဆိုရင် အခု columns နှစ်ခုကို ဘယ်လို join လုပ်ကြမလဲ။ ကျွန်တော်တို့အနေနဲ့ column နှစ်ခုကနေ piece of text နှစ်ခုကို join လုပ်ဖို့အတွက်ဆိုရင် concatenation operator လို့ခေါ်တဲ့ operator တစ်ခုကို အသုံးပြုနိုင်ပါတယ်။ Concatenate ဆိုတာ things တွေကို link (သို့) join လုပ်ပေးတယ်လို့ ဆိုလိုပါတယ်။ SQL မှာဆိုရင် concatenate operator ကို vertical line character or double pipes ( || ) နဲ့သတ်မှတ်ပါတယ်။ သူ့ရဲ့ရေးနည်းကတော့ ပထမဆုံး value or column ကို သတ်မှတ်ရမယ်။ ပြီးရင် concatenation operator ဖြစ်တဲ့ ( || ) ထည့်ပြီးနောက်မှာ second value or column ကို ဆက်ရေးပေးရမှာ ဖြစ်ပါတယ်။ နောက်ထပ်တစ်နည်းကတော့ CONCAT() ဆိုတဲ့ function ကိုသုံးပြီး column name နှစ်ခုကို ပေါင်းပြီးရေးတာ ဖြစ်ပါတယ်။ Values or columns တွေကို ကြိုက်သလောက် join လုပ်လို့ရပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            How to Write? => SELECT &lt;column 1&gt; || " " || &lt;column 2&gt; AS &lt;new column&gt; FROM &lt;table&gt;;  // For SQL Playground Database
                             SELECT &lt;column 1&gt; + " " + &lt;column 2&gt; AS &lt;new column&gt; FROM &lt;table&gt;;
                             SELECT CONCAT(&lt;column 1&gt; , " ", &lt;column 2&gt;) AS &lt;new column&gt; FROM &lt;table&gt;;

            SELECT CONCAT(first_name, " ", last_name) AS "Full Name", email AS "Email", phone AS "Phone" FROM customer;
        </code>
    </pre>
    <div class="img-size">
        <img src="images/rpsql5.png" alt="SQL Screenshot Image">
    </div>
    <hr>


    <h2>Finding the Length of Texts</h2>
    <p>ကျွန်တော်တို့ဟာ e-commerce site တစ်ခုပေါ်မှာ အလုပ်လုပ်နေတယ်လို့ ယူဆကြည့်မယ်။ ပြီးတော့ designers တွေက question တစ်ခုလာမေးမယ်။ သူတို့ဟာ design ကို customer ရဲ့ profile page ပေါ်မှာ update လုပ်မယ်။ အဲ့ဒီအချိန်မှာ designers တွေက database ထဲမှာရှိတဲ့ အကြီးဆုံး user name ရဲ့ length ကို သိဖို့လိုလာပါလိမ့်မယ်။ အဲ့ဒီ problem ကိုဖြေရှင်းဖို့အတွက် LENGTH လို့ခေါ်တဲ့ SQL function ကို အသုံးပြုနိုင်ပါတယ်။ Function တစ်ခုဟာ အမြဲတမ်းပဲ function name နဲ့စပြီး သူ့နောက်မှာ parenthesis ထည့််ပေးရပါတယ်။ Parenthesis ထဲမှာတော့ ကျွန်တော်တို့ transform လုပ်ချင်တဲ့ value (သို့) column name ထည့်ပေးရမှာဖြစ်ပါတယ်။ အဲ့ဒီထဲကမှာ LENGTH() function ကိုသုံးပြီးထွက်လာတဲ့ length value အကြီးဆုံးကိုပဲ ထုတ်ပြချင်တယ်ဆိုရင်တော့  ORDER BY length DESC LIMIT 1 ဆိုပြီး ရေးပေးရမှာဖြစ်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            How to Write? => SELECT LENGTH(&lt;column&gt;) AS &lt;alias&gt; FROM &lt;table&gt;;
                             SELECT &lt;columns&gt; FROM &lt;table&gt; WHERE LENGTH(&lt;column&gt;) &lt;operator&gt; &lt;value&gt;;

            SELECT last_name, LENGTH(last_name) AS length FROM customer;
            SELECT last_name, LENGTH(last_name) AS length FROM customer ORDER BY length DESC LIMIT 1;
            SELECT last_name AS length FROM customer WHERE LENGTH(last_name) < 7;
        </code>
    </pre>
    <div class="img-size">
        <img src="images/rpsql6.png" alt="SQL Screenshot Image">
    </div>
    <hr>


    <h2>Changing the Case of Text Columns</h2>
    <p>ကျွန်တော်တို့ဟာ string တစ်ခုရဲ့ case ကို ပြောင်းလဲဖို့အတွက် reasons တွေအများကြီးရှိနိုင်ပါတယ်။ ဥပမာ column တစ်ခုအတွင်းမှာရှိတဲ့ text အားလုံးကို all uppercase (သို့) all lowercase ကို ပြောင်းလဲချင်တာမျိုးပေါ့။ ဒီလိုပြုလုပ်ရတဲ့ အဓိကအကြောင်းပြချက်နှစ်ခုကတော့ output တွေကို standardize လုပ်ဖို့နဲ့ values တွေကို search လုပ်တဲ့အခါမှာ အသုံးပြုဖို့အတွက်ပဲ ဖြစ်ပါတယ်။ အဲ့ဒီမှာဆိုရင် cases တွေကို change လုပ်ဖို့အတွက် function နှစ်ခုရှိပါတယ်။ Values (သို့) columns တွေကို uppercase ပြောင်းဖို့အတွက် UPPER() ဆိုတဲ့ function နဲ့ lowercase ပြောင်းဖို့အတွက် LOWER() ဆိုတဲ့ function တို့ပဲဖြစ်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            How to Write? => SELECT LOWER(&lt;column&gt;) FROM &lt;table&gt;;

        SELECT first_name, last_name, LOWER(email) FROM customer;
        SELECT first_name, last_name, UPPER(email) FROM customer;
        </code>
    </pre>
    <div class="html hljs xml">
        <img src="images/rpsql7.png" alt="SQL Screenshot Image">
    </div>
    <hr>


    <h2>Replacing Portions of Text</h2>
    <p>SQL မှာ နောက်ထပ်အသုံးများတဲ့အရာကတော့ text ရဲ့အစိတ်အပိုင်းတွေကို အခြား text values တွေနဲ့ replace လုပ်တာပဲဖြစ်ပါတယ်။ ဒါဟာ ကျွန်တော်တို့ webpage ကို styling ထပ်ထည့်ဖို့အတွက် ကောင်းမွန်ပါတယ်။ ဥပမာ ကျွန်တော်တို့ search results ထဲက search term တွေကို code တွေထည့်ပြီး highlight လုပ်ထားတာကြောင့် browser ပေါ်မှာ bold အနေနဲ့ ပေါ်လာမှာ ဖြစ်ပါတယ်။ ဒါမှမဟုတ်ရင် privacy အတွက် e-mail addresses တွေကို ရှုပ်ထွေးစေဖို့အတွက်နဲ့ non-standardized ဖြစ်နေတဲ့ user input တွေကိုတောင်မှ search လုပ်ဖို့ ကူညီပေးနိုင်ပါတယ်။ ဥပမာ user တစ်ယောက်က country name အပြည့်အစုံကိုရိုက်တာထက် country code အရှည်ကြီးကို ရိုက်လိုက်တဲ့ အခါမျိုးမှာပေါ့။ အဲ့ဒါကို ဖြေရှင်းဖို့အတွက် SQL ရဲ့ REPLACE() ဆိုတဲ့ function ရှိပါတယ်။ REPLACE function ဟာ substring function လိုပဲ value တစ်ခုထက်ပိုပြီး ယူပေးပါတယ်။ ပထမ value ကတော့ ကျွန်တော်တို့ replace လုပ်ချင်တဲ့ column or value ပဲဖြစ်ပါတယ်။ အဲ့ဒီနောက်မှာ target string လိုက်ပါတယ်။ သူဟာ ကျွန်တော်တို့ replace လုပ်ချင်တဲ့အရာဖြစ်ပါတယ်။ နောက်ဆုံးမှာတော့ ကျွန်တော်တို့ target နဲ့ replace လုပ်ချင်တဲ့ string ပဲဖြစ်ပါတယ်။ အောက်က example ကိုကြည့်ရအောင်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            How to Write? => SELECT * FROM addresses WHERE REPLACE(&lt;value&gt; or &lt;column&gt;, &lt;target&gt;, &lt;replacement&gt;)

            SELECT * FROM addresses WHERE REPLACE(state, "California", "CA") = "CA";
            SELECT street, city, REPLACE(state, "California", "CA") AS New, zip FROM addresses WHERE REPLACE(state, "California", "CA");
        </code>
    </pre>
    <div class="img-size">
        <img src="images/rpsql8.png" alt="SQL Screenshot Image">
    </div>
    <hr>


    <h2>Practice Session (1)</h2>
    <p>ကျွန်တော်တို့ လေ့လာခဲ့ပြီးသားဖြစ်တဲ့ comparison operators တွေမှာ operators တွေဟာ values ကို manipulate လုပ်ပေးနိုင်ပါတယ်။ Functions လို့ခေါ်တဲ့ new concept ကိုလည်း မိတ်ဆက်ပေးခဲ့ပါတယ်။ Functions တွေဟာ values တွေမှာ ပိုပြီး complex ဖြစ်တဲ့ operations တွေကို လုပ်ဆောင်ပေးနိုင်ပါတယ်။ Functions တွေကို ကျွန်တော်တို့ query ရဲ့ SELECT portion နေရာမှာ အသုံးပြုနိုင်ပါတယ်။ သူတို့ကို ကျွန်တော်တို့ရေးလိုက်တဲ့ ဘယ် condition မဆို or ORDER BY ဆိုတဲ့ sections တွေတောင်မှ အသုံးပြုနိုင်ပါတယ်။ ပထမဆုံး LENGTH() function ကတော့ column name တစ်ခုကိုယူပြီးတော့ results ထဲက value တစ်ခုချင်းစီရဲ့ length ကို return ပြန်ပေးပါတယ်။ UPPER() function ဟာ ကိုယ်သတ်မှတ်လိုက်တဲ့ ဘယ် column ထဲက text မဆို အားလုံးကို uppercase ပုံစံနဲ့ထုတ်ပေးတာဖြစ်ပြီး LOWER() function ကတော့ lowercase ပုံစံနဲ့ထုတ်ပေးတာဖြစ်ပါတယ်။ SUBSTR() function ကတော့ string တစ်ခုထဲက ဘယ် position မှာ character ဘယ်လောက်ထုတ်ပြမယ်ဆိုတဲ့ အချိန်မျိုးမှာ အသုံးပြုပါတယ်။ Eg. SELECT SUBSTR("string", start, length) AS column; ။ နောက်ဆုံးမှာ sections of strings တွေကို အခြား strings တွေနဲ့ replace လုပ်ဖို့အတွက် REPLACE() ဆိုတဲ့ function အကြောင်းကိုလေ့လာခဲ့ပါတယ်။ REPLACE() ထဲမှာတော့ ပထမဆုံး column name ကို ရေးရမယ်၊ ပြီးနောက် replace လုပ်ချင်တဲ့ string ကို target လုပ်ရမယ်။ ပြီးတော့ အဲ့ဒီ target လုပ်ထားတဲ့နေရာမှာ replace လုပ်ချင်တဲ့ value ကို ထည့်ပေးရမှာဖြစ်ပါတယ်။ Arguments တွေကို တစ်ခါတရံမှာ ကျွန်တော်တို့က parameters တွေအဖြစ် ရည်ညွှန်းပါတယ်။ </p>
    <hr>


    <h2>Aggregate and Numeric Functions</h2>
    <p>ဒီသင်ခန်းစာမှာတော့ ကျွန်တော်တို့က SQL ရဲ့ new functions, keywords နဲ့ operators တွေကို ကျွန်တော်တို့ရဲ့ reports တွေ generate လုပ်ဖို့အတွက် ပြောပြပေးသွားမှာဖြစ်ပါတယ်။ ဥပမာ ပြီးခဲ့တဲ့ month က books တွေဘယ်လောက်များများရောင်းရလဲ၊ ပြီးခဲ့တဲ့ week မှာ revenue ဘယ်လောက်ထုတ်လိုက်ရလဲ (သို့) ကျွန်တော်တို့ products တွေထဲက တစ်ခုအတွက် average review ကဘာလဲဆိုတာကို ပြောပြပေးသွားမှာပါ။ ပထမဆုံးအနေနဲ့ COUNT() ဆိုတဲ့ function အကြောင်းပြောချင်ပါတယ်။ သူ့ကို နည်းလမ်းအမျိုးမျိုးနဲ့ အသုံးပြုနိုင်ပါတယ်။ အသုံးများတာကတော့ table ထဲက rows အားလုံးကို count လုပ်တဲ့အခါမျိုးမှာပါ။ ပြီးတော့ query ထဲမှာရှိတဲ့ results တွေကို count လုပ်တာဖြစ်ပါတယ်။ Table ထဲက unique or distinct entries ကိုလည်း count လုပ်နိုင်ပါတယ်။ နောက်ဆုံးတစ်ခုကတော့ things တွေရဲ့ collection or aggregates တွေကို count လုပ်နိုင်ပါတယ်။ COUNT() function ရဲ့ action ကို တစ်ချက်ကြည့်ရအောင်။ COUNT() ဟာ ကျွန်တော်တို့ customer table ထဲမှာရှိတဲ့ number of records တွေရဲ့ လက်ရှိ current number ကိုရဖို့အတွက် အသုံးပြုခြင်းဖြစ်ပါတယ်။ COUNT() ကို ကျွန်တော်တို့ query ထဲက SELECT COUNT() ထဲမှာ astericks ကိုထည့်ပြီးရေးနိုင်ပါတယ်။ COUNT() ဟာ values တွေပါနေတဲ့ rows တွေကိုပဲ count လုပ်ပေးတာဖြစ်ပါတယ်။ တစ်နည်းအားဖြင့် သူဟာ column တစ်ခုအတွင်းက non-null values တွေအားလုံးကို count လုပ်သွားတာဖြစ်ပါတယ်။ တစ်ကယ်လို့ record တစ်ခုက column ထဲမှာ value မရှိဘူးဆိုရင် သူဟာ count မလုပ်ပေးပါဘူး။ တစ်ကယ်လို့ ကျွန်တော်တို့ table ထဲက column တစ်ခုရဲ့ value ဟာ duplicate ဖြစ်နေခဲ့ရင် အဲ့ဒီ value ကို return ပြန်ဖို့ keyword တစ်ခုကို အသုံးပြုပေးရပါတယ်။ အဲ့ဒီ keyword ကတော့ DISTINCT ပဲဖြစ်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            How to Write? => SELECT COUNT(DISTINCT &lt;column&gt;) FROM &lt;table&gt;;

        SELECT * FROM customer;
        SELECT * FROM customer ORDER BY id DESC LIMIT 1;
        SELECT COUNT(*) FROM customer ORDER BY id DESC LIMIT 1;
        SELECT COUNT(DISTINCT first_name) FROM customer; 
        </code>
    </pre>
    <div class="img-size">
        <img src="images/rpsql9.png" alt="SQL Screenshot Image">
    </div>
    <hr>


    <h2>Counting Groups of Rows</h2>
    <p>အခု ကျွန်တော်တို့က COUNT() function ကိုသုံးပြီးတော့ table ထဲက commonly ဖြစ်တဲ့ groups of rows တွေကို count လုပ်မှာဖြစ်ပါတယ်။ ဥပမာ products table ထဲက category တစ်ခုချင်းစီအတွက် products ဘယ်လောက်များများရှိသလဲဆိုတာပေါ့။ အဲ့ဒီအတွက် ကျွန်တော်တို့ query မှာ SELECT category ဆိုပြီးတော့ အဲ့ဒီ category ကို ORDER BY နဲ့ ထုတ်ကြည့်နိုင်ပါတယ်။ အဲ့ဒီလို မလုပ်ချင်ရင်လည်း COUNT() ကိုသုံးနိုင်ပါတယ်။ ဒီတစ်ခါမှာတော့ ကျွန်တော်တို့က groups of rows တွေကို သူတို့ရဲ့ category နဲ့ count လုပ်ချင်တာဖြစ်ပါတယ်။ အဲ့ဒီအတွက် ကျွန်တော်တို့က GROUP BY ဆိုတဲ့ keyword ကိုအသုံးပြုနိုင်ပါတယ်။ DISTINCT() ကို column ထဲက unique ဖြစ်တဲ့ value တွေကိုရဖို့အတွက် အသုံးပြုပါတယ်။ သူ့ကို query တစ်ခုရဲ့ SELECT အပိုင်းထဲမှာပဲ အသုံးပြုရပါတယ်။ နောက်တစ်ခုကတော့ GROUP BY ပဲဖြစ်ပါတယ်။ GROUP BY ဟာ statement ရဲ့အဆုံးမှာ ရေးရပါတယ်။ ဒါကတော့ count function လိုမျိုး row ရဲ့collection တွေလို column တစ်ခုထဲက particular value တစ်ခုကိုgrouped by လုပ်ပေးပါတယ်။ </p>
    <p>
        <pre>
            <code class="html hljs xml">
                How to Write? => SELECT DISTINCT &lt;column&gt; FROM &lt;table&gt;;
                                 SELECT DISTINCT &lt;column&gt; FROM &lt;table&gt; WHERE &lt;condition&gt;;
                                 SELECT &lt;column&gt; FROM &lt;table&gt; GROUP BY &lt;column&gt;;
                                 SELECT &lt;column&gt;, COUNT(*) FROM &lt;table&gt; GROUP BY &lt;column&gt;

                SELECT DISTINCT category FROM products;
                SELECT DISTINCT category FROM products WHERE category = "Clothing";
                SELECT category FROM products GROUP BY category;
                SELECT category, COUNT(*) FROM products GROUP BY category;
            </code>
        </pre>
        <div class="img-size"> 
            <img src="images/rpsql10.png" alt="SQL Screenshot Image">
        </div>
    </p>
    <hr>


    <h2>Getting the Grand Total</h2>
    <p>ကျွန်တော်တို့ဟာ table ထဲက rows တွေကို count လုပ်ခဲ့ပေမယ့် အဲ့ဒီထက်ပိုပြီး column တစ်ခုအတွင်းက values အားလုံးကို totally ရဖို့ဆိုရင် ဘယ်လိုလုပ်ရမလဲ?။ ကျွန်တော်တို့က e-commerce site database တစ်ခုမှာ အလုပ်လုပ်နေတယ်ဆိုပါစို့။ CEO က အဝယ်အများဆုံး customer ကို gift card တစ်ခုပေးချင်တယ်ဆိုရင် အဲ့ဒီ အဝယ်အများဆုံး customer က ကျွန်တော်တို့ site မှာ money ဘယ်လောက်များများသုံးထားလဲဆိုတာ အရင်ဆုံးရှာရပါမယ်။ အဲ့ဒီလိုရှာဖို့အတွက်ဆိုရင် ကျွန်တော်တို့အနေနဲ့ SUM() function ကို အသုံးပြုပေးရမှာဖြစ်ပါတယ်။ SUM() function ဟာ ဘယ် numeric column မဆိုဖြစ်နိုင်ပါတယ်။ Column တစ်ခုရဲ့ total sum ကိုရဖို့ SUM() function ကို GROUP BY ဆိုတဲ့ keyword နဲ့ conjunction အဖြစ်အသုံးပြုရပါတယ်။ ကျွန်တော်တို့က SUM ကို GROUP BY ဆိုတဲ့ keyword နဲ့တွဲသုံးမယ်ဆိုရင် table ထဲက rows တွေရဲ့ total values တွေကို ထုတ်နိုင်မှာဖြစ်ပါတယ်။ Aggregate function ကိုအသုံးပြုဖို့ having ဆိုတဲ့ keyword ကိုအသုံးပါတယ်။ သူကတော့ group by keyword ရဲ့နောက်မှာ အသုံးပြုပါတယ်။ Order by keyword မရေးခင်လည်းအသုံးပြုပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            How to Write? => SELECT SUM(&lt;column&gt;) FROM &lt;table&gt; GROUP BY &lt;another column&gt;;
                            SELECT SUM(&lt;numeric column&gt;) AS &lt;alias&gt; FROM &lt;table&gt;
                                    GROUP BY &lt;another column&gt;
                                    HAVING &lt;condition&gt;
                                    ORDER BY &lt;column&gt;;

            SELECT SUM(cost) AS total_spend, user_id FROM orders GROUP BY user_id;
            SELECT SUM(cost) AS total_spend, user_id FROM orders GROUP BY user_id ORDER BY total_spend DESC;
            SELECT SUM(cost) AS total_spend, user_id FROM orders GROUP BY user_id HAVING total_spend > 100 ORDER BY total_spend DESC;
        </code>
    </pre>
    <div class="img-size">
        <img src="images/rpsql11.png" alt="SQL Screenshot Image">
    </div>
    <hr>


    <h2>Calculating Averages</h2>
    <p>SQL မှာ helpful ဖြစ်တဲ့ functions တွေအများရှိပြီးတော့ ကျွန်တော်တို့ table ထဲက data တွေကို sorting လုပ်ဖို့ ကူညီပေးပါတယ်။ အခု သင်ခန်းစာမှာတော့ averages အကြောင်းကို လေ့လာသွားမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ orders table ထဲက order တစ်ခုချင်းအတွက် user အသုံးပြုရတဲ့ average amount ကိုထုတ်ချင်တယ်ဆိုရင် average or AVG() ဆိုတဲ့ function ကိုအသုံးပြုရမှာဖြစ်ပါတယ်။ တစ်ကယ်လို့ ကျွန်တော်တို့က revenue amount ကို generate လုပ်ချင်တဲ့အခါ AVG () function က လိုချင်တဲ့ goal ကိုရောက်ဖို့ orders တွေဘယ်လောက်များများရှိနိုင်မလဲဆိုတာကို ဆုံးဖြတ်ပေးနိုင်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            How to Write? => SELECT AVG(&lt;numeric column&gt;) FROM &lt;table&gt;;
                             SELECT AVG(&lt;numeric column&gt;) FROM &lt;table&gt; WHERE &lt;condition&gt;;
                             SELECT AVG(&lt;numeric column&gt;) FROM &lt;table&gt; GROUP BY &lt;column&gt;;

            SELECT AVG(cost) AS average, user_id FROM orders;
            SELECT AVG(cost) AS average, user_id FROM orders WHERE address_id = 2;
            SELECT AVG(cost) AS average, user_id FROM orders GROUP BY user_id;
        </code>
    </pre>
    <div class="img-size">
        <img src="images/rpsql12.png" alt="SQL Screenshot Image">
    </div>
    <hr>


    <h2>Getting Minimum and Maximun Value</h2>
    <p>အရင်သင်ခန်းစာမှာ ကျွန်တော်တို့က user တစ်ယောက်ရဲ့ average order value ကိုရဖို့အတွက် AVG() ဆိုတဲ့ function ကိုအသုံးပြုခဲ့ပါတယ်။ ဒါတင်မကဘဲ ကျွန်တော်တို့က ပိုပြီး statistics ဖြစ်တာကို display လုပ်ချင်တယ် (သို့) တစ်စုံတစ်ယောက်က analyze လုပ်ချင်တယ်ဆိုပါစို့။ ဥပမာ ကျွန်တော်တို့ store မှာရှိတဲ့ expensive အဖြစ်ဆုံး order တစ်ခုကို maximum value တစ်ခုနဲ့ ထုတ်ကြည့်ချင်တယ် (သို့) company တစ်ခုမှာရှိတဲ့ အမြင့်ဆုံး paid employee ကို ထုတ်ကြည့်ချင်တယ်ဆိုရင်တော့ အဲ့ဒီ maximum & minimum values တွေကိုရဖို့ ကျွန်တော်တို့အနေနဲ့ MAX(&lt;numeric column&gt;) နဲ့ MIN(&lt;numeric column&gt;) ဆိုတဲ့ function တွေကို အသုံးပြုနိုင်ပါတယ်။ သူဟာ average လိုပါပဲ။ ကျွန်တော်တို့က Maximum နဲ့ Minimum function ထဲမှာ same column ကိုထည့်ထားတယ်ဆိုရင် အဲ့ဒီ column ရဲ့ maximum value ရော ၊ minimum value ရောကိုပါ ထုတ်ပေးမှာဖြစ်ပါတယ်။ အဲ့ဒီ numeric functions တွေဟာ အလွန် powerful ဖြစ်တဲ့ tools တွေဖြစ်ပါတယ်။ သူတို့ကို လက်ရှိ related ဖြစ်နေတဲ့ queries တွေအတွက်သာမက user ratings တွေမှာလည်း အသုံးပြုနိုင်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            How to Write? => MIN(&lt;numeric column&gt;), MAX(&lt;numeric column&gt;)

            SELECT * FROM orders;
            SELECT AVG(cost) AS average, MAX(cost) AS Maximum, MIN(cost) AS Minimum, user_id FROM orders GROUP BY user_id;
        </code>
    </pre>
    <div class="img-size">
        <img src="images/rpsql13.png" alt="SQL Screenshot Image">
    </div>
    <hr>


    <h2>Performing Math on Numeric Types</h2>
    <p>SQL မှာ operators တော်တော်များများကို လေ့လာခဲ့ပြီးပါပြီ။ အဲ့ဒီ operators တွေကတော့ =, !=, <, >, <=, >= နဲ့ || တို့ပဲ ဖြစ်ပါတယ်။ အခု ကျွန်တော်တို့က numeric types တွေပေါ်မှာပဲ mathematical transformations တွေကို လုပ်ဆောင်ပေးနိုင်တဲ့ operators တွေကို ဆက်ပြီးလေ့လာသွားမှာဖြစ်ပါတယ်။ ပထမဆုံးတစ်ခုကတော့ Additional operator (+) ဖြစ်ပြီး သူဟာ number နှစ်ခုကို sum လုပ်ပေးတာဖြစ်ပါတယ်။ + operator ကို ကျွန်တော်တို့ credit car processing fee တစ်ခုကို invoice တစ်ခုအနေနဲ့ add လုပ်ချင်တဲ့အခါမျိုးမှာ သုံးနိုင်ပါတယ်။ နောက်တစ်ခုကတော့ Subtraction operator (-) ဖြစ်ပြီး သူ့ကို ကျွန်တော်တို့က coupon code or fixed discount လုပ်တဲ့ အခါမျိုးမှာ အသုံးပြုပါတယ်။ Multiplication (*) operator ကတော့ cells text (သို့) payment တစ်ခုကို calculate လုပ်တဲ့အခါမှာ အသုံးဝင်ပါတယ်။ နောက်ဆုံးတစ်ခုကတော့ Division operator (/) ဖြစ်ပြီး သူ့ကို equal monthly payments တွက်ထုတ်ချင်တဲ့အခါမှာ အသုံးပြုနိုင်ပါတယ်။ ကျွန်တော်တို့ အရင်သင်ခန်းစာမှာ ပြောခဲ့သလို SELECT statements ဟာ value တစ်ခုကို output ထုတ်နိုင်ပါတယ်။ အဲ့ဒီလိုပဲ SQL ရဲ့ mathematical operators တွေကို test လုပ်လို့ရပါတယ်။ အောက်မှာပြထားတဲ့ division operator မှာဆိုရင် ပထမဆုံး result 2 ဖြစ်နေရခြင်းဟာ computer က whole numbers (သို့) integers တွေကို handle လုပ်ထားရလို့ပဲဖြစ်ပါတယ်။ တစ်ကယ်လို့ number တစ်ခုက decimal place မရှိဘူးဆိုရင် SQL အပါအဝင် programming language အများစုဟာ remainder အဖြစ် drop ဖြစ်သွားမှာဖြစ်ပါတယ်။ ဒသမကိန်း တန်ဖိုးဟာ decimal point ရဲ့နောက်မှာ ပုံမှန်အတိုင်းပဲ ဖော်ပြပေးမှာ ဖြစ်ပါတယ်။ တစ်နည်းပြောရရင် result ဟာ rounded down ဖြစ်သွားတာဖြစ်ပါတယ်။ Division operator မှာ floating point number တွေသတ်မှတ်ဖို့ (သို့) decimal place နဲ့ number တစ်ခုကို သတ်မှတ်ဖို့ဆိုရင် အနည်းဆုံး decimal place ရဲ့နောက်မှာ ဂဏန်းတစ်လုံးတော့ ရှိရပါမယ်။ ဥပမာအနေနဲ့ကျွန်တော်တို့က SQL မှာ floating point number တွေကို multiply လုပ်ပြီးထုတ်ကြည့်တဲ့အခါ အဲ့ဒီ floating number တွေက remainders တွေနေနဲ့ decimal point ရဲ့နောက်မှာ ဂဏန်းတွေအများကြီးနဲ့ ဖော်ပြနေမှာ ဖြစ်ပါတယ်။ ဒါကို fix လုပ်ဖို့အတွက်ဆိုရင် ကျွန်တော်တို့က ROUND() ဆိုတဲ့ function ကို အသုံးပြုပေးရမှာ ဖြစ်ပါတယ်။ ROUND() မှာ arguments နှစ်ခုရှိပြီး ပထမ argument က ကျွန်တော်တို့ round လုပ်ချင်တဲ့ value ဖြစ်ပြီး ဒုတိယ argument ကတော့ ကျွန်တော်တို့ decimal point နောက်က လိုက်ချင်တဲ့ number အရေအတွက်ပဲ ဖြစ်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            How to Write? => SELECT ROUND(&lt;column &lt;operator&gt; &lt;value&gt;, &lt;decimal places&gt;&gt;) AS &lt;alias&gt; FROM &lt;table&gt;;

            SELECT 2 + 3 AS Adding;
            SELECT 4 - 1 AS Substraction;
            SELECT 4*5;
            SELECT 5/2 AS Multiply;
            SELCT * FROM products;
            SELECT name, price*1.06 AS "Price in Florida" FROM products;
            SELECT name, ROUND(price*1.06, 3) AS "Price in Florida" FROM products;
        </code>
    </pre>
    <div class="img-size">
        <img src="images/rpsql14.png" alt="SQL Screenshot Image">
    </div>
    <hr>


    <h2>Practice Session (2)</h2>
    <p>ကျွန်တော်တို့ဟာ new keywords, functions နဲ့ operators တွေအကြောင်းကို စပြီးမိတ်ဆက်ပေးခဲ့ပါတယ်။ သူတို့ကို review လုပ်ရမယ်ဆိုရင်တော့ ပထမဆုံး functions တွေအကြောင်းပါ။ ကျွန်တော်တို့ဟာ create လုပ်ခဲ့တဲ့ query ကိုအခြေခံပြီး table ရဲ့ row အရေအတွက်ကို သိရဖို့အတွက် COUNT() ဆိုတဲ့ function ကိုအသုံးပြုပါတယ်။ Rows တွေအကုန်လုံးကိုရဖို့အတွက်ဆိုရင် star (သို့) asterisk (*) ကိုအသုံးပြုရပါတယ်။ SUM() function ကတော့ column တစ်ခုအတွင်းက numeric values တွေအားလုံးကို sum လုပ်ချင်တဲ့အခါမှာ အသုံးပြုပါတယ်။ AVG() function ကိုတော့ ပေးထားတဲ့ column တစ်ခုအတွင်းက average values ကို တွက်ချင်တဲ့အခါမှာ အသုံးပြုပါတယ်။ Column တစ်ခုအတွင်းက value အားလုံးကို compare လုပ်ဖို့အတွက် MAX() နဲ့ MIN() function တွေကိုအသုံးပြုနိုင်ပါတယ်။ နောက်ဆုံးတစ်ခုကတော့ round values တွေကို တိကျတဲ့ decimal place ရဖို့အတွက် ROUND() ဆိုတဲ့ function ကိုအသုံးပြုရမှာ ဖြစ်ပါတယ်။ အဲ့ဒီ functions တွေအားလုံးနဲ့ပဲ ကျွန်တော်တု့ိဟာ table ထဲက rows အားလုံးကို ကြိုက်သလိုထုတ်ကြည့်နိုင်ပါတယ်။ ဒါမှမဟုတ် ကျွန်တော်တို့ select လုပ်လိုက်တဲ့ data ကိုပဲ WHERE clause ရဲ့နောက်မှာ သတ်မှတ်ပေးလိုက်လို့ရပါတယ်။ DISTINCT ဆိုတဲ့ keyword ကတော့ column တစ်ခုထဲက unique values တွေကို ရှာပေးတာဖြစ်ပါတယ်။ အဲ့ဒီလိုပဲ similar action ဖြစ်တဲ့ unique value တွေကို find လုပ်ဖို့ GROUP BY ကိုလည်း အသုံးပြုခဲ့ပါတယ်။ နောက်တစ်ခုကတော့ ကျွန်တော်တို့က aggregate information တွေကိုအခြေခံပြီး filter လုပ်ချင်တယ်ဆိုရင်တော့ WHERE clause ကိုသုံးလို့မရပါဘူး။ ကျွန်တော်တို့အနေနဲ့ HAVING clause ကိုသုံးပေးရမှာ ဖြစ်ပါတယ်။ နောက်ပြီး columns ထဲမှာရှိတဲ့ numeric data တွေကို math လုပ်ဖို့ operators အချို့ကို လေ့လာခဲ့ပါတယ်။ အဲ့ဒီ operators တွေကတော့ addition, subtraction, multiplication နဲ့ division တို့ပဲ ဖြစ်ပါတယ်။ </p>
    <hr>


    <h2>Date and Time Functions</h2>
    <p>ကျွန်တော်တို့အသုံးပြုနေတဲ့ SQL အများစုဟာ relational database systems တွေမှာပဲ အလုပ်လုပ်ကြပါတယ်။ ဥပမာ databases တွေဖြစ်တဲ့ MySQL, SQL server, Postgres နဲ့ SQLite တို့ဖြစ်ပါတယ်။ သို့သော်လည်း database system တစ်ခုချင်းစီမှာ date တွေအလုပ်လုပ်ဖို့ မတူညီတဲ့ နည်းလမ်းတွေအမျိုးမျိုးရှိပါတယ်။ Databases တွေထဲမှာရှိတဲ့ dates တွေအမျိုးမျိုးကိုထုတ်ပြပေးတဲ့ key ways ကတော့ SQL queries မှာ dates တွေဘယ်လိုရေးသလဲဆိုတာပါပဲ။ အချို့သော databases တွေကတော့ နည်းလမ်းတစ်ခုပေါ်ကို အခြားနည်းတစ်ခုနဲ့ရေးဖို့ prefer လုပ်ပါတယ်။ ကျွန်တော်တို့အနေနဲ့ dates တွေကို calculate လုပ်ဖို့ database systems အမျိုးမျိုးမှာ functions တွေအမျိုးမျိုးရှိကြပါတယ်။ ယနေ့ date ကိုလိုချင်တာမျိုး (သို့) past or future မှာရှိတဲ့ dates တွေကို calculate လုပ်ချင်တာမျိုးပေါ့။ နောက်ပြီးတော့ အဲ့ဒီ date တွေကို လူတွေဖတ်နိုင်ဖို့အတွက် format ဖြစ်အောင်ပြုလုပ်ဖို့ function အမျိုးမျိုးလည်းရှိပါသေးတယ်။ </p>
    <hr>


    <h2>Creating Up-to-the-Minute Reports</h2>
    <p>ကျွန်တော်တို့ဟာ SQL ကိုသုံးပြီး ပြုလုပ်လို့ရတဲ့ powerful အဖြစ်ဆုံးတွေထဲကတစ်ခုကတော့ ဒီနေ့ date ကိုအခြေခံပြီး queries တွေကို run ခြင်းဖြစ်ပါတယ်။ ဥပမာ sales totals တွေကို လက်ရှိ လအစကနေ ဒီနေ့အထိ (သို့) ဒီနေ့က sign up လုပ်တဲ့ users အားလုံးကို လိုချင်တဲ့အခါမျိုးတွေမှာ ကျွန်တော်တို့က query တစ်ခုကို create လုပ်တိုင်း current date မှာ manually မရိုက်ချင်ဘူးဆိုရင် today ရဲ့ date ကို SQL function တစ်ခုကိုသုံးပြီးရေးနိုင်ပါတယ်။ အဲ့ဒီ function ကတော့ DATE() ပဲဖြစ်ပါတယ်။ DATE() function ကနေ ဒီနေ့ date ကိုရဖို့ဆိုရင် သူ့ထဲမှာ now ဆိုတဲ့ string ကို pass လုပ်ပေးရပါမယ်။ တစ်ကယ်လို့ သင်ဟာ developer or analyst creating dashboard တစ်ယောက်ဆိုရင် DATE() function ကိုအသုံးပြုခြင်းဟာ တစ်ကယ်ကိုအသုံးဝင်မှာ ဖြစ်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            How to Write? => SELECT * FROM &lt;column&gt; WHERE &lt;column&gt; = DATE(expr);

            SELECT * FROM orders WHERE status = "placed" AND loned_on = DATE("now");
        </code>
    </pre>
    <div class="img-size">
        <img src="images/rpsql16.png" alt="SQL Screenshot Image">
    </div>
    <hr>


    <h2>Calculating Dates</h2>
    <p>ကျွန်တော်တို့က e-commerce site တစ်ခုရဲ့ executives တွေအတွက် dashboard တစ်ခု create လုပ်ရတော့မယ်ဆိုပါစို့။ သူ့တို့အနေနဲ့ last 7 days နဲ့ နောက်ဆုံး ရက် 30 အတွင်က sale လုပ်ရတဲ့အရေအတွက်ကို ကြည့်ချင်တဲ့အခါ ဘယ်လိုကြည့်ကြမလဲ။ ကျွန်တော်တို့အနေနဲ့ DATE() ဆိုတဲ့ function ကိုအသုံးပြုခဲ့ဖူးပါတယ်။ သူ့ထဲမှာဆိုရင် now string တစ်ခုရှိပြီး အဲ့ဒါကို time string လို့ခေါ်ပါတယ်။ DATE() function ဟာ modifier လို့ခေါ်တဲ့ နောက်ထပ် argument တစ်ခုကိုလည်း လက်ခံပေးနိုင်ပါတယ်။ Modifier တစ်ခုဟာဆိုရင် first argument ထဲက passed လုပ်ထားတဲ့ time string value ကို modifies or changes လုပ်ပေးပါတယ်။ တစ်ကယ်တော့ ကျွန်တော်တို့အနေနဲ့ modifier အများကြီးကို အတူတကွ chain လုပ်နိုင်ပါတယ်။ ကျွန်တော်တို့ရဲ့ DATE() ထဲမှာ specific date ကိုလည်း သတ်မှတ်ပေးနိုင်ပါတယ်။ ဒါပေမယ့် parenthesis ထဲမှာရေးလိုက်တဲ့ date က format မကျရင်တော့ recognized လုပ်ပေးမှာ မဟုတ်ပါဘူး။ တစ်ကယ်လို့ ကျွန်တော်တို့က လွန်ခဲ့တဲ့ one week or 7 days က date ကိုပြန်လိုချင်တယ်ဆိုရင်တော့ modifier argument ရဲ့နေရာမှာ -7 days ကိုနှုတ်ပေးရမှာ ဖြစ်ပါတယ်။ DATE() function ရဲ့ ဒုတိယ parameter မှာ ကြိုက်တဲ့ addition & subtraction ကို လုပ်နိုင်ပါတယ်။ Year ကို နှုတ်ချင်ရင်လည်း ကျွန်တော်တို့က (-) နဲ့နောက်က နှုတ်ချင်တဲ့ number ကိုထည့်ပေးရမှာဖြစ်ပါတယ်။ </p>
    <hr>


    <h2>Formating Dates for Reporting</h2>
    <p>ကျွန်တော်တို့ဟာ queries တွေတဲ့နေရာမှာ အထောက်အကူဖြစ်တဲ့ dates တွေကို calculate လုပ်ခဲ့ပါတယ်။ ဒါပေမယ့် presentation results တွေကျတော့ ဘယ်လိုလုပ်မလဲ?။ Dates နဲ့ times တွေရဲ့ output ကို ဘယ်လို manipulate လုပ်ရမလဲဆိုတာကို နားလည်ဖို့အတွက် database တစ်ခုအတွင်းမှာရှိနိုင်တဲ့ အမျိုးမျိုးသော date types တွေအကြောင်းကို လေ့လာကြည့်ရအောင်။ အဲ့ဒီမှာဆိုရင် date datatypes သုံးမျိုးရှိပါတယ်။ ကျွန်တော်တို့မှတ်သားထားရမှာက column တစ်ခုအတွင်းထဲက data ကို ဘယ်လို store လုပ်သင့်လဲဆိုတာကို ရည်ညွှန်းပေးပါတယ်။ ပထမနှစ်ခုကတော့ date & times ပဲဖြစ်ပါတယ်။ Date တွေအတွက်ဆိုရင် Eg.(2015-04-01) ဆိုပြီး store လုပ်တာဖြစ်ပြီး၊ time တွေကတော့ 23:12:01 ဆိုပြီး store လုပ်သွားတာဖြစ်ပါတယ်။ Datetime ကတော့ date နဲ့ time ကို combine လုပ်ပြီး single column မှာ store လုပ်တာဖြစ်ပါတယ်။ ဒါပေမယ့် အဲ့ဒီလို combine လုပ်ပြီးရေးတာဟာ read လုပ်ရတာ ခက်ခဲပါတယ်။ အဲ့ဒီ problem ကိုဖြေရှင်းဖို့ programming language အများစုမှာ dates ရဲ့ types ကိုပြောင်းလဲဖို့ functions တွေကို provide လုပ်ပေးထားပါတယ်။ STRFTIME or String Format Time ဟာ သူ့ထဲမှာ &lt;format string&gt; ဖြစ်တဲ့ first argument အသစ်တစ်ခုပါတာကလွဲလို့ date & time နဲ့ဆင်တူပါတယ်။ STRFTIME() function မှာ ပထမဆုံးဖြစ်တဲ့ format string ကတော့ %d/%m/%Y ဖြစ်ပြီး day, month, year ဆိုတဲ့ format ဖြစ်ပါတယ်။ အဲ့ဒီနောက်မှာတော့ 01-04-2016 ဆိုပြီး date ကို British format နဲ့ ရေးတာဖြစ်ပါတယ်။ နောက်တစ်ခုကတော့ modifiers တွေနဲ့လည်း date ကိုတွဲသုံးလို့ရပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            How to Write? => SELECT *, STRFTIME(&lt;format string&gt;, &lt;time string&gt;, &lt;modifier&gt;) FROM &lt;table&gt;
                             SELECT *, STRFTIME("%d/%m/%Y", "2015-04-01 23:12:01", "+1 year") FROM &lt;table&gt;;
        </code>
    </pre>
    <hr>


    <h2>Practice Session (3)</h2>
    <p>ကျွန်တော်တို့ဟာ ယခုလက်ရှိဒီနေ့ date ကို ရဖို့အတွက် DATE() ဆိုတဲ့ function ထဲမှာ now ဆိုတဲ့ time string ထည့်ပြီး အသုံးပြုခဲ့ပါတယ်။ DATE() function ကို time string တစ်ခုရဲ့ time portion တစ်ခုကို trim လုပ်ဖို့အတွက် အသုံးပြုခဲ့တာဖြစ်ပါတယ်။ နောက်ပြီးတော့ သူ့ကို modifier တစ်ခုနဲ့လည်း dates တွေကို calculate လုပ်ဖို့ အသုံးပြုခဲ့ပါတယ်။ TIME() function ကိုလည်း အဲ့ဒီလိုပဲ ပြုလုပ်လို့ရပါတယ်။ TIME() function ထဲမှာ time string ဖြစ်တဲ့ now ကိုထည့်သုံးမယ်ဆိုရင် လက်ရှိအချိန်ကို ဖော်ပြပေးမှာ ဖြစ်ပါတယ်။ TIME() function ကို time string ကနေ date ကို removed လုပ်ဖို့အတွက်လည်း အသုံးပြုနိုင်ပါတယ်။ </p>


</body>
</html>