node {
    checkout scm

    // composer install
    docker.image('composer').inside('-u root') {
        sh 'composer install'
    }

    // upload file
    docker.image('agung3wi/alpine-rsync:1.1').inside('-u root') {
        sshagent (credentials: ['ssh-pttas-server-lokal']) {
            sh 'mkdir -p ~/.ssh'
            sh 'ssh-keyscan -H "192.168.88.40" > ~/.ssh/known_hosts'
            sh 'rsync -rav --delete ./ pttas@192.168.88.40:/home/admin/web/devops1.appdemo.online/ --exclude=.env --exclude=.git --exclude=storage'
        }
    }
}
