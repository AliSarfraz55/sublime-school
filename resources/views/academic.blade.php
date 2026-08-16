<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sublime School System - Academic</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <style>
:root{
    --primary:#2563eb;
    --secondary:#0f172a;
    --accent:#f59e0b;
    --bg:#f8fafc;
    --white:#ffffff;
    --text:#334155;
}

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
    -webkit-tap-highlight-color: transparent;
}

body{
    background:var(--bg);
    color:var(--text);
    overflow-x:hidden;
}

.container{
    width:90%;
    max-width:1200px;
    margin:auto;
}

section{
    padding:100px 0;
}

/* =========================
SECTION TITLE
========================= */

.section-title{
    font-size:42px;
    font-weight:800;
    color:#0f172a;
    text-align:center;
    display:block;
    margin-bottom:60px;
    position:relative;
}

.section-title::after{
    content:"";
    width:80px;
    height:4px;
    background:linear-gradient(
        90deg,
        var(--primary),
        var(--accent)
    );
    display:block;
    margin:15px auto 0;
    border-radius:20px;
}

/* =========================
BUTTON
========================= */

.btn{
    display:inline-block;
    padding:16px 40px;
    border-radius:60px;
    text-decoration:none;
    font-weight:700;

    background:#fff;
    color:#2563eb;

    transition:.35s ease;

    box-shadow:
    0 15px 35px rgba(0,0,0,.2);
}

.btn:hover{
    transform:translateY(-6px);
}

/* =========================
ACADEMICS HERO
========================= */

.academics-hero{
    min-height:60vh;
    display:flex;
    align-items:center;
    justify-content:center;
    text-align:center;
    color:#fff;
    position:relative;
    overflow:hidden;

    background:
    radial-gradient(circle at top right,
    rgba(255,255,255,.12),
    transparent 30%),
    linear-gradient(
    135deg,
    #0f172a,
    #1e3a8a,
    #2563eb);
}

.academics-hero::before{
    content:"";
    position:absolute;
    width:500px;
    height:500px;
    border-radius:50%;
    background:rgba(255,255,255,.05);
    top:-220px;
    right:-150px;
}

.academics-hero::after{
    content:"";
    position:absolute;
    width:350px;
    height:350px;
    border-radius:50%;
    background:rgba(255,255,255,.04);
    bottom:-150px;
    left:-100px;
}

.academics-hero h1{
    font-size:70px;
    font-weight:900;
    margin-bottom:20px;
}

.academics-hero p{
    font-size:20px;
    opacity:.9;
}
/* ===================================
   ACADEMIC PROGRAMS
=================================== */

.programs{
    padding:100px 0;
    background:#ffffff;
}

.program-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:30px;
}

.program-card{
    background:#fff;
    padding:45px 30px;
    text-align:center;
    border-radius:25px;
    border-top:5px solid #2563eb;

    box-shadow:
    0 12px 35px rgba(0,0,0,.08);

    transition:.4s ease;
    cursor: pointer;
}

.program-card:hover{
    transform:translateY(-12px);
    box-shadow:
    0 22px 50px rgba(0,0,0,.15);
}

.program-card i{
    font-size:55px;
    color:#2563eb;
    margin-bottom:20px;
    transition:.3s ease;
}

.program-card:hover i{
    color:#f59e0b;
}

.program-card h3{
    font-size:24px;
    color:#0f172a;
    margin-bottom:15px;
    font-weight:700;
}

.program-card p{
    color:#64748b;
    line-height:1.9;
    font-size:15px;
}
/* ===================================
   CURRICULUM SECTION
=================================== */

.curriculum{
    padding:100px 0;
    background:#f8fafc;
}

.curriculum-content{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:70px;
    align-items:center;
}

.curriculum-image{
    overflow:hidden;
    border-radius:30px;
}

.curriculum-image img{
    width:100%;
    display:block;
    border-radius:30px;

    box-shadow:
    0 25px 60px rgba(0,0,0,.12);

    transition:.5s ease;
}

.curriculum-image:hover img{
    transform:scale(1.05);
}

