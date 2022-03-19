<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HildoDev</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,800;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./styles.css" />
    <script
      src="https://kit.fontawesome.com/a0e073fa45.js"
      crossorigin="anonymous"
    ></script>
    <link
      rel="icon"
      href="./assets/favicon/logo_48x48_hildodev.png"
      type="image/x-png"
    />
    <link
      rel="apple-touch-icon-precomposed"
      href="./assets/favicon/logo_48x48_hildodev.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="48x48"
      href="./assets/favicon/logo_48x48_hildodev.png"
      type="image/x-png"
    />
    <link
      rel="apple-touch-icon"
      sizes="72x72"
      href="./assets/favicon/logo_72x72_hildodev.png"
      type="image/x-png"
    />
    <link
      rel="apple-touch-icon"
      sizes="96x96"
      href="./assets/favicon/logo_96x96_hildodev.png"
      type="image/x-png"
    />
    <link
      rel="apple-touch-icon"
      sizes="144x144"
      href="./assets/favicon/logo_144x144_hildodev.png"
      type="image/x-png"
    />
    <link
      rel="apple-touch-icon"
      sizes="192x192"
      href="./assets/favicon/logo_192x192_hildodev.png"
      type="image/x-png"
    />
    <link
      rel="apple-touch-icon"
      sizes="256x256"
      href="./assets/favicon/logo_256x256_hildodev.png"
      type="image/x-png"
    />
    <link
      rel="apple-touch-icon"
      sizes="384x384"
      href="./assets/favicon/logo_384x384_hildodev.png"
      type="image/x-png"
    />
    <link
      rel="apple-touch-icon"
      sizes="512x512"
      href="./assets/favicon/logo_512x512_hildodev.png"
      type="image/x-png"
    />
    <meta name="author" content="Hildebrando Viana Matos" />
    <meta
      name="description"
      content="Site do HildoDev, um perfil de programação que ajuda mais de 10  mil pessoas a entrarem na carreira da programação de graça."
    />
    <meta
      name="keywords"
      content="hildodev, programação, programação web, portfolio, sites, aplicativos, sistemas"
    />
    <meta name="robots" content="index,follow" />
    <meta property="og:title" content="HildoDev - Programação e Tecnologia" />
    <meta property="og:site_name" content="HildoDev" />
    <meta property="og:type" content="technology" />
    <meta property="og:image" content="./assets/image/banner.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:url" content="https://hildodev.com" />
    <meta name="twitter:card" content="./assets/image/banner.png" />
    <meta property="og:description" content="Programação e Tecnologia!!" />
    <meta property="og:site_name" content="HildoDev" />
    <meta name="twitter:image:alt" content="HildoDev Banner" />
  </head>
  <body>
    <header id="home">
      <div class="container">
        <img
          src="./assets/image/hildodev_logo.svg"
          alt="Logo HildoDev"
          class="logo"
        />
        <nav class="menuDesktop">
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#sobreMim">Sobre Mim</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#projetos">Projetos</a></li>
            <li><a href="#contato">Contato</a></li>
          </ul>
        </nav>
        <div class="socials">
          <a href="mailto:hildocontato@gmail.com"
            ><div class="boxSocials">
              <img src="./assets/icons/mail.svg" alt="Mail Icon" /></div
          ></a>

          <a href="https://github.com/Hildebrando-Viana-Matos"
            ><div class="boxSocials">
              <img src="./assets/icons/github.svg" alt="GitHub Icon" /></div
          ></a>

          <a href="https://www.linkedin.com/in/hildodev/"
            ><div class="boxSocials">
              <img src="./assets/icons/linkedin.svg" alt="Linkedin Icon" /></div
          ></a>

          <a href="https://www.instagram.com/hildodev/"
            ><div class="boxSocials">
              <img
                src="./assets/icons/instagram.svg"
                alt="Instagram Icon"
              /></div
          ></a>
        </div>

        <nav class="menuMobile">
          <h3><i class="fas fa-bars"></i></h3>
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#sobreMim">Sobre Mim</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#projetos">Projetos</a></li>
            <li><a href="#contato">Contato</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <main>
      <section class="presentation">
        <div class="container">
          <div class="presentationDescription">
            <h1>Olá, tudo bem?</h1>
            <h1>Eu sou <span>hildo</span><span>dev</span></h1>
            <p>Desenvolvedor Full-Stack Mobile e Web, e Designer UX/UI</p>
          </div>
          <div class="presentationImage">
            <img
              src="https://avatars.githubusercontent.com/u/70374072?v=4"
              alt="HildoDev profile GitHub"
              class="myImage"
            />
            <img
              src="./assets/icons/javascript_icon.svg"
              alt="JavaScript Icon"
              class="icon javascript"
            />
            <img
              src="./assets/icons/reactjs_icon.svg"
              alt="ReacJs Icon"
              class="icon reactjs"
            />
            <img
              src="./assets/icons/typescript_icon.svg"
              alt="TypeScript Icon"
              class="icon typescript"
            />
            <img
              src="./assets/icons/php_icon.svg"
              alt="PHP Icon"
              class="icon php"
            />
          </div>
        </div>
      </section>

      <section class="numbers">
        <div class="container">
          <div class="number">
            <h2>30+</h2>
            <p>Projetos concluídos</p>
          </div>
          <div class="number">
            <h2>10k+</h2>
            <p>Pessoas ajudadas</p>
          </div>
          <div class="number">
            <h2>200k+</h2>
            <p>Pessoas alcançadas</p>
          </div>
        </div>
      </section>

      <section id="sobreMim" class="aboutMe">
        <div class="container">
          <img
            class="aboutMeImage"
            src="./assets/image/aboutMeImage.jpg"
            alt="About Me"
          />
          <div class="descriptionAboutMe">
            <div class="headerLine">
              <p>Quem sou eu?</p>
              <div class="line"></div>
            </div>
            <div class="descContent">
              <h2>Profissional qualificado e preparado!!</h2>
              <p>
                Sou um programador com mais de 3 anos de experiência, com
                diversos projetos no ar, com diversas qualificações, que possuí
                o desejo de ajudar pessoas por meio da tecnologia da informação.
                Desejo um dia impactar o mundo com a tecnologia!
              </p>
              <div class="boxCheckContent">
                <div class="boxCheck">
                  <div class="check">
                    <img src="./assets/icons/check.svg" alt="Check" />
                  </div>
                  <span>ReactJS</span>
                </div>
                <div class="boxCheck">
                  <div class="check">
                    <img src="./assets/icons/check.svg" alt="Check" />
                  </div>
                  <span>React Native</span>
                </div>
                <div class="boxCheck">
                  <div class="check">
                    <img src="./assets/icons/check.svg" alt="Check" />
                  </div>
                  <span>Design UX/UI</span>
                </div>
                <div class="boxCheck">
                  <div class="check">
                    <img src="./assets/icons/check.svg" alt="Check" />
                  </div>
                  <span>HTML, CSS, JavaScript</span>
                </div>
                <div class="boxCheck">
                  <div class="check">
                    <img src="./assets/icons/check.svg" alt="Check" />
                  </div>
                  <span>PHP</span>
                </div>
                <div class="boxCheck">
                  <div class="check">
                    <img src="./assets/icons/check.svg" alt="Check" />
                  </div>
                  <span>MySql, Jquery, e outros...</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="skills" class="skills">
        <div class="container">
          <div class="headerLineMiddle">
            <div class="line"></div>
            <span>Skills</span>
            <div class="line"></div>
          </div>

          <h2>Como eu posso ajudar o seu négocio?</h2>

          <div class="boxSkillsContent">
            <div class="boxSkills">
              <img
                src="./assets/icons/web.svg"
                alt="Icon Desenvolvimento Web"
              />
              <h3>Desenvolvimento Web</h3>
              <p>
                Trabalho com desenvolvimento Web atualizado, usando as melhores
                tecnologias e as melhores práticas para o melhor resultado!!
              </p>
            </div>
            <div class="boxSkills">
              <img
                src="./assets/icons/mobile.svg"
                alt="Icon Desenvolvimento Mobile"
              />
              <h3>Desenvolvimento Mobile</h3>
              <p>
                É uma área que eu amo aplicar meu conhecimento, construindo
                aplicativos incríveis para todas as plataformas.
              </p>
            </div>
            <div class="boxSkills">
              <img src="./assets/icons/design.svg" alt="Icon Design UX/UI" />
              <h3>Design UX/UI</h3>
              <p>
                Fazer as minhas aplicações ficarem bonitas e acessíveis é
                extremamente importante, e eu tenho domínio nessa área!
              </p>
            </div>
            <div class="boxSkills">
              <img
                src="./assets/icons/marketing.svg"
                alt="Icon SEO & Marketing Digital"
              />
              <h3>SEO & Marketing Digital</h3>
              <p>
                A aplicação ou produto precisa e deve atingir o máximo de
                pessoas possível, para ter um melhor resultado!
              </p>
            </div>
            <div class="boxSkills">
              <img
                src="./assets/icons/redes.svg"
                alt="Icon Infraestrutura e Redes"
              />
              <h3>Infraestrutura e Redes</h3>
              <p>
                Não adianta ter uma aplicação de sucesso sem ela ter a
                capacidade de aguentar milhões de acessos simultâneos!
              </p>
            </div>
            <div class="boxSkills">
              <img src="./assets/icons/equipe.svg" alt="Trabalho em Equipe" />
              <h3>Trabalho em Equipe</h3>
              <p>
                Sozinho não chega em lugar nenhum, então trabalhar em conjunto
                para mim não é uma dificuldade, e sim uma dadiva!
              </p>
            </div>
          </div>
        </div>
      </section>

      <section id="projetos" class="projects">
        <div class="container">
          <div class="headerLineMiddle">
            <div class="line"></div>
            <span>Projetos</span>
            <div class="line"></div>
          </div>

          <h2>Conheça projetos que mudaram o mundo!!</h2>

          <div class="boxProjectsContent">
            <div class="boxProjects">
              <img src="./assets/image/hpomodoro.png" alt="Banner HPomodoro" />
              <h3><a href="https://hpomodoro.com">HPomodoro</a></h3>
              <p>
                Uma plataforma que ajuda milhares de pessoas a terem mais foco
                nos estudos usando a técnica de Pomodoro!
              </p>
            </div>
            <div class="boxProjects">
              <img src="./assets/image/amaaf_banner.png" alt="Banner AMAAF" />
              <h3>
                <a href="https://www.associacaoamigosdaafrica.org">AMAAF</a>
              </h3>
              <p>
                Site que fiz para uma ONG da África para ajudar em sua
                divulgação, que já atingiu mais de 200k de pessoas!
              </p>
            </div>
            <div class="boxProjects">
              <img
                src="./assets/image/hloremipsum_banner.png"
                alt="Banner HLoremIpsum"
              />
              <h3><a href="https://www.hloremipsum.com">HLoremIpsum</a></h3>
              <p>
                Um gerador de Lorem Ipsum totalmente gratuito que ajudar
                milhares de pessoas a terem um texto aleatório em sua aplicação!
              </p>
            </div>
          </div>
        </div>
      </section>

      <section id="contato" class="contact">
        <div class="container">
          <div class="descriptionContact">
            <div class="headerLine">
              <p>Entre em Contato</p>
              <div class="line"></div>
            </div>
            <div class="descContent">
              <h2>Entre em contato comigo agora!!</h2>
              <p>
                Ficou interessado em meu trabalho? Ótimo, fique a vontade de me
                mandar uma mensagem por E-mail, ou Instagram, ou Linkedin, e
                caso queira acompanhar meus novos projetos, tem o meu GitHub,
                que é onde eu posto meus novos trabalhos em primeira mão!
              </p>
            </div>
            <div class="socials">
              <a href="mailto:hildocontato@gmail.com"
                ><div class="boxSocials">
                  <img src="./assets/icons/mail.svg" alt="Mail Icon" /></div
              ></a>

              <a href="https://github.com/Hildebrando-Viana-Matos"
                ><div class="boxSocials">
                  <img src="./assets/icons/github.svg" alt="GitHub Icon" /></div
              ></a>

              <a href="https://www.linkedin.com/in/hildodev/"
                ><div class="boxSocials">
                  <img
                    src="./assets/icons/linkedin.svg"
                    alt="Linkedin Icon"
                  /></div
              ></a>

              <a href="https://www.instagram.com/hildodev/"
                ><div class="boxSocials">
                  <img
                    src="./assets/icons/instagram.svg"
                    alt="Instagram Icon"
                  /></div
              ></a>
            </div>
          </div>
          <img
            class="contactImage"
            src="./assets/image/contato.jpg"
            alt="Contact"
          />
        </div>
      </section>
    </main>
    <footer>
      <div class="container">
        <img
          src="./assets/image/hildodev_logo.svg"
          alt="Logo HildoDev"
          class="logo"
        />
        <nav>
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#sobreMim">Sobre Mim</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#projetos">Projetos</a></li>
            <li><a href="#contato">Contato</a></li>
          </ul>
        </nav>
        <div class="socials">
          <a href="mailto:hildocontato@gmail.com"
            ><div class="boxSocials">
              <img src="./assets/icons/mail.svg" alt="Mail Icon" /></div
          ></a>

          <a href="https://github.com/Hildebrando-Viana-Matos"
            ><div class="boxSocials">
              <img src="./assets/icons/github.svg" alt="GitHub Icon" /></div
          ></a>

          <a href="https://www.linkedin.com/in/hildodev/"
            ><div class="boxSocials">
              <img src="./assets/icons/linkedin.svg" alt="Linkedin Icon" /></div
          ></a>

          <a href="https://www.instagram.com/hildodev/"
            ><div class="boxSocials">
              <img
                src="./assets/icons/instagram.svg"
                alt="Instagram Icon"
              /></div
          ></a>
        </div>
      </div>

      <div class="lineFooter"></div>

      <p>© ️Todos os diretos reservados ao HildoDev</p>
    </footer>

    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="./js/menuMobile.js"></script>
    <script src="./js/menuScroll.js"></script>
    <script src="./js/scrollAnimate.js"></script>
  </body>
</html>
