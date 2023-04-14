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
    <link rel="stylesheet" href="css/style_1.css">
    <link rel="stylesheet" href="css/style_2.css">
    <link rel="stylesheet" href="css/net.css">

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
                nbb: ['{\\mathbb{N}}'],
                zbb: ['{\\mathbb{Z}}'],
                bb: ['{\\mathbb{#1}}', 1],
                cbb: ['{\\mathbb{C}}'],
                squarebracket: ['{\\left[ #1 \\right]}', 1],
                delbydel: ['{\\dfrac{\\partial #1}{\\partial {#2}}}', 2],
                d: ['{ \\mathrm{#d}}'],
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

<style>
    .accordion__item {
        padding: 20px;
        margin-bottom: 20px;
        border: 1px solid #f2f2f2;
        border-radius: 4px;
        box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.06);
    }
    
    .accordion__body {
        display: none;
        padding-top: 10px;
    }

    .accordion__body p {
        margin-bottom: 0;
    }

    .accordion__title {
        font-size: 23px;
        cursor: pointer;
        margin-bottom: 0;
        position: relative;
    }

    .accordion__title:after {
        content: "";
        width: 20px;
        height: 20px;
        position: absolute;
        right: 0;
        top: 0;
        background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAABlUlEQVRIS72V6zEEQRSFv81ABogAESADIiADRIAIEAEiQASIABmQgQyor+rerZ7enp71Y92qqZrpxznnPmfGim22YnyWITgGdoHteNT0Hs8j8NQT2SM4AK6AjQkvP4EzQLIFGyO4Bk7i9Bfg90uodllv9oBTYD3OeUaigbUISnAv+N0zSfRUuwnS+fmawLA8xO5OoXiqFvToLQ4dluGqCYynLi+jvCZNT8TYzM2SwGq5BYz5VGLHPEqBcy9KgjvgqFJ/ETn4HkFci2K4jP304h5Q8KAPrO0tIGMv+HnkYR+oSQR/joqSwPOZC7HEGRD8hIr0SgBLU1IvlCQl+EeUbAoY4JQhqgnka5G4nsprcPdGCeoQZdhrkmy0FniGyD3fByFqJblF4loL3PVukrPJBnVcVE964pJjolVZ3TL14lSjSaK1wFP9oI/+fVSorhx2qnKA9exPwy6BShLD5vdrNa79CQmeY2VhktZVVKs06QLnvB/zwphL9KcfTgkmkY91bVdnmdo3gjaBE2CZf/JECvrbKyf4BdpXaxkir2UhAAAAAElFTkSuQmCC") no-repeat;
        background-size: 20px;
    }

    .accordion__title.active2 {
        color: #c456f7;
    }

    .accordion__title.active2:after {
        transform: rotate(-180deg);
    }
</style>



    <!-- math -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=TeX-AMS-MML_HTMLorMML.js"></script>
    <!-- <script type="text/javascript" src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS_HTML"></script> -->
    <!-- <link rel="stylesheet" href="latex2html5.min.css"> -->
    <!-- <script type="text/javascript" src="..//scripts//latex2html5.min.js"></script> -->

    <!-- Title -->
    <title>CSIR NET</title>


</head>

