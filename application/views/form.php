<br>
<section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Add Event</h2>
                    <hr> </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <form enctype="multipart/form-data" action="<?= base_url()."crud/insert"; ?>" method="post">
                        <div class="form-group">
                           <label for="nim">Name Event</label>
                            <input type="text" name="name" id="name" class="form-control"required> </div>
                        <div class="form-group">
                            <label for="nama">Location</label>
                            <input type="text" name="location" id="location" class="form-control" required> </div>
                        <div class="form-group">
                            <label for="time">Time</label>
                            <input type="text"  name="time" id="time" class="form-control" required> </div>
                        
<!--
                         <div class="form-group">
                            <label for="category">Select Category</label>
                            <select name="category" id="category" class="form-control">
                                <option value="">---Choose Category---</option>
                                <option value="event">Event</option>
                                <option value="seminar">Seminar</option>
                                
                            </select>
                        </div>
-->
                        <div class="form-group">
                            <label for="pesan">Description</label>
                            <textarea name="description" id="description" cols="30" class="form-control" rows="10"></textarea>
                        </div>
                         <div class="form-group">
                            <label for="img">Image</label>
                            <input type="file" name="img" id="img" class="form-control">
                            
                             </div>
                        
                        <button class="btn btn-primary" id="submit" name="submit" role="button" value="Submit">Send Message</button>
                        </form>
                </div>
            </div>
        </div>
    </section>