.curriculum-text .section-title{
    text-align:left;
    margin-bottom:25px;
}

.curriculum-text .section-title::after{
    margin:15px 0 0;
}

.curriculum-text p{
    font-size:18px;
    line-height:2;
    color:#475569;
}

.curriculum-text ul{
    margin-top:25px;
    list-style:none;
}

.curriculum-text ul li{
    margin-bottom:15px;
    font-size:16px;
    color:#334155;
    position:relative;
    padding-left:28px;
}

.curriculum-text ul li::before{
    content:"✓";
    position:absolute;
    left:0;
    color:#2563eb;
    font-weight:bold;
}
/* ===================================
   SUBJECTS SECTION
=================================== */

.subjects{
    padding:100px 0;
    background:#ffffff;
}

.subject-grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:25px;
}

.subject-card{
    background:#fff;
    padding:35px 20px;
    border-radius:20px;
    text-align:center;
    border-top:4px solid #2563eb;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
    transition:.35s ease;
    font-weight:700;
    color:#0f172a;
    cursor: pointer;
}

.subject-card:hover{
    transform:translateY(-10px);
    box-shadow:0 20px 40px rgba(0,0,0,.14);
}

.subject-card i{
    font-size:40px;
    color:#2563eb;
    margin-bottom:15px;
    display:block;
}

.subject-card:hover i{
    color:#f59e0b;
}

/* ===================================
   EXAMINATION SYSTEM
=================================== */

.exams{
    padding:100px 0;
    background:#f8fafc;
}

.exam-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:25px;
}

.exam-card{
    background:#fff;
    padding:40px 30px;
    border-radius:25px;
    text-align:center;
    border-top:5px solid #2563eb;
    box-shadow:0 12px 35px rgba(0,0,0,.08);
    transition:.35s ease;
    cursor: pointer;
}

.exam-card:hover{
    transform:translateY(-10px);
    box-shadow:0 20px 45px rgba(0,0,0,.14);
}

.exam-card i{
    font-size:50px;
    color:#2563eb;
    margin-bottom:20px;
}

.exam-card:hover i{
    color:#f59e0b;
}

.exam-card h3{
    font-size:24px;
    color:#0f172a;
    margin-bottom:15px;
}

.exam-card p{
    color:#64748b;
    line-height:1.8;
    font-size:15px;
}
/* ===================================
   ACADEMIC ACHIEVEMENTS
=================================== */

.achievements{
    padding:100px 0;
    background:#ffffff;
}

.highlight-grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:25px;
}

.highlight{
    background:#fff;
    padding:35px 25px;
    text-align:center;
    border-radius:20px;

    border-top:4px solid #2563eb;

    box-shadow:
    0 10px 30px rgba(0,0,0,.08);

    transition:.35s ease;
    cursor: pointer;
}

.highlight:hover{
    transform:translateY(-10px);

    box-shadow:
    0 20px 45px rgba(0,0,0,.15);
}

.highlight h2{
    font-size:42px;
    color:#2563eb;
    margin-bottom:10px;
    font-weight:800;
}

.highlight p{
    color:#64748b;
    font-size:16px;
    font-weight:600;
}

/* ===================================
   CTA SECTION
=================================== */

