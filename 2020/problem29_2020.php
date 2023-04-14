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
    
    <meta name="title" content="Problem-29 MA-2020">
    <meta name="description" content="let $T_{n}$ and $T$ be the bounded linear operators defined by">
    <meta name="keywords" content="gate mathematics, Gate MA 2020, Gate MA, problem 29, solution of problem 29, gate ma 2020 problem 29 solution, let $T_{n}$ and $T$ be the bounded linear operators defined by">
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
    <title>Problem-29 MA-2020</title>

</head>

<body>
    <!-- The foolowing php code will produce the header file-->

    <?php $page_name = "gate" ?>

    <?php include 'head_foot_2020/header.php'; ?>

    <!-- End of the header code -->



     <div class="container">
        <div class="jumbotron jumbotron-math">

            <!-- Problem goes from here -->

            <h2 class="problem">Problem-29</h2>
            For $n \in \mathbb{N},$ let $T_{n}:\left(l^{1},\|\cdot\|_{1}\right) \rightarrow\left(l^{\infty},\|\cdot\|_{\infty}\right)$ and $T:\left(l^{1},\|\cdot\|_{1}\right) \rightarrow\left(l^{\infty},\|\cdot\|_{\infty}\right)$ be the bounded linear operators defined by $$ T_{n}\left(x_{1}, x_{2}, \ldots\right)=\left(y_{1}, y_{2},\ldots\right), \text { where } y_{j}=\left\{\begin{array}{cl} x_{j}, & j \leq n \\
                                                   x_{n}, & j>n
                                \end{array}\right.$$ 
            and $$T\left(x_{1}, x_{2}, \ldots\right)=\left(x_{1}, x_{2}, \ldots\right).$$
            Then
            <br><br>
            <ol type="A">
                <li>$\left\|T_{n}\right\|$ does not converge to $\|T\|$ as $n \rightarrow \infty$.</li>
                <br>
                <li>$\left\|T_{n}-T\right\|$ converges to zero as $n \rightarrow \infty$.</li>
                <br>
                <li>for all $x \in l^{1},\left\|T_{n}(x)-T(x)\right\|$ converges to zero as $n \rightarrow \infty$.</li>
                <br>
                <li>for each non-zero $x \in l^{1},$ there exists a continuous linear functional $g$ on $l^{\infty}$ such that $g\left(T_{n}(x)\right)$ does not converge to $g(T(x))$ as $n \rightarrow \infty$.</li>
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

             <h3 class="options">(A) $\left\|T_{n}\right\|$ does not converge to $\|T\|$ as $n \rightarrow \infty$.</h3>
                Here 
                \begin{align*}
                    ||T_n||&=\sup_{||x||_1=1}||T_n(x)||_{\infty}\\
                    &=\sup_{||x||_1=1}||(x_1,...,x_{n-1},x_n,x_n...)||_{\infty}\\
                    &=\sup_{||x||_1=1}\max_{1\leq j\leq n}|x_j|\\
                    &=\sup_{\sum_{i=1}^{\infty}|x_i|=1}\max_{1\leq j\leq n}|x_j|\\
                    &\leq \sup_{\sum_{i=1}^{\infty}|x_i|=1}\max_{1\leq j\leq n}\sum_{i=1}^{\infty}|x_i|\\
                    &=\max_{1\leq j\leq n}\sup_{\sum_{i=1}^{\infty}|x_i|=1}\sum_{i=1}^{\infty}|x_i|\\
                    &=\max_{1\leq j\leq n}(1)=1
                \end{align*}  
                That is $||T_n||\leq 1$ for all $n\in \mathbb{N}$. But for $x=(1,0,0,....)\in l^1$, $$||T_n(x)||_{\infty}=||(1,0,0,....)||_{\infty}=1\text{ for all }n\in \mathbb{N}.$$ Hence $||T_n||=1$ for all $n\in \mathbb{N}$.<br>
                Here $T$ is nothing but identity map from $l^1$ to $l^{\infty}$ and as $l^1\subset l^{\infty}$, so its norm is $1$, i.e., $||T||=1$. Thus $1=||T_n||\to ||T||=1$ as $n\to \infty$. So this is <strong>FALSE</strong>.
               <br><br>

             <h3 class="options">(B) $\left\|T_{n}-T\right\|$ converges to zero as $n \rightarrow \infty$.</h3>
               If we consider $e_n=(0,0,...,0,1,0,...)\in l^1$, then $||e_n||=1$ and $||(T_n-T)e_n||_\infty=1$. So 
               \begin{align*}
                    ||T_n-T||&=\sup_{||x||_1=1}||(T_n-T)x||_\infty\\
                    &\geq 1 \text{ for all }n\in \mathbb{N}.
               \end{align*}
               Thus $||T_n-T||$ does not converge to $0$ as $n\to \infty$. So this is <strong>FALSE</strong>.
               <br><br>

             <h3 class="options">(C) for all $x \in l^{1},\left\|T_{n}(x)-T(x)\right\|$ converges to zero as $n \rightarrow \infty$.</h3>
               Let $x=(x_1,x_2,...,x_n,...)\in l^1$. Then $\lim_{n\to \infty}|x_n|=0$. So $\{x_n\}$  also converges to $0$ and thus Cauchy. Therefore for given $\epsilon>0$, there exists $k\in \mathbb{N}$ such that $|x_l-x_m|<\epsilon/2$ for all $l,m\geq k$.
               Now \begin{align*}
                        ||T_n(x)-T(x)||_\infty &=||(x_1,...,x_{n-1},x_n,x_n,...)-(x_1,...,x_{n-1},x_n,x_{n+1},...)||_\infty\\
                        &=\max_{j>n}|x_n-x_j|\\
                        &\leq \epsilon/2<\epsilon, \text{ for all }n\geq k.
                   \end{align*}
               This shows that $||T_n(x)-T(x)||$ converges to $0$ as $n\to \infty$. So this is <strong>TRUE</strong>.
               <br><br>

             <h3 class="options">(D) for each non-zero $x \in l^{1},$ there exists a continuous linear functional $g$ on $l^{\infty}$ such that $g\left(T_{n}(x)\right)$ does not converge to $g(T(x))$ as $n \rightarrow \infty$.</h3>
               As the statement (C) is true, so for any $x\in l^1$, $T_n(x)\to T(x)$ as $n\to \infty$ in $l^\infty$.<br>
               So for any continuous functional $g$ on $l^\infty$, we must have $g(T_n(x))\to g(T(x))$ as $n\to \infty$ (by continuity of $g$). So this is <strong>FALSE</strong>.

            </div><br><br>
            <a href="problem28_2020.php"><div class="button prev">$\leftarrow$ Problem 28</div></a>
            <a href="problem30_2020.php"><div class="button next">Problem 30 $\rightarrow$</div></a>
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
        <a href="problem29_2020.php" style="text-decoration: none";><button type="button" class="btn btn-primary btn-circle btn-md">29</button> </a>
        <a href="problem30_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">30</button> </a>
        <a href="problem31_2020.php" style="text-decoration: none";><button type="button" class="btn btn-light btn-circle btn-md">31</button> </a>
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
        document.getElementById("answer").innerHTML = "Correct option is (C)";
    }
    </script>



</body>

</html>