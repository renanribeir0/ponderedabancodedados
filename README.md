Link do site: http://ec2-54-156-52-197.compute-1.amazonaws.com/SamplePage.php
Link do vídeo: https://drive.google.com/file/d/1NK-Ll4FRxVAZgZgNiR4OtGpt-na-w7oB/view?usp=sharing



Executar um instância no EC2:

1. Entre no site (https://www.awsacademy.com/vforcesite/LMS_Login) e crie ou realize login.
<img width="960" alt="image" src="https://github.com/renanribeir0/ponderedabancodedados/assets/110369271/7bf30965-c903-4e6e-9573-b1cfee48e9f5">

2. Após acessar a plataforma, clique no canto direito, na aba “cursos”, logo após, clique em “AWS Academy Learner Lab [53542]”
<img width="960" alt="image" src="https://github.com/renanribeir0/ponderedabancodedados/assets/110369271/006f9cd7-0e97-4fb7-ba47-73757e1ff191">

3. Arraste a tela para baixo e clique em: “Módulos”
<img width="960" alt="image" src="https://github.com/renanribeir0/ponderedabancodedados/assets/110369271/b3aa1b5c-b4a0-422f-9c2a-b061795150ca">

4. Em seguida, “Laboratório de aprendizagem”
<img width="960" alt="image" src="https://github.com/renanribeir0/ponderedabancodedados/assets/110369271/9d8ad354-cd10-4129-8e25-73e7fc53b2e5">
   
5. Pressione “Start Lab, caso o led esteja vermelho”
<img width="452" alt="image" src="https://github.com/renanribeir0/ponderedabancodedados/assets/110369271/fc2a469a-3577-4e94-84bb-efe6cf95bbfc">

6. Quando o led estiver verde, clique em "AWS"
<img width="960" alt="image" src="https://github.com/renanribeir0/ponderedabancodedados/assets/110369271/b43230da-3046-453b-8016-abd71e904aed">

7. Logo em seguida, você será redirecionado para está página:
<img width="960" alt="image" src="https://github.com/renanribeir0/ponderedabancodedados/assets/110369271/8288f381-fb5e-4fc3-9431-60f04f7d838b">

8. Clique em EC2 e será direcionado para está página, clique em "Executar instância":
<img width="960" alt="image" src="https://github.com/renanribeir0/ponderedabancodedados/assets/110369271/7a064032-a7a0-4fd7-8b99-40bcaca5010e">

9. De um nome para sua instância, por exemplo, a minha, defini como "renanponderadaprogramacao":
<img width="960" alt="image" src="https://github.com/renanribeir0/ponderedabancodedados/assets/110369271/e32e8ba9-714a-4abe-8534-df12d93bab50">

10. Em Imagens de aplicações e sistemas operacionais (imagem de máquina da Amazon), selecione Amazon Linux e, depois, AMI do Amazon Linux 2023. Mantenha os padrões nas outras opções.
<img width="960" alt="image" src="https://github.com/renanribeir0/ponderedabancodedados/assets/110369271/67e80d2e-98a1-4712-a8e4-9d4c2dc17a71">

11. Em Par de chaves (login), clique em "Criar novo par de chaves" e crie um novo par de chaves e em seguida clique em "Criar par de chaves"
<img width="960" alt="image" src="https://github.com/renanribeir0/ponderedabancodedados/assets/110369271/cbd5c145-0b79-4451-932a-6b685990e87a">

12. Em configurações de rede, ative as opões (Permitir tráfego HTTPs da Internet), (Permitir tráfego SSH de) e (Permitir tráfego HTTP da Internet).
<img width="960" alt="image" src="https://github.com/renanribeir0/ponderedabancodedados/assets/110369271/ee8ef7c3-6cb7-471b-9384-4a042796db49">

13. Mantenhas configurações restantes e clique em "Executar instância", no canto inferior esquerdo da tela.
<img width="960" alt="image" src="https://github.com/renanribeir0/ponderedabancodedados/assets/110369271/58178c82-e674-48c4-8f7a-9c313a01dc60">

14. Por fim, você terá sua instância criada.
<img width="960" alt="image" src="https://github.com/renanribeir0/ponderedabancodedados/assets/110369271/b11092a0-a104-499d-b53f-468413a31db1">




Criar uma instância de banco de dados

Criaremos uma instância de banco de dados na AWS

1. Partindo do princípio que estamos logados na AWS Shool, clique no canto superior direito "serviços".
<img width="960" alt="image" src="https://github.com/renanribeir0/ponderedabancodedados/assets/110369271/9ef28587-e4ef-4c6c-97d3-e297fe97f600">

2. Em seguida, clique em "RDS".
<img width="960" alt="image" src="https://github.com/renanribeir0/ponderedabancodedados/assets/110369271/d51e8753-3694-4495-95ff-49f46747eabe">

3. Nesta aba, clique em "criar banco de dados".
<img width="960" alt="image" src="https://github.com/renanribeir0/ponderedabancodedados/assets/110369271/c7f652ff-92a6-4910-94bc-efa067368b61">

4. Em Escolher um método de criação de banco de dados, selecione "Criação fácil" e em seguida escolha a opção "MySQL".
<img width="960" alt="image" src="https://github.com/renanribeir0/ponderedabancodedados/assets/110369271/c1e4740d-8e4b-4ecc-af93-c202fe73afc5">

5. Mantenha essas configurações, no campo abaixo, em: Identificador da instância de banco de dados, Nome do usuário principal e Senha principal, defina da melhor forma que você achar.
<img width="960" alt="image" src="https://github.com/renanribeir0/ponderedabancodedados/assets/110369271/207c5c6d-7cd8-457e-becf-ea30bb2bfda7">

6.  Em Configurar conexão do EC2 - opcional, selecione "Conectar-se a um recurso de computação do EC2"
<img width="960" alt="image" src="https://github.com/renanribeir0/ponderedabancodedados/assets/110369271/11ee391e-f9dc-4923-99f0-3cb77d1a70d4">

7. Em Instância do EC2, selecione a instância que criamos no tutorial anterior.
<img width="960" alt="image" src="https://github.com/renanribeir0/ponderedabancodedados/assets/110369271/47c33b5f-59a6-4537-a272-32bbe0f5a15b">

8. Em Configuração da instância, selecione "db.t3.micro"
<img width="960" alt="image" src="https://github.com/renanribeir0/ponderedabancodedados/assets/110369271/41e94148-c3fd-4b85-a084-7e8aaef8b2cd">

9. Em configuração adicional, 
<img width="960" alt="image" src="https://github.com/renanribeir0/ponderedabancodedados/assets/110369271/bb8a9cdb-e0d0-4791-b13e-334d0b6dd0f3">

10. Mantenha as demais configurações e clique em "Criar banco de dados".
<img width="960" alt="image" src="https://github.com/renanribeir0/ponderedabancodedados/assets/110369271/39f53676-f1d9-460a-82ca-926f57ecd24e">

11. Após isso, você será redirecionado para está tela. Aguarde o banco ser criado.
<img width="578" alt="image" src="https://github.com/renanribeir0/ponderedabancodedados/assets/110369271/72086e4f-c1ce-4deb-9fbe-0eef1903e68f">


Instalando um servidor web na instância EC2.

1. Usando o comando: ssh -i /caminho/para/sua-chave.pem ec2-user@ecEndereço IPv4 público da instância.compute-1.amazonaws.com, no cmd.
<img width="960" alt="image" src="https://github.com/renanribeir0/ponderedabancodedados/assets/110369271/c1345332-50aa-4211-8291-34a34ba62372">

2. Aceite a conexão "Yes" e você será conectado a instância: 
<img width="960" alt="image" src="https://github.com/renanribeir0/ponderedabancodedados/assets/110369271/c3494eb5-4a20-46be-9de8-afa1c55c5ca8">

3. Obtenha as últimas correções de bugs e atualizações de segurança atualizando o software na instância do EC2, usando o comando: "sudo dnf update -y"
<img width="960" alt="image" src="https://github.com/renanribeir0/ponderedabancodedados/assets/110369271/9cde2666-43a1-497f-b62f-204baa05d51c">

4. instale o servidor da web Apache, o PHP e o software MariaDB utilizando o comando: sudo dnf install -y httpd php php-mysqli mariadb105
<img width="960" alt="image" src="https://github.com/renanribeir0/ponderedabancodedados/assets/110369271/1cd17e1d-a1c0-467a-900b-382919f5a679">

5. Inicie o servidor Web com o comando: sudo systemctl start httpd
<img width="960" alt="image" src="https://github.com/renanribeir0/ponderedabancodedados/assets/110369271/3b665082-2eed-48d2-ab8c-67434615493d">

6. É possível testar se o servidor Web está instalado e se foi iniciado corretamente. Para fazer isso, insira o nome de Domain Name System (DNS) público da instância do EC2 na barra de endereços de um navegador da web
<img width="960" alt="image" src="https://github.com/renanribeir0/ponderedabancodedados/assets/110369271/f3de1796-3642-49be-9d31-180d19b0b08f">

7. Configure o servidor Web para começar com cada inicialização do sistema usando o comando: sudo systemctl enable httpd
<img width="960" alt="image" src="https://github.com/renanribeir0/ponderedabancodedados/assets/110369271/548aa35a-b145-400f-9c9b-47fa836bfdab">

Para definir as permissões de arquivos para o servidor na web Apache

8. Adicione o usuário ec2-user ao grupo apache: sudo usermod -a -G apache ec2-user
<img width="960" alt="image" src="https://github.com/renanribeir0/ponderedabancodedados/assets/110369271/7fd399b1-dd64-448f-972a-7e8f543c1e1f">

9. Faça logout para atualizar as permissões e incluir o novo grupo apache: exit
<img width="960" alt="image" src="https://github.com/renanribeir0/ponderedabancodedados/assets/110369271/7fd399b1-dd64-448f-972a-7e8f543c1e1f">

10. Faça login novamente e verifique se o grupo apache existe com o comando para windows: whoami /groups
<img width="960" alt="image" src="https://github.com/renanribeir0/ponderedabancodedados/assets/110369271/a10f0241-b895-406f-b0ba-33efe24029a0">






















    















