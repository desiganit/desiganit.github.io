<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- change the image -->
    <link rel="icon" type="image/gif/png" href="img/z.png">

    <!-- Include Bootstrap CSS/JS/JQ -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@484&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500&family=EB+Garamond:wght@484&display=swap" rel="stylesheet">

    <!-- custom css -->
    <link rel="stylesheet" href="../css/style_1.css">
    <link rel="stylesheet" href="../css/style_2.css">

    <!-- meta tags -->
    
    <meta name="title" content="Problem-31 MA-2020">
    <meta name="description" content="Let $f: \mathbb{R}\to \mathbb{R}$ be defined by">
    <meta name="keywords" content="gate mathematics, Gate MA 2020, Gate MA, problem 31, solution of problem 31, gate ma 2020 problem 31 solution, Let $f: \mathbb{R}\to \mathbb{R}$ be defined by">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">

    <!-- end of meta tags -->

    <!-- Mathjax Setting-->
    <script type="text/javascript">
    window.MathJax = {
        config: ["MMLorHTML.js"],
        jax: ["input/TeX", "input/MathML", "output/HTML-CSS", "output/NativeMML"],
        menuSettings: {
            texHints: true,
            semantics: false,
            zoom: 'NoZoom', // For zoom on double click "Double-Click",
            zscale: "200%",
        },
        extensions: ["tex2jax.js", "mml2jax.js", "MathMenu.js", "MathZoom.js"],
        TeX: {
            extensions: ["AMSmath.js", "AMSsymbols.js", "AMScd.js", "mathchoice.js",
                "action.js", "autobold.js", "begingroup.js", "unicode.js",
                "begingroup.js", "cancel.js", "color.js", "enclose.js",
                "extpfeil.js", "noErrors.js", "noUndefined.js", "autoload-all.js"
            ],
            Macros: {
                innerprod: ['{\\langle #1 \\rangle}', 1],
                paran: ['{\\left( #1\\right)}', 1],
                rbb: ['{\\mathbb{R}}'],
                cbb: ['{\\mathbb{C}}'],
                zbb: ['{\\mathbb{Z}}'],
                nbb: ['{\\mathbb{N}}'],
                bb: ['{\\mathbb{#1}}', 1],
                squarebracket: ['{\\left[ #1 \\right]}', 1],
                delbydel: ['{\\dfrac{\\partial #1}{\\partial {#2}}}', 2],
                d: ['{ \\mathrm{#d}}'],
                norm: ['{|| #1 ||}', 1]
                
            }
        },
        tex2jax: {
            inlineMath: [
                ['$', '$'],
                ["\\(", "\\)"]
            ],
            displayMath: [
                ['$$', '$$'],
                ["\\[", "\\]"]
            ],
            processEscapes: true
        }
    };
    </script>

    <!-- math -->
    <script type="text/javascript" src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS_HTML"></script>
    <link rel="stylesheet" href="latex2html5.min.css">
    <script type="text/javascript" src="..//scripts//latex2html5.min.js"></script>

    <!-- Title -->
    <title>Problem-31 MA-2020</title>

</head>

