<?php 
$page_title = "البريد الإلكتروني";
$page_desc = "ابدأ لخدمات الويب تعطيك استضافة سريعة آمنة مضمونة ومع دومين وشهادة أمان مجاناً";
$page_keys = "استضافة, استضافة مواقع, انشاء موقع, تصميم موقع";
$hero_text = "البريد الإلكتروني الإحترافي";
$hero_desc = "حل استضافة البريد الإلكتروني المبسط لعملك";
$btn_text = "ابدأ الآن";
$li_txt1 = "بريد إلكتروني أنيق ونظيف خالِ من الإعلانات";
$li_txt2 = "الوصول من تطبيق الجوال أو سطح المكتب";
$li_txt3 = "دعم فني على مدار 24 ساعة طوال الأسبوع";
$btn_lnk = "#plans";
$catg = "mail";

include 'inc/header.php';

$plans_titles = [
  "EH-1",
  "EH-2"
];
$plans_pricing_titles = [
  "SAR 8",
  "SAR 13"
];
$pids = [
  115,
  116
];
$plan_list1 = [
  "حجم صناديق البريد: 10 GB",
  "مكافحة الفيروسات ومكافحة البريد العشوائي المتميز",
  "معرف بريد إلكتروني مثل info@yourdomain.com",
  "بريد إلكتروني انيق",
  "مزامنة مع الجوال",
  "الرد التلقائي للرسائل الواردة",
  "التقويمات المشتركة وجهات الاتصال والمهام",
  "الوصول عبر الجوال وسطح المكتب (IMAP)",
  "دعم فني دائم"
];
$plan_list2 = [
  "حجم صناديق البريد: 25 GB",
  "مكافحة الفيروسات ومكافحة البريد العشوائي المتميز",
  "معرف بريد إلكتروني مثل info@yourdomain.com",
  "بريد إلكتروني انيق",
  "مزامنة مع الجوال",
  "الرد التلقائي للرسائل الواردة",
  "التقويمات المشتركة وجهات الاتصال والمهام",
  "الوصول عبر الجوال وسطح المكتب (IMAP)",
  "تخزين الملفات السحابية: 25 GB",
  "مجموعة Office عبر الإنترنت",
  "إنشاء / تحرير مستندات Word",
  "إنشاء / تحرير جداول البيانات",
  "إنشاء / تحرير PowerPoint",
  "دعم فني دائم",
];
$plan_lists = [
  $plan_list1,
  $plan_list2
];

