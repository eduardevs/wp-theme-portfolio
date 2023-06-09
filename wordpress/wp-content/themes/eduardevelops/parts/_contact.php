<section id="contact" class="row ">
            <div class="container mt50">
                <h2>Contact</h2>

                <p>Contactez-moi</p>

                <div class=" justify-content-center">
                    <!-- add to action contactform.php -->
                    <form id="form-contact" action="./contactform.php" method="POST" class="p-3 rounded">
                        <div class="row">
                            <div class="col">
                                <label for="f-name">Prenom :</label>
                                <input type="text" class="form-control" name="f-name" required>
                            </div>
                            <div class="col">
                                <label for="l-name">Nom :</label>
                                <input type="text" name="l-name" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="email">Email :</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="" required>
                            </div>

                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="objet">Objet :</label>
                                <input type="text" name="objet" class="form-control" id="sujet" placeholder="" required>
                            </div>

                        </div>
                        <div class="row mt-3">
                            <div class="col text-center">
                                <label for="message">Message :</label>
                                <textarea name="message" id="message" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <h5>
                                <!-- <?php
                                        if (isset($_SESSION['message'])) {
                                            echo '<div class="alert alert-success my-2">' . $_SESSION['message'] . '</div>';

                                            unset($_SESSION['message']);
                                        }

                                        if (isset($_SESSION['message-error'])) {
                                            echo '<div class="alert alert-danger my-2">' . $_SESSION['message-error'] . '</div>';

                                            unset($_SESSION['message-error']);
                                        }
                                        ?> -->



                                <!-- Mettre en place le message ici -->
                            </h5>
                            <div class="g-recaptcha d-flex justify-content-center" data-sitekey="6Lciqa4cAAAAAIu3wmPCWRWeOfmlKcH_bus_bWqm"></div>
                            <!-- <div class="g-recaptcha" data-sitekey="your_site_key"></div> -->
                            <input type="submit" name="submit" class="btn bg-orange btn-lg rounded-pill mt-3">

                        </div>
                    </form>


                </div>
            </div>
        </section> 