<body>
     <!-- The foolowing php code will produce the header file-->

    <?php $page_name = "gate" ?>

    <?php include 'head_foot_2020/header.php'; ?>

    <!-- End of the header code -->


     <div class="container">
        <div class="jumbotron jumbotron-math">

            <!-- Problem goes from here -->

            <h2 class="problem">Problem-31</h2>
            Let $f: \mathbb{R}\to \mathbb{R}$ be defined by
            $$f(x)=\sum_{n=0}^{\infty}\frac{1}{2^n}\chi_{(n,n+1]}(x),$$
            where $\chi_{(n,n+1]}$ is the characteristic function of the interval $(n,n+1]$. For $\alpha \in \mathbb{R}$, let
            $S_{\alpha}=\{x\in \mathbb{R}: f(x)> \alpha\}$. Then
            <br><br>
            <ol type="A">
                <li>$S_{\frac{1}{2}}$ is open </li>
                <br>
                <li>$S_{\frac{\sqrt{5}}{2}}$ is not measurable</li>
                <br>
                <li>$S_0$ is closed</li>
                <br>
                <li>$S_{\frac{1}{\sqrt{2}}}$ is measurable</li>
            </ol>
        

            <!-- Problem ends at here -->
            <br><br>

            <!-- See answer; don't need to change this -->
            <button onclick="seeAnswer()" type="button" class="btn btn-outline-primary">
                Click to see the correct Answer
            </button>
            
            <br><br>

            <!-- YouTube video -->

            <!-- <iframe width="720" height="405" src="https://www.youtube.com/embed/BtF-3sseK3Q" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->

            <!-- YouTube video ends -->

            <!-- Answer begins from here don't need to change this-->
            <p style="color:red" id="answer"></p>
            <br>

            <!-- Definitions or hints -->

            <button type="button" class="collapsible-defintion-hints">Definition/Hints</button>
            <div class="content">

                <!-- Definitions -->
                <h3 class="definition"> Definition </h3>
                <ol>
                    <li> </li> 
                    <li> </li> 
                    <li> </li>
                </ol>

                <!-- Hints -->
                <h3 class="hints"> Hints </h3>
                <ol>
                    <li>  </li>
                    <li>  </li>
                </ol>
            </div>
            <br>

            <!-- Solution begins from here -->
            <button type="button" class="collapsible-solution">Solution</button>
            <div class="content">
              
             <h3 class="options">(A) $S_{\frac{1}{2}}$ is open.</h3>
                If $x\in (-\infty,0]$, then $\chi_{(n,n+1]}(x)=0$ for all $n\geq 0$. Thus
    $$f(x)=\sum_{n=0}^{\infty}\frac{1}{2^n}\chi_{(n,n+1]}(x)=\sum_{n=0}^{\infty}\frac{1}{2^n}\cdot 0=0< \frac{1}{2}.$$
    If $x\in (0,1]$, then $\chi_{(0,1]}(x)=1$ and $\chi_{(n,n+1]}(x)=0$ for all $n\geq1$. Thus,
    \begin{align*}f(x)=\sum_{n=0}^{\infty}\frac{1}{2^n}\chi_{(n,n+1]}(x)=\frac{1}{2^0}\cdot 1+\sum_{n=}^{\infty}\frac{1}{2^n}\cdot 0=1>\frac{1}{2}.
    \end{align*}
    Similarly, if $x\in (n,n+1]$, then
    $$f(x)=\sum_{n=0}^{\infty}\frac{1}{2^n}\chi_{(n,n+1]}(x)=\frac{1}{2^n}\leq \frac{1}{2}, \text{ for } n\geq 1.$$
    That is,
    \begin{align}
    f(x)= \left\{
                 \begin{array}{ll}
                   0, & \hbox{for $x\in (-\infty, 0]$;} \\
                   1, & \hbox{for $x\in (0,1]$;} \\
                   \frac{1}{2^n}, & \hbox{for $x\in (n,n+1], n\geq 1$.}
                 \end{array}
               \right.
    \end{align}
    Thus, $S_{\frac{1}{2}}=\{x\in \mathbb{R}: f(x)> \frac{1}{2}\}=(0,1]$ which is not an open set. That is $(A)$ is <strong>FALSE</strong>.
               <br><br>

             <h3 class="options">(B)$S_{\frac{\sqrt{5}}{2}}$ is not measurable </h3>
              From Part $(A)$, we see that the maximum value of $f(x)$ is $1$. Since, $\frac{\sqrt{5}}{2}>1$, we have
            $$S_{\frac{\sqrt{5}}{2}}=\{x\in \mathbb{R}: f(x)> \frac{\sqrt{5}}{2}\}=\phi,$$ is the empty set, which is measurable. That is, $(B)$ is <strong>FALSE</strong>.
               <br><br>

             <h3 class="options">(C) $S_0$ is closed</h3>
               If $x\in (-\infty,0]$, then $f(x)=0$ and if $x\in (n,n+1]$, $n\geq 0$ then $f(x)=\frac{1}{2^n}>0$. Thus,
     $$S_0=\{x\in \mathbb{R}: f(x)>0\}=\bigcup_{n=0}^{\infty}(n,n+1]=(0,\infty),$$ which is open. That is, $(C)$ is <strong>FALSE</strong>.
               <br><br>

             <h3 class="options">(D) $S_{\frac{1}{\sqrt{2}}}$ is measurable</h3>
                From the definition of $f$ (as described in part (A)), we see that $f(x)>\frac{1}{\sqrt{2}}$, only when $x\in (0,1]$. Thus
    $$S_{\frac{1}{\sqrt{2}}}=\{x\in \mathbb{R}: f(x)>\frac{1}{\sqrt{2}} \}=(0,1],$$ which is measurable as semi-open sets are measurable. Hence, $(D)$ is  <strong>TRUE</strong>.

             

            </div><br><br>
            <a href="problem30_2020.php"><div class="button prev">$\leftarrow$ Problem 30</div></a>
            <a href="problem32_2020.php"><div class="button next">Problem 32 $\rightarrow$</div></a>
        </div>
    </div>

<br><br><br><br>

<div class="container">
    <div class="jumbotron jumbotron-custom xyz">
        <a href="problem1_2020.php" style="text-decoration: none;"><button type="button" class="btn btn-light btn-circle btn-md">1</button> </a>
        <a href="problem2_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">2</button> </a>
        <a href="problem3_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">3</button> </a>
        <a href="problem4_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">4</button> </a>
        <a href="problem5_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">5</button> </a>
        <a href="problem6_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">6</button> </a>
        <a href="problem7_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">7</button> </a>
        <a href="problem8_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">8</button> </a>
        <a href="problem9_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">9</button> </a>
        <a href="problem10_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">10</button> </a>
        <a href="problem11_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">11</button> </a>
        <a href="problem12_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">12</button> </a>
        <a href="problem13_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">13</button> </a>
        <a href="problem14_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">14</button> </a>
        <a href="problem15_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">15</button> </a>
        <a href="problem16_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">16</button> </a>
        <a href="problem17_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">17</button> </a>
        <a href="problem18_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">18</button> </a>
        <a href="problem19_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">19</button> </a>
        <a href="problem20_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">20</button> </a>
        <a href="problem21_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">21</button> </a>
        <a href="problem22_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">22</button> </a>
        <a href="problem23_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">23</button> </a>
        <a href="problem24_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">24</button> </a>
        <a href="problem25_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">25</button> </a>
        <a href="problem26_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">26</button> </a>
        <a href="problem27_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">27</button> </a>
        <a href="problem28_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">28</button> </a>
        <a href="problem29_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">29</button> </a>
        <a href="problem30_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">30</button> </a>
        <a href="problem31_2020.php" style="text-decoration: none";><button type="button" class="btn btn-primary btn-circle btn-md">31</button> </a>
        <a href="problem32_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">32</button> </a>
        <a href="problem33_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">33</button> </a>
        <a href="problem34_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">34</button> </a>
        <a href="problem35_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">35</button> </a>
        <a href="problem36_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">36</button> </a>
        <a href="problem37_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">37</button> </a>
        <a href="problem38_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">38</button> </a>
        <a href="problem39_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">39</button> </a>
        <a href="problem40_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">40</button> </a>
        <a href="problem41_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">41</button> </a>
        <a href="problem42_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">42</button> </a>
        <a href="problem43_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">43</button> </a>
        <a href="problem44_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">44</button> </a>
        <a href="problem45_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">45</button> </a>
        <a href="problem46_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">46</button> </a>
        <a href="problem47_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">47</button> </a>
        <a href="problem48_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">48</button> </a>
        <a href="problem49_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">49</button> </a>
        <a href="problem50_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">50</button> </a>
        <a href="problem51_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">51</button> </a>
        <a href="problem52_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">52</button> </a>
        <a href="problem53_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">53</button> </a>
        <a href="problem54_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">54</button> </a>
        <a href="problem55_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">55</button> </a>
    </div>
</div>


    
<br><br><br><br><br>
   

    <!--- Footer -->
    <?php include 'head_foot_2020/footer.php'; ?>
    <!--- End Footer -->


<!-- Some JS code -->

<script>
    // For collapsible hints
    var coll = document.getElementsByClassName("collapsible-defintion-hints");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }


    // for collapsible solution
    var coll = document.getElementsByClassName("collapsible-solution");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }
    </script>

    <script>
      // for see answer 
    function seeAnswer() {
        document.getElementById("answer").innerHTML = "Correct option is (D)";
    }
    </script>



</body>

</html>