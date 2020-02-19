<div class="signupbox">
    <div class="header">
        <h2>Signup</h2>
    </div>
    <form action="<?= base_url('auth/index'); ?>" method="post">
        <div class="user">
            <!-- input text -->
            <div class="top">
                <label>Name </label><br>
                <input name="nama" id="nama" type="text" placeholder="Enter Your Name" value="<?= set_value('name'); ?>">
                <br>
                <font color="red">
                    <?= form_error('nama', '<small>', '</small>'); ?>
                </font>
                <br>
                <label>Email </label><br>
                <input name="email" id="email" type="text" placeholder="Enter Your Email" value="<?= set_value('email'); ?>">
                <br>
                <font color="red">
                    <?= form_error('email', '<small>', '</small>'); ?>
                </font>
            </div>
            <!-- end input text -->
            <br>
            <!-- gender -->
            <div class="gender">
                <p>Gender :</p>
                <input name="gender" id="gender" type="radio" value="Male">
                <label>Male</label>
                <input name="gender" id="gender" type="radio" value="Female">
                <label>Female</label>
                <br>
                <font color="red">
                    <?= form_error('gender', '<small>', '</small>'); ?>
                </font>
            </div>
            <!-- end gender -->
            <br>
            <!-- city -->
            <div class="bottom">
                <p>City :</p>
                <select name="city" id="city">
                    <option value=""></option>
                    <option value="Solo">Solo</option>
                    <option value="Karanganyar">Karanganyar</option>
                    <option value="Sukoharjo">Sukoharjo</option>
                    <option value="Sragen">Sragen</option>
                </select>
                <br>
                <font color="red">
                    <?= form_error('city', '<small>', '</small>'); ?>
                </font>
            </div>
            <!-- end city -->
            <br>
            <!-- status -->
            <div class="status">
                <p>Status :</p>
                <input type="checkbox" name="status" id="status" value="Pelajar">
                <label>Pelajar</label>
                <input type="checkbox" name="status" id="status" Value="Kerja">
                <label>Kerja</label>
                <input type="checkbox" name="status" id="status" value="Kuliah">
                <label>Kuliah</label>
                <br>
                <font color="red">
                    <?= form_error('status', '<small>', '</small>'); ?>
                </font>
            </div>
            <!-- end status -->
            <br>
        </div>
        <!-- submit -->
        <div class="sub">
            <input type="submit" name="submit" value="Submit" />
        </div>
        <!-- end submit -->
    </form>
</div>