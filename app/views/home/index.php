<?php
// ...existing code...
include __DIR__ . '/../templates/header.php';
?>
<main>
    <!-- Présentation -->
    <section id="presentation" class="py-5 bg-light border-bottom">
        <div class="container text-center">
            <h2 class="section-title display-5 mb-4">
                <span class="lang-fr"><i class="bi bi-person-circle"></i> Présentation</span>
                <span class="lang-en"><i class="bi bi-person-circle"></i> About Me</span>
            </h2>
            <p class="lead">
                <span class="lang-fr">Je m'appelle <strong>Hugo Chichkine</strong>, étudiant passionné d'informatique. Je suis actuellement en <strong>3ème année à l'ESGI (École Supérieure du Génie Informatique)</strong> à Paris, en spécialisation <strong>Ingénierie Web</strong>. Je poursuis mon cursus en alternance avec un rythme de <strong>3 semaines en entreprise et 1 semaine à l'école</strong>. J'aime développer des projets web, explorer de nouvelles technologies et relever des défis techniques.</span>
                <span class="lang-en">My name is <strong>Hugo Chichkine</strong>, a passionate computer science student. I am currently in my <strong>third year at ESGI (Graduate School of Computer Engineering)</strong> in Paris, specializing in <strong>Web Engineering</strong>. I am doing a work-study program with a schedule of <strong>3 weeks in a company and 1 week at school</strong>. I love building web projects, exploring new technologies, and tackling technical challenges.</span>
            </p>
        </div>
    </section>

    <!-- Parcours -->
    <section id="parcours" class="py-5">
        <div class="container">
            <h2 class="section-title mb-4">
                <span class="lang-fr"><i class="bi bi-mortarboard"></i> Parcours</span>
                <span class="lang-en"><i class="bi bi-mortarboard"></i> Background</span>
            </h2>
            <ul class="timeline list-unstyled">
                <li class="mb-3">
                    <span class="lang-fr">2025 : <strong>3ème année à l'ESGI</strong>, spécialisation Ingénierie Web <span class="badge bg-info">Alternance 3 semaines entreprise / 1 semaine école</span></span>
                    <span class="lang-en">2025: <strong>Third year at ESGI</strong>, Web Engineering specialization <span class="badge bg-info">Work-study: 3 weeks company / 1 week school</span></span>
                </li>
                <li class="mb-3">
                    <span class="lang-fr">2023-2025 : BUT Informatique, IUT d'Orsay</span>
                    <span class="lang-en">2023-2025: Computer Science, IUT d'Orsay</span>
                </li>
                <li class="mb-3">
                    <span class="lang-fr">2020-2023 : Bac Général, spécialité Mathématiques et NSI</span>
                    <span class="lang-en">2020-2023: French Baccalaureate, Math & CS</span>
                </li>
            </ul>
        </div>
    </section>

    <!-- Compétences -->
    <section id="competences" class="py-5 bg-light border-bottom">
        <div class="container">
            <h2 class="section-title mb-4">
                <span class="lang-fr"><i class="bi bi-tools"></i> Compétences</span>
                <span class="lang-en"><i class="bi bi-tools"></i> Skills</span>
            </h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">HTML, CSS, JavaScript, PHP</li>
                        <li class="list-group-item">Bootstrap, Git, SQL</li>
                        <li class="list-group-item">Développement web fullstack</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Projets -->
    <section id="projets" class="py-5">
        <div class="container">
            <h2 class="section-title mb-4">
                <span class="lang-fr"><i class="bi bi-folder2-open"></i> Projets</span>
                <span class="lang-en"><i class="bi bi-folder2-open"></i> Projects</span>
            </h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Portfolio Web</strong> <span class="badge bg-secondary">PHP, Bootstrap, JS</span></li>
                        <li class="list-group-item"><strong>Application de gestion</strong> <span class="badge bg-secondary">SQL, PHP</span></li>
                        <li class="list-group-item"><strong>Site vitrine</strong> <span class="badge bg-secondary">HTML, CSS, JS</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Expériences -->
    <section id="experiences" class="py-5 bg-light border-bottom">
        <div class="container">
            <h2 class="section-title mb-4">
                <span class="lang-fr"><i class="bi bi-briefcase"></i> Expériences</span>
                <span class="lang-en"><i class="bi bi-briefcase"></i> Experience</span>
            </h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><span class="lang-fr">Stage développeur web chez XYZ</span><span class="lang-en">Web developer internship at XYZ</span></li>
                        <li class="list-group-item"><span class="lang-fr">Projet associatif : création d'un site web</span><span class="lang-en">Association project: website creation</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Qualités -->
    <section id="qualites" class="py-5">
        <div class="container">
            <h2 class="section-title mb-4">
                <span class="lang-fr"><i class="bi bi-star"></i> Qualités</span>
                <span class="lang-en"><i class="bi bi-star"></i> Qualities</span>
            </h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Curiosité</li>
                        <li class="list-group-item">Rigueur</li>
                        <li class="list-group-item">Esprit d'équipe</li>
                        <li class="list-group-item">Créativité</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="py-5 bg-light border-bottom">
        <div class="container">
            <h2 class="section-title mb-4 text-center">
                <span class="lang-fr"><i class="bi bi-envelope"></i> Contact</span>
                <span class="lang-en"><i class="bi bi-envelope"></i> Contact</span>
            </h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form class="card p-4 shadow-sm">
                        <div class="mb-3">
                            <label for="name" class="form-label"><span class="lang-fr">Nom</span><span class="lang-en">Name</span></label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label"><span class="lang-fr">Message</span><span class="lang-en">Message</span></label>
                            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100"><span class="lang-fr">Envoyer</span><span class="lang-en">Send</span></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
include __DIR__ . '/../templates/footer.php';
?>