$plans_include_headers = [
  "مسمى خاص بك",
  "التقاويم",
  "تخزين الملفات السحابية",
  "الخصوصية",
  "المجيب التلقائي",
  "الحماية من الفيروسات",
];
$plans_include_contents = [
  "بريد إلكتروني مخصص لمطابقة النطاق الخاص بك",
  "تواصل مثل مؤسسة من خلال التقويم المشترك ومعالج الجدولة ودعم iCal وقائمة العناوين العمومية!",
  "قم بتخزين ومشاركة مستنداتك المهمة بأمان في السحابة. ومع (حتى) 50 جيجا بايت ، سيكون لديك مساحة كبيرة لسنوات قادمة.",
  "لن  يقوم App Suite ، ولا نحن ، بقراءة أي من معلوماتك الشخصية أو معلومات البريد الإلكتروني أو مسحها ضوئيًا أو مشاركتها مع أي جهات خارجية. أبدا.",
  "تتوفر جميع ميزات البريد الإلكتروني المفضلة لديك هنا بما في ذلك معيدي التوجيه والاستجابة التلقائية والفلاتر والتوقيعات والإشعارات والمزيد!",
  "باستخدام الذكاء الاصطناعي وبرامج الدفاع عن البريد الإلكتروني التنبؤية ، تحارب OX App Suite للحفاظ على صندوق الوارد الخاص بك آمنًا من البريد العشوائي والفيروسات والبرامج الضارة وهجمات التصيد الاحتيالي.",
];
?>
<section class="plans" id="plans">
  <div class="container">
    <h2 class="text-center">توقع المزيد من البريد الإلكتروني</h2>
     <div class="card-deck text-center mt-md-4">
        <?php 
        for($i=0;$i<2;$i++){
          echo '<div class="card box-shadow">
                <div class="card-header">
                  <h4 class="my-0 font-weight-normal">'.$plans_titles[$i].'</h4>
                </div>
                <div class="card-body">
                  <p class="above-price small">'.$_Lang['lowprice'].'</p>
                  <p class="card-title pricing-card-title">'.$plans_pricing_titles[$i].'<small>.99 لكل مستخدم/شهر</small></p>
                  <a href="/client/cart.php?a=add&pid='.$pids[$i].'" class="btn btn-lg btn-block btn-primary btn-plan">شراء الآن</a>
                  <ul class="list-unstyled mt-3 mb-4 text-right">';
          foreach($plan_lists[$i] as $plan) { echo '<li>'. $plan .'</li>'; }
          echo    '</ul>
                </div>
              </div>';
        }
        ?>
      </div>
	  </div>
	  </section>
	  <!-- all plans include -->
    <section class="plans-include"> 
      <div class="container"> 
        <h2 class="text-center">جميع الخطط تشمل</h2> 
        <div class="row"> 
          <?php 
          for($i=0;$i < 6;$i++)
            echo '<div class="col-md-4 feature"> 
                    <i class="fa fa-check icon"></i> 
                    <h4>'.$plans_include_headers[$i].'</h4> 
                    <p>'.$plans_include_contents[$i].'</p>
                  </div>';
          ?>
        </div>
      </div>
    </section>
	  <!-- end all plans include -->
	  <section> 
      <div class="container"> 
        <h2 class="text-center"><?php echo $_Lang['faq']; ?></h2> 
        <div class="row"> 
          <div class="col-sm-12 mx-auto"> 
            <div id="accordionExample" class="accordion box-shadow"> 
              <div class="card"> 
                <div id="headingOne" class="card-header shadow-sm border-0"> 
                  <h6 class="mb-0 font-weight-bold">
                    <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="d-block position-relative collapsible-link py-2">ما التطبيقات المضمنة في OX App Suite؟</a>
                  </h6> 
                </div>
                <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse show"> 
                  <div class="card-body"> 
                    <p>تتضمن جميع خطط OX App Suite الوصول إلى بريد الويب والتقويم والمهام ودفتر العناوين. تضيف حزمة الإنتاجية مستندات OX Drive و OX (النصوص وجداول البيانات والعروض التقديمية).</p>
                  </div>
                </div>
              </div>
              <div class="card"> 
                <div id="headingTwo" class="card-header shadow-sm border-0"> 
                  <h6 class="mb-0 font-weight-bold">
                    <a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="d-block position-relative collapsed collapsible-link py-2">هل تحمي OX App Suite من البريد العشوائي والفيروسات؟</a>
                  </h6> 
                </div>
                <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample" class="collapse"> 
                  <div class="card-body"> 
                    <p>نعم! يستخدم OX App Suite تقنية خاصة بالإضافة إلى شراكات مع بائعين معروفين في صناعة مكافحة البريد العشوائي للحفاظ على صندوق الوارد الخاص بك نظيفًا وآمنًا قدر الإمكان.</p>
                  </div>
                </div>
              </div>
              <div class="card"> 
                <div id="headingThree" class="card-header shadow-sm border-0"> 
                  <h6 class="mb-0 font-weight-bold">
                    <a href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="d-block position-relative collapsed collapsible-link py-2">هل يمكنني إضافة حسابات بريد إلكتروني خارجية إلى OX App Suite؟</a>
                  </h6> 
                </div>
                <div id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionExample" class="collapse"> 
                  <div class="card-body"> 
                    <p>نعم ، يدعم OX App Suite ربط جميع حسابات البريد الإلكتروني IMAP الخارجية بما في ذلك المزودين المشهورين مثل Gmail و Yahoo و Outlook.com. ما عليك سوى إضافة عنوان بريدك الإلكتروني وكلمة المرور إلى App Suite وسيظهر أي بريد إلكتروني يتم إرساله إلى هذه الحسابات في واجهة App Suite.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	  
<?php
  include 'inc/footer.php';
?>
