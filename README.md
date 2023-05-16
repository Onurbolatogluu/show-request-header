# show-request-header

Bu GitHub Actions iş akışı (workflow), bir Docker imajının oluşturulmasını ve Docker Hub'a yüklenmesini otomatikleştirmek için kullanılır. Workflow, belirli bir GitHub deposunda bir değişiklik olduğunda tetiklenir (push işlemi yapıldığında ve sadece "master" dalında).

İş akışının adı "Docker Build & Push" olarak belirlenmiştir. İş akışı aşağıdaki adımlardan oluşur:

"Checkout Repository" adımları: İş akışı, işlenecek olan depoyu çalışma ortamına kopyalamak için "actions/checkout@v2" eylemini kullanır.

"Login to Docker Hub" adımları: Docker Hub'a oturum açmak için "docker/login-action@v1" eylemi kullanılır. Bu adım, Docker Hub kimlik bilgilerini alır ve gizli depo değişkenlerinden (DOCKERHUB_USERNAME ve DOCKERHUB_TOKEN) kullanarak oturum açar.

"Build and Push Docker Image" adımları: Docker imajının oluşturulması ve Docker Hub'a yüklenmesi için "docker/build-push-action@v2" eylemi kullanılır. Bu adımda aşağıdaki parametreler ayarlanmıştır:

context: Docker imajının oluşturulacağı bağlamı belirtir. Burada nokta (".") kullanılarak mevcut çalışma dizini belirtilir.
push: Oluşturulan Docker imajının Docker Hub'a yüklenmesini sağlar. Değer "true" olarak ayarlanmıştır.
tags: Oluşturulan Docker imajına etiket atanır. İmajın etiketi "onurbolatogluu/show-req-header:latest" olarak belirlenmiştir.
Bu iş akışı, her "master" dalına yapılan bir itme (push) işlemiyle tetiklenir. İş akışı çalıştığında, belirtilen adımları sırayla gerçekleştirir ve Docker imajının oluşturulmasını ve Docker Hub'a yüklenmesini sağlar. Bu, bir süreçteki tekrarları azaltarak ve süreci otomatikleştirerek geliştirme ve dağıtım süreçlerini kolaylaştırır.