.cta{
    padding:120px 0;
    text-align:center;
    color:#fff;

    background:
    linear-gradient(
    135deg,
    #2563eb,
    #1d4ed8);

    position:relative;
    overflow:hidden;
}

.cta::before{
    content:"";
    position:absolute;
    width:400px;
    height:400px;
    border-radius:50%;
    background:rgba(255,255,255,.06);
    top:-180px;
    right:-150px;
}

.cta::after{
    content:"";
    position:absolute;
    width:300px;
    height:300px;
    border-radius:50%;
    background:rgba(255,255,255,.05);
    bottom:-120px;
    left:-120px;
}

.cta h2{
    font-size:52px;
    font-weight:800;
}

.cta p{
    font-size:18px;
    margin:20px auto 35px;
}
.cta .btn{
    display:inline-block;
    padding:16px 40px;
    border-radius:50px;
    text-decoration:none;
    background: #567afb;
    color: #fff;
    font-weight:700;
    font-size:16px;
    transition:.3s ease;
    box-shadow:0 10px 30px rgba(0,0,0,.15);
}

.cta .btn:hover{
    transform:translateY(-5px);
    background:#f59e0b;
    color:#fff;
}

/* ===================================
   COMPLETE RESPONSIVE CSS
=================================== */

@media(max-width:992px){

    .overview-content,
    .curriculum-content{
        grid-template-columns:1fr;
        gap:40px;
    }

    .program-grid,
    .exam-grid{
        grid-template-columns:repeat(2,1fr);
    }

    .subject-grid,
    .highlight-grid{
        grid-template-columns:repeat(2,1fr);
    }

    .overview-text .section-title,
    .curriculum-text .section-title{
        text-align:center;
    }

    .overview-text .section-title::after,
    .curriculum-text .section-title::after{
        margin:15px auto 0;
    }
}

@media(max-width:768px){

    .program-grid,
    .subject-grid,
    .exam-grid,
    .highlight-grid{
        grid-template-columns:repeat(2,1fr);
        gap:15px;
    }
}
@media(max-width:480px){

    .program-grid,
    .subject-grid,
    .exam-grid,
    .highlight-grid{
        grid-template-columns:repeat(2,1fr);
        gap:12px;
    }

    .academics-hero h1{
        font-size:34px;
    }

    .section-title{
        font-size:28px;
    }

    .cta h2{
        font-size:28px;
    }
}

/* ================= CUSTOM UNIVERSAL MODAL POPUP ================= */
.custom-modal {
    display: none;
    position: fixed;
    z-index: 99999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.85);
    backdrop-filter: blur(8px);
    justify-content: center;
    align-items: center;
    padding: 20px;
}

.custom-modal-content {
    background: #fff;
    width: 100%;
    max-width: 650px;
    max-height: 85vh;
    overflow-y: auto;
    padding: 40px;
    border-radius: 24px;
    position: relative;
    box-shadow: 0 25px 60px rgba(0,0,0,0.3);
    animation: modalZoom 0.3s ease;
    text-align: left;
}

.custom-modal-close {
    position: absolute;
    top: 20px;
    right: 25px;
    font-size: 32px;
    color: #0f172a;
    cursor: pointer;
    transition: 0.3s;
}

.custom-modal-close:hover {
    color: #2563eb;
}

#modalIcon {
    font-size: 45px;
    color: #2563eb;
    margin-bottom: 15px;
    display: block;
    text-align: center;
}

#modalTitle {
    font-size: 28px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 20px;
    text-align: center;
}

#modalDesc {
    font-size: 16px;
    line-height: 1.9;
    color: #475569;
}

@keyframes modalZoom {
    from {
        transform: scale(0.7);
        opacity: 0;
    }
    to {
        transform: scale(1);
        opacity: 1;
    }
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    -webkit-tap-highlight-color: transparent; /* Yeh blue flash ko khatam kar dega */
}
</style>
<body>
    @include('includes.aos')
    @include('includes.navbar')
@include('includes.whatsapp')    

    <!-- HERO -->
<section class="academics-hero">
    <div class="container">
        <h1>Academics</h1>
        <p>Empowering Students Through Quality Education</p>
    </div>
</section>

<!-- ACADEMIC OVERVIEW -->
<section class="academic-overview">
    <div class="container overview-content">

        <div class="overview-image">
            <img src="images/academics.jpg" alt="">
        </div>

        <div class="overview-text">
            <h2 class="section-title">Academic Excellence</h2>

            <p style="font-weight: bold; font-style: italic;">
                "At Sublime School System, we provide a comprehensive curriculum designed to develop critical thinking, creativity and leadership skills. Our academic programs prepare students for future success."
            </p>
        </div>

    </div>
</section>

