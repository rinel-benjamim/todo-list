# Livewire Todo List

## Sobre o Projeto
Este projeto é uma aplicação de lista de tarefas interativa e responsiva, desenvolvida utilizando **Laravel**, **Livewire**, **Blade** e **Tailwind CSS**. Ele oferece uma interface intuitiva para adicionar, marcar como concluído ou excluir tarefas.

![Livewire Todo List](https://via.placeholder.com/800x400?text=Livewire+Todo+List+Screenshot)

A combinação de Laravel e Livewire permite criar componentes dinâmicos sem a necessidade de manipulações extensivas de JavaScript, enquanto o Tailwind CSS oferece um design moderno e altamente personalizável.

---

## Funcionalidades
- **Adicionar Tarefas**: Insira novas tarefas utilizando um campo de texto com design simples e atraente.
- **Alterar Status**: Marque as tarefas como "Feito" ou "Incompleto" usando um checkbox interativo.
- **Excluir Tarefas**: Remova tarefas da lista de maneira fácil.
- **Atualizações em Tempo Real**: Todas as ações são refletidas instantaneamente sem recarregar a página.
- **Design Responsivo**: A aplicação se adapta a diversos tamanhos de tela.

![Funcionalidades da Todo List](https://via.placeholder.com/800x400?text=Features+Showcase)

---

## Tecnologias Utilizadas

### Backend:
- **[Laravel](https://laravel.com/)**: Framework PHP robusto utilizado para construir a estrutura do backend.
![Laravel Logo](https://miro.medium.com/v2/resize:fit:3072/1*eP-KJAthkw68t106qTNhPg.jpeg)

- **[Livewire](https://laravel-livewire.com/)**: Ferramenta poderosa para criar interfaces dinâmicas utilizando apenas PHP.
![Livewire Logo](https://picperf.io/https://laravelnews.s3.amazonaws.com/images/laravel-livewire.png)

### Frontend:
- **Blade**: Sistema de templates padrão do Laravel.
- **[Tailwind CSS](https://tailwindcss.com/)**: Framework CSS utilitário para estilização rápida e eficiente.
![Tailwind Logo](https://media.licdn.com/dms/image/D4D12AQHw9SjCddUhjQ/article-cover_image-shrink_720_1280/0/1715021638881?e=2147483647&v=beta&t=VuDjk7oMCOy2lSJtXjHerIg7QURxNCkcWdzUmfuVlu4)

### Outras Tecnologias:
- **FontAwesome**: Para ícones, como a lixeira utilizada para excluir tarefas.
![FontAwesome Icon](https://i0.wp.com/blog.fontawesome.com/wp-content/uploads/2020/08/Logo.png?fit=1800%2C1200&ssl=1)

---

## Estrutura do Projeto

### Rotas
- `Route::get('/')`: Rota inicial que carrega a página de boas-vindas.
- `Route::get('/todo', TodoList::class)`: Rota para o componente da lista de tarefas.

### Componente Livewire
- **Classe**: `TodoList`
  - `add()`: Adiciona uma nova tarefa à lista.
  - `statusChanged($key, $isChecked)`: Atualiza o status da tarefa (Feito/Incompleto).
  - `deleteTask($key)`: Remove uma tarefa da lista.
  - `render()`: Renderiza a visualização do componente.

### Visualização
- Arquivo Blade para o componente, implementando:
  - Campo de entrada para adicionar tarefas.
  - Botões para excluir tarefas.
  - Checkbox para alterar o status das tarefas.

---

## Instalação
Siga os passos abaixo para executar o projeto localmente:

1. **Clone o Repositório:**
   ```bash
   git clone https://github.com/rinel-benjamim/todo-list.git
   cd todo-list
   ```

2. **Instale as Dependências:**
   ```bash
   composer install
   npm install
   npm run dev
   ```

3. **Configuração do Ambiente:**
   - Crie o arquivo `.env`:
     ```bash
     cp .env.example .env
     ```
   - Configure as variáveis de ambiente, como banco de dados, se necessário.

4. **Execute as Migrações:**
   ```bash
   php artisan migrate
   ```

5. **Inicie o Servidor:**
   ```bash
   php artisan serve
   ```
   Acesse o projeto em [http://localhost:8000](http://localhost:8000).

---

## Demonstração

![Captura de ecrã de 2025-01-25 20-39-04](https://github.com/user-attachments/assets/94db50cb-a62f-4996-97fc-75a178b7d262)

---

## Contribuições
Contribuições são bem-vindas! Siga os passos abaixo:

1. Faça um fork do projeto.
2. Crie uma branch para sua feature: `git checkout -b minha-feature`.
3. Faça o commit das mudanças: `git commit -m 'Adicionei uma nova feature'`.
4. Faça o push para a branch: `git push origin minha-feature`.
5. Abra um Pull Request.

---

## Licença
Este projeto está licenciado sob a [MIT License](LICENSE).

---

## Autor
![Rinel-Benjamim-meio-corpo](https://github.com/user-attachments/assets/e70866d0-9a92-4c88-868a-8fab2cf21b44)


[Rinel Benjamim](https://github.com/rinel-benjamim)  
[![LinkedIn](https://via.placeholder.com/150x50?text=LinkedIn)](https://www.linkedin.com/in/rinel-benjamim)
---

