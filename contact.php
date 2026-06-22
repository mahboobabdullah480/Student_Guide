<?php include('includes/header.php'); ?>

<main class="container">

    <!-- Hero -->
    <section class="jumbotron text-center fade-up">

        <h1 class="display-4">
            📬 تواصل معنا
        </h1>

        <p class="lead">
            لديك استفسار أو اقتراح أو ملاحظة؟
            يسعدنا التواصل معك.
        </p>

    </section>

    <section class="grid grid-2 mt-6">

        <!-- Contact Form -->
        <div class="card">

            <h2>✉️ أرسل رسالة</h2>

            <form id="contact-form"
                  action="https://api.web3forms.com/submit"
                  method="POST">

                <input type="hidden"
                       name="access_key"
                       value="ضع_مفتاحك_هنا">

                <input type="checkbox"
                       name="botcheck"
                       style="display:none;">

                <label>الاسم الكامل</label>
                <input type="text"
                       name="name"
                       required>

                <label>البريد الإلكتروني</label>
                <input type="email"
                       name="email"
                       required>

                <label>الموضوع</label>
                <input type="text"
                       name="subject"
                       required>

                <label>الرسالة</label>
                <textarea name="message"
                          rows="6"
                          required></textarea>

                <button type="submit"
                        class="btn btn-primary"
                        style="margin-top:15px;">
                    📨 إرسال الرسالة
                </button>

            </form>

            <div id="form-status"></div>

        </div>

        <!-- Contact Info -->
        <div class="card">

            <h2>📞 معلومات التواصل</h2>

            <p>
                يمكنك التواصل معنا عبر:
            </p>

            <ul class="list">

                <li>
                    📧 البريد الإلكتروني:
                    mahboobabdullah480@gmail.com
                </li>

                <li>
                    <!-- تم تصحيح الرابط وإضافة رقمك 967737360171 بالصيغة الصحيحة تماماً -->
                    <a href="whatsapp://send?phone=967737360171" class="whatsapp-btn">
                        <i class="fab fa-whatsapp"></i>
                        تواصل معنا عبر واتساب (737360171)
                    </a>
                </li>

                <li>
                    💼 LinkedIn
                </li>

                <li>
                    💻 GitHub
                </li>

            </ul>

        </div>

    </section>

    <!-- Developer -->
    <section class="mt-6">

        <div class="card text-center">

            <h2>
                👨‍💻 مطور الموقع
            </h2>

            <p>
                المهندس محبوب عبدالله هزاع
            </p>

            <p>
                خريج تقنية المعلومات ومهتم
               بتطوير الويب والأمن السيبراني.<br> 
                تابع حسابي التقني في مواقع التواصل الاجتماعي على هذا الحساب:<span style="color: #00a6ff;"> mahboab_tech388@</span>
            </p>

        </div>

    </section>

</main>

<?php include('includes/footer.php'); ?>

<script>

const form =
document.getElementById("contact-form");

const status =
document.getElementById("form-status");

form.addEventListener("submit",async(e)=>{

    e.preventDefault();

    let data =
    new FormData(form);

    let response =
    await fetch(
        form.action,
        {
            method:"POST",
            body:data
        }
    );

    if(response.ok){

        status.innerHTML =
        "<p style='margin-top:15px;color:green;'>✅ تم إرسال الرسالة بنجاح</p>";

        form.reset();

    }else{

        status.innerHTML =
        "<p style='margin-top:15px;color:red;'>❌ فشل الإرسال</p>";
    }

});

</script>
