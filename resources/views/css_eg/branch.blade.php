<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSS Second Page</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/second.css') }}" />
</head>

<body>

    <div class="app">

        <ul class="a">
            <li>Home</li>
            <li>Documentation</li>
            <li>About</li>
            <li>Contact</li>
            <li> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae quod nesciunt repellat enim
                voluptatum
                omnis ut, quaerat delectus reprehenderit velit nisi aliquam sed numquam rem sint, quas minima natus
                ullam!</li>
        </ul>
        <div class="sticky">
            I am sticky!
        </div>
        <ul class="b">
            <li>Home</li>
            <li>Documentation</li>
            <li>About</li>
            <li>Contact</li>
        </ul>
        <ol class="c">
            <li>Home</li>
            <li>Documentation</li>
            <li>About</li>
            <li>Contact</li>
        </ol>

        <ol class="d">
            <li>Home</li>
            <li>Documentation</li>
            <li>About</li>
            <li>Contact</li>
        </ol>
        <ol class="e">
            <li>Home</li>
            <li>Documentation</li>
            <li>About</li>
            <li>Contact</li>
        </ol>

        <div style="overflow-x: auto">
            <table>
                <caption>People Information</caption>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>

                </tr>
                <tr>
                    <td>Than Myat</td>
                    <td>Soe</td>
                    <td>Lamadaw</td>
                </tr>
                <tr>
                    <td>Shine Thu</td>
                    <td>Lwin</td>
                    <td>Sanchaung</td>
                </tr>
                <tr>
                    <td>Naung</td>
                    <td>Naung</td>
                    <td>Sule</td>
                </tr>
            </table>
        </div>
        <div class="imgbox" id="box1">Box1
            <img src="{{ asset('img/sunlight.jpg') }}" alt="Sunlight Image" width="100%" height="80%" />
            <button onclick="moveTheBox()" class="btn">Move</button>
        </div>

        <div class="imgbox" id="box2">Box2
            <img src="{{ asset('img/earth.gif') }}" alt="Earth" width="100%" height="80%" />
            <button onclick="hideTheBox()" class="btn">Hide</button>
        </div>

        <div class="imgbox" id="box3">Box3
            <img src="{{ asset('img/banana.gif') }}" alt="Banana" width="100%" height="80%" />
            <button onclick="resetAll()" class="btn">Reset All </button>
        </div>

        <div class="ex1">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit earum, magni asperiores suscipit quos nemo!
                Praesentium reiciendis obcaecati, quasi asperiores impedit maxime ipsam. Sequi quidem officia incidunt
                non dolore cumque?</p>
        </div>
        <br>
        <div class="ex2">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi nulla aliquid eius! Nemo sint,
                cupiditate facilis natus ipsum voluptatibus eum error, doloribus ratione, expedita harum commodi
                similique ipsam voluptate iusto.</p>
        </div>

        <br>
        <div class="position-div">
            <div class="static">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, alias natus? Nulla fuga neque
                excepturi aperiam, accusantium ex vel rerum vero explicabo, quos sed, consequatur voluptatem praesentium
                consequuntur? Reiciendis, fugiat!
            </div>
            <br>
            <div class="relative">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus atque repudiandae quidem sed
                accusantium ipsum! Perferendis adipisci ab, commodi impedit harum suscipit odio, odit deleniti cum,
                dolor laboriosam voluptates eveniet!
            </div>
            <div class="absolute">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam nobis similique recusandae pariatur
                culpa tempora asperiores dignissimos alias veniam ad? Cum, quia distinctio omnis quisquam deserunt
                aliquam. Accusantium, unde molestias.
            </div>
            <div class="fixed">
                Here is div, position with fixed value;
            </div>
        </div>

        <div class="overlapping">
            <img class="overlap" src="{{ asset('img/banana.gif') }}" alt="zindex" width="30%" height="150px" />
            <h1>This is a heading.</h1>
            <p>Because the image has a z-index of -1, it will be placed behind the text.</p>
        </div>
        <br><br>
        <div class="position-eg">
            <h1>Image Text</h1>
            <p>Add some text to an image in the top left corner:</p>
            <div class="container">
                <img class="img-txt" src="{{ asset('img/img_5terre_wide.jpg') }}" alt="image text" width="100%"
                    height="300" />
                <div class="top-left">Top Left</div>
            </div>
        </div>

        <div class="overflow-eg">
            <div class="scroll">
                This text is really long and the height of its container is only 100 pixels. Therefore, a scrollbar is
                added to help the reader to scroll the content. Lorem ipsum dolor sit amet, consectetuer adipiscing
                elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim
                qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber
                tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer
                possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.
            </div>

            <div class="hidden">
                This text is really long and the height of its container is only 100 pixels. Therefore, a scrollbar is
                added to help the reader to scroll the content. Lorem ipsum dolor sit amet, consectetuer adipiscing
                elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim
                qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber
                tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer
                possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.
            </div>

            <div class="auto">
                This text is really long and the height of its container is only 100 pixels. Therefore, a scrollbar is
                added to help the reader to scroll the content. Lorem ipsum dolor sit amet, consectetuer adipiscing
                elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim
                qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber
                tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer
                possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.
            </div>

            <div class="visible">
                This text is really long and the height of its container is only 100 pixels. Therefore, a scrollbar is
                added to help the reader to scroll the content. Lorem ipsum dolor sit amet, consectetuer adipiscing
                elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim
                qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber
                tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer
                possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.
            </div>
            <h1>OverFlow Eg</h1>
        </div>
        <br>
        <br>
        <div class="float">
            <p> In this example, the image will float to right in the paragraph, and the text in the paragraphp will
                wrap around the image.</p>
            <p><img class="right" src="{{ asset('img/sunlight.jpg') }}" alt="float image"
                    style="width:100px; height:100px; margin-left:20px;">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque, nisi animi mollitia iste, quaerat
                tempore vero reiciendis reprehenderit id eos velit aut voluptates? At ex facere facilis quis eaque
                impedit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil expedita et rerum voluptatibus
                ducimus sint praesentium assumenda consectetur, at iure est dolor velit nam pariatur sapiente dolorem
                incidunt reiciendis itaque?</p>

            <p><img class="left" src="{{ asset('img/sunlight.jpg') }}" alt="float image"
                    style="width:100px; height:100px; margin-left:20px;">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque, nisi animi mollitia iste, quaerat
                tempore vero reiciendis reprehenderit id eos velit aut voluptates? At ex facere facilis quis eaque
                impedit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil expedita et rerum voluptatibus
                ducimus sint praesentium assumenda consectetur, at iure est dolor velit nam pariatur sapiente dolorem
                incidunt reiciendis itaque?</p>
            <div class="float-all">
                <div class="div1 float-all">Div 1</div>
                <div class="div2 float-all">Div 2</div>
                <div class="div3 float-all">Div 3</div>
            </div>
            <br>
            {{-- clear and clearfix --}}
            <div class="clear-and-clearfix">
                <h2>Without Clear</h2>
                <div class="div1">
                    div1
                </div>
                <div class="div2">
                    Notice that div2 is after div1 in the HTML code. However, since div1 floats to the left, the text in
                    div2 flows around div1.
                </div>
                <br>

                <h2>With Clear</h2>
                <div class="div3">div3</div>
                <div class="div4">div4 - Here, clear: left; moves div4 down below the floating div3. The value "left"
                    clears elements floated to the left. You can also clear "right" and "both".</div>

                <h2>Problem Solving</h2>
                <div class="clear-problem">
                    <img class="img1" src="{{ asset('img/sunlight.jpg') }}" alt="float right" />
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto dignissimos adipisci
                    asperiores! Maxime aperiam vitae expedita natus incidunt modi. Explicabo quaerat ut qui labore
                    quae, voluptas unde vero rerum earum!
                </div>
                <p style="clear: right;">Add a clearfix class with overflow: auto; to the containing element, to fix
                    this problem:</p>

                <div class="clear-fix">
                    <img class="img2" src="{{ asset('img/sunlight.jpg') }}" alt="float right">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti hic illo laborum? Maxime
                    similique adipisci ducimus hic nulla. Quis praesentium similique alias optio quasi qui delectus,
                    facere aperiam eaque tempore!
                </div>

                <div class="grid-box">
                    <div class="box" style="background-color: #bbb">
                        <p>Some text inside the box.</p>
                    </div>
                    <div class="box" style="background-color: #ccc">
                        <p>Some text inside the box.</p>
                    </div>
                    <div class="box" style="background-color: #ddd">
                        <p>Some text inside the box.</p>
                    </div>
                </div>
            </div>
            <div class="combinators">
                <div class="descendant">
                    <p>In this example, the decendant selector is used.</p>
                </div>
                <div class="child">
                    <p>In this example, the child selector is used.</p>
                </div>
                <div class="adjacent-slibing">
                    <p>In this example, the adjacent-slibing selector is used.</p>
                </div>
                <p> The above paragraph will not be color background.</p>
                <p>adjacent mean following. the first p is picked.</p>

                <div class="general-slibing">
                    <p>In this example, you will see the general slibing selector ~</p>
                </div>
                <p>paragraph 1</p>
                <p>paragraph 2</p>
            </div>

            <div class="pseudo-class">

                <div class="hover-me">
                    <span>Hover Me!</span>
                    <p>Show me!</p>
                </div>
                <a href="#box1">Pseudo Class Example</a>
                <div class="pseudo">
                    <p>Paragraph I</p>
                    <p>Paragraphp II</p>

                    <p>I am a <i>strong</i> person. I am a <i>strong</i> person.</p>
                    <p>I am a <i>strong</i> person. I am a <i>strong</i> person.</p>
                </div>

                <div class="pseudo-lang">
                    <p>Some text <q lang="no">A quote in a paragraph</q> Some text.</p>
                    <p>In this example, :lang defines the quotation marks for q elements with lang="no":</p>
                </div>
                <div class="pseudo-focus">
                    <input type="text" class="form-control" placeholder="Name">
                    <input type="radio" name="gender" value="male">Male <br>
                    <input type="radio" name="gender" value="female">Female <br>
                    <input type="checkbox" name="one" value="I"> I <br>
                    <input type="checkbox" name="two" value="II"> II <br>

                    <input type="text" placeholder="email" disabled class="pseudo-disabled">
                </div>
                <div class="pseudo-empty">
                    <p>A paragraph.</p>
                    <p></p>
                    <p>A paragraph.</p>
                    <p>Another paragraph.</p>

                    <div>
                        <p>The first paragraph.</p>
                    </div>
                    <p>The second paragraph.</p>
                    <p> The Third paragraph.</p>
                    <div>
                        <p>The fourth paragraph.</p>
                        <p>The fifth paragraph.</p>
                    </div>
                </div>
                <div class="pseudo-in-range">
                    <input type="number" min="5" max="10" value="7">
                </div>

                <div class="pseudo-invalid">
                    <input type="email" value="supportEmail">
                </div>

                <div class="pseudo-not">
                    <h1>This is heading h1 .</h1>
                    <h2>This is heading h2.</h2>
                </div>

                <div class="nth">
                    <ul>
                        <li>First</li>
                        <li>Second</li>
                        <li>Third</li>
                        <li>Fourth</li>
                        <li>Fifth</li>
                    </ul>
                </div>
                <div class="only-one-p">
                    <div>
                        <p>This is paragraph</p>
                    </div>
                    <div>
                        <p>This is paragraph</p>
                        <p>This is paragraph.</p>
                    </div>

                </div>
                {{-- input attribute --}}
                <div>
                    <div>
                        <input type="text">
                        <input type="text" required>
                    </div>
                    <div class="att">
                        <input type="number" min="5" max="10" value="17" title="out of range">
                        <input type="text" readonly value="read-only">
                    </div>

                    <div class="normal-required">
                        <h3>A demonstration of the :required selector.</h3>

                        <p>An optional input element:<br><input></p>

                        <p>A required input element:<br><input required></p>

                    </div>

                </div>

                <div class="pseudo-target">

                    <h1>This is a heading</h1>

                    <p><a href="#news1">Jump to New content 1</a></p>
                    <p><a href="#news2">Jump to New content 2</a></p>

                    <p>Click on the links above and the :target selector highlight the current active HTML anchor.</p>

                    <p id="news1"><b>New content 1...</b></p>
                    <p id="news2"><b>New content 2...</b></p>
                </div>
            </div>
            <h1>Pseudo Element</h1>
            <div class="pseudo-element">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quaerat voluptatem rem? Expedita,
                    veritatis. Quas corrupti numquam harum nesciunt libero repudiandae placeat necessitatibus provident
                    eos nisi amet molestias, eligendi perferendis.</p>
                <h1>This is heading</h1>

                <ul>
                    <li>Coffee</li>
                    <li>Tea</li>
                    <li>Milk</li>
                  </ul>
            </div>
            <br><br>
        </div>
        <script type="text/javascript">
            function moveTheBox() {
                document.getElementById('box1').style.display = "none";
            }

            function hideTheBox() {
                document.getElementById('box2').style.visibility = "hidden";
            }

            function resetAll() {
                document.getElementById('box1').style.display = "block";
                document.getElementById('box2').style.visibility = "visible";
            }

        </script>
</body>

</html>
