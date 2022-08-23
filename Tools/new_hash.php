<?php
$key=$_POST["key"];
$txnid=$_POST["txnid"];
$amount=$_POST["amount"]; //Please use the amount value from database
$productinfo=$_POST["productinfo"];
$firstname=$_POST["firstname"];
$email=$_POST["email"];
$salt="MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQDPfl4jlE80RIO86ZURk9sX+MCVDSiBgMe1pZkqthBmuWKMGkpPGACfk4VBRq97rJct2eLKYTez13uKvfCgbQZJk2ugMkM1S3VHpgxehdeC3c9Y7bVfpKMbLVxzf7/ryjv6QGa5RFakhf07r0DPlGjrnQ6ue53ZAzPIeSrObHqNWHjgVvlPjzGu+KjkWdF0T3g4qMOCGwxOz9HANNLY+QUDnBE2O1bgza6SzxKLIygdLh7f8gyLXaVBNQP6WGDL8cgNJfVKWZRWXfSaousG9nh0MXwwJ4OODDknDHNm2woNoTNxaP+xTlaW7+AJw/KkKnCBXHD90kPj9lbU+i8JJVKXAgMBAAECggEADgw7KWOAHUTKOn8B9aex/KR9vVmftWzXmIe2n/qlj57beirJfyNb33HoYqv7c38S2SrYPOVqFQXwukrzwJjBBTgy4Cym+jO6o/gs/DVJivWjdRza27fUxyFCEhvDDZ6qgt3bVo224/qiU2khFSyyEcmXVd7OqAOcfOUfLcyQW4NTrhOUkCHia+m7l9ArvJkLUF0MdYr9tUSWy8sFTouRw0zyYxRb2GHCZJiCPQr4XezDP25lIuxCrehB1+7TGB7mae1Kqw8JXHwrxLdU6Tx5JUBSdeDD0E/N3kO3yLVpFruNDaqwjkUxmEVU3aBOC9hjkPFSP2N8OXec6cKnWGEVYQKBgQDo8y/IZ1TeUeLrcFReVFZung6mSzUJv/6fNfAxnw5ErYQq+fcwRMmW4fGf704oPx9UeO1SqH+LanSHFWKZBBIFBy/Tao735LEZjkNwOo4DMEHSVd5Jk7xM6S69Gp51VDJgF6N4ZDOGT7XnCxw/FsYKm/FpfDMpxYfYG/gYVcxAUQKBgQDkBln8IZw0cyyAQ2WKY9YxnzJiwzDT+1PRpTkVruAPRdbzckjxqKyjLk2emXRVfssLeRkeM8sGu0q+T7fQCNc/44iW+mgZRPzAOdUHfOFAuDnDOke+gKbrQcFwHTPhZRnokgpnzRcg+BIncWdjdfE2ODghQXpt5arhpqC/k6XSZwKBgGtQNI/+wkMUuBO8ELHP6m1VFOyYsttF/ld78qX5XwpWYQ+nTa+H0NJYTgZeqMOzqIwylSnCA9fG992PBXf2PxLf57FeYnRifw+F0R1vbCKd5YSvGBMPIuzPcz+cdqkYW4iW+zCoAHB8YhEItj9+D0et5T2yAKPaoqT05YrYY5qxAoGBAL5X+ve4Sr+RwP0UxYdfTabAgHvm+jSKIO7pIBzUjN7S6trvdKqdpfbVqR+Sc4UGwZHDNc97Zqgo4fy5aPQ03RHM6vE0+H7XkrEX1ZdZjGLNJhKs7MS+ehf6HPJsvikRjy4P8rWxgvQXgHgCd06UXpVnGpvQH9XrGNkikh85rftTAoGBANyBgfnXnGRSIZ1MWtFEb7yT232wjQR+1/cSK2GTNnCwBCglQBQWDfsX7dZ5M+Qc+HryBif90kFb6b1eb0kwWkpW8l5so3py9kB2yhmSxTaXY3sLLV/FYJoGBkZXV608E+7XQNS12r2oM3n/w0kEHShUXy8Djvx74lLQT5cqN4jm"; //Please change the value with the live salt for production environment

//hash sequence

//String hashSequence = key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5||||||salt;


$hashSeq = $key.'|'.$txnid.'|'.$amount.'|'.$productinfo.'|'.$firstname.'|'.$email.'|||||||||||'.$salt;

$hash = hash("sha512", $hashSeq);

error_log("all posted variables:".print_r($_POST,true));

echo $hash;
?>
