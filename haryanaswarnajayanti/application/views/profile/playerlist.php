   <div class="title-bar green-bar top-space">List of Players of Haryana State</div>
            <div><table class=" table table-striped table-responsive ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($rows)):
                            ?>
                            <tr>
                                <?php
                                $count = 1;
                                foreach ($rows as $player):
                                    ?>
                                    <td><?php echo $count; ?></td>
                                    <td><a href="<?php echo base_url(); ?>profile/index/<?php echo $player['profiler_alias']; ?>"><img src="<?php echo base_url(); ?>uploads/profilerImage/<?php echo $player['profiler_image']; ?>" border="0" /><span style="margin-left:8px;"><?php echo $player['profiler_name']; ?></span></a></td>	
                                    <td><?php echo!empty($player['profiler_address']) ? $player['profiler_address'] : '--'; ?></td>
                                    <?php
                                    $count++;
                                endforeach;
                                ?>
                            </tr>
                            <?php
                        endif;
                        ?>
                    </tbody>
                </table>
            </div>