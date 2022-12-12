

<?php $__env->startSection('content'); ?>

    <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff" style="border-radius:4px">
        <tbody>

            <tr>
                <td height="40"></td>
            </tr>
            <tr
                style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI','Roboto','Oxygen','Ubuntu','Cantarell','Fira Sans','Droid Sans','Helvetica Neue',sans-serif;color:#4e5c6e;font-size:14px;line-height:20px;margin-top:20px">
                <td class="m_-2847063553519003846content" colspan="2" valign="top"
                    align="center" style="padding-left:90px;padding-right:90px">

                    <table width="100%" cellpadding="0" cellspacing="0" border="0"
                        bgcolor="#ffffff">
                        <tbody>

                            <tr>
                                <td height="30"></td>
                            </tr>

                            <tr>
                                <td align="center">
                                    <span
                                        style="color:#48545d;font-size:22px;line-height:24px">
                                        Deposit Confirmed
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td height="24"></td>
                            </tr>
                            <tr>
                                <td height="1" bgcolor="#DAE1E9"></td>
                            </tr>

                            <tr>
                                <td height="24"></td>
                            </tr>

                            <tr>
                                <td align="left">
                                    <span
                                        style="color:#48545d;font-size:14px;line-height:24px">
                                       Dear <?php echo e($user->name); ?>, <br> <br>

                                       Your Deposit of <strong><?php echo e($data['amount']); ?></strong> with transaction ID <strong>#<?php echo e($data['tnx_id']); ?></strong> has successfully be been confirmed on <strong><?php echo e($data['time']); ?></strong>. Funds have been credited to your Bitstocks wallet.
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td height="20"></td>
                            </tr>

                            <tr>
                                <td height="10">
                                    <p
                                        style="color:#48545d;font-size:14px;line-height:24px">
                                       Warm Regard. <br>
                                       <Strong>Bitstocks ltd.</Strong>
                                    </p>
                                </td>
                            </tr>

                            <tr>
                                <td align="center">

                                </td>
                            </tr>
                        </tbody>
                    </table>

                </td>
            </tr>
            <tr>
                <td height="60"></td>
            </tr>
        </tbody>
    </table>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('emails.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH S:\jobs\bitstocks_trading\resources\views/emails/deposit-confirm.blade.php ENDPATH**/ ?>