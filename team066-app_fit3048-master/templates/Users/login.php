

<script language="JavaScript" type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<div class="users form">

    <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
    </ul>

    <div class="tab-content">
        <div id="signup">
            <h1>Sign Up</h1>

            <form action="/" method="post" class="form">

                <div class="top-row">
                    <div class="field-wrap">

                    </div>


                </div>

                <div class="field-wrap">
                    <p>
                        Welcome to SEQ Steel Fixings!
                    </p>
                </div>

                <div class="field-wrap">

                </div>
                <p>
                    If you want a new account, please

                <?= $this->Html->link(__('Sign Up'), ['action' => 'add']) ?>.</p>


            </form>

        </div>

        <div id="login">
            <h1>Welcome Back!</h1>
            <?= $this->Flash->render() ?>
            <?= $this->Form->create() ?>
            <fieldset>


            <form action="/" method="post">

                <div class="field-wrap">
                    <label>
                        Email Address<span class="req">*</span>
                    </label>
                    <input type="email" name="email" id="email"
                           required autocomplete="off"/>
                </div>

                <div class="field-wrap">
                    <label>
                        Password<span class="req">*</span>
                    </label>
                    <input type="password" name="password" id="password"
                           required autocomplete="off"/>
                </div>

                <button class="button button-block" type="submit"/>Log In</button>

            <?= $this->Form->end() ?>
            </form>

            </fieldset>

        </div>

    </div><!-- tab-content -->

</div> <!-- /form -->
<script>
    $('.form').find('input, textarea').on('keyup blur focus', function (e) {

        var $this = $(this),
            label = $this.prev('label');

        if (e.type === 'keyup') {
            if ($this.val() === '') {
                label.removeClass('active highlight');
            } else {
                label.addClass('active highlight');
            }
        } else if (e.type === 'blur') {
            if( $this.val() === '' ) {
                label.removeClass('active highlight');
            } else {
                label.removeClass('highlight');
            }
        } else if (e.type === 'focus') {

            if( $this.val() === '' ) {
                label.removeClass('highlight');
            }
            else if( $this.val() !== '' ) {
                label.addClass('highlight');
            }
        }

    });

    $('.tab a').on('click', function (e) {

        e.preventDefault();

        $(this).parent().addClass('active');
        $(this).parent().siblings().removeClass('active');

        target = $(this).attr('href');

        $('.tab-content > div').not(target).hide();

        $(target).fadeIn(600);

    });
</script>