<!-- PROGRAMS -->
<section class="programs">

    <div class="container">

        <h2 class="section-title">Academic Programs</h2>

        <div class="program-grid">

            <div class="program-card" onclick="openModal('Pre School Program Details', 'Our Pre School program at Sublime School System is meticulously designed to offer advanced activity-based learning and early childhood development in a highly playful, secure, extraordinarily warm, and deeply nurturing atmosphere.\n\nWe focus extensively on sensory motor skills, foundational social interaction, cognitive capacity building, early phonics mastery, and imaginative creative expression.\n\nOur expert early-years educators ensure that every young child develops boundless self-confidence, emotional stability, excellent behavioral habits, and a joyful lifetime passion for continuous learning.\n\nThrough colorful learning aids, storytelling, rhymes, and interactive play sessions, children absorb vital foundational concepts effortlessly without any academic pressure.\n\nSpecial emphasis is laid on fine motor skills development through drawing, clay modeling, block building, and basic puzzle-solving activities.\n\nUltimately, this program establishes an indestructible academic and social base, perfectly preparing tiny tots for smooth transition into primary school education.', 'fas fa-child')">
                <i class="fas fa-child"></i>
                <h3>Pre School</h3>
                <p>Activity-based learning and development.</p>
            </div>

            <div class="program-card" onclick="openModal('Primary Section Curriculum', 'The Primary education section at our school builds an immensely robust, comprehensive, and advanced academic foundation alongside pristine moral character, rigorous language fluency, and critical analytical thinking.\n\nStudents are actively encouraged to explore complex core concepts through hands-on practical science experiments, interactive group learning activities, immersive creative storytelling sessions, and specialized guided reading programs.\n\nOur qualified primary instructors provide individual attention to every single student, ensuring their reading, writing, and mathematical comprehension skills grow exponentially.\n\nCo-curricular activities are seamlessly integrated into the daily routine to promote physical fitness, teamwork, sportsmanship, and artistic talent exploration.\n\nRegular assignments and conceptual quizzes help build sound study habits and discipline from an early age.\n\nOur ultimate goal in the primary section is to cultivate highly disciplined, self-assured, intellectually curious, and exceptionally well-rounded young learners equipped for upper educational tiers.', 'fas fa-book-reader')">
                <i class="fas fa-book-reader"></i>
                <h3>Primary</h3>
                <p>Strong foundation in academics and character.</p>
            </div>

            <div class="program-card" onclick="openModal('Secondary Education Pathways', 'Our prestigious Secondary program provides rigorous, high-level preparation tailored for higher education excellence and highly competitive professional career paths.\n\nFeaturing veteran subject-matter experts, highly advanced science and computer laboratory facilities, and dedicated career counseling, students receive specialized, focused academic guidance in diverse fields including pre-medical, pre-engineering, general sciences, and arts.\n\nWe conduct regular board-pattern preparatory exams, mock tests, and practical lab sessions to ensure absolute confidence and mastery over theoretical and practical components.\n\nStudents are trained in advanced scientific inquiry, complex mathematical problem solving, literary critique, and technological applications.\n\nIn addition to academics, leadership workshops, personality development seminars, and interschool competitions are organized frequently.\n\nWe empower teenagers with leadership qualities, time-management mastery, exceptional research skills, and supreme confidence to conquer global challenges successfully.', 'fas fa-user-graduate')">
                <i class="fas fa-user-graduate"></i>
                <h3>Secondary</h3>
                <p>Preparation for higher education and careers.</p>
            </div>

        </div>

    </div>

</section>

