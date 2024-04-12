<?php
                            $rep = $bdd->query("SELECT * FROM expertise");
                            while ($categories = $rep->fetch()) {?>
                        <li><a class="dropdown-item" href="detail_expertise.php?<?php echo $categories['id'] ?>">
                                <?php echo $categories['domaine'] ?>
                            </a></li>

                        <?php }?> 