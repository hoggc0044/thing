<?php include "topbit5.php"; ?>

            <main>
                <h2>Alejandro James Jarquavious Jennifer Bartholomew Smith-Bradley Jen Steve Bob Jamal Richard Hill-Schmidt the 6758th</h2>
                <p>
                    
                </p>

                <p>
                Marvelous in mind and spirit, they shine,<br>
                Always seeking new heights, never confined,<br>
                Names they have many, each a unique sign,<br>
                Yearning for wisdom, their heart's design.<br>

                Nurturing souls with kindness and grace,<br>
                Eager to learn, with a smile on their face,<br>
                Seeking connections, they leave a trace,<br>
                Taking on challenges, at their own pace.<br>

                Making a mark in this world they roam,<br>
                Eternal in essence, a guiding light's home,<br>
                Savoring life's colors, like an ancient tome.<br>
                </p>
            </main>

            <aside>
 
                <script>
                    function getVote(int) {
                        var xmlhttp=new XMLHttpRequest();
                            xmlhttp.onreadystatechange=function() {
                            if (this.readyState==4 && this.status==200) {
                                document.getElementById("poll").innerHTML=this.responseText;
                                    }
                                }
                            xmlhttp.open("GET","polls/acrostic_vote.php?vote="+int,true);
                        xmlhttp.send();
                    }
                </script>

                <div id="poll">
                    <h3>Was this poem created by a human?</h3>
                    <form>
                        Yes: <input type="radio" name="vote" value="0" onclick="getVote(this.value)"><br>
                        No: <input type="radio" name="vote" value="1" onclick="getVote(this.value)">
                    </form>
                </div>
            </aside>

<?php include "bottombit.php"; ?>