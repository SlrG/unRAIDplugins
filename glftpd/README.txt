                                Credits:
                             **************
Great thanks go to Limetech for giving us unRAID. To the glFTPd project for
their feature rich ftp server and the icon I used for this plugin.

Further thanks go to overbyrn. This Plugin uses a lot of his code he did for
his nzbget plugin. Please check it out, it is really great! Also to Benni-Chan,
Influencer, prostuff1 and speeding_ant for their great plugins. Studying their
code was what made this plugin possible.
                             **************

Be aware, that this plugin DOESN'T use tcpd for glftpd access and does a NOT
jailed installation.

After the installation glftpd will only be available locally through your
servers console or a telnet session. Only a single administrative FTP user
named glftpd was created and has the password glftpd.

This user has full access to glftpd's features and can only log in to the ftp
service from the system itself (localhost).

To log on enter "ftp localhost &lt;port&gt;", with &lt;port&gt; being the portnumber you
chose in the plugin settings (default is: 1337).

You have to create new users and make them accessible from other hosts yourself.
For further information start reading from:
https://wiki.archlinux.org/index.php/glftpd#local_testing
and the glftpd.docs from here:
http://glftpd.dk/files/docs/glftpd.docs

SlrG