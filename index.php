<?php include 'action.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/png" href="img/js-favicon.png">
  <title>Jasey Smith | Front-end developer</title>
</head>
<body>
  <div>
    <div id="nav">
      <div class="container">
        <a id="logo" href="index.php">J<span>S</span></a>
        <div class="sub-nav">
          <a onclick="linkClick()" href="#home" class="nav-link hover-effect text">Home</a>
          <a onclick="linkClick()" href="#about" class="nav-link hover-effect text">About</a>
          <a onclick="linkClick()" href="#projects" class="nav-link hover-effect text">Work</a>
          <a onclick="linkClick()" href="#contact" class="nav-link hover-effect text">Contact</a>
        </div>
        <div class="burger">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
      </div>
    </div>
    <div id="home">
      <div class="container">
        <div class="content">
          <h1>Hi,<br/>I'm Jasey</h1>
          <p class="text">I'm a <span>front-end web developer</span>.<br/>Lets build something great together.</p>
          <a href="#projects" class="btn">View my work</a>
        </div>
        <div class="art">
          <div class="laptop">
            <div class="screen">
              <div class="display">
                <div class="half-screen">
                  <div class="window">
                    <div class="bar">
                      <div class="circle"></div>
                      <div class="circle"></div>
                      <div class="circle"></div>
                    </div>
                    <div class="laptop-header">
                      <div class="laptop-logo"></div>
                      <div class="laptop-nav"></div>
                    </div>
                    <div class="midbar">
                      <div class="one-third-col margin-right"></div>
                      <div class="two-thirds-col"></div>
                    </div>
                    <div class="bottombar">
                      <div class="one-third-col margin-right"></div>
                      <div class="one-third-col margin-right"></div>
                      <div class="one-third-col"></div>
                    </div>
                  </div>
                </div>
                <div class="half-screen">
                  <div class="code">
                    <div class="line">
                      <div class="item med"></div>
                    </div>
                    <div class="line">
                      <div class="item small"></div>
                    </div>
                    <div class="line">
                      <div class="item large"></div>
                    </div>
                    <div class="line">
                      <div class="item small margin-right"></div>
                      <div class="item large"></div>
                    </div>
                    <div class="line">
                      <div class="item large margin-right"></div>
                      <div class="item med"></div>
                    </div>
                    <div class="line">
                      <div class="item med margin-right"></div>
                      <div class="item large"></div>
                    </div>
                    <div class="line">
                      <div class="item large margin-right"></div>
                      <div class="item small"></div>
                    </div>
                    <div class="line">
                      <div class="item small margin-right"></div>
                      <div class="item small margin-right"></div>
                      <div class="item small"></div>
                    </div>
                    <div class="line">
                      <div class="item large"></div>
                    </div>
                    <div class="line">
                      <div class="item med margin-right"></div>
                      <div class="item small"></div>
                    </div>
                    <div class="line">
                      <div class="item large margin-right"></div>
                      <div class="item large"></div>
                    </div>
                    <div class="line">
                      <div class="item med margin-right"></div>
                      <div class="item large"></div>
                    </div>
                    <div class="line">
                      <div class="item small margin-right"></div>
                      <div class="item small"></div>
                    </div>
                    <div class="line">
                      <div class="item med margin-right"></div>
                      <div class="item small"></div>
                    </div>
                    <div class="line">
                      <div class="item small margin-right"></div>
                      <div class="item med"></div>
                    </div>
                    <div class="line">
                      <div class="item med"></div>
                    </div>
                    <div class="line">
                      <div class="item large"></div>
                    </div>
                    <div class="line">
                      <div class="item small"></div>
                    </div>
                    <div class="line">
                      <div class="item med"></div>
                    </div>
                    <div class="line">
                      <div class="item small"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="trapezoid">
              <div class="keypad"></div>
              <div class="mousepad"></div>
            </div>
            <div class="base"></div>
          </div>
        </div>
        <div class="vert-social-links">
          <ul>
            <li><a href="https://www.instagram.com/jaseyhsmith/" target="_blank"><i class="fab fa-instagram social-link"></i></a></li>
            <li><a href="https://github.com/JaseySmith" target="_blank"><i class="fab fa-github social-link"></i></a></li>
            <li><a href="https://www.linkedin.com/in/jasey-smith-34594a15b/" target="_blank"><i class="fab fa-linkedin-in social-link"></i></a></li>
            <li><a href="https://codepen.io/JaseySmith"  target="_blank"><i class="fab fa-codepen social-link"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div id="about">
      <div class="scroll-container">
        <h2 class="scroll-element js-scroll fade-in">About me</h2>
        <hr class="green-line scroll-element js-scroll fade-in"></hr>
      </div>
      <div class="container scroll-container">
        <div class="column scroll-element js-scroll fade-in">
          <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUwMC40NDEgNTAwLjQ0MSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PGc+PGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBpZD0iWE1MSURfNTUwXyI+PHBhdGggaWQ9IlhNTElEXzU1MV8iIGQ9Im0zNzEuMTkzIDE1Ni40NjFjNS42MTggMTUuNzI0IDIuMjYxIDM0LjE2NC0xMC41NjkgNDYuOTk2LTE3LjU4NiAxNy41ODYtNDYuMDUxIDE3LjU4Ny02My42MzktLjAwMS0xNy41ODYtMTcuNTg2LTE3LjU5LTQ2LjA1IDAtNjMuNjQgMTIuNzY4LTEyLjc2OCAzMS4yMTQtMTYuMjA3IDQ2Ljk5NS0xMC41NjhsMTI5LjI0OS0xMjkuMjQ4LTI4Mi4yMDMgNTIuMjYtNzkuMTkgMTc4LjE4YzQuODA4IDQuODA4IDE0MS4zMTkgMTQxLjMyIDE1OC4xNjYgMTU4LjE2N2wuMDAxLS4wMDEgMTc4LjE3OS03OS4xOSA1Mi4yNi0yODIuMjAyeiIgZmlsbD0iIzAwY2M5YyIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPjxwYXRoIGlkPSJYTUxJRF81NTJfIiBkPSJtNjMuNjQgMjI0LjY2OS02My42NCA2My42NDEgMjEyLjEzMiAyMTIuMTMyIDYzLjY0LTYzLjY0Yy0xNC43MTEtMTQuNzExLTIwMS40OTEtMjAxLjQ5Mi0yMTIuMTMyLTIxMi4xMzN6IiBmaWxsPSIjMDBjYzljIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+PHBhdGggaWQ9IlhNTElEXzU1NV8iIGQ9Im0zMTMuODA1IDE3MS42MzdjMCA4LjI4OSA2LjcxMSAxNSAxNSAxNSA0LjAwNyAwIDcuNzczLTEuNTYxIDEwLjYwNS00LjM5M2wuMDAxLS4wMDJjNS44NjItNS44NiA1Ljg2Mi0xNS4zNDkgMC0yMS4yMTMtMi44MzMtMi44MzItNi42LTQuMzkzLTEwLjYwNi00LjM5My04LjI5LjAwMS0xNSA2LjcxLTE1IDE1LjAwMXoiIGZpbGw9IiMwMGNjOWMiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvcGF0aD48L2c+PC9nPjwvc3ZnPg==" />
          <h3>Designer</h3>
          <p class="text">I admire simple web layouts, clean design patterns, and interactions that engage users.</p>
        </div>
        <div class="column scroll-element js-scroll fade-in">
          <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUyOCA1MjgiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxnPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTIxNy4xMTMyODEgNDEuMDQ2ODc1aC0uMDM1MTU2Yy01LjU3ODEyNS4wNDY4NzUtMTAuMDgyMDMxIDQuNTg5ODQ0LTEwLjA4OTg0NCAxMC4xNzU3ODEtLjAxMTcxOSA1LjU4MjAzMiA0LjQ3NjU2MyAxMC4xMzI4MTMgMTAuMDYyNSAxMC4yMDMxMjVoLjAzNTE1N2M1LjU3ODEyNC0uMDUwNzgxIDEwLjA4MjAzMS00LjU4OTg0MyAxMC4wOTM3NS0xMC4xNzU3ODEuMDA3ODEyLTUuNTg1OTM4LTQuNDgwNDY5LTEwLjEzNjcxOS0xMC4wNjY0MDctMTAuMjAzMTI1em0wIDAiIGZpbGw9IiMwMGNjOWMiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvcGF0aD48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im0wIDM4OS4yNzczNDRjLjAyMzQzNzUgMjIuNzY5NTMxIDE4LjQ4MDQ2OSA0MS4yMjI2NTYgNDEuMjUgNDEuMjVoNDEyLjVjMjIuNzY5NTMxLS4wMjczNDQgNDEuMjI2NTYyLTE4LjQ4MDQ2OSA0MS4yNS00MS4yNXYtMjY4Ljc0MjE4OGgtNDk1em0yOTcuNzEwOTM4LTE2Ny4yMTA5MzhjLTMuNjgzNTk0LTMuMTMyODEyLTQuMTIxMDk0LTguNjU2MjUtLjk4ODI4Mi0xMi4zMzk4NDQgMy4xMjg5MDYtMy42NzU3ODEgOC42NTIzNDQtNC4xMjEwOTMgMTIuMzM1OTM4LS45ODQzNzRsNTYuNjEzMjgxIDQ4LjIxMDkzN2MxLjk1MzEyNSAxLjY2Nzk2OSAzLjA3ODEyNSA0LjEwMTU2MyAzLjA3ODEyNSA2LjY2Nzk2OSAwIDIuNTYyNS0xLjEyNSA1LTMuMDc4MTI1IDYuNjYwMTU2bC01Ni42MTMyODEgNDguMjEwOTM4Yy0zLjY4MzU5NCAzLjEzNjcxOC05LjIwNzAzMiAyLjY5MTQwNi0xMi4zMzU5MzgtLjk4NDM3Ni0zLjEzMjgxMi0zLjY3OTY4Ny0yLjY5NTMxMi05LjE5OTIxOC45ODgyODItMTIuMzM1OTM3bDQ4Ljc4OTA2Mi00MS41NTA3ODF6bS03OC44MjgxMjYgMTI0LjEyMTA5NCAzNS4yODkwNjMtMTY3LjUzOTA2MmMuOTkyMTg3LTQuNzMwNDY5IDUuNjM2NzE5LTcuNzU3ODEzIDEwLjM2MzI4MS02Ljc2MTcxOSA0LjczMDQ2OS45OTYwOTMgNy43NTM5MDYgNS42NDA2MjUgNi43NTc4MTMgMTAuMzY3MTg3bC0zNS4yODUxNTcgMTY3LjU0Mjk2OWMtMSA0LjczMDQ2OS01LjYzNjcxOCA3Ljc1MzkwNi0xMC4zNjcxODcgNi43NTc4MTMtNC43MjY1NjMtLjk5NjA5NC03Ljc1MzkwNi01LjYzNjcxOS02Ljc1NzgxMy0xMC4zNjcxODh6bS04OS41NTQ2ODctODkuMjM0Mzc1IDU2LjYxMzI4MS00OC4yMTA5MzdjMy42ODM1OTQtMy4xMzY3MTkgOS4yMDcwMzItMi42OTE0MDcgMTIuMzM1OTM4Ljk4NDM3NCAzLjEzMjgxMiAzLjY4MzU5NCAyLjY5NTMxMiA5LjIwNzAzMi0uOTg4MjgyIDEyLjMzOTg0NGwtNDguNzg5MDYyIDQxLjU1NDY4OCA0OC43OTY4NzUgNDEuNTUwNzgxYzMuNjc1NzgxIDMuMTM2NzE5IDQuMTE3MTg3IDguNjU2MjUuOTg0Mzc1IDEyLjMzNTkzNy0zLjEyODkwNiAzLjY3NTc4Mi04LjY1NjI1IDQuMTIxMDk0LTEyLjMzNTkzOC45ODQzNzZsLTU2LjYxMzI4MS00OC4yMTA5MzhjLTEuOTUzMTI1LTEuNjYwMTU2LTMuMDc4MTI1LTQuMDk3NjU2LTMuMDc4MTI1LTYuNjYwMTU2IDAtMi41NjY0MDYgMS4xMjUtNSAzLjA3ODEyNS02LjY2Nzk2OXptMCAwIiBmaWxsPSIjMDBjYzljIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+PHBhdGggeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBkPSJtMTMyLjAzNTE1NiA0MC43NzczNDRoLS4wMzUxNTZjLTUuNTE5NTMxLjE0MDYyNS05LjkyNTc4MSA0LjY1MjM0NC05LjkyOTY4OCAxMC4xNzU3ODEtLjAwNzgxMiA1LjUxOTUzMSA0LjM3ODkwNyAxMC4wNDI5NjkgOS44OTg0MzggMTAuMTk5MjE5aC4wMzEyNWM1LjUxOTUzMS0uMTQwNjI1IDkuOTIxODc1LTQuNjUyMzQ0IDkuOTMzNTk0LTEwLjE2Nzk2OS4wMDM5MDYtNS41MjM0MzctNC4zODY3MTktMTAuMDQ2ODc1LTkuOTAyMzQ0LTEwLjIwNzAzMXptMCAwIiBmaWxsPSIjMDBjYzljIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+PHBhdGggeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBkPSJtNDUzLjc1LTIuMDgyMDMxaC00MTIuNWMtMjIuNzY5NTMxLjAyMzQzNy00MS4yMjY1NjI1IDE4LjQ4MDQ2OS00MS4yNSA0MS4yNXY2My44NjcxODdoNDk1di02My44NjcxODdjLS4wMjM0MzgtMjIuNzY5NTMxLTE4LjQ4MDQ2OS00MS4yMjY1NjMtNDEuMjUtNDEuMjV6bS00MDYuODI4MTI1IDgwLjQ3NjU2MmgtLjA4NTkzN2MtMTUuMzA4NTk0LS4wMjM0MzctMjcuNjk5MjE5LTEyLjQ0OTIxOS0yNy42ODc1LTI3Ljc1NzgxMi4wMTE3MTgtMTUuMzA4NTk0IDEyLjQyMTg3NC0yNy43MTA5MzggMjcuNzMwNDY4LTI3LjcxMDkzOCAxNS4zMTI1IDAgMjcuNzI2NTYzIDEyLjQwMjM0NCAyNy43MzQzNzUgMjcuNzEwOTM4LjAxNTYyNSAxNS4zMDg1OTMtMTIuMzc4OTA2IDI3LjczNDM3NS0yNy42OTE0MDYgMjcuNzU3ODEyem0xMTIuNzY5NTMxLTI3LjMzOTg0M2MtLjA2MjUgMTUuMjUzOTA2LTEyLjQ0MTQwNiAyNy41ODk4NDMtMjcuNjkxNDA2IDI3LjYwNTQ2OGgtLjA4NTkzOGMtMTUuMTEzMjgxLS4yNjk1MzEtMjcuMjE4NzUtMTIuNjEzMjgxLTI3LjE5MTQwNi0yNy43MzA0NjguMDE5NTMyLTE1LjExMzI4MiAxMi4xNjAxNTYtMjcuNDE3OTY5IDI3LjI3MzQzOC0yNy42NDA2MjZoLjA5Mzc1YzE1LjI4NTE1Ni4wNjI1IDI3LjYzMjgxMiAxMi40ODgyODIgMjcuNjAxNTYyIDI3Ljc3MzQzOHptODUuMDc4MTI1LjI2OTUzMWMtLjA0Njg3NSAxNS4yNTM5MDYtMTIuNDI1NzgxIDI3LjU5NzY1Ni0yNy42ODM1OTMgMjcuNjAxNTYyaC0uMDg1OTM4Yy0xNS4yMjI2NTYtLjEyMTA5My0yNy40ODgyODEtMTIuNTA3ODEyLTI3LjQ2ODc1LTI3LjczNDM3NS4wMjM0MzgtMTUuMjIyNjU2IDEyLjMzNTkzOC0yNy41NzAzMTIgMjcuNTU4NTk0LTI3LjY0NDUzMWguMDgyMDMxYzE1LjI4OTA2My4wNjI1IDI3LjYzNjcxOSAxMi40ODgyODEgMjcuNjAxNTYzIDI3Ljc3NzM0NHptMCAwIiBmaWxsPSIjMDBjYzljIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+PHBhdGggeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBkPSJtNDYuOTU3MDMxIDQwLjUxNTYyNWgtLjAzNTE1NmMtNS41MzUxNTYuMTA5Mzc1LTkuOTY4NzUgNC42Mjg5MDYtOS45NzY1NjMgMTAuMTY3OTY5LS4wMTE3MTggNS41NDI5NjggNC40MDYyNSAxMC4wNzQyMTggOS45NDkyMTkgMTAuMjA3MDMxaC4wMjczNDRjNS41NDI5NjktLjExNzE4NyA5Ljk3MjY1Ni00LjYzMjgxMyA5Ljk4NDM3NS0xMC4xNzU3ODEuMDA3ODEyLTUuNTM5MDYzLTQuNDEwMTU2LTEwLjA3MDMxMy05Ljk0OTIxOS0xMC4xOTkyMTl6bTAgMCIgZmlsbD0iIzAwY2M5YyIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPjwvZz48L3N2Zz4=" />
          <h3>Developer</h3>
          <p class="text">I enjoy bringing ideas and businesses to life with an efficient and responsive website.</p>
        </div>
        <div class="column scroll-element js-scroll fade-in">
          <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQwOSA0MDkuNiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGc+PHBhdGggeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBkPSJtMjM3Ljc1IDExMy42OTkyMTljOS42OTkyMTkgNi4xOTkyMTkgMTkgMTIuNjk5MjE5IDI3Ljg5ODQzOCAxOS40MDIzNDMtMy4yNzczNDQtMTkuNzA3MDMxLTguMzk4NDM4LTM5LjA1ODU5My0xNS4yOTY4NzYtNTcuODAwNzgxLTE3LjY2Nzk2OCAzLjg1NTQ2OS0zNC45Njg3NSA5LjI0MjE4OC01MS43MDMxMjQgMTYuMDk3NjU3IDEzLjEwMTU2MiA2LjYwMTU2MiAyNi4yMDMxMjQgMTQuMTAxNTYyIDM5LjEwMTU2MiAyMi4zMDA3ODF6bTAgMCIgZmlsbD0iIzAwY2M5YyIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTI0NC4xNDg0MzggNjAuMTk5MjE5Yy0uNDA2MjUtLjgxMjUtLjc3MzQzOC0xLjY0ODQzOC0xLjA5NzY1Ny0yLjUtMTcuMzAwNzgxLTM2LjY5OTIxOS00MC40MDIzNDMtNTcuNjk5MjE5LTYzLjYwMTU2Mi01Ny42OTkyMTlzLTQ2LjMwMDc4MSAyMS02My41OTc2NTcgNTcuNjk5MjE5Yy0uNDI5Njg3LjgwNDY4Ny0uNzk2ODc0IDEuNjQwNjI1LTEuMTAxNTYyIDIuNSAyMi4yMzQzNzUgNS4xNjAxNTYgNDMuOTAyMzQ0IDEyLjQ5NjA5MyA2NC42OTkyMTkgMjEuOTAyMzQzIDIwLjc5Njg3NS05LjQwNjI1IDQyLjQ2ODc1LTE2Ljc0MjE4NyA2NC42OTkyMTktMjEuOTAyMzQzem0wIDAiIGZpbGw9IiMwMGNjOWMiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvcGF0aD48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im0yNjkuMDUwNzgxIDcyYy0uOTA2MjUuMDg1OTM4LTEuODA4NTkzLjIxODc1LTIuNjk5MjE5LjM5ODQzOCA4LjYzNjcxOSAyNC4zMzk4NDMgMTQuNTM5MDYzIDQ5LjU1ODU5MyAxNy41OTc2NTcgNzUuMjAzMTI0IDE2LjIwMzEyNSAxMy40NTcwMzIgMzEuMjIyNjU2IDI4LjI4MTI1IDQ0LjkwMjM0MyA0NC4yOTY4NzYgMy4wOTc2NTctNC4xOTkyMTkgNi04LjUgOC42OTkyMTktMTIuNzk2ODc2IDIxLjU5NzY1Ny0zNC4zMDA3ODEgMjYuODAwNzgxLTY1LjIwMzEyNCAxNC4zOTg0MzgtODQuNjAxNTYyLTEyLjUtMTkuNS00Mi42OTkyMTktMjcuNjk5MjE5LTgyLjg5ODQzOC0yMi41em0wIDAiIGZpbGw9IiMwMGNjOWMiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvcGF0aD48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im0xNjAuMjUgOTEuMzk4NDM4Yy0xNi43MzA0NjktNi44NjcxODgtMzQuMDI3MzQ0LTEyLjI1NzgxMy01MS42OTkyMTktMTYuMDk3NjU3LTYuOTAyMzQzIDE4Ljc0MjE4OC0xMi4wMjM0MzcgMzguMDkzNzUtMTUuMzAwNzgxIDU3LjgwMDc4MSA4Ljg5ODQzOC02LjcwMzEyNCAxOC4zMDA3ODEtMTMuMjAzMTI0IDI3Ljg5ODQzOC0xOS40MDIzNDMgMTIuOTAyMzQzLTguMTk5MjE5IDI2LTE1LjY5OTIxOSAzOS4xMDE1NjItMjIuMzAwNzgxem0wIDAiIGZpbGw9IiMwMGNjOWMiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvcGF0aD48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im0zMTguODUxNTYyIDIwNC44MDA3ODFjLTEwLjA0Mjk2OC0xMi4wNjY0MDYtMjAuOTAyMzQzLTIzLjQyNTc4MS0zMi41LTM0IC43OTY4NzYgMTEuMDk3NjU3IDEuMTk5MjE5IDIyLjUgMS4xOTkyMTkgMzRzLS40MDIzNDMgMjIuODAwNzgxLTEuMTk5MjE5IDM0YzExLjU5NzY1Ny0xMC41NzQyMTkgMjIuNDU3MDMyLTIxLjkzNzUgMzIuNS0zNHptMCAwIiBmaWxsPSIjMDBjYzljIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+PHBhdGggeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBkPSJtMjAxLjA1MDc4MSAyMDQuODAwNzgxYzAgMTEuOTI5Njg4LTkuNjcxODc1IDIxLjU5NzY1Ny0yMS42MDE1NjIgMjEuNTk3NjU3LTExLjkyOTY4OCAwLTIxLjU5NzY1Ny05LjY2Nzk2OS0yMS41OTc2NTctMjEuNTk3NjU3IDAtMTEuOTI5Njg3IDkuNjY3OTY5LTIxLjYwMTU2MiAyMS41OTc2NTctMjEuNjAxNTYyIDExLjkyOTY4NyAwIDIxLjYwMTU2MiA5LjY3MTg3NSAyMS42MDE1NjIgMjEuNjAxNTYyem0wIDAiIGZpbGw9IiMwMGNjOWMiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvcGF0aD48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im0xNzkuNDQ5MjE5IDk5LjY5OTIxOWMtMzEuOTE3OTY5IDE1LjEzMjgxMi02MS45MjU3ODEgMzMuOTk2MDkzLTg5LjM5ODQzOCA1Ni4xOTkyMTktMy42MDE1NjIgMzIuNTAzOTA2LTMuNjAxNTYyIDY1LjMwMDc4MSAwIDk3LjgwMDc4MSAxMi43NTM5MDcgMTAuMjYxNzE5IDI2LjAzOTA2MyAxOS44Mzk4NDMgMzkuODAwNzgxIDI4LjY5OTIxOSAxNS45MTc5NjkgMTAuMjM0Mzc0IDMyLjQ4ODI4MiAxOS40MTc5NjggNDkuNTk3NjU3IDI3LjUgMTcuMTI1LTguMDU4NTk0IDMzLjY5NTMxMi0xNy4yNDYwOTQgNDkuNjAxNTYyLTI3LjUgMTMuODA0Njg4LTguNzkyOTY5IDI3LjA5Mzc1LTE4LjM3NSAzOS44MDA3ODEtMjguNjk5MjE5IDEuODIwMzEzLTE2LjIzNDM3NSAyLjcyMjY1Ny0zMi41NjI1IDIuNjk5MjE5LTQ4Ljg5ODQzOC4wMjM0MzgtMTYuMzM5ODQzLS44Nzg5MDYtMzIuNjY0MDYyLTIuNjk5MjE5LTQ4LjkwMjM0My0xMi43NTM5MDYtMTAuMjU3ODEzLTI2LjAzOTA2Mi0xOS44MzU5MzgtMzkuODAwNzgxLTI4LjY5OTIxOS0xNS45MDYyNS0xMC4yNTM5MDctMzIuNDc2NTYyLTE5LjQzNzUtNDkuNjAxNTYyLTI3LjV6bTAgMTQyLjY5OTIxOWMtMjAuNzY1NjI1IDAtMzcuNTk3NjU3LTE2LjgzMjAzMi0zNy41OTc2NTctMzcuNTk3NjU3czE2LjgzMjAzMi0zNy42MDE1NjIgMzcuNTk3NjU3LTM3LjYwMTU2MiAzNy42MDE1NjIgMTYuODM1OTM3IDM3LjYwMTU2MiAzNy42MDE1NjJjLS4wMTE3MTkgMjAuNzYxNzE5LTE2LjgzOTg0MyAzNy41ODk4NDQtMzcuNjAxNTYyIDM3LjU5NzY1N3ptMCAwIiBmaWxsPSIjMDBjYzljIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+PHBhdGggeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBkPSJtMTk4LjY0ODQzOCAzMTguMTk5MjE5YzE2LjczMDQ2OCA2Ljg3MTA5MyAzNC4wMzEyNSAxMi4yNTc4MTIgNTEuNzAzMTI0IDE2LjEwMTU2MiA2Ljg5ODQzOC0xOC43NDYwOTMgMTIuMDE5NTMyLTM4LjA5NzY1NiAxNS4yOTY4NzYtNTcuODAwNzgxLTguODk4NDM4IDYuNjk5MjE5LTE4LjI5Njg3NiAxMy4xOTkyMTktMjcuODk4NDM4IDE5LjM5ODQzOC0xMi44OTg0MzggOC4yMDMxMjQtMjYgMTUuNzAzMTI0LTM5LjEwMTU2MiAyMi4zMDA3ODF6bTAgMCIgZmlsbD0iIzAwY2M5YyIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTExNC43NSAzNDkuMzk4NDM4Yy40MTAxNTYuODE2NDA2Ljc3NzM0NCAxLjY0ODQzNyAxLjEwMTU2MiAyLjUgMTcuMjk2ODc2IDM2LjcwMzEyNCA0MC4zOTg0MzggNTcuNzAzMTI0IDYzLjU5NzY1NyA1Ny43MDMxMjRzNDYuMzAwNzgxLTIxIDYzLjYwMTU2Mi01Ny43MDMxMjRjLjQyNTc4MS0uODA0Njg4Ljc5Mjk2OS0xLjY0MDYyNiAxLjA5NzY1Ny0yLjUtMjIuMjMwNDY5LTUuMTU2MjUtNDMuOTAyMzQ0LTEyLjQ5MjE4OC02NC42OTkyMTktMjEuODk4NDM4LTIwLjc5Njg3NSA5LjQwNjI1LTQyLjQ2NDg0NCAxNi43NDIxODgtNjQuNjk5MjE5IDIxLjg5ODQzOHptMCAwIiBmaWxsPSIjMDBjYzljIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+PHBhdGggeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBkPSJtMzI4Ljg1MTU2MiAyMTcuNjk5MjE5Yy0xMy43MDMxMjQgMTUuOTk2MDkzLTI4LjcyMjY1NiAzMC44MTI1LTQ0LjkwMjM0MyA0NC4zMDA3ODEtMy41IDI3LjEwMTU2Mi05LjM5ODQzOCA1Mi42MDE1NjItMTcuNTk3NjU3IDc1LjE5OTIxOS44OTg0MzguMTAxNTYyIDEuNzk2ODc2LjMwMDc4MSAyLjY5OTIxOS40MDIzNDMgNDAuMTk5MjE5IDUuMTk5MjE5IDcwLjM5ODQzOC0yLjkwMjM0MyA4Mi44OTg0MzgtMjIuNDAyMzQzczcuMTk5MjE5LTUwLjMwMDc4MS0xNC4zOTg0MzgtODQuNTk3NjU3Yy0yLjY5OTIxOS00LjQwMjM0My01LjYwMTU2Mi04LjYwMTU2Mi04LjY5OTIxOS0xMi45MDIzNDN6bTAgMCIgZmlsbD0iIzAwY2M5YyIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTMwLjA1MDc4MSAxOTEuODk4NDM4YzEzLjcwMzEyNS0xNS45OTIxODggMjguNzIyNjU3LTMwLjgxMjUgNDQuODk4NDM4LTQ0LjI5Njg3NiAzLjUtMjcuMTAxNTYyIDkuNDAyMzQzLTUyLjYwMTU2MiAxNy42MDE1NjItNzUuMjAzMTI0LS45MDIzNDMtLjA5NzY1Ny0xLjgwMDc4MS0uMjk2ODc2LTIuNjk5MjE5LS4zOTg0MzgtNy41MzEyNS0uOTcyNjU2LTE1LjEwOTM3NC0xLjQ3MjY1Ni0yMi43MDMxMjQtMS41LTI4Ljc5Njg3NiAwLTUwLjE5OTIxOSA4LjM5ODQzOC02MC4xOTkyMTkgMjQtMTIuNSAxOS41LTcuMTk5MjE5IDUwLjMwMDc4MSAxNC40MDIzNDMgODQuNjAxNTYyIDIuNjk5MjE5IDQuMjk2ODc2IDUuNTk3NjU3IDguNSA4LjY5OTIxOSAxMi43OTY4NzZ6bTAgMCIgZmlsbD0iIzAwY2M5YyIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTMwLjA1MDc4MSAyMTcuNjk5MjE5Yy0zLjEwMTU2MiA0LjE5OTIxOS02IDguNS04LjY5OTIxOSAxMi44MDA3ODEtMjEuNjAxNTYyIDM0LjMwMDc4MS0yNi44MDA3ODEgNjUuMTk5MjE5LTE0LjQwMjM0MyA4NC42MDE1NjIgMTIuNSAxOS41IDQyLjY5OTIxOSAyNy42OTkyMTkgODIuOTAyMzQzIDIyLjM5ODQzOC45MDYyNS0uMDg1OTM4IDEuODA0Njg4LS4yMTg3NSAyLjY5OTIxOS0uMzk4NDM4LTguNjM2NzE5LTI0LjMzOTg0My0xNC41MzkwNjItNDkuNTU4NTkzLTE3LjYwMTU2Mi03NS4yMDMxMjQtMTYuMjY5NTMxLTEzLjM0NzY1Ny0zMS4yOTY4NzUtMjguMTQwNjI2LTQ0Ljg5ODQzOC00NC4xOTkyMTl6bTAgMCIgZmlsbD0iIzAwY2M5YyIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTEyMS4xNDg0MzggMjk1Ljg5ODQzOGMtOS42OTkyMTktNi4xOTkyMTktMTktMTIuNjk5MjE5LTI3Ljg5ODQzOC0xOS4zOTg0MzggMy4yNzczNDQgMTkuNzAzMTI1IDguMzk4NDM4IDM5LjA1NDY4OCAxNS4zMDA3ODEgNTcuODAwNzgxIDE3LjY2Nzk2OS0zLjg1NTQ2OSAzNC45NjQ4NDQtOS4yNDYwOTMgNTEuNjk5MjE5LTE2LjEwMTU2Mi0xMy4xMDE1NjItNi41OTc2NTctMjYuMTk5MjE5LTE0LjA5NzY1Ny0zOS4xMDE1NjItMjIuMzAwNzgxem0wIDAiIGZpbGw9IiMwMGNjOWMiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvcGF0aD48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im00MC4wNTA3ODEgMjA0LjgwMDc4MWMxMC4wMzkwNjMgMTIuMDYyNSAyMC44OTg0MzggMjMuNDI1NzgxIDMyLjUgMzQtLjgwMDc4MS0xMS4xMDE1NjItMS4xOTkyMTktMjIuNS0xLjE5OTIxOS0zNHMuMzk4NDM4LTIyLjgwMDc4MSAxLjE5OTIxOS0zNGMtMTEuNjAxNTYyIDEwLjU3NDIxOS0yMi40NjA5MzcgMjEuOTMzNTk0LTMyLjUgMzR6bTAgMCIgZmlsbD0iIzAwY2M5YyIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPjwvZz48L3N2Zz4=" />
          <h3>Programmer</h3>
          <p class="text">I love solving problems by building programs. I hope to get involved with AI one day.</p>
        </div>
      </div>
    </div>
    <div id="projects">
      <div class="scroll-container">
        <h2 class="scroll-element js-scroll fade-in">Recent work</h2>
        <hr class="green-line scroll-element js-scroll fade-in"></hr>
      </div>
      <div class="container">
        <div class="row scroll-container">
          <div class="column col-one-span-two scroll-element js-scroll fade-in">
            <div class="img-wrap">
              <a href="http://scaryplacesnearme.com/" target="_blank"><img src="img/project-one-img.jpg"></a>
            </div>
          </div>
          <div class="column text-col scroll-element js-scroll slide-right">
            <h3>Scary Places</h3>
            <p class="text">A website developed to find scary places near you.</p>
            <div class="ul">
              <div class="li text"><p>> HTML</p></div>
              <div class="li text"><p>> CSS</p></div>
              <div class="li text"><p>> JavaScript</p></div>
              <div class="li text"><p>> React</p></div>
            </div>
            <a href="http://scaryplacesnearme.com/" class="link" target="_blank"><i class="fas fa-external-link-alt"></i>Website</a>
          </div>
        </div>
        <div class="row scroll-container">
          <div class="column col-one-span-two scroll-element js-scroll fade-in">
            <div class="img-wrap">
              <a href="https://haysclaysco.com/" target="_blank"><img src="img/project-two-img.jpg"></a>
            </div>
          </div>
          <div class="column text-col scroll-element js-scroll slide-right">
            <h3>Hay's Clays Co</h3>
            <p class="text">An ecommerce website that sells custom clay earrings.</p>
            <div class="ul">
              <div class="li text"><p>> HTML</p></div>
              <div class="li text"><p>> CSS</p></div>
              <div class="li text"><p>> Shopify</p></div>
            </div>
            <a href="https://haysclaysco.com/" class="link" target="_blank"><i class="fas fa-external-link-alt"></i>Website</a>
          </div>
        </div>
        <div class="row scroll-container">
          <div class="column col-one-span-two scroll-element js-scroll fade-in">
            <div class="img-wrap">
            <a href="http://jaseysmith.com/" target="_blank"><img src="img/project-three-img.jpg"></a>
            </div>
          </div>
          <div class="column text-col scroll-element js-scroll slide-right">
            <h3>Jasey Smith</h3>
            <p class="text">My personal portfolio displaying my recent work.</p>
            <div class="ul">
              <div class="li text"><p>> HTML</p></div>
              <div class="li text"><p>> CSS</p></div>
              <div class="li text"><p>> JavaScript</p></div>
            </div>
            <a href="http://jaseysmith.com/" class="link" target="_blank"><i class="fas fa-external-link-alt"></i>Website</a>
          </div>
        </div>
      </div>
    </div>
    <div id="contact">
      <div class="scroll-container">
        <h2 class="scroll-element js-scroll fade-in">Let's talk!</h2>
        <hr class="green-line scroll-element js-scroll fade-in"></hr>
      </div>
      <div class="container">
        <p class="text scroll-element js-scroll fade-in">Have a question or want to work together?</p>
        <form class="form scroll-container" method="POST" action="index.php#contact">
          <input class="scroll-element js-scroll fade-in" type="text" name="name" placeholder="Name" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name'], ENT_QUOTES) : ''; ?>">
          <?php echo $nameAlert; ?>
          <input class="scroll-element js-scroll fade-in" type="text" name="email" placeholder="Enter email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES) : ''; ?>">
          <?php echo $emailAlert; ?>
          <textarea class="scroll-element js-scroll fade-in" name="message" placeholder="How may I help?"><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message'], ENT_QUOTES) : ''; ?></textarea>
          <?php echo $error; ?>
          <input type="submit" name="submit" class="btn" id="btn" value="Send Message">
        </form>
      </div>
    </div>
    <footer>
      <div class="container scroll-container">
        <nav>
          <ul>
            <li><a href="https://www.instagram.com/jaseyhsmith/" target="_blank"><i class="fab fa-instagram social-link"></i></a></li>
            <li><a href="https://github.com/JaseySmith" target="_blank"><i class="fab fa-github social-link"></i></a></li>
            <li><a href="https://www.linkedin.com/in/jasey-smith-34594a15b/" target="_blank"><i class="fab fa-linkedin-in social-link"></i></a></li>
            <li><a href="https://codepen.io/JaseySmith" target="_blank"><i class="fab fa-codepen social-link"></i></a></li>
          </ul>
        </nav>
        <p class="text copyright">© 2022 <a href="index.php">Jasey Smith</a></p>
      </div>
    </footer>
  </div>
  <script src="scripts/navbar.js"></script>
  <script src="scripts/scrollAnimations.js"></script>
</body>
</html>