<!-- SUBJECTS -->
<section class="subjects">

    <div class="container">

        <h2 class="section-title">Subjects Offered</h2>

        <div class="subject-grid">

            <div class="subject-card" onclick="openModal('English Language & Literature', 'Our English curriculum focuses comprehensively on building advanced academic vocabulary, expressive creative writing, fluent reading comprehension, professional grammar mastery, and extremely confident public speaking skills.\n\nStudents engage with classic literature, modern prose, poetry analysis, and dynamic debate sessions to polish their global communication abilities to absolute perfection.\n\nListening, speaking, reading, and writing modules are taught using multimedia tools and interactive classroom discussions.\n\nSpecial focus is given to essay writing, creative storytelling, vocabulary enrichment exercises, and accent training.\n\nRegular spelling bees and declamation contests are held to encourage active student participation.\n\nThis robust subject training ensures students excel in international standard English assessments and professional communication.', 'fas fa-language')">
                <i class="fas fa-language"></i>
                <h3>English</h3>
            </div>

            <div class="subject-card" onclick="openModal('Advanced Mathematics', 'The Mathematics curriculum is expertly structured to develop sharp analytical thinking, complex logical reasoning, abstract quantitative deduction, and advanced problem-solving methodologies.\n\nThrough rigorous practice, real-world practical applications, mental arithmetic challenges, and modern geometrical theorems, students achieve mathematical excellence and precision.\n\nComplex mathematical concepts are broken down into easy-to-understand logical steps using modern visual aids and smartboard technology.\n\nStudents learn algebra, geometry, trigonometry, statistics, and calculus with thorough conceptual clarity rather than rote memorization.\n\nRegular math quizzes and problem-solving workshops sharpen their competitive edge for board examinations and aptitude tests.\n\nThis subject builds the foundational pillars for future engineering, data science, and financial careers.', 'fas fa-calculator')">
                <i class="fas fa-calculator"></i>
                <h3>Mathematics</h3>
            </div>

            <div class="subject-card" onclick="openModal('Experimental Science', 'Our General and Experimental Science framework actively encourages empirical inquiry, systematic scientific experimentation, and profound conceptual understanding of biological ecosystems, physical laws, and chemical reactions.\n\nStudents perform live lab demonstrations to link theoretical textbook knowledge with real-world technological discoveries.\n\nBiology labs provide hands-on experience with microscopes, plant physiology, and anatomical models.\n\nPhysics and chemistry practicals train students in accurate measurement, chemical compound analysis, circuitry, and motion laws.\n\nScience exhibition projects are organized annually where students showcase innovative working models and eco-friendly inventions.\n\nThis immersive scientific training sparks lifelong curiosity, research aptitude, and analytical excellence.', 'fas fa-flask')">
                <i class="fas fa-flask"></i>
                <h3>Science</h3>
            </div>

            <div class="subject-card" onclick="openModal('Computer & Digital IT', 'The Computer and Digital Literacy program equips students with essential modern IT skills, fundamental programming algorithms, coding logic, robotics basics, internet safety protocols, and advanced software applications training.\n\nOur state-of-the-art computer labs feature high-speed internet and updated hardware/software systems for every student.\n\nStudents learn graphic designing, web development basics, database management, and essential office productivity suites.\n\nCoding and algorithmic logic are introduced early to foster computational thinking and problem-solving capabilities.\n\nCyber safety and responsible digital citizenship modules are integrated to ensure safe technology usage.\n\nThis comprehensive IT training guarantees our students stay well ahead in the fast-paced, tech-driven modern era.', 'fas fa-computer')">
                <i class="fas fa-computer"></i>
                <h3>Computer</h3>
            </div>

            <div class="subject-card" onclick="openModal('Urdu Composition', 'Our Urdu curriculum promotes deep mastery and profound love for our national language, classic prose, inspiring poetry, precise grammatical structures, and expressive literary composition.\n\nStudents learn eloquent speech, creative essay writing, translation exercises, and rich cultural heritage appreciation.\n\nFamous literary works of renowned poets and authors are studied in detail to instill aesthetic linguistic appreciation.\n\nCalligraphy sessions and poetry recitation competitions are organized regularly to preserve cultural traditions.\n\nGrammar rules, sentence structuring, and vocabulary expansion drills are practiced meticulously.\n\nThis curriculum instills deep respect for our national identity while developing exceptional literary expression.', 'fas fa-book')">
                <i class="fas fa-book"></i>
                <h3>Urdu</h3>
            </div>

            <div class="subject-card" onclick="openModal('Islamiyat & Ethics', 'The Islamiyat and Ethics Studies course imparts profound moral teachings, authentic Quranic jurisprudence, inspiring Islamic history, Sunnah values, and universal human ethics.\n\nIt ensures exemplary character building, spiritual awakening, tolerance, and righteous societal conduct among all students.\n\nStudents study translation and tafseer of selected Quranic verses alongside noble prophetic traditions (Hadith).\n\nEthical case studies and moral storytelling sessions help students distinguish right from wrong in daily life situations.\n\nInterfaith harmony, respect for humanity, honesty, and empathy are core pillars of this curriculum.\n\nThis holistic subject produces morally upright, socially responsible, and spiritually grounded individuals.', 'fas fa-mosque')">
                <i class="fas fa-mosque"></i>
                <h3>Islamiyat</h3>
            </div>

        </div>

    </div>

