<?php include "topbit2.php"; ?>

            <main>
                <h2>James Jamal David Harry Styles Jarquavious Bartholomew the 3rd</h2>
                <p>
                    
                </p>

                <p>
                    He is the man with the golden voice,<br>
                    The one who can make you feel so alive.<br>
                    He is the one who can make you dance,<br>
                    And forget all your troubles and pain.<br>
                    He is the one who can make you smile,<br>
                    And make you feel like you're on top of the world.<br>
                    He is the one who can make you believe,<br>
                    That anything is possible.<br>
                    <br>
                    He is James Jamal Douglas Harry Styles Jarquavious Bartholomew the 3rd,<br />
                    And he is the best there is.<br>
                    <br>
                    He is the one who can make you cry,<br>
                    When he sings a song that hits you deep inside.<br>
                    He is the one who can make you laugh,<br>
                    With his silly jokes and funny antics.<br>
                    He is the one who can make you feel,<br>
                    All the things that you've never felt before.<br>
                    He is the one who can make you whole,<br>
                    And make you feel like you belong.<br>
                    <br>
                    He is James Jamal Douglas Harry Styles Jarquavious Bartholomew the 3rd,<br />
                    And he is the one true zombie.<br>
                        <h2>
                            this thing makes no sense<br>
                        </h2>
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
                            xmlhttp.open("GET","polls/freeverse_vote.php?vote="+int,true);
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