<?php 
$page_title = "استضافة مواقع, نطاقات, بريد إلكتروني وأمن الموقع | ابدأ";
$page_desc = "ابدأ لخدمات الويب تعطيك استضافة سريعة آمنة مضمونة ومع دومين وشهادة أمان مجاناً";
$page_keys = "استضافة, استضافة مواقع, انشاء موقع, تصميم موقع";
$hero_text = "أقوى استضافة مواقع";
$hero_desc = "استضافة مواقع سريعة وآمنة مع خصم 50%";
$btn_text = "ابدأ الآن";
$li_txt1 = "سرعة عالية جداً بتقنية لايت سبيد";
$li_txt2 = "انشيء موقعك بسهولة مع منشيء المواقع المجاني بالاضافة الى تثبيت وورد بريس بضغطة";
$li_txt3 = "ضمان استعادة الأموال 30 يوماً";
$btn_lnk = "#plans";
$catg = "home";

include 'inc/header.php';
?>
<!-- Plans -->
<section class="plans" id="plans"> 
	<div class="container"> 
		<h2 class="text-center">اختر خطة استضافة المواقع المناسبة</h2>
		<p class="text-center">استضافة المواقع لدينا تعطيك حماية وشهادة SSL مجاناً</p> 
		<div class="card-deck text-center mt-md-4"> 
			<div class="card box-shadow"> 
				<div class="card-header"> 
					<h4 class="my-0 font-weight-normal">SH-1</h4> 
				</div>
				<div class="card-body"> 
					<p class="card-title pricing-card-title">SAR 16<small>.50</small></p>
					<a href="/client/cart.php?a=add&pid=1&promocode=FIRSTMONTH" class="btn btn-lg btn-block btn-primary btn-plan">شراء الآن</a> 
					<ul class="list-unstyled mt-3 mb-4 text-right"> 
						<?php foreach($shared1 as $plan) { echo '<li>'. $plan .'</li>'; }?>
					</ul> 
				</div>
			</div>
			<div class="card box-shadow"> 
				<div class="card-header"> 
					<h4 class="my-0 font-weight-normal">SH-2</h4> 
				</div>
				<div class="card-body"> 
					<p class="card-title pricing-card-title">SAR 21<small>.50</small></p>
					<a href="/client/cart.php?a=add&pid=2&promocode=FIRSTMONTH" class="btn btn-lg btn-block btn-primary btn-plan">شراء الآن</a> 
					<ul class="list-unstyled mt-3 mb-4 text-right">
						<?php foreach($shared2 as $plan) { echo '<li>'. $plan .'</li>'; }?>
					</ul> 
				</div>
			</div>
			<div class="card box-shadow"> 
				<div class="card-header"> 
					<h4 class="my-0 font-weight-normal">SH-3</h4> 
				</div>
				<div class="card-body"> 
					<p class="card-title pricing-card-title">SAR 24<small>.50</small></p>
					<a href="/client/cart.php?a=add&pid=3&promocode=FIRSTMONTH" class="btn btn-lg btn-block btn-primary btn-plan">شراء الآن</a> 
					<ul class="list-unstyled mt-3 mb-4 text-right"> 
						<?php foreach($shared3 as $plan) { echo '<li>'. $plan .'</li>'; }?>
					</ul> 
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End PLans -->

<!-- plans include -->
<section class="plans-include"> 
	<div class="container"> 
		<h2 class="text-center">جميع الخطط تشمل</h2> 
		<div class="row"> 
			<div class="col-md-4 feature"> 
				<i class="fa fa-check icon"></i> 
				<h4>لوحة تحكم cPanel</h4> 
				<p>لوحة تحكم cPanel الشهيرة بأكثر من 26 لغة</p>
			</div>
			<div class="col-md-4 feature"> 
				<i class="fa fa-check icon"></i> 
				<h4>الأمان والموثوقية</h4> 
				<p>ضمان وقت التشغيل بنسبة 99.9% يتميز أيضا بالنسخ الاحتياطية اليومية مع نقاط استعادة متعددة</p>
			</div>
			<div class="col-md-4 feature"> 
				<i class="fa fa-check icon"></i> 
				<h4>ضمان استعادة الأموال 30 يوماً</h4> 
				<p>جميع الخطط لدينا تشمل ضمان استعادة الأموال لمدة 30 يوماً بدون اسألة أو تعقيدات</p>
			</div>
			<div class="col-md-4 feature"> 
				<i class="fa fa-check icon"></i> 
				<h4>منشيء المواقع</h4> 
				<p>قم بإنشاء موقع ويب مثالي باستخدام أدوات السحب والإفلات القوية</p>
			</div>
			<div class="col-md-4 feature"> 
				<i class="fa fa-check icon"></i> 
				<h4>تثبيت التطبيقات بضغطة</h4> 
				<p>من خلال لوحة التحكم الخاصة بنا يمكنك تثبيت أشهر التطبيقات مجاناً بضعطة </p>
			</div>
			<div class="col-md-4 feature"> 
				<i class="fa fa-check icon"></i> 
				<h4>الوصول إلى الويب ميل</h4> 
				<p>من خلال لوحة التحكم الخاصة بنا يمكنك الوصول إلى الويب ميل بسهولة وإدارة الإيميل الخاص بك</p>
			</div>
		</div>
	</div>
</section>
<!-- end plans include -->

<section> 
	<div class="container"> 
		<h2 class="text-center"><?php echo $_Lang['faq']; ?></h2> 
		<div class="row"> 
			<div class="col-sm-12 mx-auto"> 
				<div id="accordionExample" class="accordion box-shadow"> 
					<div class="card"> 
						<div id="headingOne" class="card-header shadow-sm border-0"> 
							<h6 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="d-block position-relative collapsible-link py-2">ماهي الاستضافة؟</a></h6> 
						</div>
						<div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse show"> 
							<div class="card-body"> 
								<p>استضافة الويب هي خدمة تتيح للمؤسسات والأفراد نشر موقع ويب أو صفحة ويب على الإنترنت. </p>
							</div>
						</div>
					</div>
					<div class="card"> 
						<div id="headingTwo" class="card-header shadow-sm border-0"> 
							<h6 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="d-block position-relative collapsed collapsible-link py-2">كيف تعمل الاستضافة؟</a></h6> 
						</div>
						<div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample" class="collapse"> 
							<div class="card-body"> 
								<p>موقعك الإلكتروني هو عبارة عن ملفات ومجلدات وفي اغلب الأحوال قاعدة بيانات تقدم لزوارك بينما يتصفحونه. نحن نقوم بتقديم مساحة لك لتخزين ملفات موقعك وقواعد البيانات</p>
							</div>
						</div>
					</div>
					<div class="card"> 
						<div id="headingThree" class="card-header shadow-sm border-0"> 
							<h6 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="d-block position-relative collapsed collapsible-link py-2">هل احتاج إلى معرفة تقنية للحصول على استضافة؟</a></h6> 
						</div>
						<div id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionExample" class="collapse"> 
							<div class="card-body"> 
								<p>بالطبع لا, نوفر لك لوحة تحكم صورية لرفع ملفات موقعك وادارة قواعد البيانات وانشاء موقعك ايضا</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="plans-include text-center">
	<div class="container">
		<h2>سهلة آمنة ومضمونة</h2>
		<p>مع ضمان استعادة الأموال لمدة 30 يوما</p>
		<a href="<?php echo $btn_lnk; ?>" class="btn btn-primary btn-cta btn-cta-sm">ابدأ الآن</a>
	</div>
</section>
	  
<?php
  include 'inc/footer.php';
?>