</section>

<!-- EXAM SYSTEM -->
<section class="exams">

    <div class="container">

        <h2 class="section-title">Examination System</h2>

        <div class="exam-grid">

            <div class="exam-card" onclick="openModal('Monthly Assessment Tests', 'Our structured monthly assessment tests evaluate individual student learning progress consistently throughout the session.\n\nThis enables our dedicated teachers to instantly identify academic learning gaps, clarify difficult concepts, and provide prompt remedial extra coaching classes to ensure nobody is left behind.\n\nParents receive detailed monthly performance report cards highlighting areas of improvement and commendation.\n\nThese tests reduce final exam anxiety by keeping students in a constant state of academic preparedness and revision.\n\nConsistent grading parameters ensure complete transparency, fairness, and objective evaluation standards.\n\nThis proactive testing mechanism forms the bedrock of our consistent academic success and high student retention.', 'fas fa-file-alt')">
                <i class="fas fa-file-alt"></i>
                <h3>Monthly Tests</h3>
                <p>Continuous progress tracking and concept revision.</p>
            </div>

            <div class="exam-card" onclick="openModal('Mid Term Exams', 'Comprehensive mid-term examinations thoroughly assess deep conceptual retention across the first half of the academic session.\n\nThese exams simulate professional board examination patterns, teaching students time-management under pressure, exam temperament, and complete syllabus review.\n\nDetailed question papers test both objective knowledge and subjective analytical capabilities.\n\nParent-teacher meetings are held immediately after result announcement to discuss customized academic action plans.\n\nExtra revision bootcamps are arranged for students requiring additional academic support before final exams.\n\nThis rigorous mid-session evaluation ensures no learning gaps persist unaddressed.', 'fas fa-clipboard-check')">
                <i class="fas fa-clipboard-check"></i>
                <h3>Mid Term Exams</h3>
                <p>Mid-session evaluation and comprehensive assessment.</p>
            </div>

            <div class="exam-card" onclick="openModal('Final Year Exams', 'Our highly rigorous year-end final examinations test cumulative knowledge mastery across the entire yearly syllabus.\n\nThese definitive exams determine grade promotions, prestigious merit rankings, academic scholarships, and overall student excellence awards.\n\nInvigilation and grading are conducted under strict supervisory guidelines to maintain absolute integrity and meritocracy.\n\nTop position holders are felicitated at our grand annual prize distribution ceremony with shields, medals, and cash scholarships.\n\nComprehensive transcripts provide a detailed breakdown of subject-wise performance across the entire academic year.\n\nThis ultimate evaluation validates years of hard work and opens doors to advanced academic levels.', 'fas fa-award')">
                <i class="fas fa-award"></i>
                <h3>Final Exams</h3>
                <p>Year-end academic evaluation and merit ranking.</p>
            </div>

        </div>

    </div>

</section>

