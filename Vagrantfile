# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "ubuntu/hirsute64"
# config.vm.network "forwarded_port", guest: 80, host: 8080
  config.vm.boot_timeout = 1200
  config.vm.hostname = "phpserver"
  config.vm.network "private_network", ip: "192.168.33.10"
  config.vm.synced_folder "htdocs", "/var/www/html", owner: "vagrant", group: "www-data", mount_options: ["dmode=775,fmode=664"]
  config.vm.provision "shell", path: "config.sh"
  config.vm.provider "virtualbox" do |v|
    v.memory = 3184
    v.cpus = 2
    v.name = "phpserver"
  end
end
