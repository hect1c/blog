# -*- mode: ruby -*-
# vi: set ft=ruby :

VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
    config.vm.box = "ubuntu/trusty64"

    config.vm.network :private_network, ip: "192.168.100.90"
    config.vm.network :forwarded_port, guest: 80, host: 8090
    config.vm.synced_folder ".", "/srv/www/martina-blog/app/", type: "nfs"

    DCD_CLOUD_PATH = "/home/hart/Sites/ansible_scripts/"

    config.vm.provision "ansible" do |ansible|
        ansible.playbook = "#{DCD_CLOUD_PATH}/apps/martina-blog/configure_and_deploy.yml"
        ansible.inventory_path = "#{DCD_CLOUD_PATH}/hosts/vagrant"
        ansible.limit = "all"
        ansible.extra_vars = {
            vagrant: true
        }
    end

    config.vm.provider "virtualbox" do |v|
        v.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
        v.customize ["modifyvm", :id, "--natdnsproxy1", "on"]
        v.memory = 2048
    end

end
