<?php
// +-----------------------------------------------------------------------+
// | Piwigo - a PHP based photo gallery                                    |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2008-2013 Piwigo Team                  http://piwigo.org |
// | Copyright(C) 2003-2008 PhpWebGallery Team    http://phpwebgallery.net |
// | Copyright(C) 2002-2003 Pierrick LE GALL   http://le-gall.net/pierrick |
// +-----------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify  |
// | it under the terms of the GNU General Public License as published by  |
// | the Free Software Foundation                                          |
// |                                                                       |
// | This program is distributed in the hope that it will be useful, but   |
// | WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU      |
// | General Public License for more details.                              |
// |                                                                       |
// | You should have received a copy of the GNU General Public License     |
// | along with this program; if not, write to the Free Software           |
// | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, |
// | USA.                                                                  |
// +-----------------------------------------------------------------------+
$lang['fhp_activate_sts_comment'] = 'Active HTTP Strict Transport Security (HSTS)<br/>Η επιλογή αυτή πρέπει να ενεργοποιείται εάν έχετε στην κατοχή σας μια υπογεγραμμένο πιστοποιητικό TLS. Δεν έχει καμία επίδραση εάν το "Force HTTPS" είναι απενεργοποιημένο<br/><br/> <i>Το HSTS είναι ένας μηχανισμός ασφάλειας στο διαδίκτυο με την οποία ο διακομιστής web δηλώνει στον web browser για να αλληλεπιδράσουν χρησιμοποιώντας ασφαλείς συνδέσεις HTTPS. Όταν το HSTS είναι ενεργό, ένα πεδίο επικεφαλίδας "Strict-Transport-Security" τοποθετείται στην κεφαλίδα HTTP, και κάθε σύνδεσμος site αντικαθίσταται αυτόματα με έναν ασφαλή σύνδεσμο.<br/></i>';
$lang['fhp_about'] = 'Σχετικά';
$lang['fhp_test_https_link'] = 'Δοκιμάστε αυτή τη σελίδα σε https (αναδυόμενο παράθυρο)';
$lang['fhp_submit'] = 'Υποβολή';
$lang['fhp_sts_maxage_label'] = 'STS max-age';
$lang['fhp_sts_maxage_comment'] = 'STS max-age σε δευτερόλεπτα';
$lang['fhp_security_group'] = 'Ρυθμίσεις Ασφαλείας';
$lang['fhp_options_group'] = 'Επιλογές';
$lang['fhp_force_https_warning'] = '<b> Προσοχή! </ b> Πριν από την ενεργοποίηση της ασφαλούς σύνδεσης, παρακαλούμε να βεβαιωθείτε ότι ο server σας υποστηρίζει https. Μπορείτε να κάνετε κλικ στον παρακάτω σύνδεσμο για να δοκιμάσεται (φορτώνει αυτή τη σελίδα σε λειτουργία https).';
$lang['fhp_force_https_label'] = 'Χρησιμοποιήστε HTTPS';
$lang['fhp_force_https_comment'] = 'Ενεργοποιήστε αυτή την επιλογή για να αναγκάσει τους πελάτες να συνδέονται με το Piwigo μέσω ασφαλούς σύνδεσης.';
$lang['fhp_description'] = 'Αυτό το πρόσθετο έρχεται να καλύψει ένα κενό ασφαλείας στο Piwigo. Επιτρέπει στους διαχειριστές να αναγκάσουν τη χρήση ασφαλείς συνδέσεις SSL για περιήγηση στο Piwigo (όταν είναι διαθέσιμο https στο server που φιλοξενεί). <br>Συνιστούμε να χρησιμοποιούνται ασφαλείς συνδέσεις για την προστασία του χρήστη και τις μεταδώσεις κωδικού πρόσβασης.';
$lang['fhp_activate_sts_label'] = 'Χρησιμοποιήστε STS';
$lang['Your hosting server does support HTTPS.'] = 'Ο διακομιστής φιλοξενίας σας υποστηρίζει HTTPS.';
$lang['Your hosting server does not support HTTPS, a SSL certificate is required. Plugin activation is disabled.'] = 'Ο διακομιστής φιλοξενίας σας δεν υποστηρίζει HTTPS, απαιτείται πιστοποιητικό SSL. Η ενεργοποίηση της προσθήκης είναι απενεργοποιημένη.';
$lang['Plugin could not automatically verify your host SSL/HTTPS compatibility. Please manually check that HTTPS navigation is available using the following button. Do NOT activate HTTPS if page within the popup can not be loaded successfully.'] = 'Το πρόσθετο δεν μπόρεσε να επαληθεύσει αυτόματα τη συμβατότητα SSL/HTTPS του κεντρικού υπολογιστή σας. Ελέγξτε με μη αυτόματο τρόπο ότι η πλοήγηση HTTPS είναι διαθέσιμη χρησιμοποιώντας το παρακάτω κουμπί. ΜΗΝ ενεργοποιήσετε το HTTPS εάν η σελίδα στο αναδυόμενο παράθυρο δεν μπορεί να φορτωθεί με επιτυχία.';
$lang['Parial activation'] = 'Μερική ενεργοποίηση';
$lang['Manual Verification'] = 'Μη αυτόματη επαλήθευση';
$lang['I have proceeded to the manual check'] = 'Έχω προχωρήσει στον χειροκίνητο έλεγχο';
$lang['HTTPS unavailable'] = 'Το HTTPS δεν είναι διαθέσιμο';
$lang['HTTPS available'] = 'Διαθέσιμο HTTPS';
$lang['HTTPS activated for identification, register and profile pages only'] = 'Το HTTPS ενεργοποιήθηκε μόνο για σελίδες αναγνώρισης, εγγραφής και προφίλ';
$lang['HTTPS activated for administration pages only'] = 'Το HTTPS ενεργοποιήθηκε μόνο για σελίδες διαχείρισης';
$lang['Global activation'] = 'Παγκόσμια ενεργοποίηση';
$lang['Global HTTPS'] = 'Παγκόσμιο HTTPS';
$lang['Force usage of HTTPS on this site'] = 'Αναγκαστική χρήση HTTPS σε αυτόν τον ιστότοπο';
$lang['Force HTTPS for identification'] = 'Επιβολή HTTPS για αναγνώριση';
$lang['Force HTTPS for administration'] = 'Επιβολή HTTPS για διαχείριση';
$lang['Advanced options'] = 'Προχωρημένες επιλογές';
$lang['301 permanent, 302 temporary'] = '301 μόνιμοι, 302 προσωρινοί';