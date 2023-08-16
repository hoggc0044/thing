<?php include "topbit3.php"; ?>

            <main>
                <h2>Steven Joseph Robert Geoff Justus Alan Lawrence Richard Shane the 7743rd</h2>
                <p>
                    
                </p>

                <p>
                A name so long, it's<br>
                Like a river of syllables<br>
                That flows through time.<br>
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
                            xmlhttp.open("GET","polls/haiku_vote.php?vote="+int,true);
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