<!-- ACHIEVEMENTS -->
<section class="achievements">

    <div class="container">

        <h2 class="section-title">Academic Achievements</h2>

        <div class="highlight-grid">

            <div class="highlight" onclick="openModal('98% Board Results', 'Our exceptional students consistently secure top positions and high percentages in regional board examinations year after year.\n\nThis stellar achievement reflects our uncompromised educational standards, elite faculty training, rigorous daily testing, and unwavering student dedication.\n\nMany of our graduates secure board merit list positions, bringing immense pride to our institution and their families.\n\nSpecial distinction certificates are awarded to students scoring above 90% aggregate marks.\n\nOur science and arts faculties work round the clock to deliver targeted board-pattern lectures and revision modules.\n\nThis 98% success rate stands as a powerful testament to our academic excellence and leadership in education.', 'fas fa-chart-line')">
                <h2>98%</h2>
                <p>Board Results</p>
            </div>

            <div class="highlight" onclick="openModal('500+ Top Graduates', 'Over 500 successful alumni have proudly graduated from Sublime School System over the past decades.\n\nOur graduates have secured coveted admissions in top-tier medical colleges, prestigious engineering universities, and elite corporate positions worldwide.\n\nMany alumni return to mentor current students, sharing their inspiring professional success stories and career insights.\n\nOur alumni network spans across medicine, software engineering, civil services, commerce, and scientific research.\n\nWe take immense pride in shaping responsible citizens and future leaders who contribute positively to global society.\n\nThese 500+ graduates symbolize the true transformative power of our educational ecosystem.', 'fas fa-user-graduate')">
                <h2>500+</h2>
                <p>Top Graduates</p>
            </div>

            <div class="highlight" onclick="openModal('50+ Competitions Won', 'Our exceptionally talented student teams have clinched numerous championship trophies, gold medals, and rolling shields in district and provincial level competitions.\n\nThese victories span across interschool science fairs, sports tournaments, debate contests, quiz competitions, and art exhibitions.\n\nDedicated coaches and mentors train our students with professional rigor before every major tournament.\n\nWinning these accolades boosts student morale, fosters healthy competitive spirit, and enhances institutional prestige.\n\nOur trophy cabinet stands overflowing with shining testaments to our students hard work and versatile talents.\n\nWe continue to encourage active participation in all extracurricular arenas for holistic student development.', 'fas fa-trophy')">
                <h2>50+</h2>
                <p>Competitions Won</p>
            </div>

            <div class="highlight" onclick="openModal('25+ Years Success', 'A glorious, prestigious journey spanning more than two decades of unmatched commitment to quality education and institutional discipline.\n\nFounded with a vision to enlighten young minds, Sublime School System has evolved into a premier educational landmark.\n\nOver the last 25 years, we have continuously upgraded our campus infrastructure, laboratory facilities, and teaching methodologies.\n\nGenerations of families trust us with the education and character building of their children due to our unblemished reputation.\n\nWe celebrate this silver jubilee milestone with renewed dedication to foster innovation and academic brilliance.\n\nOur 25-year legacy is a living guarantee of trust, quality, and continuous educational advancement.', 'fas fa-award')">
                <h2>25+</h2>
                <p>Years Success</p>
            </div>

        </div>

    </div>

</section>

<!-- CTA -->
<section class="cta">

    <div class="container">

        <h2>Shape Your Child's Future With Us</h2>

        <p>
            Admissions Open For New Session
        </p>

        <a href="{{ url('/applynow') }}" class="btn">
    Apply Now
</a>

    </div>

</section>

 @include('includes.footer')
@include('includes.scroll')

<!-- UNIVERSAL POPUP MODAL HTML -->
<div id="universalModal" class="custom-modal">
    <div class="custom-modal-content">
        <span class="custom-modal-close" onclick="closeModal()">&times;</span>
        <i id="modalIcon" class=""></i>
        <h3 id="modalTitle"></h3>
        <p id="modalDesc" style="white-space: pre-line;"></p>
    </div>
</div>

<script>
// Universal Modal JavaScript Functions
function openModal(title, description, iconClass) {
    document.getElementById('modalTitle').innerText = title;
    document.getElementById('modalDesc').innerText = description;
    document.getElementById('modalIcon').className = iconClass;
    document.getElementById('universalModal').style.display = 'flex';
}

function closeModal() {
    document.getElementById('universalModal').style.display = 'none';
}

window.addEventListener('click', function(event) {
    let modal = document.getElementById('universalModal');
    if (event.target === modal) {
        closeModal();
    }
});
</script>

</body>
</html>