<body>

    <!-- The foolowing php code will produce the header file-->

    <?php $page_name = "net" ?>

    <?php include 'head_foot/header.php'; ?>

    <!-- End of the header code -->

    <!-- Main  -->

    <div class="container">
        <div class="jumbotron jumbotron-math">
            <p>
                <h1 class="display-4">About the exam</h1>
                <hr>
                <un>
                    <li>
                        CSIR-UGC NET is a test being conducted to determine the eligibility
                        for 'Junior Research Fellowship (JRF) and for Lectureship/Assistant Professor' in Indian universities and
                        colleges subject to fulfilling the eligibility criteria laid down by UGC
                    </li>
                    <li>
                        It is being conducted twice in a year.
                    </li>
                    <li>
                        The official page is <a href="https://csirnet.nta.nic.in/WebInfo/Page/Page?PageId=1&LangId=P">CSIR-NET Homepage</a>.
                    </li>
                    <li>
                        The question paper shall be divided in three parts.
                        <br> <br>
                        <p>
                            <strong>Part A</strong> <br>
                            This part shall carry 20 questions pertaining to General Science, Quantitative Reasoning & Analysis
                            and Research Aptitude. The candidates shall be required to answer any 15 questions. Each question 
                            shall be of two marks. The total marks allocated to this section shall be 30 out of 200.
                            <hr>
                        </p>
                        <p>
                            <strong>Part B</strong> <br>
                            This part shall contain 40 Multiple Choice Questions (MCQs) generally covering the topics given 
                            in the syllabus. A candidate shall be required to answer any 25 questions. Each question shall be 
                            of three marks. The total marks allocated to this section shall be 75 out of 200.
                            <hr>
                        </p>
                        <p>
                            <strong>Part C</strong> <br>
                            This part shall contain 60 questions that are designed to test a candidate's knowledge of scientific
                            concepts and/or application of the scientific concepts. The questions shall be of analytical nature 
                            where a candidate is expected to apply the scientific knowledge to arrive at the solution to the given
                            scientific problem. The questions in this part shall have multiple correct options. Credit in a question 
                            shall be given only on identification of ALL the correct options. No credit shall be allowed in a question 
                            if any incorrect option is marked as correct answer. No partial credit is allowed. A candidate shall be required 
                            to answer any 20 questions. Each question shall be of 4.75 marks. The total marks allocated to this section shall 
                            be 95 out of 200.
                            <hr>
                        </p>
                    </li>
                    <li>
                        The syllabus can be found <a href="https://csirhrdg.res.in/SiteContent/ManagedContent/ContentFiles/20201221140054469mathmeticascience_syllbus.pdf">here</a>.
                    </li>
                </un> 
            </p>
            
            <br>
            <h1 class="display-4">What we will do</h1>
            <hr>
            <p class="mb-0">
                We will be providing solutions to the part B and C. There will be some resource material from here and there mostly
                from the <a href="https://math.stackexchange.com">Math Stack Exchange</a>. In most of the case the paper code will be
                <strong>A</strong>.
                <hr>
            </p>
            <br> <br>


            <div class="accordion">

                <div class="accordion__item">

                    <h2 class="accordion__title" >CSIR-NET Mathematics Nov. 2020</h2>

                    <div class="accordion__body">
                        <hr>
                        
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="home" aria-expanded="true">Section B</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="profile">Section C</a>
                            </li>
                          </ul>

                          <div class="tab-content" id="myTabContent">

                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="1-tab">
                        
                              <div class="tab-pane-header">
                                <p>
                                    <div class="row">

                                        <div class="col-sm"> 
                                            <a href="NET-Nov_2020/problem-21_NET_Nov-2020.php" target="_blank">Problem 21</a>
                                        </div> <!-- col1 -->
                                        <div class="col-sm">
                                            <a href="NET-Nov_2020/problem-22_NET_Nov-2020.php" target="_blank">Problem 22</a>
                                        </div> <!-- col2 -->
                                        <div class="col-sm">
                                            <a href="NET-Nov_2020/problem-23_NET_Nov-2020.php" target="_blank">Problem 23</a>
                                        </div> <!-- col3 -->
                                        <div class="col-sm">
                                            <a href="NET-Nov_2020/problem-24_NET_Nov-2020.php" target="_blank">Problem 24</a>
                                        </div> <!-- col4 -->

                                    </div> <!-- row -->
                                    

                                    <div class="row">

                                        <div class="col-sm"> 
                                            <a href="NET-Nov_2020/problem-21_NET_Nov-2020.php" target="_blank">Problem 25</a>
                                          </div> <!-- col1 -->
                                          <div class="col-sm">
                                              <a href="NET-Nov_2020/problem-22_NET_Nov-2020.php" target="_blank">Problem 26</a>
                                          </div> <!-- col2 -->
                                          <div class="col-sm">
                                              <a href="NET-Nov_2020/problem-21_NET_Nov-2020.php" target="_blank">Problem 27</a>
                                          </div> <!-- col3 -->
                                          <div class="col-sm">
                                              <a href="NET-Nov_2020/problem-21_NET_Nov-2020.php" target="_blank">Problem 28</a>
                                          </div> <!-- col4 -->

                                    </div> <!-- row -->
                                </p>
                              </div>   
                                                         
                            </div>

                            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="2-tab">

                                <div class="tab-pane-header">
                                    <p>
                                        <div class="row">
    
                                            <div class="col-sm"> 
                                              <a href="NET-Nov_2020/problem-21_NET_Nov-2020.php" target="_blank">Problem 21</a>
                                            </div> <!-- col1 -->
                                            <div class="col-sm">
                                                <a href="NET-Nov_2020/problem-22_NET_Nov-2020.php" target="_blank">Problem 22</a>
                                            </div> <!-- col2 -->
                                            <div class="col-sm">
                                                <a href="NET-Nov_2020/problem-21_NET_Nov-2020.php" target="_blank">Problem 23</a>
                                            </div> <!-- col3 -->
                                            <div class="col-sm">
                                                <a href="NET-Nov_2020/problem-21_NET_Nov-2020.php" target="_blank">Problem 24</a>
                                            </div> <!-- col4 -->
    
                                        </div> <!-- row -->
                                        
    
                                        <div class="row">
    
                                            <div class="col-sm"> 
                                                <a href="NET-Nov_2020/problem-21_NET_Nov-2020.php" target="_blank">Problem 25</a>
                                              </div> <!-- col1 -->
                                              <div class="col-sm">
                                                  <a href="NET-Nov_2020/problem-22_NET_Nov-2020.php" target="_blank">Problem 26</a>
                                              </div> <!-- col2 -->
                                              <div class="col-sm">
                                                  <a href="NET-Nov_2020/problem-21_NET_Nov-2020.php" target="_blank">Problem 27</a>
                                              </div> <!-- col3 -->
                                              <div class="col-sm">
                                                  <a href="NET-Nov_2020/problem-21_NET_Nov-2020.php" target="_blank">Problem 28</a>
                                              </div> <!-- col4 -->
    
                                        </div> <!-- row -->
                                    </p>
                                </div>   

                            </div>

                          </div>
                        
                    </div> <!-- accordion__body -->

                </div> <!-- accordion item -->

            </div> <!-- accordion -->


        </div> <!-- jumbotron -->
    </div> <!-- container -->


    <br><br><br><br><br>
   

    <!--- Footer -->
    <?php include 'head_foot/footer.php'; ?>
    <!--- End Footer -->


        <!-- Java Script -->
        <script>
            $(".accordion__title.active2").next().slideDown();
            $(".accordion__title").on("click", function () {
            if( $(this).hasClass('active2') ) {
                    $(this).removeClass("active2").next().slideUp();
                } else {
                    $(".accordion__title.active2").removeClass("active2").next(".accordion__body").slideUp();
                $(this).addClass('active2').next('.accordion__body').slideDown();
                }
            });
        </script>

        <script>
            $(document).ready(function() {
                // executes when HTML-Document is loaded and DOM is ready
                
                if (location.hash !== '') $('a[href="' + location.hash + '"]').tab('show');
                    return $('a[data-toggle="tab"]').on('shown', function(e) {
                    return location.hash = $(e.target).attr('href').substr(1);
                    });
                     
                // document ready  
            });
        </script>
        

        
</body>

</html>