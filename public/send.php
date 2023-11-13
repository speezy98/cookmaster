import tkinter as tk

def partager_action():
    # Mettez ici le code que vous souhaitez exécuter lorsque le bouton "Partager" est cliqué
    print("Bouton Partager cliqué!")

# Création de la fenêtre principale
fenetre = tk.Tk()
fenetre.title("Exemple de Bouton Partager")

# Création du bouton Partager
bouton_partager = tk.Button(fenetre, text="Partager", command=partager_action)
bouton_partager.pack(pady=10)

# Exécution de la boucle principale
fenetre.mainloop()
