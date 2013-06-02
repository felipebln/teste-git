init-+-NetworkManager-+-dhclient
     |                |-dnsmasq
     |                `-3*[{NetworkManager}]
     |-VBoxSVC---10*[{VBoxSVC}]
     |-VBoxXPCOMIPCD
     |-accounts-daemon---2*[{accounts-daemon}]
     |-acpid
     |-apache2---5*[apache2]
     |-at-spi-bus-laun-+-dbus-daemon
     |                 `-3*[{at-spi-bus-laun}]
     |-at-spi2-registr---{at-spi2-registr}
     |-avahi-daemon---avahi-daemon
     |-bluetoothd
     |-colord---{colord}
     |-console-kit-dae---64*[{console-kit-dae}]
     |-cron
     |-cups-browsed
     |-cupsd
     |-3*[dbus-daemon]
     |-2*[dbus-launch]
     |-gconfd-2
     |-6*[getty]
     |-gnome-keyring-d---5*[{gnome-keyring-d}]
     |-gvfs-afc-volume---2*[{gvfs-afc-volume}]
     |-gvfs-gphoto2-vo---{gvfs-gphoto2-vo}
     |-gvfs-mtp-volume---{gvfs-mtp-volume}
     |-gvfs-udisks2-vo---{gvfs-udisks2-vo}
     |-gvfsd---{gvfsd}
     |-gvfsd-fuse---4*[{gvfsd-fuse}]
     |-gvfsd-http-+-sh---pxgsettings---2*[{pxgsettings}]
     |            `-2*[{gvfsd-http}]
     |-gvfsd-metadata---{gvfsd-metadata}
     |-gvfsd-trash---{gvfsd-trash}
     |-mdm---mdm-+-Xorg---2*[{Xorg}]
     |           `-gnome-session-+-cinnamon-launch-+-cinnamon-+-VirtualBox---7*[{VirtualBox}]
     |                           |                 |          |-chrome-+-chrome
     |                           |                 |          |        |-chrome-+-chrome
     |                           |                 |          |        |        `-2*[{chrome}]
     |                           |                 |          |        |-chrome-sandbox---chrome-+-chrome-+-6*[chrome---3*[{chrome}+
     |                           |                 |          |        |                         |        `-chrome---5*[{chrome}]
     |                           |                 |          |        |                         `-nacl_helper_boo
     |                           |                 |          |        `-34*[{chrome}]
     |                           |                 |          |-firefox-+-plugin-containe---3*[{plugin-containe}]
     |                           |                 |          |         `-30*[{firefox}]
     |                           |                 |          |-gnome-terminal-+-bash---pstree
     |                           |                 |          |                |-gnome-pty-helpe
     |                           |                 |          |                `-3*[{gnome-terminal}]
     |                           |                 |          |-skype---24*[{skype}]
     |                           |                 |          |-transmission-gt---5*[{transmission-gt}]
     |                           |                 |          `-5*[{cinnamon}]
     |                           |                 `-{cinnamon-launch}
     |                           |-cinnamon-screen---2*[{cinnamon-screen}]
     |                           |-gnome-fallback----2*[{gnome-fallback-}]
     |                           |-gnome-settings--+-syndaemon
     |                           |                 `-4*[{gnome-settings-}]
     |                           |-mintupdate-laun---sh---mintUpdate---2*[{mintUpdate}]
     |                           |-nemo---3*[{nemo}]
     |                           |-nm-applet---3*[{nm-applet}]
     |                           |-polkit-gnome-au---{polkit-gnome-au}
     |                           |-ssh-agent
     |                           `-3*[{gnome-session}]
     |-modem-manager
     |-nmbd
     |-polkitd---{polkitd}
     |-postgres---4*[postgres]
     |-pulseaudio---2*[{pulseaudio}]
     |-rsyslogd---3*[{rsyslogd}]
     |-rtkit-daemon---2*[{rtkit-daemon}]
     |-smbd---smbd
     |-sshd
     |-udevd---2*[udevd]
     |-udisksd---4*[{udisksd}]
     |-upowerd---2*[{upowerd}]
     |-upstart-file-br
     |-upstart-socket-
     |-upstart-udev-br
     `-wpa_supplicant
