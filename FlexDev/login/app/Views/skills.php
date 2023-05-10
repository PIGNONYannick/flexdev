<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>SKILLS</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>


  <header align="center">
    <h1></h1>
  </header>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <h3 align="center">Ajouter de nouvelles compétences</h3>
        <form>
          <div class="form-group">
            <div class="row">
              <div class="col-md-2">
                <label for="skill"><h4>Skill:<h4></label>
              </div>
              <div class="col-md-10">
                <input type="text" class="form-control" name="skill" id="skill" placeholder="entrer une compétence" required/>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <label for="skill-level"><h4>Niveau:<h4></label>
              </div>
              <div class="col-md-10">
                <select class="form-control form-control-md" id="skill-level" name="skill-level" required>
                      <!-- Options filled by script -->
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col" align="center">
                <button type="submit" class="btn btn-primary btn-md" id="btn-submit">
                      Ajouter compétences
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-6">
        <h3 align="center">Compétences actuelles</h3>
        <div class="row">
          <ul class="list-group" id="current-skills" align="center">
            <li class="list-group-item headers">
              <div class="row">
                <div class="col-md-3"><h5>Skill</h5></div>
                <div class="col-md-3"><h5>Niveau</h5></div>
                <div class="col-md-3"><h5>Modifier</h5></div>
                <div class="col-md-3"><h5>Supprimer</h5></div>
              </div>
            </li>
            <!-- list items populated by script -->
          </ul>
        </div>
      </div>
    </div>
  </div>


  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>
<style>
#current-skills {
    margin: 0 auto;
    width: 85%
  };
  </style>
  <script>
  (function(){

    document.body.onload = onInit;

    // Array of skill levels
    const skillLevels = [{
        level: '1 (sans expérience)',
        value: 0
    }, {
        level: '2',
        value: 1
    }, {
        level: '3',
        value: 2
    }, {
        level: '4',
        value: 3
    }, {
            level: '5 (Expert)',
            value: 4
    }];


    // Class for skill
    class Skill {
        constructor(id, name, level) {
            this.id = id;
            this.name = name;
            this.level = level;
        }

        addToDOM() {
            const li = document.createElement('LI');
            li.className = 'list-group-item';
            li.id = this.id;
            li.innerHTML = `<div class="row"><div class="col-md-3"><strong>${this.name}</strong></div>
            <div class="col-md-3">${this.level}</div><div class="col-md-3"><button class="btn btn-info edit">Edit</button></div>
            <div class="col-md-3"><button class="btn btn-danger delete">Delete</button></div>`;
            skillList.appendChild(li);
        }
    }

    // Array of skills to simulate DB
    let skills = [new Skill(1, 'Javascript', 2), new Skill(2, 'HTML5', 3)];

    // Skills list
    const skillList = document.getElementById('current-skills');

    function onInit() {
        // Load current skills
        skills.forEach( (skill) => {
            skill.addToDOM();
        });

        // Load skill levels to input form
        const levels = document.getElementById('skill-level');
        levels.length = 0;
        let defaultOption = document.createElement("option");
        defaultOption.text = "Choisir une note /5..";
        levels.add(defaultOption);
        levels.selectedIndex = 0;

        let option;
        skillLevels.forEach( (level) => {
            option = document.createElement("option");
            option.text = level.level;
            option.value = level.value;
            levels.add(option);
        });

        // Add event listener to submit button
        const submit = document.getElementById('btn-submit');
        submit.addEventListener('click', saveSkill);

        // Event listener for delete and edit buttons
        const currentSkills = document.getElementById('current-skills');
        currentSkills.addEventListener('click', function(e){
            if(e.target.classList.contains('delete')) {
                deleteSkill(e);
            } else if (e.target.classList.contains('edit')) {
                // TODO: Add edit function
                console.log('edit');
            }
            e.stopPropagation();
        });
    }

    // Function to save a new skill to skills array and add to DOM
    const saveSkill = function(e) {
        e.preventDefault();
        const form = document.querySelector('form');
        const id = skills.length+1;
        const name = document.getElementById('skill').value;
        const level = document.getElementById('skill-level').value;

        // Validate form
        if (name && parseInt(level)) {
            const skill = new Skill(id, name, level);
            skills.push(skill);
            skill.addToDOM();
            form.reset();
        } else {
            console.log('error');
        }
    };

    // Function to delete a skill
    const deleteSkill = function(e) {
          const li = e.target.closest('li');
          skills.forEach((skill, index, skills) => skill.id === parseInt(li.id) ? skills.splice(index, 1): skill);
          skillList.removeChild(li);
    };

})();

  </script>
</html>
