# 🚀 Criando um repositório no GitHub

## 🌐 1. Acessar o GitHub

Entre no site:  
https://github.com

Faça login na sua conta.

---

## ➕ 2. Criar novo repositório

- Clique no botão **"+"** no canto superior direito  
- Clique em **"New repository"**

---

## 📝 3. Preencher as informações

Preencha os campos:

- **Repository name** → nome do projeto  
- **Description (opcional)** → breve descrição  
- **Public / Private** → escolha se será público ou privado  

---

## 📄 4. (Opcional, mas recomendado)

Marque a opção:

- ✅ **Add a README file**

*(Isso já cria o projeto com um README pronto)*

---

## ✅ 5. Criar o repositório

Clique em:

👉 **"Create repository"**

Pronto! Seu repositório já foi criado 🎉

---

# 💻 6. Conectar com seu computador

Agora, para trabalhar com o projeto no VS Code:

### 📥 Clonar o repositório

```bash
git clone https://github.com/seu-usuario/nome-do-repositorio.git
```
---
# 📤 7. Realizando commits e enviando para o GitHub

Após editar seus arquivos no VS Code, siga este fluxo no terminal integrado.

> Para abrir o terminal no VS Code: **Ctrl + `** (acento grave)

---

## ➕ 7.1 Verificar o status dos arquivos

Antes de qualquer coisa, veja o que foi modificado:
```bash
git status
```

---

## 📦 7.2 Adicionar arquivos ao stage

Para adicionar **todos** os arquivos modificados:
```bash
git add .
```

Ou para adicionar um arquivo específico:
```bash
git add nome-do-arquivo.txt
```

---

## 💬 7.3 Criar um commit

Registre as alterações com uma mensagem descritiva:
```bash
git commit -m "Descrição clara do que foi alterado"
```

> 💡 **Boas práticas para mensagens de commit:**
> - Use verbos no imperativo: `Adiciona`, `Corrige`, `Remove`
> - Seja direto: `Corrige bug no botão de login`
> - Evite mensagens genéricas como `update` ou `ajustes`

---

## 🚀 7.4 Enviar para o GitHub (push)

Envie seus commits para o repositório remoto:
```bash
git push origin main
```

> Se for a primeira vez, pode ser necessário usar:
> ```bash
> git push -u origin main
> ```
> O `-u` salva a configuração para os próximos pushes.

---

## 🔄 7.5 Baixar atualizações do GitHub (pull)

Para sincronizar seu repositório local com o remoto (ex: quando outra pessoa fez alterações):
```bash
git pull origin main
```

---

## 🔁 7.6 Fluxo completo do dia a dia
```bash
# 1. Baixar atualizações mais recentes
git pull origin main

# 2. Fazer suas alterações nos arquivos...

# 3. Ver o que foi modificado
git status

# 4. Adicionar ao stage
git add .

# 5. Criar o commit
git commit -m "Descreva o que foi feito"

# 6. Enviar para o GitHub
git push origin main
```
