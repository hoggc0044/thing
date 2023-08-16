<?php include "topbit4.php"; ?>

            <main>
                <h2>Douglas Harry Jennifer Kevin Bradley Hill the 3124th</h2>
                <p>
                    
                </p>

                <p>
                    There once was a man named Hill,<br>
                    With so many names, he was chill.<br>
                    He saved people,<br>
                    With his cool demeanor,<br>
                    He would always be right on the kill.<br>
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
                            xmlhttp.open("GET","polls/limerick_vote.php?vote="+int,true);
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