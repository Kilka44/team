<?php get_header(); ?>

<!-- Our Site Section -->
<section class="projet-slider" id="oursite">
  <div class="left-column">
    <div class="project-info">
      <h2><?= CFS()->get('project_title') ?></h2>
    </div>

    <div class="project-description">
      <p><?= CFS()->get('project_description') ?></p>
    </div>
  </div>

  <div class="right-column">
    <div class="slider-wrapper">
      <button class="slider-btn left-btn">&#10094;</button>
      <div class="slider">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/screenshot1.png" class="slide active">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/screenshot2.png" class="slide">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/screenshot3.png" class="slide">
      </div>
      <button class="slider-btn right-btn">&#10095;</button>
    </div>

    <?php
      $skills = CFS()->get('project_skills');
      if ($skills) : ?>
        <ul class="project-skills-list">
          <?php foreach ($skills as $row) : ?>
            <li><?php echo esc_html($row['skill']); ?></li>
          <?php endforeach; ?>
        </ul>
    <?php endif; ?>
  </div>
</section>


        <!-- Projects Section -->
<?php
$projects = CFS()->get('projects'); // Главный loop
?>

<section class="projects" id="projects">
    <h2 class="title">Our Projects</h2>

    <div class="projects-grid">

    <?php if ($projects) : ?>
        <?php foreach ($projects as $p_index => $project) : ?>
            <div class="project">

                <!-- SLIDER -->
                <?php if (!empty($project['slider'])) : ?>
                    <div class="project-slider-wrapper">
                        <div class="project-slider" data-project="<?php echo $p_index; ?>">

                            <?php foreach ($project['slider'] as $index => $slide) : ?>
                                <?php
                                    $image_id = $slide['image'];
                                    $image_url = wp_get_attachment_image_url($image_id, 'large');
                                ?>
                                <img src="<?= esc_url($image_url); ?>"
                                     class="slide <?= $index === 0 ? 'active' : ''; ?>">
                            <?php endforeach; ?>

                        </div>
                        <button class="arrow left" data-project="<?php echo $p_index; ?>">‹</button>
                        <button class="arrow right" data-project="<?php echo $p_index; ?>">›</button>
                    </div>
                <?php endif; ?>

                <!-- INFO -->
                <div class="project-info1">
                    <h3>
                        <a href="<?= esc_url($project['link']); ?>" target="_blank">
                            <?= esc_html($project['title']); ?>
                        </a>
                    </h3>

                    <p><?= esc_html($project['description']); ?></p>

                    <!-- SKILLS -->
                    <?php if (!empty($project['skills'])) : ?>
                        <ul class="skills">
                            <?php foreach ($project['skills'] as $skill) : ?>
                                <li><?= esc_html($skill['skillsss']); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

    </div>
</section>



<!-- About Section -->
<section class="about" id="about">
    <h2>About Us</h2>
    <div class="team-member reverse-row">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Liliia.jpg" alt="Liliia Zykova" class="team-photo">
        <div class="info">
    <div class="name-row">
        <h3>Liliia Zykova</h3>
        <a href="https://github.com/Kilka44" class="github-link" target="_blank" aria-label="Liliia GitHub">
            <svg class="github-icon" viewBox="0 0 24 24">
                <path d="M12 .5C5.65.5.5 5.65.5 12c0 5.1 3.3 9.4 7.9 10.9.6.1.8-.2.8-.6v-2c-3.2.7-3.9-1.4-3.9-1.4-.5-1.1-1.2-1.4-1.2-1.4-1-.7.1-.7.1-.7 1.1.1 1.7 1.2 1.7 1.2 1 1.7 2.7 1.2 3.3.9.1-.7.4-1.2.7-1.5-2.6-.3-5.3-1.3-5.3-5.9 0-1.3.5-2.4 1.2-3.3 0-.3-.5-1.5.1-3 0 0 1-.3 3.4 1.2 1-.3 2-.4 3-.4s2 .1 3 .4c2.3-1.5 3.4-1.2 3.4-1.2.6 1.5.2 2.7.1 3 .8.9 1.2 2 1.2 3.3 0 4.6-2.7 5.6-5.3 5.9.4.4.7 1 .7 2v3c0 .3.2.7.8.6 4.6-1.5 7.9-5.8 7.9-10.8C23.5 5.7 18.3.5 12 .5z"/>
            </svg>
        </a>
    </div>
            <p>Frontend Developer</p>
            <p>Experienced Frontend Developer specializing in HTML, CSS, and JavaScript. Skilled in WordPress, Tilda, PHP, Git, and GitHub. Passionate about building responsive, accessible, and visually appealing web applications.</p>
        </div>
    </div>

    <div class="team-member">
        <div class="info">
    <div class="name-row">
        <h3>Hayk Sakoyan</h3>
        <a href="https://github.com/Hayk-21" class="github-link" target="_blank" aria-label="Hayk GitHub">
            <svg class="github-icon" viewBox="0 0 24 24">
                <path d="M12 .5C5.65.5.5 5.65.5 12c0 5.1 3.3 9.4 7.9 10.9.6.1.8-.2.8-.6v-2c-3.2.7-3.9-1.4-3.9-1.4-.5-1.1-1.2-1.4-1.2-1.4-1-.7.1-.7.1-.7 1.1.1 1.7 1.2 1.7 1.2 1 1.7 2.7 1.2 3.3.9.1-.7.4-1.2.7-1.5-2.6-.3-5.3-1.3-5.3-5.9 0-1.3.5-2.4 1.2-3.3 0-.3-.5-1.5.1-3 0 0 1-.3 3.4 1.2 1-.3 2-.4 3-.4s2 .1 3 .4c2.3-1.5 3.4-1.2 3.4-1.2.6 1.5.2 2.7.1 3 .8.9 1.2 2 1.2 3.3 0 4.6-2.7 5.6-5.3 5.9.4.4.7 1 .7 2v3c0 .3.2.7.8.6 4.6-1.5 7.9-5.8 7.9-10.8C23.5 5.7 18.3.5 12 .5z"/>
            </svg>
        </a>
    </div>
            <p>Backend Developer (6+ years experience)</p>
            <p>Backend Developer with professional experience in Python, SQL, and Node.js. Proficient in API development, database architecture, and building scalable backend systems. Experienced in supporting agencies and delivering robust, production-ready solutions.</p>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hayk.jpg" alt="Hayk Sakoyan" class="team-photo">
    </div>

    <!-- Directions -->
    <div class="directions">
        <div class="direction">
            <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/browser.svg" alt="Web Development Icon">
            Web Development 
        </div>
        <div class="direction">
            <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/ui.svg" alt="UI/UX Design Icon">
            UI/UX Design
        </div>
        <div class="direction">
            <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/api.svg" alt="API Icon">
            API Integration
        </div>
        <div class="direction">
            <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/database.svg" alt="Database Icon">
            Database Architecture
        </div>
    </div>

    <!-- Three columns of common qualities --> 
    <div class="qualities">
    <?php $columns = CFS()->get('qualities_columns'); ?>

    <?php if ($columns) : ?>
        <?php foreach ($columns as $col) : ?>
            <div class="column">
                <h4><?= esc_html($col['title']); ?></h4>

                <?php if (!empty($col['list'])) : ?>
                    <ul>
                        <?php foreach ($col['list'] as $item) : ?>
                            <li><?= esc_html($item['item']); ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

</section>

<?php get_footer(); ?>
