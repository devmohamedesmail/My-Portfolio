'use client';

import { useTranslation } from 'react-i18next';
import { Separator } from '@/components/ui/separator';

export function Footer() {
    const { t } = useTranslation();
    const currentYear = new Date().getFullYear();

    return (
        <footer className="border-t bg-background">
            <div className="container mx-auto px-4 py-8">
                <div className="flex flex-col items-center gap-4 text-center">
                    <div className="text-2xl font-bold text-white">
                        Mohamed Esmail
                    </div>

                    <Separator className="w-24" />

                   

                    <p className="text-sm text-muted-foreground">
                        © {currentYear} Mohamed Esmail. {t('footer.rights')}
                    </p>
                </div>
            </div>
        </footer>
    );
}
