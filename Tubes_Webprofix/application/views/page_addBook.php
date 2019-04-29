
                                        <div class="card-body">
                                                <h2 class="mb-0">Add a book to Open Library</h2>
                                                <p>We require a minimum set of fields to create a new record. These are those fields.</p>
                                            <form class="form" role="form" autocomplete="off" method="POST" action="<?php echo base_url('index.php/Cbook/tambahbuku/'); ?>">
                                                <div class="label">
                                                        <label for="title" style="font-weight:700">Title</label>
                                                </div>
                                            
                                                <div class="form-group row">
                                                    <div class="col-lg-9">
                                                        <input class="form-control" type="text" value="" name="judul" >
                                                    </div>
                                                </div>
                                                <div class="label">
                                                        <label for="author" style="font-weight:700">Author</label><span class="smaller-lighter"> Like, "Agatha Christie" or "Jean-Paul Sartre." We'll also do a live check to see if we already know the author.</span>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <div class="col-lg-9">
                                                        <input class="form-control1" type="text" value="" class="mr-4" name="autor" >                                         
            
                                                        <a href="#" style="text-decoration:underline">Add another author?</a>
                                                    </div>
                                                </div>
                                                <div class="label">
                                                        <label for="publisher" style="font-weight:700">Who is the publisher?</label>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <div class="col-lg-9">
                                                        <input class="form-control1" type="text" value="" name="publiser" >
                                                    </div>
                                                </div>
                                                <div class="label">
                                                        <label for="published" style="font-weight:700">When was it published?</label><span class="smaller-lighter"> The year it was published is plenty.</span>
                                                </div>
                                                
                                                <div class="form-group row">
                                                 
                                                    <div class="col-lg-9">
                                                        <input class="form-control1" type="text" value="" name="waktu_publis">
                                                    </div>
                                                </div>
                                                <div class="label">
                                                        <label for="id_value" style="font-weight:700">And optionally, an ID number — like an ISBN — would be helpful...</label>
                                                </div>
                                                    
                                                <div class="form-group row">
                                                    <div class="col-lg-9">
                                                            <select class="select" name="select" id="">
                                                                    <option name="option" value="Select">Select</option>
                                                                    <option name="option" value="Internet Archive">Internet Archive</option>
                                                                    <option name="option" value="ISBN 10">ISBN 10</option>
                                                                    <option name="option" value="ISBN 13">ISBN 13</option>
                                                                    <option name="option" value="LCCN">LCCN</option>
                                                                </select>
                                                                
                                                                <input size="20" type="text" value="" name="num" >
                                                          
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-9"><br>
                                                        <input type="submit" value="Add">
                                                        &nbsp;
                                                        <span><a href="" style="text-decoration:underline; color: red">Cancel</a></span> 
                                                    </div>
                                                </div>
                                                
                                            </form>
                                        </div>
                                